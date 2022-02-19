<?php $title = "Data Kriteria";
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
                               <h3> Data Kriteria</h3>
                            </li>
                        </ol>

                        <div class="row">

                        	<div class="col-xl-auto offset-xl-1">


<?php
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
				<th>Aksi</th>
				";	
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
					<a href="index.php?aksi=update&id=<?php echo $data['id_kriteria']; ?>&kode=<?php echo $data['kode']; ?>&nama_kriteria=<?php echo $data['nama_kriteria']; ?>">Edit</a>
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
		$kode = $_POST['kode'];
		$nama_kriteria = $_POST['nama_kriteria'];
		
		if(!empty($nama_kriteria) && !empty($kode)){
			$sql_update = "UPDATE tb_kriteria SET nama_kriteria='$nama_kriteria',
	            kode='$kode' WHERE kode=$kode";
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
		$kode = $_GET['kode'];
		$nama_kriteria = $_GET['nama_kriteria'];
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
							<td>Kode Kriteria </td>
							<td> : <input type="text" name="kode" value="<?= $_GET['kode'] ?>" required /></td>
						</tr>
						<!-- var_dump($alamat) -->
						<tr>
							<td>Nama Kriteria </td>
							<td> : <input type="text" name="nama_kriteria" value="<?= $_GET['nama_kriteria'] ?>" required /></td>
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
				</div>
				<p><?php echo isset($pesan) ? $pesan : "" ?></p>
			</fieldset>
			</form>
<?php
	}
}
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
		$('#kriteria').DataTable(
			{
				"pageLength": 4,
				responsive: true,
				select: true
			});
	});
</script>