<?php
    require_once("../../database.php");
    require_once("../models/admin-cities.php");

    $link = db_connect();

    if(isset($_GET['action']))
    	$action = $_GET['action'];
    else
    	$action = "";

    if($action == "add_city"){
    	if(!empty($_POST)){
    		cities_new($link, $_POST['name'], $_POST['alias']);
    		header("Location: index.php");
    	}
	} 
	elseif($action == "edit-city"){
    	echo "edit_city in controller";
    } elseif($action == "publish-city"){
    	cities_publish($link, $_GET['id']);
    } elseif ($action == "unpublish-city"){
    	cities_unpublish($link, $_GET['id']);
    } elseif ($action == "delete-city"){
    	// if(isset($_GET['id']))
	    // 	cities_delete($link, $_GET['id']);
	    // 	header("Location: index.php");
    } else {
    	$cities = cities_all($link);
    	include("../views/admin-cities.php");
    }
?>