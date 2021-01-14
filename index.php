<?php

require_once __DIR__ . '/autoload.php';

/*Фронт контроллер Степанцева!*/
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl . 'Controller';
$controller = new $controllerClassName;
$method = 'action' . $act;
$controller->$method();

echo 'After 5 years I am here!!! 2021';
