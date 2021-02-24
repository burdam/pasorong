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

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Panduan Code</span>
        </div>
    </nav>

    <div class="container">

        <div class="row mt-4">

            <div class="col-md-6">
                <h3>Ubah Data Pegawai</h3>

                <div class="card">

                    <div class="card-header">
                        Ubah Data Pegawai
                    </div>

                    <div class="card-body">
                        <form action="" method="post">

                            <input type="hidden" value="<?= $pegawai['id_user']; ?>" name="id_user">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="nip" class="form-control" id="nip" name="nip" value="<?= $pegawai['nip']; ?>">
                                <?= form_error('nip', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $pegawai['nama']; ?>">
                                <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="gol">Gol</label>
                                <input type="text" class="form-control" id="gol" name="gol" value="<?= $pegawai['gol']; ?>">
                                <?= form_error('gol', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="divisi">Unit Kerja</label>
                                <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $pegawai['divisi']; ?>">
                                <?= form_error('divisi', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-success float-right" name="Ubah">Ubah</button>

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