<?php
$to=$_POST['uname'];
$message = "Sei Gay";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail($to, 'Gay', $message);
header("Location:index.php");
?>