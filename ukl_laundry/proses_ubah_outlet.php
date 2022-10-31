<?php
if($_POST){
    $id_outlet=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telepon = $_POST['telepon'];

    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";
 
    } else {
            include "connect.php";
            $update=mysqli_query($connect,"UPDATE outlet SET nama='".$nama."', alamat='".$alamat."', telepon='".$telepon."' where id = '".$id."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update outlet');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php?id=".$id."';</script>";
            }
        }
        
    } 
?>