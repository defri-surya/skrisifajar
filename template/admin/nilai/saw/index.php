<?php $title = "Nilai SAW";
include_once('../../_header.php');

?>

			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <ol>
                            <li class="breadcrumb-item">
                               <h3>Hasil SAW</h3>
                            </li>
                        </ol>

                        <div class="row">

                        	<div class="col-xl-auto offset-xl-1">


<?php
// --- Fungsi Baca Data Perbandingan Kriteria dengan Kriteria (Read)
// function tampil_data_kriteria($koneksi){
	$sql = "SELECT * FROM tb_alternatif";
	$query = mysqli_query($koneksi, $sql);
	$nomor = 1;
	?>
		<fieldset>
		<div class='table-responsive'>
		<table class='table table-responsive-sm table-bordered table-striped table-hover' id='user' border='1' cellpadding='10'>
		<thead>
			<tr>
				<th border='0'>No</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Alamat</th>
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
			</tr>
		</thead>
		<tbody>
	<?php
	while($data = mysqli_fetch_array($query)){
        $kriteria1 = "1";
        foreach ($query as $key => $value) {
		?>
			<tr>
				<td><?= $nomor++; ?></td>
				<td><?= $value["nik"] ?></td>
				<td><?= $value["nama_alternatif"] ?></td>
				<td><?= $value["alamat"] ?></td>
				<td><?= $value["periode"] ?></td>
				<td><?= $value["kit1"] ?></td>
				<td><?= $value["kit2"] ?></td>
				<td><?= $value["kit3"] ?></td>
				<td><?= $value["kit4"] ?></td>
				<td><?= $value["kit5"] ?></td>
				<td><?= $value["kit6"] ?></td>
				<td><?= $value["kit7"] ?></td>
				<td><?= $value["kit8"] ?></td>
				<td><?= $value["kit9"] ?></td>
			</tr>
        <?php
        }
        ?>
			</tbody>
			</table>
			</fieldset>
			</br>
			</br>
			</br>

		<?php
// --- Tutup Fungsi Baca Data (Read)
    $crMax = mysqli_query($koneksi, "SELECT max(kit1) as maxK1,
    max(kit2) as maxK2,
    max(kit3) as maxK3,
    max(kit4) as maxK4,
    max(kit5) as maxK5,
    max(kit6) as maxK6,
    max(kit7) as maxK7,
    max(kit8) as maxK8,
    max(kit9) as maxK9
    FROM tb_alternatif");
    $max = mysqli_fetch_array($crMax);
    // var_dump($max);

    /* Hitung Normalisasi */
	$sql1 = "SELECT * FROM tb_alternatif";
	$query1 = mysqli_query($koneksi, $sql1);
	$nomor1 = 1;
	?>
		<fieldset>
		<div class='table-responsive'>
		<table class='table table-responsive-sm table-bordered table-striped table-hover' id='user' border='1' cellpadding='12'>
		<thead>
			<tr>
			<th border='0'>No</th>
				<th>Kondisi Atap</th>
				<th>Kondisi Dinding</th>
				<th>Kondisi Lantai</th>
				<th>Sumber Air</th>
				<th>Bahan Bakar Masak</th>
				<th>Fasilitas BAB</th>
				<th>Kendaraan</th>
				<th>Hewan Ternak</th>
				<th>Elektronik</th>
				<th>jumlah</th>
				<th>Ranking</th>

    </tr>
		</thead>
		<tbody>
            <?php
	while($data1 = mysqli_fetch_array($query1)){
        // var_dump($data1);
        foreach ($query1 as $key => $hasil) {
		$kriteria2 = "1";
		?> 
			<tr>
                <td><?= $nomor1++; ?></td>
				<td><?= $no1=round($hasil['kit1']/$max['maxK1'],2) ?></td>
				<td><?= $no2=round($hasil['kit2']/$max['maxK2'],2) ?></td>
				<td><?= $no3=round($hasil['kit3']/$max['maxK3'],2) ?></td>
				<td><?= $no4=round($hasil['kit4']/$max['maxK4'],2) ?></td>
				<td><?= $no5=round($hasil['kit5']/$max['maxK5'],2) ?></td>
				<td><?= $no6=round($hasil['kit6']/$max['maxK6'],2) ?></td>
				<td><?= $no7=round($hasil['kit7']/$max['maxK7'],2) ?></td>
				<td><?= $no8=round($hasil['kit8']/$max['maxK8'],2) ?></td>
				<td><?= $no9=round($hasil['kit9']/$max['maxK9'],2) ?></td>
                <td></td>
                <td></td>
			</tr>
            <?php
        }
            ?>
            </tbody>
            </table>
            </fieldset>
            </br>
            </br>
            </br>
		<?php
	

}}

// --- Tutup Fungsi Baca Data (Read)

// ===================================================================

?>
                    		</div>
                    	</div>
                    </div>
				</div>
			</div>
		</main>


        <?php include_once('../../_footer.php'); ?>