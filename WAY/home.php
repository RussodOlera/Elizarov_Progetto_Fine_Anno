<?php include "style.php"; ?>
<?php require "login.php"; ?>
<?php 
  //session_start();
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
              echo "non ho trovato nulla";
              //header("location: users.php");
            }
          ?>

          <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <img src="images/<?php echo $row['img_profilo']; ?>" alt="">
        
          <div class="details">
            <span><?php echo $row['name']. " " . $row['surname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </header>
        <div class="chat-box">
            
        </div>
        <form action="#" class="typing-area">
          <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_name; ?>" hidden>
          <input type="text" name="message" class="input-field" placeholder="Scrivi qui un messaggio..." autocomplete="off">
          <button><i class="fab fa-telegram-plane"></i></button>
        </form>
      </section>
    </div>
  </body>
</html>