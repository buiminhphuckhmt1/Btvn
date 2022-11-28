<?php
     session_start(); 
    //include file connection.php vaof ddaay
    include "../app/Connection.php";
    //include file view.php
    include "../app/Controller.php";
 ?>
 
 <?php 
    //laays bieens controller truyen vaof url
    $controller = isset($_GET["controller"]) ? $_GET["controller"] : "Home";
    //lay bien action truyen tu url
    $action = isset($_GET["action"]) ? $_GET["action"] : "index";
    //gan them cac chuoi de thanh duong dan va ly
    //tao duong dan vat ky cua file controller trong MVC. VD: controllers/PhongBanController.php
    //ham ucfirst viet hoa ky tu dau tien   
    $controllerFile = "controllers/".ucfirst($controller)."Controller.php";
    //echo $controllerFile;
    if(file_exists($controllerFile)){
        //include ten file vao day
        include $controllerFile;
        //noi chuoi de lay ten class
        $controllerClass = ucfirst($controller)."Controller";
        //khoi tao object cua class
        $obj = new $controllerClass();
        //goi den action de lay du lieu tra ve
        $result = $obj->$action();
        echo $result;
    }else die("file $controllerFile không tồn tại");
  ?>