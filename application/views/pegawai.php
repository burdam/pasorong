<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">

    <title>Data Pegawai</title>
</head>

<body class="skin-green sidebar-mini body-small" style:"height: auto; min-height: 100%;">
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Sorong</span>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Data Pegawai</h3>
                 <a href="<?= base_url('pegawai/tambah/'); ?>" class="btn btn-primary mb-2">Tambah</a>
                <div class="table">
                    <table class="table-success">
                        <thead>
                            <?php $no = 1; ?>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gol</th>
                                <th scope="col">Unit Kerja</th>
                                <th scope="col">Aksi</th>
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
</body>

</html>
