<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "connect.php";
            $qry_login=mysqli_query($connect,"SELECT * from user where username = '".$username."' and password = '".$password."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id']=$dt_login['id'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['status_login']=true;
                $_SESSION['role'] = $dt_login['role'];
                header("location: home.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>