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
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kecamatan_id LIKE '%$carikecamatan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if ($carikelurahan AND !$cariperiode AND !$carikecamatan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kelurahan_id LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if ($cariperiode AND $carikecamatan AND $carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kecamatan_id LIKE '%$carikecamatan%' AND kelurahan_id LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if ($cariperiode AND $carikecamatan AND !$carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kecamatan_id LIKE '%$carikecamatan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if ($cariperiode AND !$carikecamatan AND $carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kelurahan_id LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
        }
        if (!$cariperiode AND $carikecamatan AND $carikelurahan) {
            $sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kecamatan_id LIKE '%$carikecamatan%' AND kelurahan_id LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
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
                <th>Fasilitas BAB</th>
                <th>Bahan Bakar Masak</th>
                <th>Kendaraan</th>
                <th>Hewan Ternak</th>
                <th>Elektronik</th>	
                <th>Ranking</th>
                <th>Keterangan</th>
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
                            <td>
                                <?php
                                    if($data['kecamatan_id']==1){
                                        echo "Kecamatan Srandakan";
                                    } elseif ($data['kecamatan_id']==2) {
                                        echo "Kecamatan Sanden";
                                    } elseif ($data['kecamatan_id']==3) {
                                        echo "Kecamatan Pundong";
                                    } elseif ($data['kecamatan_id']==4) {
                                        echo "Kecamatan Bambanglipuro";
                                    } elseif ($data['kecamatan_id']==5) {
                                        echo "Kecamatan Pandak";
                                    } elseif ($data['kecamatan_id']==6) {
                                        echo "Kecamatan Bantul";
                                    } elseif ($data['kecamatan_id']==7) {
                                        echo "Kecamatan Imogiri";
                                    } elseif ($data['kecamatan_id']==8) {
                                        echo "Kecamatan Jetis";
                                    } elseif ($data['kecamatan_id']==9) {
                                        echo "Kecamatan Dlingo";
                                    } elseif ($data['kecamatan_id']==10) {
                                        echo "Kecamatan Pleret";
                                    } elseif ($data['kecamatan_id']==11) {
                                        echo "Kecamatan Piyungan";
                                    } elseif ($data['kecamatan_id']==12) {
                                        echo "Kecamatan Banguntapan";
                                    } elseif ($data['kecamatan_id']==13) {
                                        echo "Kecamatan Sewon";
                                    } elseif ($data['kecamatan_id']==14) {
                                        echo "Kecamatan Kasihan";
                                    } elseif ($data['kecamatan_id']==15) {
                                        echo "Kecamatan Pajangan";
                                    } elseif ($data['kecamatan_id']==16) {
                                        echo "Kecamatan Sedayu";
                                    } elseif ($data['kecamatan_id']==17) {
                                        echo "Kecamatan Kretek";
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                if($data['kelurahan_id']==1){
                                    echo "Kelurahan Trimurti";
                                } elseif ($data['kelurahan_id']==2) {
                                    echo "Kelurahan Poncosari";
                                } elseif ($data['kelurahan_id']==3) {
                                    echo "Kelurahan Gadingan";
                                } elseif ($data['kelurahan_id']==4) {
                                    echo "Kelurahan Gadingharjo";
                                } elseif ($data['kelurahan_id']==5) {
                                    echo "Kelurahan Martigading";
                                } elseif ($data['kelurahan_id']==6) {
                                    echo "Kelurahan Srigading";
                                } elseif ($data['kelurahan_id']==7) {
                                    echo "Kelurahan Panjangrejo";
                                } elseif ($data['kelurahan_id']==8) {
                                    echo "Kelurahan Bangunharjo";
                                } elseif ($data['kelurahan_id']==9) {
                                    echo "Kelurahan Srihardono";
                                } elseif ($data['kelurahan_id']==10) {
                                    echo "Kelurahan Mulyodadi";
                                } elseif ($data['kelurahan_id']==11) {
                                    echo "Kelurahan Sidomulyo";
                                } elseif ($data['kelurahan_id']==12) {
                                    echo "Kelurahan Sumbermulyo";
                                } elseif ($data['kelurahan_id']==13) {
                                    echo "Kelurahan Caturharjo";
                                } elseif ($data['kelurahan_id']==14) {
                                    echo "Kelurahan Gilangharjo";
                                } elseif ($data['kelurahan_id']==15) {
                                    echo "Kelurahan Triharjo";
                                } elseif ($data['kelurahan_id']==16) {
                                    echo "Kelurahan Wijirejo";
                                } elseif ($data['kelurahan_id']==17) {
                                    echo "Kelurahan Bantul";
                                } elseif ($data['kelurahan_id']==18) {
                                    echo "Kelurahan Palbapang";
                                } elseif ($data['kelurahan_id']==19) {
                                    echo "Kelurahan Ringinharjo";
                                } elseif ($data['kelurahan_id']==20) {
                                    echo "Kelurahan Sabdodadi";
                                } elseif ($data['kelurahan_id']==21) {
                                    echo "Kelurahan Trirenggo";
                                } elseif ($data['kelurahan_id']==22) {
                                    echo "Kelurahan Girirejo";
                                } elseif ($data['kelurahan_id']==23) {
                                    echo "Kelurahan Imogiri";
                                } elseif ($data['kelurahan_id']==24) {
                                    echo "Kelurahan Karangtalun";
                                } elseif ($data['kelurahan_id']==25) {
                                    echo "Kelurahan Karangtengah";
                                } elseif ($data['kelurahan_id']==26) {
                                    echo "Kelurahan Kebonagung";
                                } elseif ($data['kelurahan_id']==27) {
                                    echo "Kelurahan Selopamioro";
                                } elseif ($data['kelurahan_id']==28) {
                                    echo "Kelurahan Sriharjo";
                                } elseif ($data['kelurahan_id']==29) {
                                    echo "Kelurahan Wukirsari";
                                } elseif ($data['kelurahan_id']==30) {
                                    echo "Kelurahan Canden";
                                } elseif ($data['kelurahan_id']==31) {
                                    echo "Kelurahan Patalan";
                                } elseif ($data['kelurahan_id']==32) {
                                    echo "Kelurahan Sumberagung";
                                } elseif ($data['kelurahan_id']==33) {
                                    echo "Kelurahan Trimulyo";
                                } elseif ($data['kelurahan_id']==34) {
                                    echo "Kelurahan Dlingo";
                                } elseif ($data['kelurahan_id']==35) {
                                    echo "Kelurahan Jatimulyo";
                                } elseif ($data['kelurahan_id']==36) {
                                    echo "Kelurahan Mangunan";
                                } elseif ($data['kelurahan_id']==37) {
                                    echo "Kelurahan Muntuk";
                                } elseif ($data['kelurahan_id']==38) {
                                    echo "Kelurahan Temuwuh";
                                } elseif ($data['kelurahan_id']==39) {
                                    echo "Kelurahan Terong";
                                } elseif ($data['kelurahan_id']==40) {
                                    echo "Kelurahan Bawuran";
                                } elseif ($data['kelurahan_id']==41) {
                                    echo "Kelurahan Pleret";
                                } elseif ($data['kelurahan_id']==42) {
                                    echo "Kelurahan Segoroyoso";
                                } elseif ($data['kelurahan_id']==43) {
                                    echo "Kelurahan Wonokromo";
                                } elseif ($data['kelurahan_id']==44) {
                                    echo "Kelurahan Wonolelo";
                                } elseif ($data['kelurahan_id']==45) {
                                    echo "Kelurahan Srimulyo";
                                } elseif ($data['kelurahan_id']==46) {
                                    echo "Kelurahan Sitimulyo";
                                } elseif ($data['kelurahan_id']==47) {
                                    echo "Kelurahan Srimartani";
                                } elseif ($data['kelurahan_id']==48) {
                                    echo "Kelurahan Banguntapan";
                                } elseif ($data['kelurahan_id']==49) {
                                    echo "Kelurahan Baturetno";
                                } elseif ($data['kelurahan_id']==50) {
                                    echo "Kelurahan Jagalan";
                                } elseif ($data['kelurahan_id']==51) {
                                    echo "Kelurahan Jambidan";
                                } elseif ($data['kelurahan_id']==52) {
                                    echo "Kelurahan Potorono";
                                } elseif ($data['kelurahan_id']==53) {
                                    echo "Kelurahan Singosaren";
                                } elseif ($data['kelurahan_id']==54) {
                                    echo "Kelurahan Tamanan";
                                } elseif ($data['kelurahan_id']==55) {
                                    echo "Kelurahan Wirokerten";
                                } elseif ($data['kelurahan_id']==56) {
                                    echo "Kelurahan Bangunharjo";
                                } elseif ($data['kelurahan_id']==57) {
                                    echo "Kelurahan Panggungharjo";
                                } elseif ($data['kelurahan_id']==58) {
                                    echo "Kelurahan Pendowoharjo";
                                } elseif ($data['kelurahan_id']==59) {
                                    echo "Kelurahan Timbulharjo";
                                } elseif ($data['kelurahan_id']==60) {
                                    echo "Kelurahan Bangunjiwo";
                                } elseif ($data['kelurahan_id']==61) {
                                    echo "Kelurahan Ngestiharjo";
                                } elseif ($data['kelurahan_id']==62) {
                                    echo "Kelurahan Tamantirto";
                                } elseif ($data['kelurahan_id']==63) {
                                    echo "Kelurahan Tirtonirmolo";
                                } elseif ($data['kelurahan_id']==64) {
                                    echo "Kelurahan Guwosari";
                                } elseif ($data['kelurahan_id']==65) {
                                    echo "Kelurahan Sendangsari";
                                } elseif ($data['kelurahan_id']==66) {
                                    echo "Kelurahan Triwidadi";
                                } elseif ($data['kelurahan_id']==67) {
                                    echo "Kelurahan Argodadi";
                                } elseif ($data['kelurahan_id']==68) {
                                    echo "Kelurahan Argorejo";
                                } elseif ($data['kelurahan_id']==69) {
                                    echo "Kelurahan Argosari";
                                } elseif ($data['kelurahan_id']==70) {
                                    echo "Kelurahan Argomulyo";
                                } elseif ($data['kelurahan_id']==71) {
                                    echo "Kelurahan Donotirto";
                                } elseif ($data['kelurahan_id']==72) {
                                    echo "Kelurahan Prangtritis";
                                } elseif ($data['kelurahan_id']==73) {
                                    echo "Kelurahan Tirtohargo";
                                } elseif ($data['kelurahan_id']==74) {
                                    echo "Kelurahan Tirtomulyo";
                                } elseif ($data['kelurahan_id']==75) {
                                    echo "Kelurahan Tirtosari";
                                } 
                                ?>
                            </td>
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
                            <td>
                                <?php
                                    if ($ranking <= 11) {
                                        echo "Menerima Bantuan";
                                    } else {
                                        echo "Tidak Menerima Bantuan";
                                    }
                                ?>
                            </td>
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