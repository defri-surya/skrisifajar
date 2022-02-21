<?php $title = "Entri Data User";
include_once('../_header.php');

?>

			<div id="layoutSidenav_content">
                <main>
                    <?php 
                    if (!isset($_SESSION['admin'])) {
                        echo    "<script>
                                alert('Anda Bukan Admin');
                                location='../dashboard';
                            </script>";
                        } 
                     ?>
                    <div class="container-fluid">
                        <ol>
                            <li class="breadcrumb-item">
                               <h3> Entri Data Calon Penerima Bantuan</h3> 
                            </li>
                        </ol>

                        <div class="row">

                        	<div class="col-xl-auto offset-xl-1">


<?php

// --- Fngsi tambah data (Create)
function tambah($koneksi){
	
	if (isset($_POST['btn_simpan'])){
		$nik = $_POST['nik'];
		$nama_alternatif = $_POST['nama_alternatif'];
		$kit1 = $_POST['kit1'];
        $kit2 = $_POST['kit2'];
        $kit3 = $_POST['kit3'];
        $kit4 = $_POST['kit4'];
        $kit5 = $_POST['kit5'];
        $kit6 = $_POST['kit6'];
        $kit7 = $_POST['kit7'];
        $kit8 = $_POST['kit8'];
        $kit9 = $_POST['kit9'];
        $alamat = $_POST['alamat'];
        $kecamatan = $_POST['kecamatan'];
        $kelurahan = $_POST['kelurahan'];
        $periode = $_POST['periode'];
		
		if(!empty($nik) && !empty($nama_alternatif) && !empty($kit1)){

			$sql ="INSERT INTO tb_alternatif
            (nik,nama_alternatif,kit1,kit2,kit3,kit4,kit5,kit6,kit7,kit8,kit9,alamat,kecamatan_id,kelurahan_id,periode)
            VALUES('$nik','$nama_alternatif','$kit1','$kit2','$kit3','$kit4','$kit5','$kit6','$kit7','$kit8','$kit9','$alamat','$kecamatan','$kelurahan','$periode')";

			$simpan = mysqli_query($koneksi, $sql);
			if($simpan && isset($_GET['aksi'])){
				if($_GET['aksi'] == 'create'){
					header('location: index.php');
				}
			}
		} else {
			$pesan = "Tidak dapat menyimpan, data belum lengkap!";
		}
	}

	?> 
		<form action="" method="POST">
			<fieldset>
				<div class="table-responsive">
					<table class="table table-responsive-sm table-hover" border="0">
						<tr>
							<td>Periode </td>
							<td> : <select name="periode">
						            <option disabled selected value="">-Pilih Periode-</option>
						            <option value="2019">2019</option>
						            <option value="2020">2020</option>
						            <option value="2021">2021</option>
						            <option value="2022">2022</option>
								</select>
                        	</td>
						</tr>
						<tr>
							<td>NIK </td>
							<td> : <input type="text" name="nik" required /></td>
						</tr>
						<tr>
							<td>Nama Calon Penerima Bantuan</td> 
							<td> : <input type="text" name="nama_alternatif" required /></label></td>
						</tr>
                        <tr>
                            <td>Alamat </td>
                            <td> : <input type="text" name="alamat" required /></td>
                        </tr>
                        <tr>
                            <td>Kecamatan </td>
                            <td> : <select name="kecamatan" id="kecamatan_id">
									<option>-- Pilih Kecamatan --</option>
									<?php
										$query = mysqli_query($koneksi, "SELECT * FROM tb_kecamatan ORDER BY nama ASC") or die (mysqli_error($koneksi));
										while($data = mysqli_fetch_array($query)){
											echo '<option value="'.$data['id'].'">'.$data['nama'].'</option>';
										}
									?>
                            	</select>
                        </tr>
                        <tr>
                            <td>Kelurahan </td>
                            <td> : <select name="kelurahan" id="kelurahan_id">
									<option>-- Pilih Kelurahan --</option> 
                            	</select>
							</td>
                        </tr>
						<tr><td><h4>Kondisi Rumah</h4></td></tr>
                        <tr>
							<td>Kondisi Atap</td> 
							<td> : <select name="kit1">
                            <option disabled selected value="">-Pilih Kondisi Atap-</option>
                                    <option value="3">Jeramik</option>
                                    <option value="2">Genting Tanah</option>
                                    <option value="1">Asbes</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Kondisi Dinding</td> 
							<td> : <select  name="kit2">
                            <option disabled selected value="">-Pilih Kondisi Dinding-</option>
                                    <option value="3">Bambu</option>
                                    <option value="2">Kayu</option>
                                    <option value="1">Tembok</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Kondisi Lantai</td> 
							<td> : <select  name="kit3">
                            <option disabled selected value="">-Pilih Kondisi Lantai-</option>
                                    <option value="3">Tanah</option>
                                    <option value="2">Ubin</option>
                                    <option value="1">Keramik</option>    
                            </select></td>
						</tr>
                        
                        <tr><td><h4>Fasilitas</h4></td></tr>
                        <tr>
							<td>Sumber Air</td> 
							<td> : <select  name="kit4">
                            <option disabled selected value="">-Pilih Sumber AIR-</option>
                                    <option value="3">Air Sungai</option>
                                    <option value="2">Sumur</option>
                                    <option value="1">Air PDAM</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Fasilitas BAB</td> 
							<td> : <select  name="kit5">
                            <option disabled selected value="">-Pilih Fasilitas BAB-</option>
                                    <option value="3">Tidak Ada</option>
                                    <option value="2">Umum</option>
                                    <option value="1">Sendiri</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Bahan Bakar Memasak</td> 
							<td> : <select  name="kit6">
                            <option disabled selected value="">-Pilih Bahan Bakar Memasak-</option>
                                    <option value="3">Kayu Bakar</option>
                                    <option value="2">Minyak Tanah</option>
                                    <option value="1">Kompor Gas</option>    
                            </select></td>
						</tr>

                        <tr><td><h4>Asset</h4></td></tr>
                        <tr>
							<td>Kendaraan</td> 
							<td> : <select  name="kit7">
                            <option disabled selected value="">-Pilih Kendaraan-</option>
                                    <option value="3">Tidak Punya</option>
                                    <option value="2">Sepeda Ontel</option>
                                    <option value="1">Motor/Kapal Motor</option>    
                            </select></td>
						</tr>
						
						<tr>
							<td>Hewan Ternak</td> 
							<td> : <select  name="kit8">
							<option disabled selected value="">-Pilih Hewan Ternak-</option>
									<option value="3">Tidak Punya</option>
									<option value="2">Kambing</option>
									<option value="1">Sapi</option>    
							</select></td>
						</tr>

                        <tr>
							<td>Elektronik</td> 
							<td> : <select  name="kit9">
                            <option disabled selected value="">-Pilih Elektronik-</option>
                                    <option value="3">Tidak Punya</option>
                                    <option value="2">TV/HP</option>
                                    <option value="1">Kulkas</option>    
                            </select></td>
						</tr>

						<tr>
							<td></td>
							<td><label class="ml-2">
							<input type="submit" name="btn_simpan" value="Simpan"/>
							<input type="reset" name="reset" value="Besihkan"/>
						</label></td>
						</tr>
					</table>
					<br>
					<?php 
// echo "<pre>";
// print_r($datadesa);
// echo "</pre>";
					 ?>
				</div>

				<p><?php echo isset($pesan) ? $pesan : "" ?></p>
			</fieldset>
		</form>

		<form action="" method="POST" enctype="multipart/form-data">
			<fieldset>
				<div class="table-responsive">
					<table class="table table-responsive-sm table-hover" border="0">
						<tr>
							<td>Import File Excel</td>
							<td> : <label class="ml-2">
								<input type="file" name="filexls" id="formFile">
								<input type="submit" name="btn_upload" value="Import">
							</td>
						</tr>
					</table>
				</div>
			</fieldset>
		</form>
	<?php

}
// --- Tutup Fngsi tambah data
?>

