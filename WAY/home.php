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

          <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          
          <img src="images/<?php echo $row['img_profilo']; ?>" alt="">
          <a href ="user.php">
          <div class="details">
            <span><?php echo $row['name']. " " . $row['surname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
          </a>
        </header>
        <div class="chat-box">
        <section class="users">
        <div class="search">
        <button> crea gruppo</button>
        </div> 
        </section>
        </div>
        
      </section>
    </div>
  </body>
</html>