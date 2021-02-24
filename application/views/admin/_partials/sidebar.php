<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('assets'); ?>/index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-envelope-open-text"></i>
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
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/pegawai'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Pegawai</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/surat'); ?>">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Surat Izin</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/surat/dasu'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Riwayat Surat</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/surat/darisu'); ?>">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Riwayat Surat Pribadi</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/surat/darisulvl'); ?>">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Riwayat Surat Unit Kerja</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->