<?php
// Fungsi inport data excel

require 'vendor/autoload.php';

	if (isset($_POST['btn_upload'])){
		$err = "";
		$ekstensi = "";
		$success = "";

		$file_name = $_FILES['filexls']['name'];
		$file_data = $_FILES['filexls']['tmp_name'];

		if (empty($file_name)) {
			$err .= "<li>Silahkan masukkan file Excel</li>";
		} else {
			$ekstensi = pathinfo($file_name)['extension'];
		}

		$ekstensi_allowed = array("xls","xlsx");
		if (!in_array($ekstensi, $ekstensi_allowed)) {
			$err .= "<li>Silahkan masukkan file yang bertipe xls atau xlsx. File yang anda masukkan <b>$file_name</b> bertipe <b>$ekstensi</b></li>";
		}

		if (empty($err)) {
			$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
			$spreadsheet = $reader->load($file_data);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			$jumlahData = 0;
			for ($i=1; $i < count($sheetData); $i++) {
				$nik = $sheetData[$i]['0'];
				$nama = $sheetData[$i]['1'];
				$alamat = $sheetData[$i]['2'];
				$kecamatan = $sheetData[$i]['3'];
				$kelurahan = $sheetData[$i]['4'];
				$periode = $sheetData[$i]['5'];
				$kondisi_atap = $sheetData[$i]['6'];
				$kondisi_dinding = $sheetData[$i]['7'];
				$kondisi_lantai = $sheetData[$i]['8'];
				$sumber_air = $sheetData[$i]['9'];
				$bb_masak = $sheetData[$i]['10'];
				$fasilitas_bab = $sheetData[$i]['11'];
				$kendaraan = $sheetData[$i]['12'];
				$hewan_ternak = $sheetData[$i]['13'];
				$elektronik = $sheetData[$i]['14'];

				$kondisi_atap = str_replace(array("Jeramik","Genting Tanah","Asbes"), array("3","2","1"), $kondisi_atap);
				$kondisi_dinding = str_replace(array("Bambu","Kayu","Tembok"), array("3","2","1"), $kondisi_dinding);
				$kondisi_lantai = str_replace(array("Tanah","Ubin","Keramik"), array("3","2","1"), $kondisi_lantai);
				$sumber_air = str_replace(array("Air Sungai","Sumur","Air PDAM"), array("3","2","1"), $sumber_air);
				$bb_masak = str_replace(array("Tidak Punya","Umum","Sendiri"), array("3","2","1"), $bb_masak);
				$fasilitas_bab = str_replace(array("Kayu Bakar","Minyak Tanah","Kompor Gas"), array("3","2","1"), $fasilitas_bab);
				$kendaraan = str_replace(array("Tidak Punya","Sepeda Ontel","Motor/Kapal Motor"), array("3","2","1"), $kendaraan);
				$hewan_ternak = str_replace(array("Tidak Punya","Kambing","Sapi"), array("3","2","1"), $hewan_ternak);
				$elektronik = str_replace(array("Tidak Punya","TV/HP","Kulkas"), array("3","2","1"), $elektronik);
				$kecamatan = str_replace(array(
						"Kecamatan Srandakan",
						"Kecamatan Sanden",
						"Kecamatan Pundong",
						"Kecamatan Bambanglipuro",
						"Kecamatan Pandak",
						"Kecamatan Bantul",
						"Kecamatan Imogiri",
						"Kecamatan Jetis",
						"Kecamatan Dlingo",
						"Kecamatan Pleret",
						"Kecamatan Piyungan",
						"Kecamatan Banguntapan",
						"Kecamatan Sewon",
						"Kecamatan Kasihan",
						"Kecamatan Pajangan",
						"Kecamatan Sedayu",
						"Kecamatan Kretek",
					), array(
						"1",
						"2",
						"3",
						"4",
						"5",
						"6",
						"7",
						"8",
						"9",
						"10",
						"11",
						"12",
						"13",
						"14",
						"15",
						"16",
						"17",
					), $kecamatan);
				$kelurahan = str_replace(array(
					"Kelurahan Trimurti",
					"Kelurahan Poncosari",
					"Kelurahan Gadingan",
					"Kelurahan Gadingharjo",
					"Kelurahan Martigading",
					"Kelurahan Srigading",
					"Kelurahan Panjangrejo",
					"Kelurahan Bangunharjo",
					"Kelurahan Srihardono",
					"Kelurahan Mulyodadi",
					"Kelurahan Sidomulyo",
					"Kelurahan Sumbermulyo",
					"Kelurahan Caturharjo",
					"Kelurahan Gilangharjo",
					"Kelurahan Triharjo",
					"Kelurahan Wijirejo",
					"Kelurahan Bantul",
					"Kelurahan Palbapang",
					"Kelurahan Ringinharjo",
					"Kelurahan Sabdodadi",
					"Kelurahan Trirenggo",
					"Kelurahan Girirejo",
					"Kelurahan Imogiri",
					"Kelurahan Karangtalun",
					"Kelurahan Karangtengah",
					"Kelurahan Kebonagung",
					"Kelurahan Selopamioro",
					"Kelurahan Sriharjo",
					"Kelurahan Wukirsari",
					"Kelurahan Canden",
					"Kelurahan Patalan",
					"Kelurahan Sumberagung",
					"Kelurahan Trimulyo",
					"Kelurahan Dlingo",
					"Kelurahan Jatimulyo",
					"Kelurahan Mangunan",
					"Kelurahan Muntuk",
					"Kelurahan Temuwuh",
					"Kelurahan Terong",
					"Kelurahan Bawuran",
					"Kelurahan Pleret",
					"Kelurahan Segoroyoso",
					"Kelurahan Wonokromo",
					"Kelurahan Wonolelo",
					"Kelurahan Srimulyo",
					"Kelurahan Sitimulyo",
					"Kelurahan Srimartani",
					"Kelurahan Banguntapan",
					"Kelurahan Baturetno",
					"Kelurahan Jagalan",
					"Kelurahan Jambidan",
					"Kelurahan Potorono",
					"Kelurahan Singosaren",
					"Kelurahan Tamanan",
					"Kelurahan Wirokerten",
					"Kelurahan Bangunharjo",
					"Kelurahan Panggungharjo",
					"Kelurahan Pendowoharjo",
					"Kelurahan Timbulharjo",
					"Kelurahan Bangunjiwo",
					"Kelurahan Ngestiharjo",
					"Kelurahan Tamantirto",
					"Kelurahan Tirtonirmolo",
					"Kelurahan Guwosari",
					"Kelurahan Sendangsari",
					"Kelurahan Triwidadi",
					"Kelurahan Argodadi",
					"Kelurahan Argorejo",
					"Kelurahan Argosari",
					"Kelurahan Argomulyo",
					"Kelurahan Donotirto",
					"Kelurahan Prangtritis",
					"Kelurahan Tirtohargo",
					"Kelurahan Tirtomulyo",
					"Kelurahan Tirtosari",
					), array(
						"1",
						"2",
						"3",
						"4",
						"5",
						"6",
						"7",
						"8",
						"9",
						"10",
						"11",
						"12",
						"13",
						"14",
						"15",
						"16",
						"17",
						"18",
						"19",
						"20",
						"21",
						"22",
						"23",
						"24",
						"25",
						"26",
						"27",
						"28",
						"29",
						"30",
						"31",
						"32",
						"33",
						"34",
						"35",
						"36",
						"37",
						"38",
						"39",
						"40",
						"41",
						"42",
						"43",
						"44",
						"45",
						"46",
						"47",
						"48",
						"49",
						"50",
						"51",
						"52",
						"53",
						"54",
						"55",
						"56",
						"57",
						"58",
						"59",
						"60",
						"61",
						"62",
						"63",
						"64",
						"65",
						"66",
						"67",
						"68",
						"69",
						"70",
						"71",
						"72",
						"73",
						"74",
						"75",
					), $kelurahan);

				// echo "$nik - $nama - $alamat - $periode - $kondisi_atap - $kondisi_dinding - $kondisi_lantai - $sumber_air - $bb_masak - $fasilitas_bab - $kendaraan - $hewan_ternak - $elektronik <br/>";

				$sqlexcel = "INSERT INTO tb_alternatif (nik,nama_alternatif,kit1,kit2,kit3,kit4,kit5,kit6,kit7,kit8,kit9,alamat,kecamatan_id,kelurahan_id,periode)
				VALUES ('$nik', '$nama', '$kondisi_atap', '$kondisi_dinding', '$kondisi_lantai', '$sumber_air', '$bb_masak', '$fasilitas_bab', '$kendaraan', '$hewan_ternak', '$elektronik', '$alamat', '$kecamatan', '$kelurahan', '$periode')";

				mysqli_query($koneksi, $sqlexcel);

				$jumlahData++;
			}

			if ($jumlahData > 0) {
				$success = "Import data berhasil !";
			}
		}

		if ($err) {
			?>
			<div class="alert alert-danger">
				<ul><?= $err ?></ul>
			</div>
			<?php
		}

		if ($success) {
			?>
			<div class="alert alert-primary">
				<ul><?= $success ?></ul>
			</div>
			<?php
		}
	}
