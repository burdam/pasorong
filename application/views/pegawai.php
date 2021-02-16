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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sistem Informasi Izin Keluar Kantor</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Data Pegawai</h6>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="DataTable" width="100%" cellspacing="0">
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
                                                    <center>Sub Unit Kerja</center>
                                                </th>
                                                <th>
                                                    <center>Golongan</center>
                                                </th>
                                                <th>


                                                    <center><button type="button" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i></button></center>

                                                    <!-- Modal Add Product-->
                                                    <form action="<?= base_url('pegawai/tambah/'); ?>" method="post">
                                                        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

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
                                                                        <!-- <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah</button>
                                                                            <a href="<?= base_url('pegawai'); ?>" class="btn btn-danger mb-2">Kembali</a> -->

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                                        <!-- <a href="<?= base_url('pegawai'); ?>" class="btn btn-primary">Simpan</a> -->
                                                                        <button type="submit" class="btn btn-primary">Simpan</button>
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
                                                    <center>Sub Unit Kerja</center>
                                                </th>
                                                <th>
                                                    <center>Golongan</center>
                                                </th>
                                                <th>
                                                    <center><button type="button" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i></button></center>
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
                                                            <!-- <a href="#" class="btn btn-info btn-sm btn-edit" data-nama="<?= $m['nama']; ?>" data-nip="<?= $m['nip']; ?>" data-gol="<?= $m['gol']; ?>" data-divisi="<?= $m['divisi']; ?>">Edit</a> -->
                                                            <a href="#" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#editModal<?= $m['id_user']; ?>"><i class="fas fa-edit"></i></a>

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

                                                                                <!-- <input type="hidden" value="<?= $pegawai['id_user']; ?>" name="id_user"> -->
                                                                                <div class="form-group">
                                                                                    <label for="nip">NIP</label>
                                                                                    <input type="nip" class="form-control" id="nip" name="nip" value="<?= $m['nip']; ?>">
                                                                                    <?= form_error('nip', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="nama">Nama</label>
                                                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $m['nama']; ?>">
                                                                                    <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="gol">Gol</label>
                                                                                    <input type="text" class="form-control" id="gol" name="gol" value="<?= $m['gol']; ?>">
                                                                                    <?= form_error('gol', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="divisi">Unit Kerja</label>
                                                                                    <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $m['divisi']; ?>">
                                                                                    <?= form_error('divisi', '<small class="pl-3 text-danger">', '</small>'); ?>
                                                                                </div>
                                                                                <button type="submit" class="btn btn-success float-right" name="Ubah">Ubah</button>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <!-- <input type="hidden" name="product_id" class="product_id"> -->
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- End Modal Edit Product-->


                                                            <a href="#" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteModal<?= $m['id_user']; ?>"><i class="fas fa-trash"></i></a>
                                                            <!-- Modal Delete Product-->
                                                            <!-- <form action="/pasorong/pegawai/hapus/" method="post"> -->
                                                            <div class="modal fade" id="deleteModal<?= $m['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Pegawai</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <h4>Are you sure want to delete this product?</h4>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <!-- <input type="hidden" name="id_user" class="id_user"> -->
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                            <a href="<?= base_url('pegawai/hapus/'); ?><?= $m['id_user']; ?>" class="btn btn-primary">Yes</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- </form> -->
                                                            <!-- End Modal Delete Product-->

                                                        </center>
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