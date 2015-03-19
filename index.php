<?php

function __autoload($class_name)
{
    include 'class.' . $class_name . '.php';
}

echo "Hello World";

$model = new Model();
?><pre><?php
var_dump($model);
?></pre><?php
$controller = new Controller($model);
?><pre><?php
var_dump($controller);
?></pre><?php
$view = new View($controller, $model);
?><pre><?php
var_dump($view);
?></pre><?php
if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}
 
echo $view->output();
?>