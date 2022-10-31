<?php 
    include "connect.php";
    $id_user=$_GET['id_user'];
    $qry_hapus_member=mysqli_query($connect,"DELETE FROM user WHERE id_user='$id_user'");
    $qry_hapus_user=mysqli_query($connect,"DELETE FROM user WHERE id_user='$id_user'");
    if($qry_hapus_member && $qry_hapus_user){
        echo "<script>alert('Data berhasil dihapus');window.location.href='tampil_user.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus');document.location.href='tampil_user.php'</script>";
    }
    
?>