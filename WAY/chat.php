<?php 
  /*session_start();
  include_once "db_conn.php";
  if(!isset($_SESSION['id'])){
    header("location: login.php");
  }*/
?>
<?php include_once "style.php"; ?>
<html>
  <body>
    <div class="wrapper">
      <section class="chat-area">
        <header>
          <?php 
          include_once "db_conn.php";
            $user_id = mysqli_real_escape_string($conn, $_GET['id']);
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id'");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }else{
              header("location: users.php");
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
          <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
          <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
          <button><i class="fab fa-telegram-plane"></i></button>
        </form>
      </section>
    </div>
    <script src="javascript/chat.js"></script>
  </body>
</html>