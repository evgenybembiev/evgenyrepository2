<?php
/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 24.12.2014
 * Time: 14:24
 */
require 'boots.php';
/*
$route = $_GET['r'];
$routeParts = explode('/', $route);

$controllerClassName = ucfirst($routeParts[0]).'Controller';

$controller = new $controllerClassName;
$controller->action($routeParts[1]);
*/

/*
$controller = new NewsController();
$controller->action('all');
*/



//Выводим все статьи
var_dump(ClassNews::findAll());

//Выводим статью по id
/*$article = ClassNews::findByPk(48) ;
var_dump($article);*/


//Меняем статью по id
$article = ClassNews::findByPk(80);
var_dump($article);
$article->title = 'Супер статья';
$article->save();
var_dump($article);



// Добавляем статью
/*
$article = new ClassNews;
$article->title = 'Новая статья';
$article->text = 'Текст новой статьи';
$article->save();
var_dump($article);
*/