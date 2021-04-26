<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('assets'); ?>/index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-envelope-open-text">

                <h6 class="my-0 text-center text-xs"><label id="hours"><?= date('H') ?></label>:<label id="minutes"><?= date('i') ?></label>:<label id="seconds"><?= date('s') ?></label></h6>

            </i>
        </div>
        <div class="sidebar-brand-text mx-3">SIZKA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('/dashboard'); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Tables -->
    <?php if (is_level('admin')) : ?>

        <li class="nav-item <?= @$_active ?>">
            <a class="nav-link" href="<?= base_url('/pegawai'); ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>Data Pegawai</span></a>
        </li>

    <?php elseif (is_level('mgr')) : ?>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/surat/riwayat'); ?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Riwayat Surat</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/surat/subunitkerja'); ?>">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Riwayat Surat Unit Kerja</span></a>
        </li>

    <?php elseif (is_level('spv')) : ?>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/surat'); ?>">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Surat Izin</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/surat/pribadi'); ?>">
                <i class="fas fa-fw fa-address-card"></i>
                <span>Riwayat Surat Pribadi</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/surat/subunitkerja'); ?>">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Riwayat Surat Unit Kerja</span></a>
        </li>

    <?php else : ?>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/surat'); ?>">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Surat Izin</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/surat/pribadi'); ?>">
                <i class="fas fa-fw fa-address-card"></i>
                <span>Riwayat Surat Pribadi</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    <?php endif; ?>

</ul>
<!-- End of Sidebar -->
<script>
    var hoursLabel = document.getElementById("hours");
    var minutesLabel = document.getElementById("minutes");
    var secondsLabel = document.getElementById("seconds");
    setInterval(setTime, 1000);

    function setTime() {
        secondsLabel.innerHTML = pad(Math.floor(new Date().getSeconds()));
        minutesLabel.innerHTML = pad(Math.floor(new Date().getMinutes()));
        hoursLabel.innerHTML = pad(Math.floor(new Date().getHours()));
    }

    function pad(val) {
        var valString = val + "";
        if (valString.length < 2) {
            return "0" + valString;
        } else {
            return valString;
        }
    }
</script>