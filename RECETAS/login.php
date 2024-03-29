<?php
$title = 'Login';
require_once 'head.php';
?>
<body>
  <?php require_once 'menu.php'; ?>
  <div class="container fullHeight">
    <div class="row justify-content-center">
      <form class="col-8 mt-5">
        <h2 class="mb-4"><?= $title; ?></h2>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php require_once 'footer.php'; ?>
  </div>
</body>
</html>
