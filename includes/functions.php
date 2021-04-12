
<?php
      if(session_status() == PHP_SESSION_NONE){
            //session has not started
            session_start();
      }
      if(isset($_COOKIE['login'])){
            if(!isset($_SESSION['login'])){
                  $_SESSION['login'] = $_COOKIE['login'];
            }
      }

      include_once 'dbh.inc.php';
      //include_once 'signup.inc.php';
      //include_once 'login.inc.php';
      //include_once 'logout.inc.php';
      include_once 'sendPost.inc.php';
      //include_once 'getPosts.inc.php';
      include_once 'calculateTime.inc.php';
      
      
?>