?>

<?php
// --- Fungsi Baca Data (Read)
function tampil_data($koneksi){
	$sql = "SELECT * FROM tb_alternatif";
	$query = mysqli_query($koneksi, $sql);
	$nomor = 1;
	
		echo "<fieldset>";
		echo "<div class='table-responsive'>";
		echo "<table class='table table-responsive-sm table-bordered table-hover' id='tb_user' border='1' cellpadding='10'>";
		echo "<thead>";
			echo "<tr>";
			echo "<th>No</th>
				<th>NIK</th>
				<th>Nama</th>
                <th>Alamat</th>
                <th>Periode</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Kondisi Rumah</th>
                <th>Fasilitas</th>
                <th>Asset</th>
				<th>Edit</th>
				<th>Hapus</th>";	
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
	while($data = mysqli_fetch_array($query)){
		?>
			<tr>
				<td><?= $nomor++; ?>.</td>
				<td><?php echo $data['nik']; ?></td>
				<td><?php echo $data['nama_alternatif']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['periode']; ?></td>
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
                <td> Atap <?php if($data['kit1']==1){
                            echo"Jeramik";
                        }
                            else if($data['kit1']==2){echo"Genting Tanah";
                        }   else 
                        {
                                echo"Asbes";}

                 ?>,</br> Dinding <?php if($data['kit2']==1){
                    echo"Tembok";
                }
                    else if($data['kit2']==2){echo"Kayu";
                }   else 
                {
                        echo"Bambu";}

                ?>,</br> Lantai <?php if($data['kit3']==1){
                    echo"Keramik";
                }
                    else if($data['kit3']==2){echo"Ubin";
                }   else 
                {
                        echo"Tanah";}

                ?></td>

                <td>Sumber Air <?php if($data['kit4']==1){
                            echo"Air PDAM";
                        }
                            else if($data['kit4']==2){echo"Sumur";
                        }   else 
                        {
                                echo"Air Sungai";}

                 ?>,</br> Fasilitas BAB <?php if($data['kit5']==1){
                    echo"Sendiri";
                }
                    else if($data['kit5']==2){echo"Umum";
                }   else 
                {
                        echo"Tidak Ada";}

                ?>,</br> Bahan Bakar Masak <?php if($data['kit6']==1){
                    echo"Kompor Gas";
                }
                    else if($data['kit6']==2){echo"Minyak Tanah";
                }   else 
                {
                        echo"Kayu Bakar";}

                ?></td>
                <td>Kendaraan <?php if($data['kit7']==1){
                            echo"Motor/Kapal Motor";
                        }
                            else if($data['kit7']==2){echo"Sepeda Ontel";
                        }   else 
                        {
                                echo"Tidak Punya";}

                ?>,</br>Hewan Ternak <?php if($data['kit8']==1){
                    echo"Sapi";
                }
                    else if($data['kit9']==2){echo"Kambing";
                }   else 
                {
                        echo"Tidak Punya";}

                ?>,</br> Elektronik <?php if($data['kit9']==1){
                    echo"Kulkas";
                }
                    else if($data['kit8']==2){echo"Hp atau Tv";
                }   else 
                {
                        echo"Tidak Punya";}

                ?></td>
				<td>
					<a href="index.php?aksi=update&id=<?php echo $data['id']; ?>&nik=<?php echo $data['nik']; ?>&nama_alternatif=<?php echo $data['nama_alternatif']; ?>&alamat=<?php echo $data['alamat']; ?>&kecamatan=<?php echo $data['kecamatan_id']; ?>&kelurahan=<?php echo $data['kelurahan_id']; ?>
																				&kit1=<?php echo $data['kit1']; ?>&kit2=<?php echo $data['kit2']; ?>&kit3=<?php echo $data['kit3']; ?>&kit4=<?php echo $data['kit4']; ?>&kit5=<?php echo $data['kit5']; ?>&kit5=<?php echo $data['kit5']; ?>
																				&kit6=<?php echo $data['kit6']; ?>&kit6=<?php echo $data['kit6']; ?>&kit7=<?php echo $data['kit7']; ?>&kit8=<?php echo $data['kit8']; ?>&kit9=<?php echo $data['kit9']; ?>&periode=<?php echo $data['periode']; ?>">Edit</a>
				</td>
				<td>
					<a href="index.php?aksi=delete&id=<?php echo $data['id']; ?>" onClick="return confirm('Yakin akan menghapus penerima <?= $data['nama_alternatif']; ?>?')">Hapus</a>
				</td>
			</tr>
		<?php
	}
	echo "</tbody>";
	echo "</table>";
	echo "</fieldset>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
}
// --- Tutup Fungsi Baca Data (Read)

