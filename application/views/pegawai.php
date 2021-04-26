<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("/admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view("/admin/_partials/sidebar.php") ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view("/admin/_partials/topbar.php") ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container-fluid">

                        <div class="row mt-8">

                            <div class="col-md-12">
                                <h1 class="h6 font-weight-bold text-success">Sistem Informasi Izin Keluar Kantor</h1>

                                <!-- DataTales Example -->
                                <div class="card shadow mb-4">

                                    <div class="card-header py-3">
                                        <h1 class="h6 m-0 font-weight-bold text-success">Data Pegawai</h1>
                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">

                                            <table class="table table-sm table-bordered table-striped table-condensed table-hover" id="dataTable" width="100%" cellspacing="0">

                                                <thead>
                                                    <?php $no = 1; ?>
                                                    <tr>
                                                        <th>
                                                            <center>No</center>
                                                        </th>
                                                        <th>
                                                            <center>NIP</center>
                                                        </th>
                                                        <th>
                                                            <center>Nama</center>
                                                        </th>
                                                        <th>
                                                            <center>Jabatan</center>
                                                        </th>
                                                        <th>
                                                            <center>Golongan</center>
                                                        </th>
                                                        <th>
                                                            <center><button type="button" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus"></i></button></center>

                                                            <!-- Modal Add Product-->
                                                            <form action="<?= base_url('pegawai/tambah/'); ?>" method="post">
                                                                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="nip">NIP</label><small class="text-danger"> *wajib diisi</small>
                                                                                    <input type="nip" class="form-control" id="nip" name="nip">
                                                                                    <?= form_error('nip', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="nama">Nama</label><small class="text-danger"> *wajib diisi</small>
                                                                                    <input type="text" class="form-control" id="nama" name="nama">
                                                                                    <?= form_error('nisn', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="divisi">Jabatan</label><small class="text-danger"> *wajib diisi</small>
                                                                                    <input type="text" class="form-control" id="divisi" name="divisi">
                                                                                    <?= form_error('divisi', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="gol">Golongan</label><small class="text-danger"> *wajib diisi</small>
                                                                                    <input type="text" class="form-control" id="gol" name="gol">
                                                                                    <?= form_error('gol', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="role">Role</label><small class="text-danger"> *wajib diisi</small>
                                                                                    <select class="form-control" id="role" name="role">
                                                                                        <option value="staff">Staff</option>
                                                                                        <option value="spv">Supervisior</option>
                                                                                        <option value="mgr">Manager</option>
                                                                                        <option value="admin">Admin</option>
                                                                                    </select>
                                                                                    <?= form_error('role', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="level">Level</label><small class="text-danger"> *wajib diisi</small>
                                                                                    <input type="text" class="form-control" id="level" name="level">
                                                                                    <?= form_error('level', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="username">Username</label><small class="text-danger"> *wajib diisi</small>
                                                                                    <input type="text" class="form-control" id="username" name="username">
                                                                                    <?= form_error('username', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="password">Password</label><small class="text-danger"> *wajib diisi</small>
                                                                                    <input type="password" class="form-control" id="password" name="password">
                                                                                    <?= form_error('password', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="ttd">Tanda Tangan</label><small class="text-warning"> *opsional</small>
                                                                                    <input type="file" class="form-control" id="ttd" name="ttd">
                                                                                    <?= form_error('ttd', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-success btn-circle btn-sm"><i class="fas fa-check"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- End Modal Add Product-->

                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <center>No</center>
                                                        </th>
                                                        <th>
                                                            <center>NIP</center>
                                                        </th>
                                                        <th>
                                                            <center>Nama</center>
                                                        </th>
                                                        <th>
                                                            <center>Jabatan</center>
                                                        </th>
                                                        <th>
                                                            <center>Golongan</center>
                                                        </th>
                                                        <th>
                                                            <center><button type="button" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus"></i></button></center>
                                                        </th>
                                                    </tr>
                                                </tfoot>

                                                <tbody>
                                                    <?php foreach ($pegawai as $m) : ?>
                                                        <tr>
                                                            <th scope="row">
                                                                <center><?= $no++; ?></center>
                                                            </th>
                                                            <td><?= $m['nip']; ?></td>
                                                            <td><?= $m['nama']; ?></td>
                                                            <td><?= $m['divisi']; ?></td>
                                                            <td>
                                                                <center><?= $m['gol']; ?></center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <a href="#" class="btn btn-info btn-circle btn-sm" data-toggle="modal" data-target="#editModal<?= $m['id_user']; ?>"><i class="fas fa-user-cog"></i></a>
                                                                    <a href="#" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteModal<?= $m['id_user']; ?>"><i class="fas fa-user-minus"></i></a>
                                                                </center>

                                                                <!-- Modal Edit Product-->
                                                                <form action="<?= base_url('pegawai/ubah/' . $m['id_user']); ?>" method="post">
                                                                    <div class="modal fade" id="editModal<?= $m['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pegawai</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label for="nip">NIP</label><small class="text-danger"> *wajib diisi</small>
                                                                                        <input type="text" class="form-control" id="nip" name="nip" value="<?= $m['nip']; ?>">
                                                                                        <?= form_error('nip', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="nama">Nama</label><small class="text-danger"> *wajib diisi</small>
                                                                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $m['nama']; ?>">
                                                                                        <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="gol">Golongan</label><small class="text-danger"> *wajib diisi</small>
                                                                                        <input type="text" class="form-control" id="gol" name="gol" value="<?= $m['gol']; ?>">
                                                                                        <?= form_error('gol', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="divisi">Jabatan</label><small class="text-danger"> *wajib diisi</small>
                                                                                        <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $m['divisi']; ?>">
                                                                                        <?= form_error('divisi', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="role">Role</label><small class="text-danger"> *wajib diisi</small>
                                                                                        <select name="role" id="role" value="<?= $m['role']; ?>" class="form-control">
                                                                                            <option value="staff">Staff</option>
                                                                                            <option value="spv">Supervisior</option>
                                                                                            <option value="mgr">Manager</option>
                                                                                            <option value="admin">Admin</option>
                                                                                        </select>
                                                                                        <?= form_error('role', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="level">Level</label><small class="text-danger"> *wajib diisi</small>
                                                                                        <input type="text" class="form-control" id="level" name="level" value="<?= $m['level']; ?>">
                                                                                        <?= form_error('level', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="username">Username</label><small class="text-danger"> *wajib diisi</small>
                                                                                        <input type="text" class="form-control" id="username" name="username" value="<?= $m['username']; ?>">
                                                                                        <?= form_error('username', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="password">Password</label><small class="text-danger"> *wajib diisi</small>
                                                                                        <input type="password" class="form-control" id="password" name="password" value="<?= $m['password']; ?>">
                                                                                        <?= form_error('password', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="ttd">Tanda Tangan</label><small class="text-warning"> *opsional</small>
                                                                                        <input type="file" class="form-control" id="ttd" name="ttd" value="<?= $m['ttd']; ?>">
                                                                                        <?= form_error('gol', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-success btn-circle btn-sm"><i class="fas fa-check"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <!-- End Modal Edit Product-->

                                                                <!-- Modal Delete Product-->
                                                                <div class="modal fade" id="deleteModal<?= $m['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pegawai</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-2">
                                                                                            <label for="nip"> NIP </label>
                                                                                        </div>
                                                                                        <div class="col-10">
                                                                                            <label for="nip"> : </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <strong for="nip"><?= $m['nip']; ?></strong>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="row">
                                                                                        <div class="col-2">
                                                                                            <label for="nip"> Nama </label>
                                                                                        </div>
                                                                                        <div class="col-10">
                                                                                            <label for="nip"> : </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <strong for="nip"><?= $m['nama']; ?></strong>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="row">
                                                                                        <div class="col-2">
                                                                                            <label for="nip">Jabatan</label>
                                                                                        </div>
                                                                                        <div class="col-10">
                                                                                            <label for="nip">: </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <strong for="nip"><?= $m['divisi']; ?></strong>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="row">
                                                                                        <div class="col-2">
                                                                                            <label for="nip">Golongan</label>
                                                                                        </div>
                                                                                        <div class="col-10">
                                                                                            <label for="nip">: </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <strong for="nip"><?= $m['gol']; ?></strong>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <a href="<?= base_url('pegawai/hapus/'); ?><?= $m['id_user']; ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-check"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Modal Delete Product-->

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php $this->load->view("/admin/_partials/footer.php") ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <?php $this->load->view("/admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("/admin/_partials/modal.php") ?>
    <?php $this->load->view("/admin/_partials/js.php") ?>
</body>

</html>