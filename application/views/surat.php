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
                <div class="card">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Surat Izin</h6>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-2"><label for="nama">Nama </label>
                      </div>
                      <div class="col-10"> : <?php echo $this->session->userdata('nama'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2"><label for="nip">NIP </label>
                      </div>
                      <div class="col-10"> : <?php echo $this->session->userdata('nip'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2"><label for="gol">Golongan </label>
                      </div>
                      <div class="col-10"> : <?php echo $this->session->userdata('gol'); ?>
                      </div>
                    </div>
<<<<<<< HEAD
                    <div class="row">
                      <div class="col-2"><label for="keperluan">Keperluan </label>
                      </div>
                      <div class="col-10"> :
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <form action=" <?= base_url('surat/store'); ?> " method="post">
                          <!-- <div class="form-group">
=======
                    <form action=" <?= base_url('surat/store'); ?> " method="post">
                      <!-- <div class="form-group">
>>>>>>> 8d82cea5f3689c2601b88c3c847cddbcc2b04fae
                        <label for="jam_berangkat">Jam Berangkat : </label>
                        <input type="datetime" class="form-control" id="jam_berangkat" name="jam_berangkat" disabled>
                        <?= form_error('jam_berangkat', '<small class="pl-3 text-danger">', '</small>'); ?>
                      </div> -->
<<<<<<< HEAD
                          <div class="form-group">
                            <textarea class="form-control" id="kegiatan" name="kegiatan"> </textarea>
                            <?= form_error('kegiatan', '<small class="pl-3 text-danger">', '</small>'); ?>
                          </div>
                          <!--  <div class="form-group">
=======
                      <div class="form-group">
                        <label for="kegiatan">Untuk Keperluan : </label>
                        <textarea class="form-control" id="kegiatan" name="kegiatan"> </textarea>
                        <?= form_error('kegiatan', '<small class="pl-3 text-danger">', '</small>'); ?>
                      </div>
                      <!--  <div class="form-group">
>>>>>>> 8d82cea5f3689c2601b88c3c847cddbcc2b04fae
                        <label for="gol">Jabatan</label>
                        <input type="text" class="form-control" id="Jabatan" name="Jabatan">
                        <?= form_error('gol', '<small class="pl-3 text-danger">', '</small>'); ?>
                      </div> -->
                          <!-- <div class="form-group">
                        <label for="divisi">Pejabat</label>
                        <input type="text" class="form-control" id="pejabat" name="pejabat">
                        <?= form_error('divisi', '<small class="pl-3 text-danger">', '</small>'); ?>
                      </div> -->
                          <div class="form-group">
                            <button type="submit" name="tambah" class="btn btn-success btn-circle btn-sm float-right"><i class="fas fa-check"></i></button>
                            <!-- <a href="<?= base_url('pegawai'); ?>" class="btn btn-danger ">Batal</a> -->
                          </div>
                        </form>
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