// --- Fungsi Ubah Data (Update)
function ubah($koneksi){

	// ubah data
	if(isset($_POST['btn_ubah'])){
		$nik = $_POST['nik'];
		$nama_alternatif = $_POST['nama_alternatif'];
		$kit1 = $_POST['kit1'];
        $kit2 = $_POST['kit2'];
        $kit3 = $_POST['kit3'];
        $kit4 = $_POST['kit4'];
        $kit5 = $_POST['kit5'];
        $kit6 = $_POST['kit6'];
        $kit7 = $_POST['kit7'];
        $kit8 = $_POST['kit8'];
        $kit9 = $_POST['kit9'];
        $alamat = $_POST['alamat'];
        $kecamatan = $_POST['kecamatan'];
        $kelurahan = $_POST['kelurahan'];
        $periode = $_POST['periode'];
		
		if(!empty($nama_alternatif) && !empty($nik)){
			$sql_update = "UPDATE tb_alternatif SET nama_alternatif='$nama_alternatif',
	            nik='$nik', kit1='$kit1', kit2='$kit2', kit3='$kit3', kit3='$kit3',
				kit4='$kit4', kit5='$kit5', kit6='$kit6', kit7='$kit7', kit8='$kit8', kit9='$kit9',
				alamat='$alamat',kecamatan_id='$kecamatan',kelurahan_id='$kelurahan',periode='$periode' WHERE nik=$nik";
			$update = mysqli_query($koneksi, $sql_update);
			if($update && isset($_GET['aksi'])){
				if($_GET['aksi'] == 'update'){
					echo "<div class='alert alert-info'>Data Berhasil Diubah</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php'>";
				}
			}
		} else {
			$pesan = "Data tidak lengkap!";
		}
	}
	
	// tampilkan form ubah
	if(isset($_GET['id'])){
		$nik = $_GET['nik'];
		$nama_alternatif = $_GET['nama_alternatif'];
        $alamat = $_GET['alamat'];
        $kecamatan = $_GET['kecamatan'];
        $kelurahan = $_GET['kelurahan'];
		$periode = $_GET['periode'];

		?>
			<a href="index.php"> &laquo; Home</a> | 
			<a href="index.php?aksi=create"> (+) Tambah Data</a>
			<hr>
			<h3>Ubah Data</h3>
			<form action="" method="POST">
			<fieldset>
				<div class="table-responsive">
					<table class="table table-responsive-sm table-hover" border="0">
						<tr>
							<td>	
								<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
							</td>
						</tr>
						<tr>
							<td>Periode </td>
							<td> : <select name="periode">
                            <option disabled selected value="">-Pilih Periode-</option>
                                    <option value="2019" <?php if($_GET["periode"]==2019){echo "selected";}?>>2019</option>
                                    <option value="2020" <?php if($_GET["periode"]==2020){echo "selected";}?>>2020</option>
                                    <option value="2021" <?php if($_GET["periode"]==2021){echo "selected";}?>>2021</option>    
                                    <option value="2022" <?php if($_GET["periode"]==2022){echo "selected";}?>>2022</option>    
                            </select></td>
                            </td>
						</tr>
						<!-- var_dump($alamat) -->
						<tr>
							<td>NIK </td>
							<td> : <input type="text" name="nik" value="<?= $_GET['nik'] ?>" required /></td>
						</tr>
						</tr>
							<td>Nama Calon Penerima </td> 
							<td> : <input type="text" name="nama_alternatif" value="<?= $_GET['nama_alternatif'] ?>" required/></td>
						</tr>
                        <tr>
                            <td>Alamat </td>
                            <td> : <input type="text" name="alamat" value="<?= $_GET['alamat'] ?>" required /></td>
						<tr>
                        <tr>
                            <td>Kecamatan </td>
                            <td> : <select name="kecamatan" id="kecamatan_id">
									<option disabled selected value="">-Pilih Kecamatan-</option>
									<option value="1" <?php if($_GET["kecamatan"]==1){echo "selected";}?>>Kecamatan Serandakan</option>
									<option value="2" <?php if($_GET["kecamatan"]==2){echo "selected";}?>>Kecamatan Sanden</option>
									<option value="3" <?php if($_GET["kecamatan"]==3){echo "selected";}?>>Kecamatan Asbes</option>    
									<option value="4" <?php if($_GET["kecamatan"]==4){echo "selected";}?>>Kecamatan Bambanglipuro</option>
									<option value="5" <?php if($_GET["kecamatan"]==5){echo "selected";}?>>Kecamatan Pandak</option>
									<option value="6" <?php if($_GET["kecamatan"]==6){echo "selected";}?>>Kecamatan Bantul</option>    
									<option value="7" <?php if($_GET["kecamatan"]==7){echo "selected";}?>>Kecamatan Imogiri</option>
									<option value="8" <?php if($_GET["kecamatan"]==8){echo "selected";}?>>Kecamatan Jetis</option>
									<option value="9" <?php if($_GET["kecamatan"]==9){echo "selected";}?>>Kecamatan Dlingo</option>    
									<option value="10" <?php if($_GET["kecamatan"]==10){echo "selected";}?>>Kecamatan Pleret</option>
									<option value="11" <?php if($_GET["kecamatan"]==11){echo "selected";}?>>Kecamatan Piyungan</option>
									<option value="12" <?php if($_GET["kecamatan"]==12){echo "selected";}?>>Kecamatan Banguntapan</option>    
									<option value="13" <?php if($_GET["kecamatan"]==13){echo "selected";}?>>Kecamatan Sewon</option>
									<option value="14" <?php if($_GET["kecamatan"]==14){echo "selected";}?>>Kecamatan Kasihan</option>
									<option value="15" <?php if($_GET["kecamatan"]==15){echo "selected";}?>>Kecamatan Pajangan</option>    
									<option value="16" <?php if($_GET["kecamatan"]==16){echo "selected";}?>>Kecamatan Sedayu</option>  
									<option value="17" <?php if($_GET["kecamatan"]==17){echo "selected";}?>>Kecamatan Kretek</option>  
                            	</select>
							</td>
						<tr>
                        <tr>
                            <td>Kelurahan </td>
                            <td> : <select name="kelurahan" id="kelurahan_id">
                            <option disabled selected value="">-- Pilih Kelurahan --</option>
                                    <option value="1" <?php if($_GET["kelurahan"]==1){echo "selected";}?>>Kelurahan Trimurti</option>
                                    <option value="2" <?php if($_GET["kelurahan"]==2){echo "selected";}?>>Kelurahan Poncosari</option>
                                    <option value="3" <?php if($_GET["kelurahan"]==3){echo "selected";}?>>Kelurahan Gadingan</option>
                                    <option value="4" <?php if($_GET["kelurahan"]==4){echo "selected";}?>>Kelurahan Gadingharjo</option>
                                    <option value="5" <?php if($_GET["kelurahan"]==5){echo "selected";}?>>Kelurahan Martigading</option>
                                    <option value="6" <?php if($_GET["kelurahan"]==6){echo "selected";}?>>Kelurahan Srigading</option>
                                    <option value="7" <?php if($_GET["kelurahan"]==7){echo "selected";}?>>Kelurahan Panjangrejo</option>
                                    <option value="8" <?php if($_GET["kelurahan"]==8){echo "selected";}?>>Kelurahan Bangunharjo</option>
                                    <option value="9" <?php if($_GET["kelurahan"]==9){echo "selected";}?>>Kelurahan Srihardono</option>
                                    <option value="10" <?php if($_GET["kelurahan"]==10){echo "selected";}?>>Kelurahan Mulyodadi</option>
                                    <option value="11" <?php if($_GET["kelurahan"]==11){echo "selected";}?>>Kelurahan Sidomulyo</option>
                                    <option value="12" <?php if($_GET["kelurahan"]==12){echo "selected";}?>>Kelurahan Sumbermulyo</option>
                                    <option value="13" <?php if($_GET["kelurahan"]==13){echo "selected";}?>>Kelurahan Caturharjo</option>
                                    <option value="14" <?php if($_GET["kelurahan"]==14){echo "selected";}?>>Kelurahan Gilangharjo</option>
                                    <option value="15" <?php if($_GET["kelurahan"]==15){echo "selected";}?>>Kelurahan Triharjo</option>
                                    <option value="16" <?php if($_GET["kelurahan"]==16){echo "selected";}?>>Kelurahan Wijirejo</option>
                                    <option value="17" <?php if($_GET["kelurahan"]==17){echo "selected";}?>>Kelurahan Bantul</option>
                                    <option value="18" <?php if($_GET["kelurahan"]==18){echo "selected";}?>>Kelurahan Palbapang</option>
                                    <option value="19" <?php if($_GET["kelurahan"]==19){echo "selected";}?>>Kelurahan Ringinharjo</option>
                                    <option value="20" <?php if($_GET["kelurahan"]==20){echo "selected";}?>>Kelurahan Sabdodadi</option>
                                    <option value="21" <?php if($_GET["kelurahan"]==21){echo "selected";}?>>Kelurahan Trirenggo</option>
                                    <option value="22" <?php if($_GET["kelurahan"]==22){echo "selected";}?>>Kelurahan Girirejo</option>
                                    <option value="23" <?php if($_GET["kelurahan"]==23){echo "selected";}?>>Kelurahan Imogiri</option>
                                    <option value="24" <?php if($_GET["kelurahan"]==24){echo "selected";}?>>Kelurahan Karangtalun</option>
                                    <option value="25" <?php if($_GET["kelurahan"]==25){echo "selected";}?>>Kelurahan Karangtengah</option>
                                    <option value="26" <?php if($_GET["kelurahan"]==26){echo "selected";}?>>Kelurahan Kebonagung</option>
                                    <option value="27" <?php if($_GET["kelurahan"]==27){echo "selected";}?>>Kelurahan Selopamioro</option>
                                    <option value="28" <?php if($_GET["kelurahan"]==28){echo "selected";}?>>Kelurahan Sriharjo</option>
                                    <option value="29" <?php if($_GET["kelurahan"]==29){echo "selected";}?>>Kelurahan Wukirsari</option>
                                    <option value="30" <?php if($_GET["kelurahan"]==30){echo "selected";}?>>Kelurahan Canden</option>
                                    <option value="31" <?php if($_GET["kelurahan"]==31){echo "selected";}?>>Kelurahan Patalan</option>
                                    <option value="32" <?php if($_GET["kelurahan"]==32){echo "selected";}?>>Kelurahan Sumberagung</option>
                                    <option value="33" <?php if($_GET["kelurahan"]==33){echo "selected";}?>>Kelurahan Trimulyo</option>
                                    <option value="34" <?php if($_GET["kelurahan"]==34){echo "selected";}?>>Kelurahan Dlingo</option>
                                    <option value="35" <?php if($_GET["kelurahan"]==35){echo "selected";}?>>Kelurahan Jatimulyo</option>
                                    <option value="36" <?php if($_GET["kelurahan"]==36){echo "selected";}?>>Kelurahan Mangunan</option>
                                    <option value="37" <?php if($_GET["kelurahan"]==37){echo "selected";}?>>Kelurahan Muntuk</option>
                                    <option value="38" <?php if($_GET["kelurahan"]==38){echo "selected";}?>>Kelurahan Temuwuh</option>
                                    <option value="39" <?php if($_GET["kelurahan"]==39){echo "selected";}?>>Kelurahan Terong</option>
                                    <option value="40" <?php if($_GET["kelurahan"]==40){echo "selected";}?>>Kelurahan Bawuran</option>
                                    <option value="41" <?php if($_GET["kelurahan"]==41){echo "selected";}?>>Kelurahan Pleret</option>
                                    <option value="42" <?php if($_GET["kelurahan"]==42){echo "selected";}?>>Kelurahan Segoroyoso</option>
                                    <option value="43" <?php if($_GET["kelurahan"]==43){echo "selected";}?>>Kelurahan Wonokromo</option>
                                    <option value="44" <?php if($_GET["kelurahan"]==44){echo "selected";}?>>Kelurahan Wonolelo</option>
                                    <option value="45" <?php if($_GET["kelurahan"]==45){echo "selected";}?>>Kelurahan Srimulyo</option>
                                    <option value="46" <?php if($_GET["kelurahan"]==46){echo "selected";}?>>Kelurahan Sitimulyo</option>
                                    <option value="47" <?php if($_GET["kelurahan"]==47){echo "selected";}?>>Kelurahan Srimartani</option>
                                    <option value="48" <?php if($_GET["kelurahan"]==48){echo "selected";}?>>Kelurahan Banguntapan</option>
                                    <option value="49" <?php if($_GET["kelurahan"]==49){echo "selected";}?>>Kelurahan Baturetno</option>
                                    <option value="50" <?php if($_GET["kelurahan"]==50){echo "selected";}?>>Kelurahan Jagalan</option>
                                    <option value="51" <?php if($_GET["kelurahan"]==51){echo "selected";}?>>Kelurahan Jambidan</option>
                                    <option value="52" <?php if($_GET["kelurahan"]==52){echo "selected";}?>>Kelurahan Potorono</option>
                                    <option value="53" <?php if($_GET["kelurahan"]==53){echo "selected";}?>>Kelurahan Singosaren</option>
                                    <option value="54" <?php if($_GET["kelurahan"]==54){echo "selected";}?>>Kelurahan Tamanan</option>
                                    <option value="55" <?php if($_GET["kelurahan"]==55){echo "selected";}?>>Kelurahan Wirokerten</option>
                                    <option value="56" <?php if($_GET["kelurahan"]==56){echo "selected";}?>>Kelurahan Bangunharjo</option>
                                    <option value="57" <?php if($_GET["kelurahan"]==57){echo "selected";}?>>Kelurahan Panggungharjo</option>
                                    <option value="58" <?php if($_GET["kelurahan"]==58){echo "selected";}?>>Kelurahan Pendowoharjo</option>
                                    <option value="59" <?php if($_GET["kelurahan"]==59){echo "selected";}?>>Kelurahan Timbulharjo</option>
                                    <option value="60" <?php if($_GET["kelurahan"]==60){echo "selected";}?>>Kelurahan Bangunjiwo</option>
                                    <option value="61" <?php if($_GET["kelurahan"]==61){echo "selected";}?>>Kelurahan Ngestiharjo</option>
                                    <option value="62" <?php if($_GET["kelurahan"]==62){echo "selected";}?>>Kelurahan Tamantirto</option>
                                    <option value="63" <?php if($_GET["kelurahan"]==63){echo "selected";}?>>Kelurahan Tirtonirmolo</option>
                                    <option value="64" <?php if($_GET["kelurahan"]==64){echo "selected";}?>>Kelurahan Guwosari</option>
                                    <option value="65" <?php if($_GET["kelurahan"]==65){echo "selected";}?>>Kelurahan Sendangsari</option>
                                    <option value="66" <?php if($_GET["kelurahan"]==66){echo "selected";}?>>Kelurahan Triwidadi</option>
                                    <option value="67" <?php if($_GET["kelurahan"]==67){echo "selected";}?>>Kelurahan Argodadi</option>
                                    <option value="68" <?php if($_GET["kelurahan"]==68){echo "selected";}?>>Kelurahan Argorejo</option>
                                    <option value="69" <?php if($_GET["kelurahan"]==69){echo "selected";}?>>Kelurahan Argosari</option>
                                    <option value="70" <?php if($_GET["kelurahan"]==70){echo "selected";}?>>Kelurahan Argomulyo</option>
                                    <option value="71" <?php if($_GET["kelurahan"]==71){echo "selected";}?>>Kelurahan Donotirto</option>
                                    <option value="72" <?php if($_GET["kelurahan"]==72){echo "selected";}?>>Kelurahan Prangtritis</option>
                                    <option value="73" <?php if($_GET["kelurahan"]==73){echo "selected";}?>>Kelurahan Tirtohargo</option>
                                    <option value="74" <?php if($_GET["kelurahan"]==74){echo "selected";}?>>Kelurahan Tirtomulyo</option>
                                    <option value="75" <?php if($_GET["kelurahan"]==75){echo "selected";}?>>Kelurahan Tirtosari</option>
                            </select></td>
						<tr>
						<tr><td><h4>Kondisi Rumah</h4></td></tr>
                        <tr>
							<td>Kondisi Atap</td> 
							<td> : <select name="kit1">
                            <option disabled selected value="">-Pilih Kondisi Atap-</option>
                                    <option value="3" <?php if($_GET["kit1"]==3){echo "selected";}?>>Jeramik</option>
                                    <option value="2" <?php if($_GET["kit1"]==2){echo "selected";}?>>Genting Tanah</option>
                                    <option value="1" <?php if($_GET["kit1"]==1){echo "selected";}?>>Asbes</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Kondisi Dinding</td> 
							<td> : <select  name="kit2">
                            <option disabled selected value="">-Pilih Kondisi Dinding-</option>
                                    <option value="3" <?php if($_GET["kit2"]==3){echo "selected";}?>>Bambu</option>
                                    <option value="2" <?php if($_GET["kit2"]==2){echo "selected";}?>>Kayu</option>
                                    <option value="1" <?php if($_GET["kit2"]==1){echo "selected";}?>>Tembok</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Kondisi Lantai</td> 
							<td> : <select  name="kit3">
                            <option disabled selected value="">-Pilih Kondisi Lantai-</option>
                                    <option value="3" <?php if($_GET["kit3"]==3){echo "selected";}?>>Tanah</option>
                                    <option value="2" <?php if($_GET["kit3"]==2){echo "selected";}?>>Ubin</option>
                                    <option value="1" <?php if($_GET["kit3"]==1){echo "selected";}?>>Keramik</option>    
                            </select></td>
						</tr>
                        
                        <tr><td><h4>Fasilitas</h4></td></tr>
                        <tr>
							<td>Sumber Air</td> 
							<td> : <select  name="kit4">
                            <option disabled selected value="">-Pilih Sumber AIR-</option>
                                    <option value="3" <?php if($_GET["kit4"]==3){echo "selected";}?>>Air Sungai</option>
                                    <option value="2" <?php if($_GET["kit4"]==2){echo "selected";}?>>Sumur</option>
                                    <option value="1" <?php if($_GET["kit4"]==1){echo "selected";}?>>Air PDAM</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Fasilitas BAB</td> 
							<td> : <select  name="kit5">
                            <option disabled selected value="">-Pilih Fasilitas BAB-</option>
                                    <option value="3" <?php if($_GET["kit5"]==3){echo "selected";}?>>Tidak Ada</option>
                                    <option value="2" <?php if($_GET["kit5"]==2){echo "selected";}?>>Umum</option>
                                    <option value="1" <?php if($_GET["kit5"]==1){echo "selected";}?>>Sendiri</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Bahan Bakar Memasak</td> 
							<td> : <select  name="kit6">
                            <option disabled selected value="">-Pilih Bahan Bakar Memasak-</option>
                                    <option value="3" <?php if($_GET["kit6"]==3){echo "selected";}?>>Kayu Bakar</option>
                                    <option value="2" <?php if($_GET["kit6"]==2){echo "selected";}?>>Minyak Tanah</option>
                                    <option value="1" <?php if($_GET["kit6"]==1){echo "selected";}?>>Kompor Gas</option>    
                            </select></td>
						</tr>

                        <tr><td><h4>Asset</h4></td></tr>
                        <tr>
							<td>Kendaraan</td> 
							<td> : <select  name="kit7">
                            <option disabled selected value="">-Pilih Kendaraan-</option>
                                    <option value="3" <?php if($_GET["kit7"]==3){echo "selected";}?>>Tidak Punya</option>
                                    <option value="2" <?php if($_GET["kit7"]==2){echo "selected";}?>>Sepeda Ontel</option>
                                    <option value="1" <?php if($_GET["kit7"]==1){echo "selected";}?>>Motor/Kapal Motor</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Hewan Ternak</td> 
							<td> : <select  name="kit8">
                            <option disabled selected value="">-Pilih Kendaraan Air-</option>
                                    <option value="3" <?php if($_GET["kit8"]==3){echo "selected";}?>>Tidak Punya</option>
                                    <option value="2" <?php if($_GET["kit8"]==2){echo "selected";}?>>Kambing</option>
                                    <option value="1" <?php if($_GET["kit8"]==1){echo "selected";}?>>Sapi</option>    
                            </select></td>
						</tr>

						 <tr>
							<td>Elektronik</td> 
							<td> : <select  name="kit9">
                            <option disabled selected value="">-Pilih Elektronik-</option>
                                    <option value="3"  <?php if($_GET["kit9"]==3){echo "selected";}?>>Tidak Punya</option>
                                    <option value="2"  <?php if($_GET["kit9"]==2){echo "selected";}?>>TV/HP</option>
                                    <option value="1"  <?php if($_GET["kit9"]==1){echo "selected";}?>>Kulkas</option>    
                            </select></td>
						</tr>
						</tr>
						<tr>
							<td></td>
							<td>
								<label class="ml-2">
									<input type="submit" name="btn_ubah" value="Simpan Perubahan"/>
								</label>
							</td>
						</tr>

					</table>
					<br>
				</div>

				<p><?php echo isset($pesan) ? $pesan : "" ?></p>
			</fieldset>
		</form>

		<?php
// 		echo "<pre>";
// 		print_r($level);
//		echo "</pre>";
	}
	
}
// --- Tutup Fungsi Update


