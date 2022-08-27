<?php
    include('koneksi.php');
    session_start();
    if($_SESSION['login'] != true){
        header("location:login.php");
    }

$data = "SELECT * FROM  tbl_daftar";
$q_data = mysqli_query($koneksi, $data);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
  <body>
    <!-- navigasi -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">ACCOUNT</span>
            </div>
            <div>
            <ul class="navbar-nav ms-auto"> 
                <li class="nav-item">
                <a class="nav-link active" href="logout.php">Logout</a>
                </li>
            </ul>
            </div>
        </nav>
    <!-- konten -->
        <div class="card mt-3 ms-3 me-3">
            <div class="card-body">
                <h5 class ="card-title text-center">Data Akun</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Profil</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                            foreach ($q_data as $dataDaftar) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no;?></th>
                            <td><?php echo $dataDaftar['username'];?></td>
                            <td><?php echo $dataDaftar['email'];?></td>
                            <td>
                                <?php
                                    if($dataDaftar['gambar'] == ""){
                                ?>
                                    <img src="img/" style="width : 125px; height : 125px;">
                                <?php
                                    }else{
                                ?>
                                    <img src="<?php echo $dataDaftar['gambar'];?>" style="width : 125px; height : 125px;">
                                    <?php } ?>
                            </td>
                            <td>
                                <a href="detail.php?id=<?php echo $dataDaftar['id'];?>" class="btn btn-sm btn-primary">Detail</a>
                                <a href="edit.php?id=<?php echo $dataDaftar['id'];?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?id=<?php echo $dataDaftar['id'];?>" class="btn btn-sm btn-danger" 
                                   onclick="return confirm('Data ini akan di hapus, anda yakin?')">Delete</a></td>
                        </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
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