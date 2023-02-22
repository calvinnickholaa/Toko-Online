<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url('dashboard/index') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-solid fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GA JUALAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kategori
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/makanan') ?>">

            <i class="fas fa-fw fa-utensils"></i>
            <span>Makanan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/minuman') ?>">
            <i class="fas fa-fw fa-wine-bottle"></i>
            <span>Minuman</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/snack') ?>">
            <i class="fas fa-fw fa-cookie-bite"></i>
            <span>Snack</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->