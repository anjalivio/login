<?php
include('koneksi.php');

$username= $_POST["username"];
$password= $_POST["password"];
$email= $_POST["email"];
$gambar= $_FILES["gambar"]["name"];
$tmp_name = $_FILES["gambar"]["tmp_name"];

$confirm_pw=$_POST["confirm_pw"];
if($confirm_pw==$password){

    $query="INSERT INTO `tbl_daftar` (`username`, `password`, `email`, `gambar`) VALUES (
        '$username', '$password', '$email', '$gambar')";
    
    if (mysqli_query($koneksi, $query) && move_uploaded_file($tmp_name, $gambar)){
        echo "<h1>Username $username berhasil terdaftar</h1>
        <a href='login.php'>Kembali Login</h1>
        ";
    }else{
        echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
    }
}else{
    header("location:daftar.php");
}
?>
