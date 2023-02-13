<?php require "register.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Registrazione</header>
      <form action="Uname.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>User name</label>
            <input type="text" name="fname" placeholder="User Name" required>
          </div>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Avanti">
        </div>
      </form>
      <div class="link">Sei già registrato? <a href="index.php">Accedi</a></div>
    </section>
  </div>