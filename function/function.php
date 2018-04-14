<?php
	require_once('conn.php');
	function isLogged(){
		return !empty($_SESSION['user'])? true:false;
		}
	function needLogged(){
    $isLogged=isLogged();
    if(!$isLogged){
        header('Location:login.php');
        exit();
    }
    }
?>