<?php
$title = 'Mi perfil';
require_once 'head.php';
?>
<body>
  <?php require_once 'menu.php'; ?>
  <div class="container fullHeight">
    <div class="row justify-content-center mt-5">
      <div class="col-6 mb-5">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar rounded-circle img-thumbnail mx-auto d-block" alt="avatar">
        <div class="custom-file mt-1">
          <input type="file" class="custom-file-input" id="customFileLang" lang="es">
          <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php require_once 'form-register.php' ?>
    </div>
  </div>
  <?php require_once 'footer.php'; ?>
</div>
</body>
</html>
