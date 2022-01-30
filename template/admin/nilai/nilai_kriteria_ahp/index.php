<?php $title = "Nilai Kriteria AHP";
include_once('../../_header.php');

?>

			<div id="layoutSidenav_content">
                <main>
                
                    <div class="container-fluid">
                        <ol>
                            <li class="breadcrumb-item">
                               <h3> Nilai Kriteria AHP</h3>
                            </li>
                        </ol>

                        <div class="row">

                        	<div class="col-xl-auto offset-xl-1">

                            <?php

// --- Fngsi tambah data (Create)
function tambah($koneksi){
	
	if (isset($_POST['btn_simpan'])){
		$nilai_perbandingan = $_POST['nilai_perbandingan'];
        $nilai_perbandingan2 = $_POST['nilai_perbandingan2'];
        $nilai_perbandingan3 = $_POST['nilai_perbandingan3'];
        $nilai_perbandingan4 = $_POST['nilai_perbandingan4'];
        $nilai_perbandingan5 = $_POST['nilai_perbandingan5'];
        $nilai_perbandingan6 = $_POST['nilai_perbandingan6'];
        $nilai_perbandingan7 = $_POST['nilai_perbandingan7'];
        $nilai_perbandingan8 = $_POST['nilai_perbandingan8'];
        $nilai_perbandingan9 = $_POST['nilai_perbandingan9'];
        $nilai_perbandingan10 = $_POST['nilai_perbandingan10'];
        $nilai_perbandingan11 = $_POST['nilai_perbandingan11'];
        $nilai_perbandingan12 = $_POST['nilai_perbandingan12'];
        $nilai_perbandingan13 = $_POST['nilai_perbandingan13'];
        $nilai_perbandingan14 = $_POST['nilai_perbandingan14'];
        $nilai_perbandingan15 = $_POST['nilai_perbandingan15'];
        $nilai_perbandingan16 = $_POST['nilai_perbandingan16'];
        $nilai_perbandingan17 = $_POST['nilai_perbandingan17'];
        $nilai_perbandingan18 = $_POST['nilai_perbandingan18'];
        $nilai_perbandingan19 = $_POST['nilai_perbandingan19'];
        $nilai_perbandingan20 = $_POST['nilai_perbandingan20'];
        $nilai_perbandingan21 = $_POST['nilai_perbandingan21'];
        $nilai_perbandingan22 = $_POST['nilai_perbandingan22'];
        $nilai_perbandingan23 = $_POST['nilai_perbandingan23'];

        $nilai_perbandingan25 = $_POST['nilai_perbandingan25'];
        $nilai_perbandingan26 = $_POST['nilai_perbandingan26'];
        $nilai_perbandingan27 = $_POST['nilai_perbandingan27'];
        
        $nilai_perbandingan29 = $_POST['nilai_perbandingan29'];
        $nilai_perbandingan30 = $_POST['nilai_perbandingan30'];
        $nilai_perbandingan31 = $_POST['nilai_perbandingan31'];
        $nilai_perbandingan32 = $_POST['nilai_perbandingan32'];
        $nilai_perbandingan33 = $_POST['nilai_perbandingan33'];
       
        $nilai_perbandingan35 = $_POST['nilai_perbandingan35'];
        $nilai_perbandingan36 = $_POST['nilai_perbandingan36'];
        $nilai_perbandingan37 = $_POST['nilai_perbandingan37'];
        $nilai_perbandingan38 = $_POST['nilai_perbandingan38'];
        $nilai_perbandingan39 = $_POST['nilai_perbandingan39'];

    
		if(!empty($nilai_perbandingan)){

			$sql ="UPDATE tb_nilaikriteria SET 
            nilai_perbandingan='$nilai_perbandingan', nilai_perbandingan2='$nilai_perbandingan2', 
            nilai_perbandingan3='$nilai_perbandingan3', nilai_perbandingan4='$nilai_perbandingan4',
            nilai_perbandingan5='$nilai_perbandingan5', nilai_perbandingan6='$nilai_perbandingan6',
            nilai_perbandingan7='$nilai_perbandingan7', nilai_perbandingan8='$nilai_perbandingan8',
            nilai_perbandingan9='$nilai_perbandingan9', nilai_perbandingan10='$nilai_perbandingan10',
            nilai_perbandingan11='$nilai_perbandingan11', nilai_perbandingan12='$nilai_perbandingan12',
            nilai_perbandingan13='$nilai_perbandingan13', nilai_perbandingan14='$nilai_perbandingan14',
            nilai_perbandingan15='$nilai_perbandingan15', nilai_perbandingan16='$nilai_perbandingan16', 
            nilai_perbandingan17='$nilai_perbandingan17', nilai_perbandingan18='$nilai_perbandingan18', 
            nilai_perbandingan19='$nilai_perbandingan19', nilai_perbandingan20='$nilai_perbandingan20',
            nilai_perbandingan21='$nilai_perbandingan21', nilai_perbandingan22='$nilai_perbandingan22', 
            nilai_perbandingan23='$nilai_perbandingan23', nilai_perbandingan25='$nilai_perbandingan25',
            nilai_perbandingan26='$nilai_perbandingan26', nilai_perbandingan27='$nilai_perbandingan27', 
            nilai_perbandingan29='$nilai_perbandingan29', nilai_perbandingan30='$nilai_perbandingan30',
            nilai_perbandingan31='$nilai_perbandingan31', nilai_perbandingan32='$nilai_perbandingan32', 
            nilai_perbandingan33='$nilai_perbandingan33',
            nilai_perbandingan35='$nilai_perbandingan35', nilai_perbandingan36='$nilai_perbandingan36', 
            nilai_perbandingan37='$nilai_perbandingan37', nilai_perbandingan38='$nilai_perbandingan38', 
            nilai_perbandingan39='$nilai_perbandingan39'";

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
                <table class="table table-striped table-responsive-sm table-hover">
                    <thead>
                        <tr>
                        <th style="width:auto" scope="col">No</th>
                        <th style="width:auto" scope="col">Nama Kriteria</th>
                        <th style="width:auto" scope="col">Nilai Perbandingan</th>
                        <th style="width:auto" scope="col">Nama Kriteria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                                    <?php $sql = "SELECT * FROM tb_kriteria join tb_namakriteria limit 1, 1";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_assoc($query)){
						        	?>
                        <th scope="row">1</th>
                        <td> <?= $data['nama_kriteria'] ?></td> 
                        <td><select name="nilai_perbandingan">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1/<?= $data['nilai_perbandingan2']?>" <?php if($data["nilai_perbandingan"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2/<?= $data['nilai_perbandingan2']?>" <?php if($data["nilai_perbandingan"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3/<?= $data['nilai_perbandingan2']?>" <?php if($data["nilai_perbandingan"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4/<?= $data['nilai_perbandingan2']?>" <?php if($data["nilai_perbandingan"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5/<?= $data['nilai_perbandingan2']?>" <?php if($data["nilai_perbandingan"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6/<?= $data['nilai_perbandingan2']?>" <?php if($data["nilai_perbandingan"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7/<?= $data['nilai_perbandingan2']?>" <?php if($data["nilai_perbandingan"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8/<?= $data['nilai_perbandingan2']?>" <?php if($data["nilai_perbandingan"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9/<?= $data['nilai_perbandingan2']?>" <?php if($data["nilai_perbandingan"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select>                                       
                        </td>
                        <td>K2 - Kondisi Dinding</td>
                        </tr>                                           <?php }}?>

                        <tr>
                        <th scope="row">2</th>
                        <td> K1 - Kondisi Atap</td>
                        <td><select name="nilai_perbandingan2">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan2"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan2"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan2"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan2"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan2"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan2"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan2"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan2"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan2"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K3 - Kondisi Lantai</td>
                        </tr>

                        <tr>
                        <th scope="row">3</th>
                        <td> K1 - Kondisi Atap</td>
                        <td><select name="nilai_perbandingan3">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan3"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan3"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan3"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan3"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan3"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan3"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan3"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan3"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan3"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K4 - Sumber Air</td>
                        </tr>

                        <tr>
                        <th scope="row">4</th>
                        <td> K1 - Kondisi Atap</td>
                        <td><select name="nilai_perbandingan4">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan4"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan4"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan4"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan4"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan4"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan4"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan4"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan4"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan4"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K5 - Bahan Bakar Masak</td>
                        </tr>

                        <tr>
                        <th scope="row">5</th>
                        <td> K1 - Kondisi Atap</td>
                        <td><select name="nilai_perbandingan5">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan5"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan5"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan5"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan5"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan5"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan5"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan5"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan5"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan5"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K6 - Fasilitas BAB</td>
                        </tr>

                        <tr>
                        <th scope="row">6</th>
                        <td> K1 - Kondisi Atap</td>
                        <td><select name="nilai_perbandingan6">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan6"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan6"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan6"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan6"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan6"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan6"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan6"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan6"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan6"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K7 - Kendaraan</td>
                        </tr>

                        <tr>
                        <th scope="row">7</th>
                        <td> K1 - Kondisi Atap</td>
                        <td><select name="nilai_perbandingan7">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan7"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan7"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan7"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan7"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan7"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan7"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan7"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan7"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan7"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K8 - Hewan Ternak</td>
                        </tr>

                        <tr>
                        <th scope="row">8</th>
                        <td> K1 - Kondisi Atap</td>
                        <td><select name="nilai_perbandingan8">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan8"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan8"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan8"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan8"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan8"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan8"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan8"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan8"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan8"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K9 - Elektronik</td>
                        </tr>

                        <tr>
                        <th scope="row">9</th>
                        <td> K2 - Kondisi Dinding</td>
                        <td><select name="nilai_perbandingan9">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan9"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan9"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan9"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan9"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan9"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan9"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan9"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan9"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan9"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K3 - Kondisi Lantai</td>
                        </tr>

                        <tr>
                        <th scope="row">10</th>
                        <td> K2 - Kondisi Dinding</td>
                        <td><select name="nilai_perbandingan10">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan10"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan10"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan10"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan10"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan10"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan10"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan10"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan10"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan10"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K4 - Sumber Air</td>
                        </tr>

                        <tr>
                        <th scope="row">11</th>
                        <td> K2 - Kondisi Dinding</td>
                        <td><select name="nilai_perbandingan11">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan11"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan11"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan11"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan11"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan11"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan11"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan11"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan11"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan11"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K5 - Bahan Bakar Masak</td>
                        </tr>

                        <tr>
                        <th scope="row">12</th>
                        <td> K2 - Kondisi Dinding</td>
                        <td><select name="nilai_perbandingan12">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan12"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan12"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan12"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan12"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan12"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan12"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan12"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan12"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan12"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K6 - Fasilitas BAB</td>
                        </tr>

                        <tr>
                        <th scope="row">13</th>
                        <td> K2 - Kondisi Dinding</td>
                        <td><select name="nilai_perbandingan13">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan13"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan13"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan13"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan13"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan13"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan13"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan13"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan13"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan13"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K7 - Kendaraan</td>
                        </tr>

                        <tr>
                        <th scope="row">14</th>
                        <td> K2 - Kondisi Dinding</td>
                        <td><select name="nilai_perbandingan14">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan14"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan14"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan14"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan14"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan14"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan14"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan14"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan14"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan14"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K8 - Hewan Ternak</td>
                        </tr>

                        <tr>
                        <th scope="row">15</th>
                        <td> K2 - Kondisi Dinding</td>
                        <td><select name="nilai_perbandingan15">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan15"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan15"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan15"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan15"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan15"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan15"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan15"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan15"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan15"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K9 - Elektronik</td>
                        </tr>

                        <tr>
                        <th scope="row">16</th>
                        <td> K3 - Kondisi Lantai</td>
                        <td><select name="nilai_perbandingan16">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan16"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan16"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan16"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan16"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan16"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan16"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan16"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan16"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan16"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K4 - Sumber Air</td>
                        </tr>

                        <tr>
                        <th scope="row">17</th>
                        <td> K3 - Kondisi Lantai</td>
                        <td><select name="nilai_perbandingan17">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan17"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan17"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan17"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan17"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan17"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan17"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan17"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan17"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan17"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K5 - Bahan Bakar Masak</td>
                        </tr>

                        <tr>
                        <th scope="row">18</th>
                        <td> K3 - Kondisi Lantai</td>
                        <td><select name="nilai_perbandingan18">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan18"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan18"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan18"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan18"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan18"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan18"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan18"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan18"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan18"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K6 - Fasilitas BAB</td>
                        </tr>

                        <tr>
                        <th scope="row">19</th>
                        <td> K3 - Kondisi Lantai</td>
                        <td><select name="nilai_perbandingan19">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan19"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan19"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan19"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan19"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan19"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan19"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan19"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan19"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan19"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K7 - Kendaraan</td>
                        </tr>

                        <tr>
                        <th scope="row">20</th>
                        <td> K3 - Kondisi Lantai</td>
                        <td><select name="nilai_perbandingan20">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan20"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan20"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan20"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan20"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan20"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan20"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan20"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan20"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan20"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K8 - Hewan Ternak</td>
                        </tr>

                        <tr>
                        <th scope="row">21</th>
                        <td> K3 - Kondisi Lantai</td>
                        <td><select name="nilai_perbandingan21">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan21"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan21"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan21"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan21"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan21"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan21"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan21"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan21"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan21"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K9 - Elektronik</td>
                        </tr>

                        <tr>
                        <th scope="row">22</th>
                        <td> K4 - Sumber Air</td>
                        <td><select name="nilai_perbandingan22">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan22"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan22"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan22"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan22"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan22"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan22"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan22"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan22"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan22"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K5 - Bahan Bakar Masak</td>
                        </tr>

                        <tr>
                        <th scope="row">23</th>
                        <td> K4 - Sumber Air</td>
                        <td><select name="nilai_perbandingan23">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan23"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan23"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan23"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan23"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan23"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan23"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan23"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan23"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan23"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K6 - Fasilitas BAB</td>
                        </tr>

                        <tr>
                        <th scope="row">25</th>
                        <td> K4 - Sumber Air</td>
                        <td><select name="nilai_perbandingan25">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan25"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan25"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan25"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan25"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan25"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan25"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan25"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan25"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan25"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K7 - Kendaraan</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">26</th>
                        <td> K4 - Sumber Air</td>
                        <td><select name="nilai_perbandingan26">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan26"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan26"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan26"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan26"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan26"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan26"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan26"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan26"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan26"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K8 - Hewan Ternak</td>
                        </tr>

                        <tr>
                        <th scope="row">27</th>
                        <td> K4 - Sumber Air</td>
                        <td><select name="nilai_perbandingan27">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan26"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan26"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan26"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan26"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan26"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan26"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan26"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan26"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan26"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K9 - Elektronik</td>
                        </tr>

                        <tr>
                        <th scope="row">29</th>
                        <td> K5 - Bahan Bakar Masak</td>
                        <td><select name="nilai_perbandingan29">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan29"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan29"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan29"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan29"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan29"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan29"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan29"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan29"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan29"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K6 - Fasilitas BAB</td>
                        </tr>

                        <tr>
                        <th scope="row">30</th>
                        <td> K5 - Bahan Bakar Masak</td>
                        <td><select name="nilai_perbandingan30">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan30"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan30"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan30"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan30"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan30"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan30"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan30"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan30"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan30"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K7 - Kendaraan</td>
                        </tr>

                        <tr>
                        <th scope="row">31</th>
                        <td> K5 - Bahan Bakar Masak</td>
                        <td><select name="nilai_perbandingan31">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan31"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan31"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan31"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan31"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan31"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan31"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan31"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan31"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan31"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K8 - Hewan Ternak</td>
                        </tr>

                        <tr>
                        <th scope="row">32</th>
                        <td> K5 - Bahan Bakar Masak</td>
                        <td><select name="nilai_perbandingan32">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan32"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan32"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan32"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan32"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan32"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan32"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan32"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan32"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan32"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K9 - Elektronik</td>
                        </tr>

                        <tr>
                        <th scope="row">33</th>
                        <td> K6 - Fasilitas BAB</td>
                        <td><select name="nilai_perbandingan33">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan33"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan33"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan33"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan33"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan33"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan33"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan33"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan33"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan33"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K7 - Kendaraan</td>
                        </tr>

                        <tr>
                        <th scope="row">35</th>
                        <td> K6 - Fasilitas BAB</td>
                        <td><select name="nilai_perbandingan35">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan35"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan35"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan35"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan35"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan35"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan35"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan35"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan35"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan35"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K8 - Hewan Ternak</td>
                        </tr>

                        <tr>
                        <th scope="row">36</th>
                        <td> K6 - Fasilitas BAB</td>
                        <td><select name="nilai_perbandingan36">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan36"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan36"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan36"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan36"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan36"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan36"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan36"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan36"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan36"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K9 - Elektronik</td>
                        </tr>

                        <tr>
                        <th scope="row">37</th>
                        <td> K7 - Kendaraan</td>
                        <td><select name="nilai_perbandingan37">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan37"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan37"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan37"]==3){echo "selected";}?>>3Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan37"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan37"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan37"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan37"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan37"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan37"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K8 - Hewan Ternak</td>
                        </tr>

                        <tr>
                        <th scope="row">38</th>
                        <td> K7 - Kendaraan</td>
                        <td><select name="nilai_perbandingan38">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan38"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan38"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan38"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan38"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan38"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan38"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan38"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan38"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan38"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K9 - Elektronik</td>
                        </tr>

                        <tr>
                        <th scope="row">39</th>
                        <td> K8 - Hewan Ternak</td>
                        <td><select name="nilai_perbandingan39">
                        <?php 
						        	
									$sql = "SELECT * FROM tb_nilaikriteria";
	                                $query = mysqli_query($koneksi, $sql); 
                                    while($data = mysqli_fetch_array($query)){
						        	 ?>
                        <option value="1" <?php if($data["nilai_perbandingan34"]==1){echo "selected";}?>>1.Sama Penting Dengan</option>
                        <option value="2" <?php if($data["nilai_perbandingan34"]==2){echo "selected";}?>>2.Mendekati Sedikit Lebih Penting dari</option>
                        <option value="3" <?php if($data["nilai_perbandingan34"]==3){echo "selected";}?>>3.Sedikit Lebih Penting dari</option>
                        <option value="4" <?php if($data["nilai_perbandingan34"]==4){echo "selected";}?>>4.Mendekati Lebih Penting dari</option>
                        <option value="5" <?php if($data["nilai_perbandingan34"]==5){echo "selected";}?>>5.Lebih Penting dari</option>
                        <option value="6" <?php if($data["nilai_perbandingan34"]==6){echo "selected";}?>>6.Mendekati Sangat Penting dari</option>
                        <option value="7" <?php if($data["nilai_perbandingan34"]==7){echo "selected";}?>>7.Sangat Penting dari</option>
                        <option value="8" <?php if($data["nilai_perbandingan34"]==8){echo "selected";}?>>8.Mendekati Mutlak dari</option>
                        <option value="9" <?php if($data["nilai_perbandingan34"]==9){echo "selected";}?>>9.Mutlak Sangat Penting</option>
                        </select><?php } ?>
                        </td>
                        <td>K9 - Elektronik</td>
                        </tr>

                        <tr>
							<td></td>
							<td><label class="ml-2">
							<input type="submit" name="btn_simpan" value="Simpan"/>
							
						</label></td>
						</tr>
                    </tbody>
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

// --- Program Utama
if (isset($_GET['aksi'])){
	switch($_GET['aksi']){
		case "create":
			echo '<a href="index.php"> &laquo; Home</a>';
			tambah($koneksi);
			break;
		default:
			echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
			tambah($koneksi);
	}
} else {
	tambah($koneksi);

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
