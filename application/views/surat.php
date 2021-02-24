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
            <h1 class="h6 font-weight-bold text-success">Sistem Informasi Izin Keluar Kantor</h1>

            <div class="row mt-8">

              <div class="col-md-12">

                <div class="card">

                  <div class="card-header py-3">
                    <h1 class="h6 m-0 font-weight-bold text-success">Surat Izin</h1>
                  </div>

                  <div class="card-body">

                    <div class="row">
                      <div class="col-3"><label for="nip">NIP </label>
                      </div>
                      <div class="col-9"> : <?php echo $this->session->userdata('nip'); ?>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-3"><label for="nama">Nama </label>
                      </div>
                      <div class="col-9"> : <?php echo $this->session->userdata('nama'); ?>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-3"><label for="gol">Golongan </label>
                      </div>
                      <div class="col-9 form"> : <?php echo $this->session->userdata('gol'); ?>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-3"><label for="keperluan">Atasan </label>
                      </div>
                      <div class="col-9"> : <?php echo $pejabat->nama; ?>
                      </div>
                    </div>

                    <form action=" <?= base_url('surat/store'); ?> " method="post">

                      <div class="form-group">
                        <input type="hidden" class="form-control" id="pejabat" name="pejabat" value="<?php echo $pejabat->nama; ?>">
                        <?= form_error('pejabat', '<small class="pl-3 text-danger">', '</small>'); ?>
                      </div>

                      <div class="row">
                        <div class="col-3"><label for="keperluan">Keperluan </label>
                        </div>
                        <div class="col-9"> :
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <textarea class="form-control" id="kegiatan" name="kegiatan"> </textarea>
                            <?= form_error('kegiatan', '<small class="pl-3 text-danger">', '</small>'); ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <button type="submit" name="tambah" class="btn btn-success btn-circle btn-sm float-right"><i class="fas fa-check"></i></button>
                        </div>
                      </div>

                    </form>

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