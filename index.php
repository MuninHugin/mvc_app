<?php
// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');

// 3. Установка соединения с БД
require_once (ROOT.'/components/Db.php');


// 4. Вызов Router
$router = new Router();
$router->run();


// Регулярные выражения
// $string = 'Ученик сидит за партой';
// $pattern = '/Ученик/';
// $result = preg_match($pattern, $string);
// var_dump($result);
// 
// $string = 'Он закончил школу в 2000 году. Стал студентом в 2002';
// $pattern = '/200[0-5]/';
// $pattern = '/200[2,0,5]/';  //2002,2000,2005
// $pattern = '/[0-9][0-9][0-9][0-9]/';  //0-9999
// $pattern = '/2{1}0{3}/';  //2000
// $pattern = '/0{3,5}/';  //000, 0000, 00000
// $pattern = '/0{1,}/';  // 0,00,000,....
// $pattern = '/[0-9]+/'; // любое кол-во цифр 0-9
// $result = preg_match($pattern, $string);
// var_dump($result);

// $string = '10-05-1950';
// $pattern = '/([0-3][0-9])-([0,1][0-9])-([1,2][0-9]{3})/';
// $replacement = 'Год: $3, месяц: $2, день: $1';
// 
// echo preg_replace($pattern, $replacement, $string);


?>