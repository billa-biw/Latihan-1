<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Pegawai</h3>
    <form action="proses_tambah_pegawai.php" method="post">
        nik :
        <input type="text" name="nik_pegawai" value="" class="form-control">
        nama pegawai :
        <input type="text" name="nama_pegawai" value="" class="form-control">
        alamat :
        <input type="text" name="alamat" value="" class="form-control">
        jenis kelamin :
        <input type="text" name="jenis_kelamin" value="" class="form-control">
        no telp :
        <input type="text" name="no_telp" value="" class="form-control">
        jabatan :
        <input type="text" name="jabatan" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Pegawai" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
