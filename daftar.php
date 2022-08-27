<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrasi</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?version=<?php echo filemtime('style.css');?>">
  
  </head>
  <body>

    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
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
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="daftar.php">Register</a>
        </li>
        </div>
  </div>
</nav>
<!-- konten -->
<div class="global-container mt-5">
      <div class="card daftar-form">
        <div class="card-body">
          <h1 class="card-daftar text-center">REGISTER</h1>
          <hr>
      </div>
        <div class="card-text">
      <form method="post" action="proses_daftar.php" enctype="multipart/form-data">
        <input name="tujuan" type="hidden" value="LOGIN">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputText" placeholder="username">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="email">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" name="confirm_pw" class="form-control" id="exampleInputPassword1" placeholder="confirmation password">
            </div>
            <div class="d-grid">
              <label for="exampleInputImage1" class="form-label">Image </label>
              <input type="file" name="gambar" class="form-control" id="gambar" placeholder="chose image">
                <p>
                  Sudah memiliki akun?
                  <a href="login.php">Klik di sini</a>
                </p>
                <button type="submit" class="btn1">REGISTER</button>
            </div>
    </form>
    <?php
    if(isset($_POST['save'])){
      $fileName = $_FILES['gambar']['name'];

      $sql = "Insert into tbl_pendaftaran (gambar) values ('$fileName', '". $_POST['gambar']. "')";
      mysqli_query($koneksi, $sql);

      move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/". $_FILES['gambar']['name']);
      echo "<script> alert('Gambar berhasil di upload !');history.go(-1);</script>";
    }
    ?>
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