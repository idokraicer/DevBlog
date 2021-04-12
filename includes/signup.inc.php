<?php

    if(isset($_POST['username']) AND isset($_POST['password'])){
        include_once 'dbh.inc.php';
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        if(!empty($username) AND !empty($password))
        {
            $sql = "insert into users (username, password, date) VALUES (?, ?, NOW());";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL Error.";
            } else {
                mysqli_stmt_bind_param($stmt, "ss", $username, $password);
                mysqli_stmt_execute($stmt);
                session_start();
                $_SESSION['login'] = $username;
                header("Location: ".$_GET['back']."?action=reg_success");
            }
        } else {
            header("Location: ".$_GET['back']."?action=sql_error");
        }
    }
    else {
        //
    }    
?>