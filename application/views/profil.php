<div class="row">

    <div class="col-12 col-md-8">
        <div class="card">
            <form action="<?= base_url('user/edit_profil') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Edit Profil</h4>
                </div>
                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Profil</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nik">NIP : </label>
                                <input type="hidden" name="id_user" value="<?= $this->uri->segment(3) ?>">
                                <input type="text" name="nik" id="nik" value="<?= $pegawai->nip ?>" class="form-control" placeholder="Masukan NIP Karyawan" disabled required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap : </label>
                                <input type="text" name="nama" id="nama" value="<?= $pegawai->nama ?>" class="form-control" placeholder="Masukana Nama Lengkap Karyawan" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 ">
                            <div class="form-group">
                                <label for="telp">Gol : </label>
                                <input type="text" name="gol" id="gol" value="<?= $pegawai->gol ?>" class="form-control" placeholder="Masukan gol" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 ">
                            <div class="form-group">
                                <label for="email">Divisi : </label>
                                <input type="text" name="divisi" id="divisi" value="<?= $pegawai->divisi ?>" class="form-control" placeholder="Masukan divis" required="reuqired" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Akun</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" value="<?= $pegawai->username ?>" class="form-control" placeholder="Masukan Username" required="reuqired" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="********" />
                                <span class="text-danger">ISi untuk Mengganti Password</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row w-100">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <button type="submit" class="btn btn-primary btn-block">Simpan <i class="fa fa-save"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
