<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">

    <title>Data Murid</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Pengadilan Agama Sorong</span>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Tambah Data Pegawai</h3>
                <div class="card">
                    <div class="card-header">
                        Masukan Data Pegawai
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="nip" class="form-control" id="nip" name="nip">
                                <?= form_error('nip', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                                <?= form_error('nisn', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="gol">Gol</label>
                                <input type="text" class="form-control" id="gol" name="gol">
                                <?= form_error('gol', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="divisi">Unit Kerja</label>
                                <input type="text" class="form-control" id="divisi" name="divisi">
                                <?= form_error('divisi', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah</button>
                            <a href="<?= base_url('pegawai'); ?>" class="btn btn-danger mb-2">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
</body>

</html>
