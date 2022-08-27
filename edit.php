<?php
include('koneksi.php');
$id=$_GET['id'];
$sql_edit="SELECT * FROM tbl_daftar WHERE id='$id'";
$q_edit=mysqli_query($koneksi, $sql_edit);
?>

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
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="tampil_data.php">Tampil Data</a>
        </li>
       
    </div>
  </div>
</nav>
</nav>
<!--konten  -->
<div class="card mt-3 ms-3 me-3">
    <div class="card-body">
        <h5 class="card-title">EDIT</h5>
        <?php 
            foreach ($q_edit as $tbl_daftar) {
        ?>
            <form method="post" action="proses_edit.php"  enctype="multipart/form-data">
                <div>
                    <input type="text" name="id" id="id" value="<?php echo $tbl_daftar['id'];?>" hidden>
                </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Username</label>
                        <input type="text" value="<?php echo $tbl_daftar['username'];?>" name="username" class="form-control" id="exampleInputText" placeholder="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" value="<?php echo $tbl_daftar['email'];?>" name="email" class="form-control" id="exampleInputEmail" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Password</label>
                        <input type="text" value="<?php echo $tbl_daftar['password'];?>" name="password" class="form-control" id="exampleInputText1" placeholder="password">
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputImage1" class="form-label">Image</label>
                        <input type="file" value="<?php echo $tbl_daftar['gambar'];?>" name="gambar" class="form-control" id="exampleInputFile1" placeholder="image">
                        
                        <br>
                        <input type="submit" class="btn btn-sm btn-secondary" name="simpan" value="simpan">
                        <a href="tampil_data.php" class="btn btn-sm btn btn-secondary">Kembali</a>
                    </div>
            </form>
            <?php } ?>
    </div>
</div>

<!-- footer -->
<nav class="navbar fixed-bottom navbar-dark bg-dark">
  <div class="container-fluid">
      <a class="navbar-brand" href="https://www.instagram.com/anjaliviolitasuprianto_/">Copyright &copy; Vio</a>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>