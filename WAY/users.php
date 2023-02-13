<?php
    session_start();
    include_once "db_conn.php";
    if(!isset($_SESSION['id'])){
        header("location: index.php");
      }
?>
<?php include_once "style.php"; ?>
<html>
    <body>
        <div class="wrapper">
            <section class="users">
                <header>
                    <div class="content">
                        <?php 
                            $sql = mysqli_query($conn, "SELECT * FROM users WHERE id = {$_SESSION['id']}");
                            if(mysqli_num_rows($sql) > 0){
                            $row = mysqli_fetch_assoc($sql);
                            }
                        ?>
                        <img src="images/<?php echo $row['img_profilo']; ?>" alt="">
                        <div class="details">
                            <span><?php echo $row['name']. " " . $row['surname'] ?></span>
                            <p><?php echo $row['status']; ?></p>
                        </div>
                    </div>
                    <a href="php/logout.php?logout_id=<?php echo $row['id']; ?>" class="logout">Logout</a>
                </header>
                <div class="search">
                    <span class="text">Selezione un utente per iniziare a Chattare</span>
                    <input type="text" placeholder="Cerca...">
                     <button><i class="fas fa-search"></i></button>
                </div>
                <div class="users-list">
    
                </div>
            </section>
        </div>
        <script src="javascript/users.js"></script>
    </body>
</html>