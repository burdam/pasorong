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
                                <h1 class="h6 font-weight-bold text-success">SIZKA - Sistem Informasi Izin Keluar Kantor</h1>

                                <!-- DataTales Example -->
                                <div class="card shadow mb-4">

                                    <div class="card-header py-3">
                                        <h1 class="h6 m-0 font-weight-bold text-success">Preview Surat</h1>
                                    </div>

                                    <div class="card-body">

                                        <div class="row mt-12">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">Lampiran 2</div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">SK Ketua Mahkamah Agung RI</div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-2">Nomor</div>
                                            <div class="col-md-4">: 071/KMA/SK/V/2008</div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-2">Tanggal</div>
                                            <div class="col-md-4">: 14 Mei 2008</div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-12 text-center">SURAT IZIN KELUAR KANTOR</div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-12">Pejabat, <?= $surat->pejabat ?>
                                            </div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-12">Memberikan izin keluar kantor kepada : </div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-2">Nama</div>
                                            <div class="col-md-7">: <?= $surat->nama ?></div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-2">NIP</div>
                                            <div class="col-md-7">: <?= $surat->nip ?></div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-2">Unit Kerja</div>
                                            <div class="col-md-7">: PENGADILAN AGAMA SORONG</div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-2">Untuk Keperluan</div>
                                            <div class="col-md-7">: <?= $surat->kegiatan ?></div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-2">Jam Keluar</div>
                                            <div class="col-md-7">: <?php $berangkat = date('H:i', strtotime($surat->jam_berangkat));    ?>
                                                <?= $berangkat; ?> WIT</div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-2">Jam Kembali</div>
                                            <div class="col-md-7">: <?php $kembali = date('H:i', strtotime($surat->jam_kembali));    ?>
                                                <?= $kembali; ?> WIT</div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">Sorong, <?php $berangkat = date('d M Y', strtotime($surat->jam_berangkat));    ?>
                                                <?= $berangkat; ?></div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">Pejabat yang memberikan izin</div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6"><?= $surat->pejabat ?></div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-12">Keterangan.</div>
                                        </div>

                                        <div class="row mt-12">
                                            <div class="col-md-12">..... pejabat atasan langsung dari Hakim atau Pegawai Negeri yang memohon izin keluar kantor</div>
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