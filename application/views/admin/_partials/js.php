<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<!-- <script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.min.js"></script> -->
<script src="<?= base_url('assets'); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<!-- <script src="<?= base_url('assets'); ?>/js/demo/chart-area-demo.js"></script> -->
<!-- <script src="<?= base_url('assets'); ?>/js/demo/chart-pie-demo.js"></script> -->
<script src="<?= base_url('assets'); ?>/js/demo/datatables-demo.js"></script>
<script src="<?= base_url('assets'); ?>/table/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('dataTable').DataTable();
    });
</script>
<script>
    var table = $('#example').DataTable();
    $('#all').on('click', function() {
        table.page.len(-1).draw();
    });
</script>
<script>
    $(document).ready(function() {
        // get Edit Product
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const id_user = $(this).data('id_user');
            const nama = $(this).data('nama');
            const nip = $(this).data('nip');
            const gol = $(this).data('gol');
            const divisi = $(this).data('divisi');
            // Set data to Form Edit
            $('.id_user').val(id_user);
            $('.nama').val(nama);
            $('.nip').val(nip);
            $('.gol').val(gol);
            $('.divisi').val(divisi).trigger('change');
            // Call Modal Edit
            $('#editModal').modal('show');
        });

        // get Delete Product
        $('.btn-delete').on('click', function() {
            // get data from button edit
            const id_user = $(this).data('id_user');
            // Set data to Form Edit
            $('.id_user').val(id_user);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });

    });
</script>
<script>
    $(document).ready(function() {
        $("#wrapper").toggleClass("toggle");
    });
</script>