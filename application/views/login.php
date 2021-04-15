<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("/admin/_partials/head.php") ?>
    <title>SIZKA - Login</title>
</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-6 d-none d-lg-block">
                                <img class="img-fluid mx-auto d-block" src="<?= base_url('assets'); ?>/img/logo-pasorong/logo-pasorong.png" alt="Logo Pengadilan Agama Sorong">
                            </div>

                            <div class="col-lg-6">

                                <div class="p-5">

                                    <div class="text-center">
                                        <h1 class="h3 font-weight-bold mb-1"> SIZKA </h1>
                                        <h1 class="h6 font-weight-bold mb-1"> Sistem Informasi Izin Keluar Masuk Kantor </h1>
                                        <h1 class="h6 font-weight-bold mb-4"> PENGADILAN AGAMA SORONG </h1>
                                    </div>

                                    <form action="<?= base_url('login/login') ?>" method="post" class="user">

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="emailHelp" placeholder="NIP / NRP">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck"> Ingat Akun Saya </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-user btn-block"> Masuk </button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php $this->load->view("/admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("/admin/_partials/modal.php") ?>
    <?php $this->load->view("/admin/_partials/js.php") ?>

</body>

</html>