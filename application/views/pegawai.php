<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/table/datatables.min.css">

    <title>Data Pegawai</title>
</head>

<body class="skin-green sidebar-mini body-small" style:"height: auto; min-height: 100%;">
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Pengadilan Agama Sorong</span>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-4">
            <div class="card-body">
                <h3 class="m-0 font-weight-bold text-success d-flex justify-content-around">Data Pegawai Pengadilan Agama Sorong</h3>
                <div class="table-responsive">
                    <table class="table-success table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <?php $no = 1; ?>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIP</th>
                                <th scope="col"><center>Nama</center></th>
                                <th scope="col">Golongan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>
                                <th scope="col"><a href="<?= base_url('pegawai/tambah/'); ?>" class="btn btn-primary mb-2">Tambah</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pegawai as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $m['nip']; ?></td>
                                    <td><?= $m['nama']; ?></td>
                                    <td><?= $m['gol']; ?></td>
                                    <td><?= $m['divisi']; ?></td>
                                    <td><a href="<?= base_url('pegawai/hapus/'); ?><?= $m['id_user']; ?>" class="btn btn-danger mb-2" onclick="return confirm('Apakah Anda ingin menghapus data ini?');">Hapus</a></td>
                                    <td><a href="<?= base_url('pegawai/ubah/'); ?><?= $m['id_user']; ?>" class="btn btn-warning mb-2">Ubah</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets') ?>/table/datatables.min.js"></script>
    <script> $(document).ready( function () {
    $('#myTable').DataTable();
    } );</script>
</body>

</html>
