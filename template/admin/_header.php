<?php require_once "_config/config.php";

if (isset($_SESSION['admin'])) { ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title?></title>
        <link href="<?=base_url('admin/_assets/dist/css/styles.css'); ?>" rel="stylesheet" />
        <link href="<?=base_url('admin/_assets/dataTables/Responsive-2.2.6/css/responsive.bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link href="<?=base_url('admin/_assets/dataTables/datatables.css')?>" rel="stylesheet" type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <!-- ikon -->
        <link rel="icon" href="<?=base_url('admin/_assets/Bantul.png')?>" type="image/gif" sizes="16x16">

    </head>
    <body class="sb-nav-fixed bg-light">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
            <a class="navbar-brand text-left text-primary" href="<?=base_url('admin/dashboard/index.php')?>/"> Kabupaten Bantul</br>
            (RTLH)</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 ml-4" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
<!--                 <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div> -->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                    <a class="nav-link" href="<?= base_url('admin/auth/logout.php');?>" role="button" onClick="return confirm('Yakin keluar dari Aplikasi?')"><i class="fas fa-sign-out-alt"></i></a>

            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <img class="rounded-circle img-thumbnail m-auto mb-2" src="<?= base_url('admin/_assets/Bantul.png');?>" alt="" width="110" height="110">
                            <!-- <div class="sb-sidenav-menu-heading">Navigasi Utama</div> -->
                            <a class="nav-link bg-danger text-white" href="<?= base_url('admin/data_alternative');?>">
                                <div class="sb-nav-link-icon"></div>
                                Entri Alternative
                            </a>
                            <a class="nav-link bg-danger text-white" href="<?= base_url('admin/data_kriteria');?>">
                                <div class="sb-nav-link-icon"></div>
                                Entri Kriteria
                            </a>
                            <a class="nav-link bg-danger text-white" href="<?= base_url('admin/data_pegawai');?>">
                                <div class="sb-nav-link-icon"></div>
                                Entri Pegawai
                            </a>
                           
                            <a class="nav-link collapsed bg-info text-white" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                Nilai
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link bg-info text-white" href="<?= base_url('admin/nilai/nilai_kriteria_ahp');?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Perbandingan Kriteria
                                    </a>
                                    <a class="nav-link bg-info text-white" href="<?= base_url('admin/nilai/hasil_ahp');?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Tabel Kriteria
                                    </a>
                                    <!-- <a class="nav-link bg-info text-white" href="<?= base_url('admin/nilai/saw');?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Hasil SAW
                                    </a> -->
                                </nav>
                            </div>
                            <a class="nav-link collapsed bg-info text-white" href="#" data-toggle="collapse" data-target="#collapseHasil" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                Laporan
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <div class="collapse" id="collapseHasil" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link bg-info text-white" href="<?= base_url('admin/hasil/lap_keseluruhan/index.php?cariperiode=&carikecamatan=&carikelurahan=');?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Laporan Keseluruhan
                                    </a>
                                    <!-- <a class="nav-link bg-info text-white" href="<?= base_url('admin/hasil/per_kriteria');?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Laporan Per Kriteria
                                    </a> -->
                                </nav>
                            </div>
                            
                            <!--<a class="nav-link bg-danger text-white" href="<?= base_url('admin/pelaporan');?>">
                                <div class="sb-nav-link-icon"></div>
                                Pelaporan
                            </a>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link bg-danger text-white" href="<?= base_url('admin/pelaporan/pelaporan_pengukuran');?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Pelaporan Pengukuran
                                    </a>
                                    <a class="nav-link bg-danger text-white" href="<?= base_url('admin/pelaporan/pelaporan_yuridis');?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Pelaporan Yuridis
                                    </a>
                                    <a class="nav-link bg-danger text-white" href="<?= base_url('admin/pelaporan/pelaporan_yg_sdh_diukur');?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Pelaporan Yang Sudah Diukur
                                    </a>
                                </nav>-->

                            <!-- <a class="nav-link" href="<?= base_url('admin/grafik/data.php');?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar mr-2"></i></div>
                                Grafik Stok Menu
                            </a> -->
                            <!-- <?php if (isset($_SESSION["admin"])): ?>
                                <a class="nav-link" href="<?= base_url('admin/slider/data.php');?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-angle-left"></i><i class="fas fa-angle-right mr-2"></i></div>
                                    Kelola Slider
                                </a>
                            <?php endif ?> -->
                            <!-- <a class="nav-link" href="<?= base_url('admin/atur/edit.php');?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-cogs mr-1"></i></div>
                                Pengaturan
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/auth/logout.php');?>" onClick="return confirm('Yakin keluar')">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt mr-2"></i></div>
                                Logout
                            </a> -->
                    </div>
 <!--                    <div class="sb-sidenav-footer fixed-bottom">
                        <div class="small">Logged in as:</div>
                        <?php if (isset($_SESSION["admin"])): ?>
                        <?= $_SESSION["admin"]["username"];?>
                        <?php endif ?>
                    </div> -->
                </nav>
            </div>
<?php 
} else {
    header("location: ../auth/login.php");
}
?>
