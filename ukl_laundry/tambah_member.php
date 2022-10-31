<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Member</h3>
    <form action="proses_tambah_member.php" method="post">
        nama member :
        <input type="text" name="nama" value="" class="form-control">
        <input type="hidden" name="id_member">
        Jenis Kelamin : 
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Telepon :
        <input type="text" name="telepon" value="" class="form-control">
        <!-- Username:
        <input type="text" name="username" id="username">
        Password:
        <input type="password" name="password" id="password"> -->
        <input type="submit" name="simpan" value="Tambah Member" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <a class="btn btn-primary" href="tampil_member.php">Cancel</a>
</body>
</html>