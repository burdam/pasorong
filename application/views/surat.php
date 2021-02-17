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
                <h3>Surat Izin</h3>
                <div class="card">
                  <div class="card-header">
                    Masukan Keperluan untuk Surat Izin
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
                      <div class="col-2"><label for="nip">Golongan </label>
                      </div>
                      <div class="col-10"> : <?php echo $this->session->userdata('gol'); ?>
                      </div>
                    </div>
                    <form action=" <?= base_url('surat/store'); ?> " method="post">
                      <!-- <div class="form-group">
                        <label for="jam_berangkat">Jam Berangkat : </label>
                        <input type="datetime" class="form-control" id="jam_berangkat" name="jam_berangkat" disabled>
                        <?= form_error('jam_berangkat', '<small class="pl-3 text-danger">', '</small>'); ?>
                      </div> -->
                      <div class="form-group">
                        <label for="kegiatan">Untuk Keperluan : </label>
                        <textarea class="form-control" id="kegiatan" name="kegiatan"> </textarea>
                        <?= form_error('kegiatan', '<small class="pl-3 text-danger">', '</small>'); ?>
                      </div>
                      <!--  <div class="form-group">
                        <label for="gol">Jabatan</label>
                        <input type="text" class="form-control" id="Jabatan" name="Jabatan">
                        <?= form_error('gol', '<small class="pl-3 text-danger">', '</small>'); ?>
                      </div> -->
                      <div class="form-group">
                        <label for="divisi">Pejabat</label>
                        <input type="text" class="form-control" id="pejabat" name="pejabat">
                        <?= form_error('divisi', '<small class="pl-3 text-danger">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success float-left" name="tambah">Oke</button>
                        <a href="<?= base_url('pegawai'); ?>" class="btn btn-danger mb-2 float-right">Batal</a>
                      </div>
                    </form>
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