<?php
require "db_conn.php";

if(isset($_POST['submit'])){
    $name = $_POST['fname'];
    $surname = $_POST['lname'];
    $bday = $_POST['bday'];
    $n_tel = $_POST['prefix'].$_POST['ntel'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE mail='$email' AND user_name='$uname'");
    if(mysqli_num_rows($duplicate)>0)
    {
        echo "<script> alert('Username o Email già in uso'); </script>";
        header("Location:register.php");
    }
    else
    {
        if(isset($_FILES['image'])){
            $img_name = $_FILES['image']['name'];
            $img_type = $_FILES['image']['type'];
            $tmp_name = $_FILES['image']['tmp_name'];
            
            $img_explode = explode('.',$img_name);
            $img_ext = end($img_explode);

            $extensions = ["jpeg", "png", "jpg"];
            if(in_array($img_ext, $extensions) === true){
                $types = ["image/jpeg", "image/jpg", "image/png"];
                if(in_array($img_type, $types) === true){
                    $time = time();
                    $new_img_name = $time.$img_name;
                    if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                        $sql = "INSERT INTO users VALUES('','$name','$surname','$bday','$n_tel','$email','$password','$uname','$new_img_name','Offline')";
                        mysqli_query($conn, $sql);
                        $sql = " CREATE TABLE IF NOT EXISTS $uname (
                                friend_id   INT     PRIMARY KEY,
                                friend      VARCHAR(255)    DEFAULT NULL
                            )";
                        
                        mysqli_query($conn, $sql);
                        echo "<script> alert('Registration Successful!') </script>";
                        header("Location:index.php"); 
                    }
                }
            }
        }
    }    
}
else
{
    echo "Errore";
}
?>
