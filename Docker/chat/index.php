<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header><center>"YOU MESSAGE "</center></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>NOMBRES </label>
            <input type="text" name="fname" placeholder="ESCRIBE TU NOMBRE" required>
          </div>
          <div class="field input">
            <label>Apellidos</label>
            <input type="text" name="lname" placeholder="ESCRIBE TUS APELLIDOS" required>
          </div>
        </div>
        <div class="field input">
          <label>Ingresa tu email </label>
          <input type="text" name="email" placeholder="INGRESA TU EMAIL" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="INGRESA TU NUEVA CONTRASEÑA" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>SELECCIONA UNA FOTO</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="REGISTRARTE">
        </div>
      </form>
      <div class="link">Ya estas registrado? <a href="login.php">Entra ahora</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
