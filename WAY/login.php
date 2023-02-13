<?php
session_start();
include "db_conn.php";
if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_name='$uname'");
    $row = mysqli_fetch_assoc($sql);
    if(mysqli_num_rows($sql)==1)
    {
        $status = "Online";
        $temp=$row['id'];
        $sql2 = mysqli_query($conn, "UPDATE users SET status = '$status' WHERE id = '$temp'");
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        header("Location:users.php");
        //echo "<script> alert('$temp'); </script>";
    }
    else
    {
        session_destroy();
        echo "<script> alert('Nome utente non trovato'); </script>";
        header("Location:index.php");
    }
}
?>