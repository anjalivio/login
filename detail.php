<?php
include('koneksi.php');
$id=$_GET['id'];
$query="SELECT * FROM tbl_daftar WHERE id='$id'";
$sql= mysqli_query($koneksi, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Menu</title>
    
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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
<!-- konten -->

<div class="card mt-3 ms-3 me-3">
        <div class="card-body">
            <h5 class="card-title">Detail</h5>
              <?php
                foreach ($sql as $tbl_daftar) {
              ?>
                <form action="" method="post">
                    <div>
                        <input type="text" name="id" id="id" value="<?php echo $tbl_daftar['id'];?>" hidden>
                    </div>
                    <div class="mb-3 row">
                            <label for="inputtext" class="col-sm-2 col-form-label">Username</label>:
                    <div class="col-sm-5">
                            <input type="text" value="<?php echo $tbl_daftar['username'];?>" class="form-control"  name="username" id="inputtext" placeholder="username">
                        </div>
                    </div>
                    <div class="mb-3 row">
                            <label for="inputtext" class="col-sm-2 col-form-label">Email</label>:
                    <div class="col-sm-5">
                            <input type="email" value="<?php echo $tbl_daftar['email'];?>" class="form-control"  name="email" id="inputtext" placeholder="email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                            <label for="inputtext" class="col-sm-2 col-form-label">Password</label>:
                    <div class="col-sm-5">
                            <input type="text" value="<?php echo $tbl_daftar['password'];?>" class="form-control"  name="password" id="inputtext" placeholder="password">
                              <br>
                              <a href="tampil_data.php" class="bt btn-sm btn-secondary">Kembali</a>
                          </div>
                    </div>
                </form>
                <?php }?>
              </div>
           </div>
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