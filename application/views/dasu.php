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
                    <div class="container">
                        <div class="row mt-8">
                            <div class="col-md-12">
                                <h3>Riwayat Surat Izin</h3>
                                <div class="card">
                                    <div class="card-header">
                                        Daftar Surat Izin
                                    </div>
                                    <div class="card-body">


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
                                                                <center><a href="<?= base_url('surat/kembali/'); ?><?= $m['id_surat']; ?>" class="btn btn-warning mb-2">Ubah</a></center>

                                                            </td>
                                                        <?php else : ?>
                                                            <td>

                                                                <center><a href="<?= base_url('surat/kembali/'); ?><?= $m['id_surat']; ?>" class="btn btn-primary mb-2">Cetak</a></center>
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


            <?php $this->load->view("/admin/_partials/footer.php") ?>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php $this->load->view("/admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("/admin/_partials/modal.php") ?>
    <?php $this->load->view("/admin/_partials/js.php") ?>

</body>

</html>