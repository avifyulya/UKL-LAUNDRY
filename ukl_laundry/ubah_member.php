<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    session_start();
    include "connect.php";
    $qry_get_member=mysqli_query($connect,"SELECT*FROM member where id_member = '".$_GET['id_member']."'");
    // $qry_get_user = mysqli_query($connect,"SELECT * FROM user where id = '".$_GET['id']."'");
    // $dt_user = mysqli_fetch_array($qry_get_user);
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <h3>Ubah Member</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id_member" value= "<?=$dt_member['id_member']?>">
        nama member :<input type="text" name="nama" value="<?=$dt_member['nama']?>" class="form-control">
        Jenis Kelamin:
        <select name="jenis_kelamin" class="form-control">
            <option value="Laki-laki" <?php if($dt_member['jenis_kelamin']=='Laki-laki'){echo "selected";} ?>>Laki-laki</option>
            <option value="Perempuan" <?php if($dt_member['jenis_kelamin']=='Perempuan'){echo "selected";} ?>>Perempuan</option>
        </select>
        Alamat : 
<textarea name="alamat" class="form-control" rows="4"><?=$dt_member['alamat']?></textarea>
    Telepon:
    <input type="telepon" name="telepon" id="telefon" value="<?=$dt_member['telepon']?>">
    <br>
        <!-- Username : <input type="text" name="username" value="<?=$dt_user['username']?>" class="form-control">
        Password : <input type="password" name="password" value="<?=$dt_user['password']?>" class="form-control"> -->
        <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>