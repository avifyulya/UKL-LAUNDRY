<?php
include "connect.php";
if($_POST['simpan']){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telepon=$_POST['telepon'];
    // $username=$_POST['username'];
    // $password= $_POST['password'];
    $id=$_POST['id'];
    $query = "INSERT INTO member (nama, alamat, jenis_kelamin, telepon) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$telepon')";
    // $query2 = "INSERT INTO user (id, nama, username, password ) VALUES ('$id', '$nama', '$username', '$password')";
    $result = mysqli_query($connect, $query);
    // $result2 = mysqli_query($connect, $query2);
    if($result){
        echo "<script>alert('Data berhasil diubah');window.location.href='tampil_member.php'</script>";
        }else{
        echo "Gagal disimpan : ".mysqli_error($connect);
    }
}
?>