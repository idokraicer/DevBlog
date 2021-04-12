<?php

include_once 'dbh.inc.php';
if(isset($_POST['username']) AND isset($_POST['password'])){
          $conn = $GLOBALS['conn'];
          $username = mysqli_real_escape_string($conn, $_POST['username']);
          $password = mysqli_real_escape_string($conn, $_POST['password']);
          $rm = mysqli_real_escape_string($conn, $_POST['RememberMe']);
          $trigger = false;
          //Create a template
          $sql = "SELECT * FROM users WHERE username=? AND password=?;";
          //Create a prepared statement
          $stmt = mysqli_stmt_init($conn);
          //Prepare the prepared statement
          if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ".$_GET['back']."?action=sql_error");
          }
          else {
              mysqli_stmt_bind_param($stmt, "ss", $username, $password);
              //Run parameters inside database
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              while ($row = mysqli_fetch_assoc($result)) {
                  $trigger = true;
              }
          }
          if($trigger) {
              if(session_status() == PHP_SESSION_NONE){
                //session has not started
                session_start();
              }
              $_SESSION['login'] = $username;
              if($rm == true){
                setcookie('login', $username, time() + (86400 * 30), '/'); // 86400 = 1 day
                header("Location: ".$_GET['back']."?action=success");
              } else {
              header("Location: ".$_GET['back']."?action=success");
              }

          } else {
              header("Location: ".$_GET['back']."?action=WrongCredentials");
              
          }
}