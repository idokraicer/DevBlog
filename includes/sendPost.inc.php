<?php

if(isset($_POST['title']) && isset($_POST['content'])){
    include_once 'dbh.inc.php';
    session_start();
    $username = mysqli_real_escape_string($conn, $_SESSION['login']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = $_POST['content'];
    if(isset($_SESSION['login']) AND !empty($title) AND !empty($content))
    {
        $sql = "insert into posts (username, title, content, date) VALUES (?, ?, ?,NOW());";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL Error.";
        } else {
            mysqli_stmt_bind_param($stmt, "sss", $username, $title, $content);
            mysqli_stmt_execute($stmt);
            echo "<script>window.top.location.href = '../index.php?action=postUploaded'; </script>";
            exit;
        }
    } else {
        echo "<script>window.top.location.href = '../index.php?action=postUploadErr'; </script>";
            exit;
    }
}  