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
                                        <h1 class="h6 m-0 font-weight-bold text-success">Riwayat Surat</h1>
                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">

                                            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">

                                                <thead>
                                                    <?php $no = 1; ?>
                                                    <tr>
                                                        <th>
                                                            <center>No</center>
                                                        </th>
                                                        <th>
                                                            <center>Tanggal</center>
                                                        </th>
                                                        <th>
                                                            <center>NIP</center>
                                                        </th>
                                                        <th>
                                                            <center>Nama</center>
                                                        </th>
                                                        <th>
                                                            <center>Jam Keluar</center>
                                                        </th>
                                                        <th>
                                                            <center>Keperluan Izin</center>
                                                        </th>
                                                        <th>
                                                            <center>Jam Kembali</center>
                                                        </th>
                                                        <th>
                                                            <center>Atasan</center>
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
                                                            <center>Tanggal</center>
                                                        </th>
                                                        <th>
                                                            <center>NIP</center>
                                                        </th>
                                                        <th>
                                                            <center>Nama</center>
                                                        </th>
                                                        <th>
                                                            <center>Jam Keluar</center>
                                                        </th>
                                                        <th>
                                                            <center>Keperluan Izin</center>
                                                        </th>
                                                        <th>
                                                            <center>Jam Kembali</center>
                                                        </th>
                                                        <th>
                                                            <center>Atasan</center>
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
                                                                    <?php $berangkat = date('D, d M Y', strtotime($m['jam_berangkat']));    ?>
                                                                    <?= $berangkat; ?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <?= $m['nip']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $m['nama']; ?>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <?php $berangkat = date('H:i', strtotime($m['jam_berangkat']));    ?>
                                                                    <?= $berangkat; ?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <?= $m['kegiatan']; ?>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <?php if ($m['jam_kembali'] == null) : ?>
                                                                        -
                                                                    <?php else : ?>
                                                                        <?php $kembali = date('H:i', strtotime($m['jam_kembali']));  ?>
                                                                        <?= $kembali; ?>
                                                                    <?php endif; ?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <?= $m['pejabat']; ?>
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