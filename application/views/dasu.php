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
                                <h3 class="font-weight-bold text-success">Sistem Informasi Izin Keluar Kantor</h3>
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-success">Riwayat Surat</h6>
                                    </div>
                                    <div class="card-body">
<<<<<<< HEAD
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="DataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <?php $no = 1; ?>
=======


                                        <table class="table table-bordered" id="DataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <?php $no = 1; ?>
                                                <tr>
                                                    <th>
                                                        <center>No</center>
                                                    </th>

                                                    <th>
                                                        <center>Waktu Berangkat</center>
                                                    </th>
                                                    <th>
                                                        <center>Waktu Kembali</center>
                                                    </th>
                                                    <th>
                                                        <center>Keperluan Izin</center>
                                                    </th>
                                                    <th>
                                                        <center>Pejabat</center>
                                                    </th>

                                                    <th>
                                                        <center><a href="<?= base_url('surat'); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-check" ></i></a></center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>
                                                        <center>No</center>
                                                    </th>

                                                    <th>
                                                        <center>Waktu Berangkat</center>
                                                    </th>
                                                    <th>
                                                        <center>Waktu Kembali</center>
                                                    </th>
                                                    <th>
                                                        <center>Keperluan Izin</center>
                                                    </th>
                                                    <th>
                                                        <center>Pejabat</center>
                                                    </th>
                                                    <th>

                                                    </th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php foreach ($surat as $m) : ?>
>>>>>>> 8d82cea5f3689c2601b88c3c847cddbcc2b04fae
                                                    <tr>
                                                        <th>
                                                            <center>No</center>
                                                        </th>
                                                        <th>
                                                            <center>Waktu Berangkat</center>
                                                        </th>
                                                        <th>
                                                            <center>Waktu Kembali</center>
                                                        </th>
                                                        <th>
                                                            <center>Keperluan Izin</center>
                                                        </th>
                                                        <th>
                                                            <center>Pejabat</center>
                                                        </th>
                                                        <th>
                                                            <center><a href="<?= base_url('surat'); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-plus"></i></a></center>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            <center>No</center>
                                                        </th>
                                                        <th>
                                                            <center>Waktu Berangkat</center>
                                                        </th>
                                                        <th>
                                                            <center>Waktu Kembali</center>
                                                        </th>
                                                        <th>
                                                            <center>Keperluan Izin</center>
                                                        </th>
                                                        <th>
                                                            <center>Pejabat</center>
                                                        </th>
                                                        <th>
                                                            <center><a href="<?= base_url('surat'); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-plus"></i></a></center>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php foreach ($surat as $m) : ?>
                                                        <tr>
                                                            <th scope="row">
                                                                <center><?= $no++; ?></center>
                                                            </th>
                                                            <td>
                                                                <center>
                                                                    <?php $berangkat = date('H:i d-m-Y', strtotime($m['jam_berangkat']));    ?>
                                                                    <?= $berangkat; ?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <?php if ($m['jam_kembali'] == null) : ?>
                                                                        -
                                                                    <?php else : ?>
                                                                        <?php $kembali = date('H:i d-m-Y', strtotime($m['jam_kembali']));  ?>
                                                                        <?= $kembali; ?>
                                                                    <?php endif; ?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <center><?= $m['kegiatan']; ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?= $m['pejabat']; ?></center>
                                                            </td>
                                                            <?php if ($m['jam_kembali'] == null) : ?>
                                                                <td>
                                                                    <center><a href="<?= base_url('surat/kembali/'); ?><?= $m['id_surat']; ?>" class="btn btn-info btn-circle btn-sm"><i class="fas fa-edit"></i></a></center>
                                                                </td>
                                                            <?php else : ?>
                                                                <td>
                                                                    <center><a href="<?= base_url('surat/kembali/'); ?><?= $m['id_surat']; ?>" class="btn btn-dark btn-circle btn-sm"><i class="fas fa-print"></i></a></center>
                                                                </td>
                                                            <?php endif; ?>
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