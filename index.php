<?php
session_start();
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'docgia';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = ucfirst($controller);
$filecontroller = $controller . "Controllers.php";
$pathcontroller = 'controllers/' . $filecontroller;
if(!file_exists($pathcontroller)){
    die("Trang khong ton tai");
}
require_once "$pathcontroller";
$classController = $controller . "controller";
$object = new $classController;
if(!method_exists($object,$action)){
    die('Khong ton tai phuong thuc ');
}
$object->$action();
?>