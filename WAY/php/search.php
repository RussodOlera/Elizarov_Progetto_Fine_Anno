<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM users WHERE NOT id = {$outgoing_id} AND (name LIKE '%{$searchTerm}%' OR surname LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'Nessun utente trovato :(';
    }
    echo $output;
?>