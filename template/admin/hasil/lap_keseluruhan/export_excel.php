<?php require_once "../../_config/config.php";

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
    <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Laporan Keseluruhan.xls");

        $carikecamatan = $_GET['carikecamatan'];
        $carikelurahan = $_GET['carikelurahan'];
        $cariperiode = $_GET['cariperiode'];

        if ($cariperiode AND !$carikecamatan AND !$carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if ($carikecamatan AND !$cariperiode AND !$carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kecamatan LIKE '%$carikecamatan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if ($carikelurahan AND !$cariperiode AND !$carikecamatan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if ($cariperiode AND $carikecamatan AND $carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kecamatan LIKE '%$carikecamatan%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if ($cariperiode AND $carikecamatan AND !$carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kecamatan LIKE '%$carikecamatan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if ($cariperiode AND !$carikecamatan AND $carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if (!$cariperiode AND $carikecamatan AND $carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kecamatan LIKE '%$carikecamatan%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if (!$cariperiode AND !$carikecamatan AND !$carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }

        $nomor = 1;
        $ranking = 1;
    ?>

    <h3>Bantuan Rumah Tidak Layak Huni</h3>
    <p>Periode : 
        <?php
        if ($cariperiode) {
            echo "<strong>$cariperiode</strong>";
        }
        if (!$cariperiode) {
            echo "<strong>Semua Periode</strong>";
        }
        ?>
    </p>
    <p>Kecamatan : 
        <?php
        if ($carikecamatan) {
            echo "<strong>$carikecamatan</strong>";
        }
        if (!$carikecamatan) {
            echo "<strong>Semua Kecamatan</strong>";
        }
        ?>
    </p>
    <p>Kelurahan : 
        <?php
        if ($carikelurahan) {
            echo "<strong>$carikelurahan</strong>";
        }
        if (!$carikelurahan) {
            echo "<strong>Semua Kelurahan</strong>";
        }
        ?>
    </p>

    <table border="1" cellpadding="4" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Periode</th>
                <th>Kondisi Atap</th>
                <th>Kondisi Dinding</th>
                <th>Kondisi Lantai</th>
                <th>Sumber Air</th>
                <th>Bahan Bakar Masak</th>
                <th>Fasilitas BAB</th>
                <th>Kendaraan</th>
                <th>Elektronik</th>
                <th>Kendaraan Air</th>	
                <th>Ranking</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($data = mysqli_fetch_array($sqlcari)){
                    ?>
                        <tr>
                            <td><?= $nomor++; ?>.</td>
                            <td><?php echo $data['nik']; ?></td>
                            <td><?php echo $data['nama_alternatif']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['kecamatan']; ?></td>
                            <td><?php echo $data['kelurahan']; ?></td>
                            <td><?php echo $data['periode']; ?></td>
                            <td>
                                <?php
                                if ($data['kit1'] == 1) {
                                    echo "Asbes";
                                } else if ($data['kit1'] == 2) {
                                    echo "Genting Tanah";
                                }else{
                                    echo "Jeramik";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($data['kit2'] == 1) {
                                    echo "Tembok";
                                } else if ($data['kit2'] == 2) {
                                    echo "Kayu";
                                }else{
                                    echo "Bambu";
                                } 
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($data['kit3'] == 1) {
                                    echo "Keramik";
                                } else if ($data['kit3'] == 2) {
                                    echo "Ubin";
                                }else{
                                    echo "Tanah";
                                }  
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($data['kit4'] == 1) {
                                    echo "Air PDAM";
                                } else if ($data['kit4'] == 2) {
                                    echo "Sumur";
                                }else{
                                    echo "Air Sungai";
                                }  
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($data['kit5'] == 1) {
                                    echo "Sendiri";
                                } else if ($data['kit5'] == 2) {
                                    echo "Umum";
                                }else{
                                    echo "Tidak Ada";
                                }  
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($data['kit6'] == 1) {
                                    echo "Kompor Gas";
                                } else if ($data['kit6'] == 2) {
                                    echo "Minyak Tanah";
                                }else{
                                    echo "Kayu Bakar";
                                }  
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($data['kit7'] == 1) {
                                    echo "Motor/Kapal Motor";
                                } else if ($data['kit7'] == 2) {
                                    echo "Sepeda Ontel";
                                }else{
                                    echo "Tidak Punya";
                                }  
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($data['kit8'] == 1) {
                                    echo "Sapi";
                                } else if ($data['kit8'] == 2) {
                                    echo "Kambing";
                                }else{
                                    echo "Tidak Punya";
                                }  
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($data['kit9'] == 1) {
                                    echo "Kulkas";
                                } else if ($data['kit9'] == 2) {
                                    echo "TV/HP";
                                }else{
                                    echo "Tidak Punya";
                                } 
                                ?>
                            </td>
                            <td><?= $ranking++ ?></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    <?php 
} else {
    header("location: ../auth/login.php");
}
?>
    </body>
</html>