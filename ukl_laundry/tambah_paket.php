<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah paket</h3>
    <form action="proses_tambah_paket.php" method="post">
        Paket :
        <select name="jenis" class = "form-control">
            <option value="kiloan">KILOAN</option>
            <option value="selimut">SELIMUT</option>
            <option value="bed_cover">BED COVER</option>
            <option value="kaos">KAOS</option>
        </select><br>
        Harga : 
        <input type="text" name="harga" value="" class="form-control" required><br>
        <input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary">
    </form>
    <br>
    <a class="btn btn-primary" href="tampil_paket.php">Cancel</a>
    </br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>