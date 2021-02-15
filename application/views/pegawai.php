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
                                                    <center><a href="<?= base_url('pegawai/tambah/'); ?>" class="btn btn-primary btn-circle btn-sm">

                                                            <i class="fas fa-plus"></i>

                                                        </a></center>
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
                                                    <center><a href="<?= base_url('pegawai/tambah/'); ?>" class="btn btn-primary btn-circle btn-sm">

                                                            <i class="fas fa-plus"></i>

                                                        </a></center>
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

                                                            <a href="<?= base_url('pegawai/ubah/'); ?><?= $m['id_user']; ?>" class="btn btn-warning btn-circle btn-sm"> 
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="<?= base_url('pegawai/hapus/'); ?><?= $m['id_user']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Apakah Anda ingin menghapus data ini?');">
                                                                <i class="fas fa-trash"></i>
                                                            </a>

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