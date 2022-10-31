<?php
include "connect.php";
if($_POST){
    $nama = $_POST['nama'];
    $alamat= $_POST['alamat'];
    $telepon = $_POST['telepon'];
    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";
 
    } else {
        $insert=mysqli_query($connect,"INSERT INTO outlet(nama, alamat, telepon) 
                                    VALUE ('".$nama."',
                                           '".$alamat."',
                                           '".$telepon."')"); 
    } if($insert){
        echo "<script>alert('Sukses menambahkan outlet');location.href='tampil_outlet.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
    }
}
        


?>