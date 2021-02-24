<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar dari aplikasi?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih tombol "Keluar" untuk meninggalkan aplikasi.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-circle btn-sm" type="button" data-dismiss="modal"><i class="fas fa-times"></i></button>
                <a class="btn btn-danger btn-circle btn-sm" href="<?= base_url('pegawai/logout'); ?>"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </div>
</div>