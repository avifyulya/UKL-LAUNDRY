<?php 
    include "connect.php";
    $id_member=$_GET['id_member'];
    $qry_hapus_member=mysqli_query($connect,"DELETE FROM member WHERE id_member='$id_member'");
    // $qry_hapus_user=mysqli_query($connect,"DELETE FROM user WHERE id='$id'");
    if($qry_hapus_member){
        echo "<script>alert('Data berhasil dihapus');window.location.href='tampil_member.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus');document.location.href='tampil_member.php'</script>";
    }
    
?>