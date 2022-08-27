<?php

    include('koneksi.php');

        $id=$_POST['id'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $gambar=$_FILES['gambar']['name'];
        $tmp_name = $_FILES["gambar"]["tmp_name"];


        $cek="SELECT gambar FROM tbl_daftar WHERE id= '$id'";
        $sql= mysqli_query($koneksi, $cek);
        $cek_img = mysqli_fetch_array($sql);

        if ($cek_img['gambar'] != ''){

            unlink ($cek_img['gambar']);
        }

        $query="UPDATE `tbl_daftar` SET 
                    `username`='$username', 
                    `password`='$password', 
                    `email`='$email',
                    `gambar`='$gambar' 
                    WHERE (`id`='$id') LIMIT 1";
        $sql= mysqli_query($koneksi, $query);

        if($sql && move_uploaded_file($tmp_name, $gambar)){
            header('location:tampil_data.php');
        }


?>
<script>window.location.replace('tampil_data.php');</script>