<?php include "style.php"; ?>
<?php require "login.php"; ?>
<?php 
  include "db_conn.php";
  if(!isset($_SESSION['id'])){
    header("location: login.php");
  }
?>
<html>
  <body>
    <div class="wrapper">
      <section class="chat-area">
        <header>
          <?php
            $user_name = $_SESSION['user_name'];
            $data = mysqli_query($conn, "SELECT * FROM users WHERE user_name = '$user_name'");
            if(mysqli_num_rows($data)>0)
            {
              $row = mysqli_fetch_assoc($data);
            }
            else
            {
              header("location: users.php");
            }
          ?>
          <a href="home.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <div class="details">
            <span><?php echo $row['user_name'] ?></span>
          </div>
        </header>
        <div class="chat-box">
        <img src="images/<?php echo $row['img_profilo']; ?>" alt="" width="150px">
        <p>Nome: <?php echo $row['name']; ?></p>
        <p>Cognome: <?php echo $row['surname']; ?></p>
        <p>Data di nascita: <?php echo $row['bday']; ?></p>
        <p>Numero di telefono: <?php echo $row['n_tel']; ?></p>
        <p>Email: <?php echo $row['mail']; ?></p>
    </div>
    <button >Modifica</button>
  </body>
</html>