<?php
include_once 'dbh.inc.php';

function postsArray() {
        
        $sql = "SELECT * FROM posts;";
        //Create a prepared statement
        $stmt = mysqli_stmt_init($GLOBALS['conn']);
        
        
        //Prepare the prepared statement
        
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                          <strong>Sql error!</strong>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                  </div>";
                  
        }
        else {
            
            //Run parameters inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] =$row;
            }
            return $rows;
        }
    return Array(null);        
}
function getSinglePost($id) {
        
    $sql = "SELECT * FROM posts WHERE id=?;";
    //Create a prepared statement
    $stmt = mysqli_stmt_init($GLOBALS['conn']);
    $postId = mysqli_real_escape_string($GLOBALS['conn'], $id);
    
          //Prepare the prepared statement
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index?action=sql_error");
    }
    else {
              mysqli_stmt_bind_param($stmt, "s", $id);
              //Run parameters inside database
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              return mysqli_fetch_assoc($result);
              exit;
    }
    
    
header('Location: ../index.php?action=sql_error');        
}