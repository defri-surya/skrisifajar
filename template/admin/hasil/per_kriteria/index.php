<?php $title = "Data Penerima Bantuan Berdasarkan Kriteria";
include_once('../../_header.php');

?>

			<div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid">
                        <ol>
                            <li class="breadcrumb-item">
                               <h3> Data Penerima Bantuan Berdasarkan Kriteria</h3>
                            </li>
                        </ol>

                        <div class="row">

                        	<div class="col-xl-auto offset-xl-1">


<?php

// --- Fngsi tambah data (Create)
function tambah($koneksi){
	
	if (isset($_POST['btn_simpan'])){
		$kode = $_POST['kode'];
        $id_namakriteria = $_POST['id_namakriteria'];
        

		
		if(!empty($kode) && !empty($id_namakriteria)){

			$sql ="INSERT INTO tb_kriteria
            (kode,id_namakriteria)
            VALUES('$kode','$id_namakriteria')";

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
							<td>Periode</td> 
							<td> : 
						        <select name="id_namakriteria" required>
						        	<?php 
										$datanamakriteria = array();
										$sql = mysqli_query($koneksi, "SELECT * FROM tb_namakriteria");
										while ($namakriteria = mysqli_fetch_assoc($sql)) {
										    $datanamakriteria[] = $namakriteria;
										}

									?>
						            <option disabled selected value="">-Pilih Periode-</option>
						            <?php foreach ($datanamakriteria as $key => $value):?>
						            <option value="<?= $value["id_namakriteria"] ?>"><?= $value["nama_kriteria"] ?></option>
						            <?php endforeach ?>
								</select>
					        </td>
					    </tr>
						<tr>
							<td>Kriteria</td> 
							<td> : 
						        <select name="id_namakriteria" required>
						        	<?php 
										$datanamakriteria = array();
										$sql = mysqli_query($koneksi, "SELECT * FROM tb_namakriteria");
										while ($namakriteria = mysqli_fetch_assoc($sql)) {
										    $datanamakriteria[] = $namakriteria;
										}

									?>
						            <option disabled selected value="">-Pilih Kriteria-</option>
						            <?php foreach ($datanamakriteria as $key => $value):?>
						            <option value="<?= $value["id_namakriteria"] ?>"><?= $value["nama_kriteria"] ?></option>
						            <?php endforeach ?>
								</select>
					        </td>
					    </tr>
						<tr>
							<td></td>
							<td><label class="ml-2">
							<input type="submit" name="btn_simpan" value="Cari"/>
							<!-- <input type="reset" name="reset" value="Besihkan"/> -->
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

	<?php

}
// --- Tutup Fngsi tambah data

// --- Fungsi Baca Data (Read)
function tampil_data($koneksi){
	$sql = "SELECT * FROM tb_kriteria LEFT JOIN tb_namakriteria ON tb_kriteria.id_namakriteria = tb_namakriteria.id_namakriteria";
	$query = mysqli_query($koneksi, $sql);
	$nomor = 1;
	
		echo "<fieldset>";
		echo "<div class='table-responsive'>";
		echo "<table class='table table-responsive-sm table-bordered table-hover' id='user' border='1' cellpadding='10'>";
		echo "<thead>";
			echo "<tr>";
			echo "<th>No</th>
				<th>Kode</th>
				<th>Nama Kriteria</th>
				<th>Edit</th>
				<th>Hapus</th>";	
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
	while($data = mysqli_fetch_array($query)){
		?>
			<tr>
				<td><?= $nomor++; ?>.</td>
				<td><?php echo $data['kode']; ?></td>
				<td><?php echo $data['nama_kriteria']; ?></td>
				<td>
					<a href="index.php?aksi=update&id=<?php echo $data['id_kriteria']; ?>&kode=<?php echo $data['kode']; ?>&nama_kriteria=<?php echo $data['nama_kriteria'];?>">Edit</a>
				</td>
				<td>
					<a href="index.php?aksi=delete&id=<?php echo $data['id_kriteria']; ?>" onClick="return confirm('Yakin akan menghapus user <?= $data['kode']; ?>?')">Hapus</a>
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
		$id_kriteria = $_POST['id_kriteria'];
		$kode = $_POST['kode'];
		$id_namakriteria = $_POST['id_namakriteria'];
		
		if(!empty($kode) && !empty($id_namakriteria)){
			$sql_update = "UPDATE tb_kriteria SET kode='$kode', id_namakriteria='$id_namakriteria',
	            WHERE id_kriteria=$id_kriteria";
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
								<input type="hidden" name="id_kriteria" value="<?php echo $_GET['id'] ?>"/>
							</td>
						</tr>
						<tr>
							<td>Kode </td>
							<td> : <input type="text" name="kode" value="<?php echo $_GET['kode'] ?>" required /></td>
						</tr>
						<tr>
							<td>Nama Kriteria</td> 
							<td> : 
						        <select name="id_namakriteria" required>
						        	<?php 
						        	$datanamakriteria = array();
									$sql = mysqli_query($koneksi, "SELECT * FROM tb_namakriteria");
									while ($namakriteria = mysqli_fetch_assoc($sql)) {
									    $datanamakriteria[] = $namakriteria;
									}
										$sql = "SELECT * FROM tb_kriteria  WHERE id_kriteria='$_GET[id]'";
										$result = mysqli_query($koneksi, $sql);

										$namakriteria = mysqli_fetch_assoc($result);
						        	 ?>
						            <option disabled value="">-Pilih Nama Kriteria-</option>
						            <?php foreach ($datanamakriteria as $key => $value):?>
						            <option value="<?= $value["id_namakriteria"] ?>" <?php if($namakriteria["id_namakriteria"]==$value["id_namakriteria"]){ echo "selected"; } ?> >
						            <?= $value["nama_kriteria"] ?>
						            </option>
						        	<?php endforeach ?>
								</select>
					        </td>
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
		$sql_hapus = "DELETE FROM tb_kriteria WHERE id_kriteria=" . $id;
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


<?php include_once('../../_footer.php'); ?>
<script type="text/javascript" charset="utf8">
            $(document).ready( function () {
                $('#kriteria').DataTable(
                    {
                        "pageLength": 4,
                        responsive: true,
                        select: true
                    }
                    );
            } );
        </script>
