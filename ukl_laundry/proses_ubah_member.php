<?php
if($_POST){
    include "connect.php";
    print_r($_POST);
    $id_member=$_POST['id_member'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telepon=$_POST['telepon'];
    // $username=$_POST['username'];
    // $password=$_POST['password'];
    $qry_update_member = mysqli_query($connect,"UPDATE member SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', telepon='$telepon' WHERE id_member='$id_member'");
    // $qry_update_user = mysqli_query($connect,"UPDATE user SET username='$username', password='$password' WHERE id='$id'");
    if($qry_update_member){
        echo "<script>alert('Data berhasil diubah');window.location.href='tampil_member.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Diubah');document.location.href='tampil_member.php'</script>";
    }
}
?>