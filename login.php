<?php
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LOGIN</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?version=<?php echo filemtime('style.css');?>">
  
  </head>
  <body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ACCOUNT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar.php">Register</a>
        </li>
      </div>
  </div>
</nav>

<div class="global-container mt-5">
      <div class="card login-form">
        <div class="card-body">
          <h1 class="card-title text-center">L O G I N</h1>
          <hr>
      </div>
        <div class="card-text">
      <form method="post" action="proses_login.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputText1" placeholder="Username">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
            </div>
            <div class="d-grid">
              <p>Belum memiliki akun?
                <a href="daftar.php">Klik di sini</a>
              </p>
              <button type="submit" class="btn1">L O G I N</button>
            </div>
    </form>
    </div>
  </div>
</div>

<!-- footer -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
      <a class="navbar-brand" href="https://www.instagram.com/anjaliviolitasuprianto_/">Copyright &copy; Vio</a>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>