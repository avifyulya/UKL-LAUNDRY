<?php 
    if($_GET['id']){
        include "connect.php";
        $qry_hapus=mysqli_query($connect,"delete from outlet where id='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus outlet');location.href='tampil_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus outlet');location.href='tampil_outlet.php';</script>";
        }
    }
?>