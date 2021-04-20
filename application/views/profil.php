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
                        <h3 class="font-weight-bold text-success">Sistem Informasi Izin Keluar Kantor</h3>

                        <div class="row mt-8">

                            <div class="col-md-12">

                                <form class="form-group" action="<?= base_url('user/edit_profil') ?>" method="post">

                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-success">Edit Profil</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-3"><label for="nip">NIP </label>
                                                </div>
                                                <div class="col-9"> : <?= $pegawai->nip ?>
                                                    <input type="hidden" name="nip" id="nip" value="<?= $pegawai->nip ?>" class="form-control" placeholder="NIP" required="reuqired" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-3"><label for="nama">Nama </label>
                                                </div>
                                                <div class="col-9"> : <?= $pegawai->nama ?>
                                                    <input type="hidden" name="nama" id="nama" value="<?= $pegawai->nama ?>" class="form-control" placeholder="Nama" required="reuqired" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-3"><label for="gol">Golongan </label>
                                                </div>
                                                <div class="col-9"> : <?= $pegawai->gol ?>
                                                    <input type="hidden" name="gol" id="go;" value="<?= $pegawai->gol ?>" class="form-control" placeholder="Golongan" required="reuqired" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-3"><label for="divisi">Jabatan </label>
                                                </div>
                                                <div class="col-9"> : <?= $pegawai->divisi ?>
                                                    <input type="hidden" name="divisi" id="divisi" value="<?= $pegawai->divisi ?>" class="form-control" placeholder="Unit Kerja" required="reuqired" />
                                                </div>
                                            </div>

                                            <input type="hidden" name="username" id="username" value="<?= $pegawai->username ?>" class="form-control" placeholder="Username" required="reuqired" />

                                            <div class="dropdown-divider">

                                            </div>

                                            <div class="form-group">
                                                <div class="col-12">
                                                    <label for="password">Password </label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="password" name="password" id="password" value="<?= $pegawai->password ?>" class="form-control" placeholder="Password" required="reuqired" />
                                                </div>
                                                <div class="col-12 text-danger">*jika tidak ingin mengganti password biarkan seperti ini
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-circle btn-sm float-right"><i class="fa fa-save"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

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