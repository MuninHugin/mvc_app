<?php
return array(
    'news/([0-9]+)' => 'news/view/$1',

    'news' => 'news/index',     // будет вызван метод actionIndex в NewsController
    'products' => 'product/list',   // будет вызван метод actionList в ProductController
);