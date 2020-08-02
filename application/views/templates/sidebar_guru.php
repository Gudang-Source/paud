<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo logo-mobile" href="<?= base_url() ?>">
                    <img src="<?= base_url('/') ?>assets/img/settings/logo/logo.png" alt="Sipendi" />
                </a>
                <button class="hamburger pt-n2 hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub <?= $active[0] ?>">
                    <a class="js-arrow" href="<?= base_url('pengajar') ?>">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="has-sub <?= $active[1] ?>">
                    <a class="js-arrow" href="<?= base_url('pengajar/peserta_didik') ?>">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="has-sub <?= $active[2] ?>">
                    <a class="js-arrow" href="<?= base_url('pengajar/kompetensi_dasar') ?>">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="has-sub <?= $active[3] ?>">
                    <a href="<?= base_url('pengajar/nilai_harian') ?>">
                        <i class="fas fa-tachometer-alt"></i>Penilaian Harian</a>
                </li>
                <li class="has-sub <?= $active[4] ?>">
                    <a href="<?= base_url('pengajar/nilai_emosi') ?>">
                        <i class="fas fa-tachometer-alt"></i>Penilaian Harian</a>
                </li>
                <li class="has-sub <?= $active[5] ?>">
                    <a href="<?= base_url('pengajar/nilai_kesehatan') ?>">
                        <i class="fas fa-tachometer-alt"></i>Penilaian Harian</a>
                </li>
                <li class="has-sub <?= $active[6] ?>">
                    <a href="<?= base_url('pengajar/cetak_laporan') ?>">
                        <i class="fas fa-tachometer-alt"></i>Cetak Laporan</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="<?= base_url('/') ?>assets/img/settings/logo/logo_header.png" alt="Cool pengajar" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub <?= $active[0] ?>">
                    <a href="<?= base_url('pengajar') ?>">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="has-sub <?= $active[1] ?>">
                    <a href="<?= base_url('pengajar/peserta_didik') ?>">
                        <i class="fas fa-tachometer-alt"></i>Peserta Didik</a>
                </li>
                <li class="has-sub <?= $active[2] ?>">
                    <a href="<?= base_url('pengajar/kompetensi_dasar') ?>">
                        <i class="fas fa-tachometer-alt"></i>Kompetensi Dasar</a>
                </li>
                <li class="has-sub <?= $active[3] ?>">
                    <a href="<?= base_url('pengajar/nilai_harian') ?>">
                        <i class="fas fa-tachometer-alt"></i>Penilaian Harian</a>
                </li>
                <li class="has-sub <?= $active[4] ?>">
                    <a href="<?= base_url('pengajar/nilai_emosi') ?>">
                        <i class="fas fa-tachometer-alt"></i>Penilaian Emosi</a>
                </li>
                <li class="has-sub <?= $active[5] ?>">
                    <a href="<?= base_url('pengajar/nilai_kesehatan') ?>">
                        <i class="fas fa-tachometer-alt"></i>Penilaian Kesehatan</a>
                </li>
                <li class="has-sub <?= $active[6] ?>">
                    <a href="<?= base_url('pengajar/cetak_laporan') ?>">
                        <i class="fas fa-tachometer-alt"></i>Cetak Laporan</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
<!-- MAIN CONTENT-->