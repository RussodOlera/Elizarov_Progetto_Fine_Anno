<?php include "style.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Registrazione</header>
      <form action="new_user.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nome</label>
            <input type="text" name="fname" placeholder="Nome" required>
          </div>
          <div class="field input">
            <label>Cognome</label>
            <input type="text" name="lname" placeholder="Cognome" required>
          </div>
        </div>
        <div class="name-details">
          <div class="field input">
            <label>Data di nascita</label>
            <input type="date" name="bday" placeholder="Data di nascita" required>
          </div>
          <div class="field input" id="tel">
            <label>N° telefono</label>
            <input type="text" name="prefix" placeholder="+00" required>
          </div>
          <div class="field input">
            <label style="color:transparent;">.</label>
            <input type="text" name="ntel" placeholder="N° telefono" required>
          </div>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Inserisci la tua Email" required>
        </div>
        <div class="field input">
          <label>User Name</label>
          <input type="text" name="uname" placeholder="Inserisci il tuo user name" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Inserisci una password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Seleziona un immagine:</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Registrati" action="new_user.php">
        </div>
      </form>
      <div class="link">Sei già registrato? <a href="index.php">Accedi</a></div>
    </section>
    <div id="toggle">
                <i class="indicator"></i>
            </div>
  </div>
  <script>
            const body = document.querySelector("body");
            const toggle = document.getElementById('toggle');
            toggle.onclick = function(){
                toggle.classList.toggle('active');
                body.classList.toggle('active');
            }
            </script>