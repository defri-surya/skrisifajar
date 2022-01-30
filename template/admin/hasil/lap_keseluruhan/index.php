<?php $title = "Data Penerima Bantuan";
include_once('../../_header.php');
// include_once('../../nilai/hasil_ahp/index.php');

?>

			<div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid">
                        <ol>
                            <li class="breadcrumb-item">
                            	<h3> Data Penerima Bantuan</h3>
                            </li>
                        </ol>

                        <div class="row">

                        	<div class="col-xl-auto offset-xl-1">


<?php

// --- Fngsi tambah data (Create)
	
	// Fungsi Search Data
	$carikecamatan = $_GET['carikecamatan'];
	$carikelurahan = $_GET['carikelurahan'];
	$cariperiode = $_GET['cariperiode'];
	
	// jika periode terisi tetapi kecamatas dan kelurahan kosong + paginate
	if ($cariperiode AND !$carikecamatan AND !$carikelurahan) {
		$batas = 20;
		$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
		$previous = $halaman - 1;
		$next = $halaman + 1;
		$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
		$jml_data = mysqli_num_rows($sqlcari);
		$total_halaman = ceil($jml_data / $batas);
		$sqlhalaman = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC LIMIT $halaman_awal, $batas");
	}

	// jika kecamatan terisi tetapi periode dan kelurahan kosong + paginate
	if ($carikecamatan AND !$cariperiode AND !$carikelurahan) {
		$batas = 20;
		$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
		$previous = $halaman - 1;
		$next = $halaman + 1;
		$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kecamatan LIKE '%$carikecamatan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
		$jml_data = mysqli_num_rows($sqlcari);
		$total_halaman = ceil($jml_data / $batas);
		$sqlhalaman = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kecamatan LIKE '%$carikecamatan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC LIMIT $halaman_awal, $batas");
	}

	// jika kelurahan terisi tetapi periode dan kecamatan kosong + paginate
	if ($carikelurahan AND !$cariperiode AND !$carikecamatan) {
		$batas = 20;
		$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
		$previous = $halaman - 1;
		$next = $halaman + 1;
		$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
		$jml_data = mysqli_num_rows($sqlcari);
		$total_halaman = ceil($jml_data / $batas);
		$sqlhalaman = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC LIMIT $halaman_awal, $batas");
	}

	// jika periode, kecamatan dan kelurahan terisi + paginate
	if ($cariperiode AND $carikecamatan AND $carikelurahan) {
		$batas = 20;
		$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
		$previous = $halaman - 1;
		$next = $halaman + 1;
		$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kecamatan LIKE '%$carikecamatan%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
		$jml_data = mysqli_num_rows($sqlcari);
		$total_halaman = ceil($jml_data / $batas);
		$sqlhalaman = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kecamatan LIKE '%$carikecamatan%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC LIMIT $halaman_awal, $batas");
	}

	//  jika semua kosong + paginate
	if (!$cariperiode AND !$carikecamatan AND !$carikelurahan) {
		$batas = 20;
		$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
		$previous = $halaman - 1;
		$next = $halaman + 1;
		$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
		$jml_data = mysqli_num_rows($sqlcari);
		$total_halaman = ceil($jml_data / $batas);
		$sqlhalaman = mysqli_query($koneksi,"SELECT * FROM tb_alternatif ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC limit $halaman_awal, $batas");
	}

	// jika periode dan kecamatan terisi tetapi kelurahan kosong + paginate
	if ($cariperiode AND $carikecamatan AND !$carikelurahan) {
		$batas = 20;
		$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
		$previous = $halaman - 1;
		$next = $halaman + 1;
		$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kecamatan LIKE '%$carikecamatan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
		$jml_data = mysqli_num_rows($sqlcari);
		$total_halaman = ceil($jml_data / $batas);
		$sqlhalaman = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kecamatan LIKE '%$carikecamatan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC LIMIT $halaman_awal, $batas");
	}

	// jika periode dan kelurahan terisi tetapi kecamatan kosong + paginate
	if ($cariperiode AND !$carikecamatan AND $carikelurahan) {
		$batas = 20;
		$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
		$previous = $halaman - 1;
		$next = $halaman + 1;
		$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
		$jml_data = mysqli_num_rows($sqlcari);
		$total_halaman = ceil($jml_data / $batas);
		$sqlhalaman = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC LIMIT $halaman_awal, $batas");
	}

	//  jika periode kosong tetapi kecamatan dan kelurahan terisi + paginate
	if (!$cariperiode AND $carikecamatan AND $carikelurahan) {
		$batas = 20;
		$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
		$previous = $halaman - 1;
		$next = $halaman + 1;
		$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kecamatan LIKE '%$carikecamatan%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
		$jml_data = mysqli_num_rows($sqlcari);
		$total_halaman = ceil($jml_data / $batas);
		$sqlhalaman = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kecamatan LIKE '%$carikecamatan%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC LIMIT $halaman_awal, $batas");
	}
	
	?> 
		<form action="index.php" method="GET">
				<div class="table-responsive">
					<table class="table table-responsive-sm table-hover" border="0">
						<tr>
							<td>Periode</td> 
							<td> : 
						        <select name="cariperiode">
						        	<option value="">-Pilih Periode-</option>
									<?php
										$sqlkec = mysqli_query($koneksi,"SELECT DISTINCT periode FROM tb_alternatif");
										foreach ($sqlkec as $data) {
											echo "<option value='$data[periode]'>$data[periode]</option>";
										}
									?>
                            </select>
					        </td>
					    </tr>
						<tr>
							<td>Kecamatan</td> 
							<td> : 
								<select name="carikecamatan">
									<option value="">-Pilih Kecamatan-</option>
									<?php
										$sqlkec = mysqli_query($koneksi,"SELECT DISTINCT kecamatan FROM tb_alternatif");
										foreach ($sqlkec as $data) {
											echo "<option value='$data[kecamatan]'>$data[kecamatan]</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Kelurahan</td> 
							<td> : 
								<select name="carikelurahan">
									<option value="">-Pilih Kelurahan-</option>
									<?php
										$sqlkel = mysqli_query($koneksi,"SELECT DISTINCT kelurahan FROM tb_alternatif");
										foreach ($sqlkel as $data) {
											echo "<option value='$data[kelurahan]'>$data[kelurahan]</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<label class="ml-2"></label>
								<input type="submit" value="Cari"/>
							</td>
						</tr>
					</table>
					<br>
					<?php
// echo "<pre>";
// print_r($datadesa);
// echo "</pre>";
?>
				</div>
		</form>

	<?php
// End fungsi Search Data
// --- Tutup Fngsi tambah data

// function tampil_data($koneksi){
	// $sql = "SELECT * FROM tb_alternatif WHERE periode";
	// $query = mysqli_query($koneksi, $sql);
	// --- Fungsi Baca Data (Read)
	$nomor = $halaman_awal + 1;
	$ranking = 1;
	
		echo "<fieldset>";
		echo "<div class='table-responsive'>";
		echo "<table class='table table-responsive-sm table-bordered table-hover' id='user' border='1' cellpadding='10'>";
		echo "<thead>";
			echo "<tr>";
			echo "
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
			<th>Hewan Ternak</th>
			<th>Elektronik</th>	
			<th>Ranking</th>";	
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
	while($data = mysqli_fetch_array($sqlhalaman)){
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
	echo "</tbody>";
	echo "</table>";
	?>
	<!-- Paginate (Penomoran Halaman) -->
	<nav>
		<ul class="pagination justify-content-center">
			<li class="page-item">
				<a class="page-link"
					<?php
					if($halaman > 1){
						echo "href='?halaman=$previous&cariperiode=&carikecamatan=&carikelurahan='";
					}
					if ($halaman > 1 AND $cariperiode AND !$carikecamatan AND !$carikelurahan) {
						echo "href='?halaman=$previous&cariperiode=$cariperiode&carikecamatan=&carikelurahan='";
					}
					if ($halaman > 1 AND $carikecamatan AND !$cariperiode AND !$carikelurahan) {
						echo "href='?halaman=$previous&cariperiode=&carikecamatan=$carikecamatan&carikelurahan='";
					}
					if ($halaman > 1 AND !$carikecamatan AND !$cariperiode AND $carikelurahan) {
						echo "href='?halaman=$previous&cariperiode=&carikecamatan=&carikelurahan=$carikelurahan'";
					}
					if ($halaman > 1 AND $cariperiode AND $carikecamatan AND $carikelurahan) {
						echo "href='?halaman=$previous&cariperiode=$cariperiode&carikecamatan=$carikecamatan&carikelurahan=$carikelurahan'";
					}
					if ($halaman > 1 AND $cariperiode AND $carikecamatan AND !$carikelurahan) {
						echo "href='?halaman=$previous&cariperiode=$cariperiode&carikecamatan=$carikecamatan&carikelurahan='";
					}
					if ($halaman > 1 AND $cariperiode AND !$carikecamatan AND $carikelurahan) {
						echo "href='?halaman=$previous&cariperiode=$cariperiode&carikecamatan=&carikelurahan=$carikelurahan'";
					}
					if ($halaman > 1 AND !$cariperiode AND $carikecamatan AND $carikelurahan) {
						echo "href='?halaman=$previous&cariperiode=&carikecamatan=$carikecamatan&carikelurahan=$carikelurahan'";
					}
					?>>
					<
				</a>
			</li>
		<?php
			for($x=1;$x<=$total_halaman;$x++){
		?> 
			<li class="page-item">
				<?php
					if (!$cariperiode AND !$carikecamatan AND !$carikelurahan) {
					?>
					<a class="page-link" href="?halaman=<?php echo $x ?>&cariperiode=&carikecamatan=&carikelurahan=">
						<?php echo $x; ?>
					</a>
					<?php
					}
					if ($cariperiode AND !$carikecamatan AND !$carikelurahan) {
					?>
					<a class="page-link" href="?halaman=<?php echo $x ?>&cariperiode=<?=$cariperiode?>&carikecamatan=&carikelurahan=">
						<?php echo $x; ?>
					</a>
					<?php
					}
					if (!$cariperiode AND $carikecamatan AND !$carikelurahan) {
					?>
					<a class="page-link" href="?halaman=<?php echo $x ?>&cariperiode=&carikecamatan=<?=$carikecamatan?>&carikelurahan=">
						<?php echo $x; ?>
					</a>
					<?php
					}
					if (!$cariperiode AND !$carikecamatan AND $carikelurahan) {
					?>
					<a class="page-link" href="?halaman=<?php echo $x ?>&cariperiode=&carikecamatan=&carikelurahan=<?=$carikelurahan?>">
						<?php echo $x; ?>
					</a>
					<?php
					}
					if ($cariperiode AND $carikecamatan AND $carikelurahan) {
					?>
					<a class="page-link" href="?halaman=<?php echo $x ?>&cariperiode=<?=$cariperiode?>&carikecamatan=<?=$carikecamatan?>&carikelurahan=<?=$carikelurahan?>">
						<?php echo $x; ?>
					</a>
					<?php
					}
					if ($cariperiode AND $carikecamatan AND !$carikelurahan) {
					?>
					<a class="page-link" href="?halaman=<?php echo $x ?>&cariperiode=<?=$cariperiode?>&carikecamatan=<?=$carikecamatan?>&carikelurahan=">
						<?php echo $x; ?>
					</a>
					<?php
					}
					if ($cariperiode AND !$carikecamatan AND $carikelurahan) {
					?>
					<a class="page-link" href="?halaman=<?php echo $x ?>&cariperiode=<?=$cariperiode?>&carikecamatan=&carikelurahan=<?=$carikelurahan?>">
						<?php echo $x; ?>
					</a>
					<?php
					}
					if (!$cariperiode AND $carikecamatan AND $carikelurahan) {
					?>
					<a class="page-link" href="?halaman=<?php echo $x ?>&cariperiode=&carikecamatan=<?=$carikecamatan?>&carikelurahan=<?=$carikelurahan?>">
						<?php echo $x; ?>
					</a>
					<?php
					}
				?>
			</li>
		<?php
			}
		?>
			<li class='page-item'>
				<a class='page-link'
					<?php
					if($halaman < $total_halaman){
						echo "href='?halaman=$next&cariperiode=&carikecamatan=&carikelurahan='";
					}
					if ($halaman < $total_halaman AND $cariperiode AND !$carikecamatan AND !$carikelurahan) {
						echo "href='?halaman=$next&cariperiode=$cariperiode&carikecamatan=&carikelurahan='";
					}
					if ($halaman < $total_halaman AND !$cariperiode AND $carikecamatan AND !$carikelurahan) {
						echo "href='?halaman=$next&cariperiode=&carikecamatan=$carikecamatan&carikelurahan='";
					}
					if ($halaman < $total_halaman AND !$cariperiode AND !$carikecamatan AND $carikelurahan) {
						echo "href='?halaman=$next&cariperiode=&carikecamatan=&carikelurahan=$carikelurahan'";
					}
					if ($halaman < $total_halaman AND $cariperiode AND $carikecamatan AND $carikelurahan) {
						echo "href='?halaman=$next&cariperiode=$cariperiode&carikecamatan=$carikecamatan&carikelurahan=$carikelurahan'";
					}
					if ($halaman < $total_halaman AND $cariperiode AND $carikecamatan AND !$carikelurahan) {
						echo "href='?halaman=$next&cariperiode=$cariperiode&carikecamatan=$carikecamatan&carikelurahan='";
					}
					if ($halaman < $total_halaman AND $cariperiode AND !$carikecamatan AND $carikelurahan) {
						echo "href='?halaman=$next&cariperiode=$cariperiode&carikecamatan=&carikelurahan=$carikelurahan'";
					}
					if ($halaman < $total_halaman AND !$cariperiode AND $carikecamatan AND $carikelurahan) {
						echo "href='?halaman=$next&cariperiode=&carikecamatan=$carikecamatan&carikelurahan=$carikelurahan'";
					}
					?>>
					>
				</a>
			</li>
		</ul>
	</nav>
	<!-- End Paginate (Penomoran Halaman) -->
	<?php
	echo "</fieldset>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
// }
// --- Tutup Fungsi Baca Data (Read)
if ($cariperiode AND !$carikecamatan AND !$carikelurahan) {
	$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
	echo "
		<a class='btn btn-success' href='export_excel.php?cariperiode=$cariperiode&carikecamatan=&carikelurahan=' target='_blank'>Export Excel</a>
	";
}
if ($carikecamatan AND !$cariperiode AND !$carikelurahan) {
	$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kecamatan LIKE '%$carikecamatan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
	echo "
		<a class='btn btn-success' href='export_excel.php?cariperiode=&carikecamatan=$carikecamatan&carikelurahan=' target='_blank'>Export Excel</a>
	";
}
if ($carikelurahan AND !$cariperiode AND !$carikecamatan) {
	$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
	echo "
		<a class='btn btn-success' href='export_excel.php?cariperiode=&carikecamatan=&carikelurahan=$carikelurahan' target='_blank'>Export Excel</a>
	";
}
if ($cariperiode AND $carikecamatan AND $carikelurahan) {
	$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kecamatan LIKE '%$carikecamatan%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
	echo "
		<a class='btn btn-success' href='export_excel.php?cariperiode=$cariperiode&carikecamatan=$carikecamatan&carikelurahan=$carikelurahan' target='_blank'>Export Excel</a>
	";
}
if ($cariperiode AND $carikecamatan AND !$carikelurahan) {
	$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kecamatan LIKE '%$carikecamatan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
	echo "
		<a class='btn btn-success' href='export_excel.php?cariperiode=$cariperiode&carikecamatan=$carikecamatan&carikelurahan=' target='_blank'>Export Excel</a>
	";
}
if ($cariperiode AND !$carikecamatan AND $carikelurahan) {
	$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode LIKE '%$cariperiode%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
	echo "
		<a class='btn btn-success' href='export_excel.php?cariperiode=$cariperiode&carikecamatan=&carikelurahan=$carikelurahan' target='_blank'>Export Excel</a>
	";
}
if (!$cariperiode AND $carikecamatan AND $carikelurahan) {
	$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE kecamatan LIKE '%$carikecamatan%' AND kelurahan LIKE '%$carikelurahan%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
	echo "
		<a class='btn btn-success' href='export_excel.php?cariperiode=&carikecamatan=$carikecamatan&carikelurahan=$carikelurahan' target='_blank'>Export Excel</a>
	";
}
if (!$cariperiode AND !$carikecamatan AND !$carikelurahan) {
	$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
	echo "
		<a class='btn btn-success' href='export_excel.php?cariperiode=&carikecamatan=&carikelurahan=' target='_blank'>Export Excel</a>
	";
}
// if (isset($_GET['cari'])) {
// 	$cariperiode = $_GET['cari'];
// 	$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE periode like '%".$cariperiode."%' ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC");
// 	echo "
// 		<a class='btn btn-success' href='export_excel.php?cari=$cariperiode' target='_blank'>Export Excel</a>
// 	";
// } else {
// 	$sqlcari = mysqli_query($koneksi,"SELECT * FROM tb_alternatif");
// 	echo "
// 		<a class='btn btn-success' href='export_excel.php' target='_blank'>Export Excel</a>
// 	";
// }
?>
                    		</div>
                    	</div>
                    </div>
				</div>
			</div>
		</main>


<?php include_once('../../_footer.php'); ?>
