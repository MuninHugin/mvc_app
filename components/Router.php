<?php

class Router
{
    private $routes;
    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

/**
* Метод возвращает строку запроса
* @return string
*/
   private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }        
    }

    public function run()
    {
        // получить строку запроса
        $uri = $this->getURI();;

        // Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            // Сравниваем  $uriPattern и $path
            if(preg_match("~$uriPattern~", $uri)){  //используется ~ , т.к. в паттерне м.б. слэши

                // echo "<br>Где ищем (запрос, который набрал пользователь): ".$uri;
                // echo "<br>Что ищем (совпадение из правила): ".$uriPattern;
                // echo "<br>Кто обрабатывает: ".$path;

                // Получаем внутренний путь из внешнего согласно правилу
                // echo $uri."<br>";
                // echo $uriPattern."<br>";
                // echo $path."<br>";
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                // echo "<br>Нужно сформировать: ".$internalRoute."<br>";


                // Определить контроллер, action, параметры
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));
                // echo "<br>controller name: ".$controllerName;
                // echo "<br>action name: ".$actionName;
                $parameters = $segments;
                // echo "<pre>";
                // print_r($segments);


                // Подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }

                // Создать объект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName;

                // $result = $controllerObject->$actionName($parameters);
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters); //модифицированный вариант вызова метода actionName


                if($result != null) {
                    break;
                }
            }
        }
    }
}