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

                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="s-admin">Super-Admin</option>
                                    <option value="admin">Admin</option>
                                    <option value="mgr">Manager</option>
                                    <option value="spv">Supervisior</option>
                                    <option value="staff">Staff</option>
                                </select>
                                <?= form_error('role', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                <input type="text" class="form-control" id="level" name="level">
                                <?= form_error('level', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                                <?= form_error('username', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <?= form_error('password', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="ttd">TTD</label>
                                <input type="file" class="form-control" id="ttd" name="ttd">
                                <?= form_error('gol', '<small class="pl-3 text-danger">', '</small>'); ?>
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