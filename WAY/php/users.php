<?php
    session_start();
    include_once "../db_conn.php";
    $outgoing_id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE NOT id = {$outgoing_id} ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "Nessun utente disponibile";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>