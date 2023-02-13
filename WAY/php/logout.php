<?php
    session_start();
    if(isset($_SESSION['id'])){
        include_once "../db_conn.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline";
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../index.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: ../home.php");
    }
?>