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
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg" style="background-color: #ffe2e2;">
        <div class="container-fluid">
            <a class="navbar-brand" style="padding-left: 20px;">
                <h3>
                    <span style="color: #922B21; font-family: Cooper Black;"> SEWA </span>
                    <span style="color: #C0392B; font-family: Cooper Black;"> KAMERA </span>
                </h3>
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item" style="padding-top: 4px; padding-bottom: 7px;">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('kamera') ?>" style="color: #cd4c4c;"> Home </a>
                </li>
                <li class="nav-item" style="padding-top: 4px; padding-bottom: 7px;">
                    <a class="nav-link" href="<?= base_url('add_data_kamera') ?>" style="color: #cd4c4c;"> Order </a>
                </li>
                <li class="nav-item" style="padding-top: 4px; padding-bottom: 7px;">
                    <a class="nav-link" href="<?= base_url('data') ?>" style="color: #cd4c4c;"> Data </a>
                </li>
                <li class="nav-item" style="padding-top: 4px; padding-bottom: 7px;">
                    <a class="nav-link" href="<?= base_url('detail') ?>" style="color: #cd4c4c;"> Details </a>
                </li>
            </ul>
        </div>
    </nav><br>

    <div class="container">
        <h2 style="text-align: center; font-family: Bookman Old Style; padding-bottom: 10px;"> Data Lengkap Sewa Kamera </h2>
        <table class="table table-striped table-bordered" style="background-color: #ffcccc;">
            <thead class="table" style="background-color: #e47272;">
                <tr>
                    <th scope="col" style="text-align: center;"> No </th>
                    <th scope="col"> Nama </th>
                    <th scope="col"> Alamat </th>
                    <th scope="col"> Nomor Telepon </th>
                    <th scope="col"> Kamera </th>
                    <th scope="col"> Tanggal Peminjaman </th>
                    <th scope="col"> Tanggal Pengembalian </th>
                    <th colspan="3" scope="colgroup" style="text-align: center;"> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id = 1;
                foreach ($all_data_kamera as $kamera) : ?>
                    <tr>
                        <td style="text-align: center;"><?= $id; ?></td>
                        <td><?= $kamera->nama; ?></td>
                        <td><?= $kamera->alamat; ?></td>
                        <td><?= $kamera->no_hp; ?></td>
                        <td><?= $kamera->kamera; ?></td>
                        <td><?= $kamera->tgl_peminjaman; ?></td>
                        <td><?= $kamera->tgl_pengembalian; ?></td>
                        <td> <a href="<?= base_url('edit_data_kamera') . '/' . $kamera->id ?> " class="btn btn-sm" style="background-color: #f0efeb;">Edit</a></td>
                        <td> <a href="<?= base_url('delete_data_kamera') . '/' . $kamera->id ?>" class="btn btn-sm" style="background-color: #f0efeb;">Hapus</a></td>
                    </tr>
                    <?php $id++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>