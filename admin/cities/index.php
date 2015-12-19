<?php
    require_once("../../database.php");
    require_once("../../functions.php");
    require_once("../models/admin-cities.php");

    $link = db_connect();

    $action = isset($_GET['action']) ? $_GET['action'] : "" ;

    if($action == "add-city"){
    	if(!empty($_POST)){
            $_POST['alias'] = empty($_POST['alias']) ? translit($_POST['name']) : translit($_POST['alias']);
            city_new($link, $_POST['name'], $_POST['alias']);
            header("Location: index.php");
    	}
        $formAction = 'add-city';

    } elseif ($action == "edit-city"){
        
        if (!isset($_GET['id'])) {
            header("Location: index.php");
        }
        $id = (int)$_GET['id'];

        $formAction = 'edit-city&id='.$id;

        if(!empty($_POST) && $id > 0){
            city_edit($link, $_POST['name'], $_POST['alias']);
            header("Location: index.php");
        } 

        $city = city_get($link, $id);
        $cities = cities_all($link);

        include("../views/admin-cities.php");

    } elseif ($action == "publish-city"){
        if (isset($_GET['id'])) {
            cities_publish($link, $_GET['id']);
            header("Location: index.php");
        }    
    } elseif ($action == "unpublish-city"){
    	if(isset($_GET['id'])){
            cities_unpublish($link, $_GET['id']);
            header("Location: index.php");
        }
    } elseif ($action == "delete-city"){
    	if(isset($_GET['id'])){
            cities_delete($link, $_GET['id']);
            header("Location: index.php");
        }
    } else {
        $formAction = 'add-city';
        $city = null;
    	$cities = cities_all($link);
    	include("../views/admin-cities.php");
    }