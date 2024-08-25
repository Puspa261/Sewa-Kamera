<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sewa Kamera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background-color: #ffe2e2;">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <div class="container"><br>
        <h1 style="text-align: center; font-family: Bookman Old Style;"> Tambah Daftar Penyewa Kamera </h1>
        <form method="post" action="<?= base_url('proses_add_kamera') ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Nama </label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Alamat </label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Nomor Telepon </label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon">
            </div>
            <div class="mb-3"><label for="exampleFormControlInput1" class="form-label"> Jenis Kamera </label><br>
                <select name="kamera" id="kamera" class="form-control" required>
                    <option selected> - Pilih Jenis Kamera - </option>
                    <?php
                    $servername = "localhost";
                    $database = "db_kamera";
                    $username = "root";
                    $password = "";
                    $conn = mysqli_connect($servername, $username, $password, $database);

                    $sql = mysqli_query($conn, "SELECT * from tb_jenis") or die(mysqli_error($conn));
                    while ($data = mysqli_fetch_assoc($sql)) {
                        echo '<option value="' . $data['jenis'] . '">' . $data['jenis'] . '</option>';
                    } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Tanggal Peminjaman </label>
                <input type="date" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman" placeholder="Tanggal Peminjaman">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Tanggal Pengembalian </label>
                <input type="date" class="form-control" id="tgl_pengembalian" name="tgl_pengembalian" placeholder="Tanggal Pengembalian">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn" style="background-color: #e47272;"> Simpan </button>
                <a class="btn" href="<?= base_url('data') ?>" style="background-color: #e47272;"> Back </a>
            </div>
        </form>
    </div>
</body>

</html>