<?php
session_start();
    if(!isset($_SESSION['login'])) {
        if(isset($_GET['action'])){
            unset($_GET['action']);
            
        } 
        header("Location: ".$_GET['back']."?action=logout_error");
    } else {
        unset($_SESSION['login']);
        if(isset($_GET['action'])){
            unset($_GET['action']);
        }
        if(isset($_COOKIE['login']))
        {
            setcookie('login', '' , time() , '/'); // 86400 = 1 day
        }  
        header("Location: ".$_GET['back']."?action=logout_success"); 
    }

    