// --- Fungsi Delete
function hapus($koneksi){

	if(isset($_GET['id']) && isset($_GET['aksi'])){
		$id = $_GET['id'];
		$sql_hapus = "DELETE FROM tb_alternatif WHERE nik=" . $id;
		$hapus = mysqli_query($koneksi, $sql_hapus);
		
		if($hapus){
			if($_GET['aksi'] == 'delete'){
				echo "<meta http-equiv='refresh' content='1;url=index.php'>";
			}
		}
	}
	
}
// --- Tutup Fungsi Hapus


// ===================================================================

// --- Program Utama
if (isset($_GET['aksi'])){
	switch($_GET['aksi']){
		case "create":
			echo '<a href="index.php"> &laquo; Home</a>';
			tambah($koneksi);
			break;
		case "read":
			tampil_data($koneksi);
			break;
		case "update":
			ubah($koneksi);
			tampil_data($koneksi);
			break;
		case "delete":
			hapus($koneksi);
			break;
		default:
			echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
			tambah($koneksi);
			tampil_data($koneksi);
	}
} else {
	tambah($koneksi);
	tampil_data($koneksi);
}

?>
                    		</div>
                    	</div>
                    </div>
				</div>
			</div>
		</main>


<?php include_once('../_footer.php'); ?>
<script type="text/javascript" charset="utf8">
            $(document).ready( function () {
                $('#pegawai').DataTable(
                    {
                        "pageLength": 4,
                        responsive: true,
                        select: true
                    }
                    );
            } );
        </script>

<!-- Combobox Bertingkat -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#kecamatan_id').on('change',function(){
			var kecamatan_id = $(this).val();
			$.ajax({
				type: 'POST',
				url: 'proses_combobox.php',
				data: {
					modul: 'Kelurahan',
					id: kecamatan_id
				},
				success: function(respond){
					$('#kelurahan_id').html(respond);
				},
				error: function(){
					alert("Gagal Mengambil Data");
				}
			});
		});
	});
</script>
