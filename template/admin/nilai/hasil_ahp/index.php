<?php $title = "Perbandingan Kriteria";
include_once('../../_header.php');

?>

			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <ol>
                            <li class="breadcrumb-item">
                               <h3>Perbandingan Kriteria</h3>
                            </li>
                        </ol>

                        <div class="row">

                        	<div class="col-xl-auto offset-xl-1">


<?php
// --- Fungsi Baca Data Perbandingan Kriteria dengan Kriteria (Read)
// function tampil_data_kriteria($koneksi){
	$sql = "SELECT * FROM tb_nilaikriteria";
	$query = mysqli_query($koneksi, $sql);
	$nomor = 1;
	?>
		<fieldset>
		<div class='table-responsive'>
		<table class='table table-responsive-sm table-bordered table-striped table-hover' id='user' border='1' cellpadding='10'>
		<thead>
			<tr>
				<th border='0'> </th>
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
		?>
			<tr>
			<tr>
				<th>Kondisi Atap</th>
				<td><?= $no1=round($kriteria1=$data['nilai_perbandingan']/$data['nilai_perbandingan'],2) ?></td>
				<td><?= $no2=$data['nilai_perbandingan']?></td>
				<td><?= $no3=$data['nilai_perbandingan2']?></td>
				<td><?= $no4=$data['nilai_perbandingan3']?></td>
				<td><?= $no5=$data['nilai_perbandingan4']?></td>
				<td><?= $no6=$data['nilai_perbandingan5']?></td>
				<td><?= $no7=$data['nilai_perbandingan6']?></td>
				<td><?= $no8=$data['nilai_perbandingan7']?></td>
				<td><?= $no9=$data['nilai_perbandingan8']?></td>
				
			</tr>
			<tr><th>Kondisi Dinding</th>
			<td><?= $no11=$kriteria1/$data['nilai_perbandingan'] ?></td>
			<td><?= $no12=$data['nilai_perbandingan']/$data['nilai_perbandingan'] ?></td>
			<td><?= $no13=$data['nilai_perbandingan9']?></td>
			<td><?= $no14=$data['nilai_perbandingan10']?></td>
			<td><?= $no15=$data['nilai_perbandingan11']?></td>
			<td><?= $no16=$data['nilai_perbandingan12']?></td>
			<td><?= $no17=$data['nilai_perbandingan13']?></td>
			<td><?= $no18=$data['nilai_perbandingan14']?></td>
			<td><?= $no19=$data['nilai_perbandingan15']?></td>
			</tr>
			<tr><th>Kondisi Lantai</th>
			<td><?= $no21=$kriteria1/$data['nilai_perbandingan2'] ?></td>
			<td><?= $no22=round($kriteria1/$data['nilai_perbandingan9'],2) ?></td>
			<td><?= $no23=$data['nilai_perbandingan16']/$data['nilai_perbandingan16']?></td>
			<td><?= $no24=$data['nilai_perbandingan16']?></td>
			<td><?= $no25=$data['nilai_perbandingan17']?></td>
			<td><?= $no26=$data['nilai_perbandingan18']?></td>
			<td><?= $no27=$data['nilai_perbandingan19']?></td>
			<td><?= $no28=$data['nilai_perbandingan20']?></td>
			<td><?= $no29=$data['nilai_perbandingan21']?></td>
			</tr>
			<tr><th>Sumber Air</th>
			<td><?= $no31=round($kriteria1/$data['nilai_perbandingan3'],2) ?></td>
			<td><?= $no32=round($kriteria1/$data['nilai_perbandingan10'],2) ?></td>
			<td><?= $no33=round($kriteria1/$data['nilai_perbandingan16'],2) ?></td>
			<td><?= $no34=$data['nilai_perbandingan22']/$data['nilai_perbandingan22']?></td>
			<td><?= $no35=$data['nilai_perbandingan22']?></td>
			<td><?= $no36=$data['nilai_perbandingan23']?></td>
			<td><?= $no37=$data['nilai_perbandingan25']?></td>
			<td><?= $no38=$data['nilai_perbandingan26']?></td>
			<td><?= $no39=$data['nilai_perbandingan27']?></td>
			</tr>
			<tr><th>Bahan Bakar Masak</th>
			<td><?= $no41=$kriteria1/$data['nilai_perbandingan4'] ?></td>
			<td><?= $no42=round($kriteria1/$data['nilai_perbandingan11'],2) ?></td>
			<td><?= $no43=round($kriteria1/$data['nilai_perbandingan17'],2) ?></td>
			<td><?= $no44=round($kriteria1/$data['nilai_perbandingan21'],2) ?></td>
			<td><?= $no45=$data['nilai_perbandingan29']/$data['nilai_perbandingan29']?></td>
			<td><?= $no46=$data['nilai_perbandingan29']?></td>
			<td><?= $no47=$data['nilai_perbandingan30']?></td>
			<td><?= $no48=$data['nilai_perbandingan31']?></td>
			<td><?= $no49=$data['nilai_perbandingan32']?></td>
			</tr>
			<tr><th>Fasilitas BAB</th>
			<td><?= $no51=$kriteria1/$data['nilai_perbandingan5'] ?></td>
			<td><?= $no52=round($kriteria1/$data['nilai_perbandingan12'],2) ?></td>
			<td><?= $no53=round($kriteria1/$data['nilai_perbandingan18'],2) ?></td>
			<td><?= $no54=round($kriteria1/$data['nilai_perbandingan22'],2) ?></td>
			<td><?= $no55=round($kriteria1/$data['nilai_perbandingan27'],2) ?></td>
			<td><?= $no56=$data['nilai_perbandingan33']/$data['nilai_perbandingan33']?></td>
			<td><?= $no57=$data['nilai_perbandingan33']?></td>
			<td><?= $no58=$data['nilai_perbandingan35']?></td>
			<td><?= $no59=$data['nilai_perbandingan36']?></td>
			</tr>
			<tr><th>Kendaraan</th>
			<td><?= $no61=round($kriteria1/$data['nilai_perbandingan6'],2) ?></td>
			<td><?= $no62=round($kriteria1/$data['nilai_perbandingan13'],2) ?></td>
			<td><?= $no63=round($kriteria1/$data['nilai_perbandingan19'],2) ?></td>
			<td><?= $no64=round($kriteria1/$data['nilai_perbandingan23'],2) ?></td>
			<td><?= $no65=round($kriteria1/$data['nilai_perbandingan27'],2) ?></td>
			<td><?= $no66=round($kriteria1/$data['nilai_perbandingan31'],2) ?></td>
			<td><?= $no67=$data['nilai_perbandingan37']/$data['nilai_perbandingan37']?></td>
			<td><?= $no68=$data['nilai_perbandingan37']?></td>
			<td><?= $no69=$data['nilai_perbandingan38']?></td>
			</tr>
			<tr><th>Hewan Ternak</th>
			<td><?= $no71=round($kriteria1/$data['nilai_perbandingan7'],2) ?></td>
			<td><?= $no72=round($kriteria1/$data['nilai_perbandingan14'],2) ?></td>
			<td><?= $no73=round($kriteria1/$data['nilai_perbandingan20'],2) ?></td>
			<td><?= $no74=round($kriteria1/$data['nilai_perbandingan25'],2) ?></td>
			<td><?= $no75=round($kriteria1/$data['nilai_perbandingan29'],2) ?></td>
			<td><?= $no76=round($kriteria1/$data['nilai_perbandingan32'],2) ?></td>
			<td><?= $no77=round($kriteria1/$data['nilai_perbandingan35'],2) ?></td>
			<td><?= $no78=$data['nilai_perbandingan39']/$data['nilai_perbandingan39']?></td>
			<td><?= $no79=$data['nilai_perbandingan39']?></td>
			
			</tr>
			<tr><th>Elektronik</th>
			<td><?= $no81=$kriteria1/$data['nilai_perbandingan8'] ?></td>
			<td><?= $no82=round($kriteria1/$data['nilai_perbandingan15'],2) ?></td>
			<td><?= $no83=round($kriteria1/$data['nilai_perbandingan21'],2) ?></td>
			<td><?= $no84=round($kriteria1/$data['nilai_perbandingan26'],2) ?></td>
			<td><?= $no85=round($kriteria1/$data['nilai_perbandingan30'],2) ?></td>
			<td><?= $no86=round($kriteria1/$data['nilai_perbandingan33'],2) ?></td>
			<td><?= $no87=round($kriteria1/$data['nilai_perbandingan36'],2) ?></td>
			<td><?= $no88=round($kriteria1/$data['nilai_perbandingan37'],2) ?></td>
			<td><?= $no89=$data['nilai_perbandingan38']/$data['nilai_perbandingan38']?></td>
			</tr>
			
			<thead class="thead-light"><tr><th>Jumlah</th>
			<?php $a1=array($no1,$no11,$no21,$no31,$no41,$no51,$no61,$no71,$no81);
				  $a2=array($no2,$no12,$no22,$no32,$no42,$no52,$no62,$no72,$no82);
				  $a3=array($no3,$no13,$no23,$no33,$no43,$no53,$no63,$no73,$no83);
				  $a4=array($no4,$no14,$no24,$no34,$no44,$no54,$no64,$no74,$no84);
				  $a5=array($no5,$no15,$no25,$no35,$no45,$no55,$no65,$no75,$no85);
				  $a6=array($no6,$no16,$no26,$no36,$no46,$no56,$no66,$no76,$no86);
				  $a7=array($no7,$no17,$no27,$no37,$no47,$no57,$no67,$no77,$no87);
				  $a8=array($no8,$no18,$no28,$no38,$no48,$no58,$no68,$no78,$no88);
				  $a9=array($no9,$no19,$no29,$no39,$no49,$no59,$no69,$no79,$no89); ?>
			<td><?php $jmla1 = array_sum($a1); echo "$jmla1" ?></td>
			<td><?php $jmla2 = array_sum($a2); echo "$jmla2" ?></td>
			<td><?php $jmla3 = array_sum($a3); echo "$jmla3" ?></td>
			<td><?php $jmla4 = array_sum($a4); echo "$jmla4" ?></td>
			<td><?php $jmla5 = array_sum($a5); echo "$jmla5" ?></td>
			<td><?php $jmla6 = array_sum($a6); echo "$jmla6" ?></td>
			<td><?php $jmla7 = array_sum($a7); echo "$jmla7" ?></td>
			<td><?php $jmla8 = array_sum($a8); echo "$jmla8" ?></td>
			<td><?php $jmla9 = array_sum($a9); echo "$jmla9" ?></td>
			</tr></thead>
				
			</tr>
			</tbody>
			</table>
			</fieldset>
			</br>
			</br>
			</br>
		<?php
	




// --- Tutup Fungsi Baca Data (Read)

	

	$sql1 = "SELECT * FROM tb_nilaikriteria";
	$query1 = mysqli_query($koneksi, $sql1);
	$nomor1 = 1;
	
		echo "<fieldset>";
		echo "<div class='table-responsive'>";
		echo "<table class='table table-responsive-sm table-bordered table-striped table-hover' id='user' border='1' cellpadding='12'>";
		echo "<thead>";
			echo "<tr>";
			echo "<th border='0'> </th>
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
				<th>priority vector</th>

				";	
			echo "</>";
		echo "</thead>";
		echo "<tbody>";
	while($data = mysqli_fetch_array($query1)){
		$kriteria2 = "1";
		?> 
		

			<tr>
			<tr><th>Kondisi Atap</th>
				<td><?= $no1=round($kriteria2=$data['nilai_perbandingan']/$data['nilai_perbandingan'],2)/$jmla1 ?></td>
				<td><?= $no2=$data['nilai_perbandingan']/$jmla2?></td>
				<td><?= $no3=$data['nilai_perbandingan2']/$jmla3 ?></td>
				<td><?= $no4=$data['nilai_perbandingan3']/$jmla4 ?></td>
				<td><?= $no5=$data['nilai_perbandingan4']/$jmla5 ?></td>
				<td><?= $no6=$data['nilai_perbandingan5']/$jmla6 ?></td>
				<td><?= $no7=$data['nilai_perbandingan6']/$jmla7 ?></td>
				<td><?= $no8=$data['nilai_perbandingan7']/$jmla8 ?></td>
				<td><?= $no9=$data['nilai_perbandingan8']/$jmla9 ?></td>
				 <?php $c1=array($no1,$no2,$no3,$no4,$no5,$no6,$no7,$no8,$no9); ?>
			<td><?php $jmlc1 = array_sum($c1); echo "$jmlc1" ?></td>
			<td><?php $jmld1 = $jmlc1/9 ; echo "$jmld1" ?></td>

			</tr>
			<tr><th>Kondisi Dinding</th>
			<td><?= $no11=$kriteria2/$data['nilai_perbandingan']/$jmla1  ?></td>
			<td><?= $no12=$data['nilai_perbandingan']/$data['nilai_perbandingan']/$jmla2  ?></td>
			<td><?= $no13=$data['nilai_perbandingan9']/$jmla3 ?></td>
			<td><?= $no14=$data['nilai_perbandingan10']/$jmla4 ?></td>
			<td><?= $no15=$data['nilai_perbandingan11']/$jmla5 ?></td>
			<td><?= $no16=$data['nilai_perbandingan12']/$jmla6 ?></td>
			<td><?= $no17=$data['nilai_perbandingan13']/$jmla7 ?></td>
			<td><?= $no18=$data['nilai_perbandingan14']/$jmla8 ?></td>
			<td><?= $no19=$data['nilai_perbandingan15']/$jmla9 ?></td>
			 <?php $c2=array($no11,$no12,$no13,$no14,$no15,$no16,$no17,$no18,$no19); ?>
			<td><?php $jmlc2 = array_sum($c2); echo "$jmlc2" ?></td>
			<td><?php $jmld2 = $jmlc2/9 ; echo "$jmld2" ?></td>


			</tr>
			<tr><th>Kondisi Lantai</th>
			<td><?= $no21=$kriteria2/$data['nilai_perbandingan2']/$jmla1  ?></td>
			<td><?= $no22=round($kriteria2/$data['nilai_perbandingan9'],2)/$jmla2  ?></td>
			<td><?= $no23=$data['nilai_perbandingan16']/$data['nilai_perbandingan16']/$jmla3 ?></td>
			<td><?= $no24=$data['nilai_perbandingan16']/$jmla4 ?></td>
			<td><?= $no25=$data['nilai_perbandingan17']/$jmla5 ?></td>
			<td><?= $no26=$data['nilai_perbandingan18']/$jmla6 ?></td>
			<td><?= $no27=$data['nilai_perbandingan19']/$jmla7 ?></td>
			<td><?= $no28=$data['nilai_perbandingan20']/$jmla8 ?></td>
			<td><?= $no29=$data['nilai_perbandingan21']/$jmla9 ?></td>
			 <?php $c3=array($no21,$no22,$no23,$no24,$no25,$no26,$no27,$no28,$no29); ?>
			<td><?php $jmlc3 = array_sum($c3); echo "$jmlc3" ?></td>
			<td><?php $jmld3 = $jmlc3/9 ; echo "$jmld3" ?></td>

			</tr>
			<tr><th>Sumber Air</th>
			<td><?= $no31=round($kriteria2/$data['nilai_perbandingan3'],2)/$jmla1  ?></td>
			<td><?= $no32=round($kriteria2/$data['nilai_perbandingan10'],2)/$jmla2  ?></td>
			<td><?= $no33=round($kriteria2/$data['nilai_perbandingan16'],2)/$jmla3  ?></td>
			<td><?= $no34=$data['nilai_perbandingan22']/$data['nilai_perbandingan22']/$jmla4 ?></td>
			<td><?= $no35=$data['nilai_perbandingan22']/$jmla5 ?></td>
			<td><?= $no36=$data['nilai_perbandingan23']/$jmla6 ?></td>
			<td><?= $no37=$data['nilai_perbandingan25']/$jmla7 ?></td>
			<td><?= $no38=$data['nilai_perbandingan26']/$jmla8 ?></td>
			<td><?= $no39=$data['nilai_perbandingan27']/$jmla9 ?></td>
			 <?php $c4=array($no31,$no32,$no33,$no34,$no35,$no36,$no37,$no38,$no39); ?>
			<td><?php $jmlc4 = array_sum($c4); echo "$jmlc4" ?></td>
			<td><?php $jmld4 = $jmlc4/9 ; echo "$jmld4" ?></td>


			</tr>
			<tr><th>Bahan Bakar Masak</th>
			<td><?= $no41=$kriteria2/$data['nilai_perbandingan4']/$jmla1  ?></td>
			<td><?= $no42=round($kriteria2/$data['nilai_perbandingan11'],2)/$jmla2  ?></td>
			<td><?= $no43=round($kriteria2/$data['nilai_perbandingan17'],2)/$jmla3  ?></td>
			<td><?= $no44=round($kriteria2/$data['nilai_perbandingan21'],2)/$jmla4  ?></td>
			<td><?= $no45=$data['nilai_perbandingan29']/$data['nilai_perbandingan29']/$jmla5 ?></td>
			<td><?= $no46=$data['nilai_perbandingan29']/$jmla6 ?></td>
			<td><?= $no47=$data['nilai_perbandingan30']/$jmla7 ?></td>
			<td><?= $no48=$data['nilai_perbandingan31']/$jmla8 ?></td>
			<td><?= $no49=$data['nilai_perbandingan32']/$jmla9 ?></td>
			 <?php $c5=array($no41,$no42,$no43,$no44,$no45,$no46,$no47,$no48,$no49); ?>
			<td><?php $jmlc5 = array_sum($c5); echo "$jmlc5" ?></td>
			<td><?php $jmld5 = $jmlc5/9 ; echo "$jmld5" ?></td>

			</tr>
			<tr><th>Fasilitas BAB</th>
			<td><?= $no51=$kriteria2/$data['nilai_perbandingan5']/$jmla1  ?></td>
			<td><?= $no52=round($kriteria2/$data['nilai_perbandingan12'],2)/$jmla2  ?></td>
			<td><?= $no53=round($kriteria2/$data['nilai_perbandingan18'],2)/$jmla3  ?></td>
			<td><?= $no54=round($kriteria2/$data['nilai_perbandingan22'],2)/$jmla4  ?></td>
			<td><?= $no55=round($kriteria2/$data['nilai_perbandingan27'],2)/$jmla5  ?></td>
			<td><?= $no56=$data['nilai_perbandingan33']/$data['nilai_perbandingan33']/$jmla6 ?></td>
			<td><?= $no57=$data['nilai_perbandingan33']/$jmla7 ?></td>
			<td><?= $no58=$data['nilai_perbandingan35']/$jmla8 ?></td>
			<td><?= $no59=$data['nilai_perbandingan36']/$jmla9 ?></td>
			 <?php $c6=array($no51,$no52,$no53,$no54,$no55,$no56,$no57,$no58,$no59); ?>
			<td><?php $jmlc6 = array_sum($c6); echo "$jmlc6" ?></td>
			<td><?php $jmld6 = $jmlc6/9 ; echo "$jmld6" ?></td>

			</tr>
			<tr><th>Kendaraan</th>
			<td><?= $no61=round($kriteria2/$data['nilai_perbandingan6'],2)/$jmla1  ?></td>
			<td><?= $no62=round($kriteria2/$data['nilai_perbandingan13'],2)/$jmla2  ?></td>
			<td><?= $no63=round($kriteria2/$data['nilai_perbandingan19'],2)/$jmla3  ?></td>
			<td><?= $no64=round($kriteria2/$data['nilai_perbandingan23'],2)/$jmla4  ?></td>
			<td><?= $no65=round($kriteria2/$data['nilai_perbandingan27'],2)/$jmla5  ?></td>
			<td><?= $no66=round($kriteria2/$data['nilai_perbandingan31'],2)/$jmla6  ?></td>
			<td><?= $no67=$data['nilai_perbandingan37']/$data['nilai_perbandingan37']/$jmla7 ?></td>
			<td><?= $no68=$data['nilai_perbandingan37']/$jmla8 ?></td>
			<td><?= $no69=$data['nilai_perbandingan38']/$jmla9 ?></td>
			 <?php $c7=array($no61,$no62,$no63,$no64,$no65,$no66,$no67,$no68,$no69); ?>
			<td><?php $jmlc7 = array_sum($c7); echo "$jmlc7" ?></td>
			<td><?php $jmld7 = $jmlc7/9 ; echo round($jmld7,2) ?></td>



			</tr>
			<tr><th>Hewan Ternak</th>
			<td><?= $no71=round($kriteria2/$data['nilai_perbandingan7'],2)/$jmla1  ?></td>
			<td><?= $no72=round($kriteria2/$data['nilai_perbandingan14'],2)/$jmla2  ?></td>
			<td><?= $no73=round($kriteria2/$data['nilai_perbandingan20'],2)/$jmla3  ?></td>
			<td><?= $no74=round($kriteria2/$data['nilai_perbandingan25'],2)/$jmla4  ?></td>
			<td><?= $no75=round($kriteria2/$data['nilai_perbandingan29'],2)/$jmla5  ?></td>
			<td><?= $no76=round($kriteria2/$data['nilai_perbandingan32'],2)/$jmla6  ?></td>
			<td><?= $no77=round($kriteria2/$data['nilai_perbandingan35'],2)/$jmla7  ?></td>
			<td><?= $no78=$data['nilai_perbandingan39']/$data['nilai_perbandingan39']/$jmla8 ?></td>
			<td><?= $no79=$data['nilai_perbandingan39']/$jmla9 ?></td>
			 <?php $c8=array($no71,$no72,$no73,$no74,$no75,$no76,$no77,$no78,$no79); ?>
			<td><?php $jmlc8 = array_sum($c8); echo "$jmlc8" ?></td>
			<td><?php $jmld8 = $jmlc8/9 ; echo "$jmld8" ?></td>

			</tr>
			<tr><th>Elektronik</th>
			<td><?= $no81=$kriteria2/$data['nilai_perbandingan8']/$jmla1  ?></td>
			<td><?= $no82=round($kriteria2/$data['nilai_perbandingan15'],2)/$jmla2  ?></td>
			<td><?= $no83=round($kriteria2/$data['nilai_perbandingan21'],2)/$jmla3  ?></td>
			<td><?= $no84=round($kriteria2/$data['nilai_perbandingan26'],2)/$jmla4  ?></td>
			<td><?= $no85=round($kriteria2/$data['nilai_perbandingan30'],2)/$jmla5  ?></td>
			<td><?= $no86=round($kriteria2/$data['nilai_perbandingan33'],2)/$jmla6  ?></td>
			<td><?= $no87=round($kriteria2/$data['nilai_perbandingan36'],2)/$jmla7  ?></td>
			<td><?= $no88=round($kriteria2/$data['nilai_perbandingan37'],2)/$jmla8  ?></td>
			<td><?= $no89=$data['nilai_perbandingan38']/$data['nilai_perbandingan38']/$jmla9 ?></td>
 				<?php $c9=array($no81,$no82,$no83,$no84,$no85,$no86,$no87,$no88,$no89); ?>
			<td><?php $jmlc9 = array_sum($c9); echo "$jmlc9" ?></td>
			<td><?php $jmld9 = $jmlc9/9 ; echo "$jmld9" ?></td>

			</tr>
				
			</tr>

			<thead class="thead-light"><tr><th>Jumlah</th>
			<?php $b1=array($no1,$no11,$no21,$no31,$no41,$no51,$no61,$no71,$no81);
				  $b2=array($no2,$no12,$no22,$no32,$no42,$no52,$no62,$no72,$no82);
				  $b3=array($no3,$no13,$no23,$no33,$no43,$no53,$no63,$no73,$no83);
				  $b4=array($no4,$no14,$no24,$no34,$no44,$no54,$no64,$no74,$no84);
				  $b5=array($no5,$no15,$no25,$no35,$no45,$no55,$no65,$no75,$no85);
				  $b6=array($no6,$no16,$no26,$no36,$no46,$no56,$no66,$no76,$no86);
				  $b7=array($no7,$no17,$no27,$no37,$no47,$no57,$no67,$no77,$no87);
				  $b8=array($no8,$no18,$no28,$no38,$no48,$no58,$no68,$no78,$no88);
				  $b9=array($no9,$no19,$no29,$no39,$no49,$no59,$no69,$no79,$no89); ?>
			<td><?php $jmlb1 = array_sum($b1); echo "$jmlb1" ?></td>
			<td><?php $jmlb2 = array_sum($b2); echo "$jmlb2" ?></td>
			<td><?php $jmlb3 = array_sum($b3); echo "$jmlb3" ?></td>
			<td><?php $jmlb4 = array_sum($b4); echo "$jmlb4" ?></td>
			<td><?php $jmlb5 = array_sum($b5); echo "$jmlb5" ?></td>
			<td><?php $jmlb6 = array_sum($b6); echo "$jmlb6" ?></td>
			<td><?php $jmlb7 = array_sum($b7); echo "$jmlb7" ?></td>
			<td><?php $jmlb8 = array_sum($b8); echo "$jmlb8" ?></td>
			<td><?php $jmlb9 = array_sum($b9); echo "$jmlb9" ?></td>
			
			<?php $c10=array($jmlb1,$jmlb2,$jmlb3,$jmlb4,$jmlb5,$jmlb6,$jmlb7,$jmlb8,$jmlb9); ?>
			<td><?php $jmlc10 = array_sum($c10); echo "$jmlc10" ?></td>	
			
			</tr></thead>
				
			</tr>
			

		<?php
	
	echo "</tbody>";
	echo "</table>";
	echo "</fieldset>";
	echo "</br>";
	echo "</br>";
	echo "</br>";

}}

// --- Tutup Fungsi Baca Data (Read)

// ===================================================================

?>

<div class="container-fluid">
		<li class="breadcrumb-item">
			<h3>Hasil SAW</h3>
		</li>

	<div class="row">

		<div class="col-xl-auto offset-xl-1">
		</div>
	</div>
</div>


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
				<td><?= $value["kecamatan"] ?></td>
				<td><?= $value["kelurahan"] ?></td>
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
    $crMax = mysqli_query($koneksi, "SELECT max(kit1) as maxK1, max(kit2) as maxK2, max(kit3) as maxK3, max(kit4) as maxK4, max(kit5) as maxK5, max(kit6) as maxK6, max(kit7) as maxK7, max(kit8) as maxK8, max(kit9) as maxK9 FROM tb_alternatif");
    $max = mysqli_fetch_array($crMax);
    // var_dump($max);

    /* Hitung Normalisasi */
	$sql1 = "SELECT * FROM tb_alternatif ORDER BY `kit1` DESC, `kit2` DESC, `kit3` DESC, `kit4` DESC, `kit5` DESC, `kit6` DESC, `kit7` DESC, `kit8` DESC, `kit9` DESC";
	$query1 = mysqli_query($koneksi, $sql1);
	$nomor1 = 1;
	$ranking = 1;
	?>
		<fieldset>
		<div class='table-responsive'>
		<table class='table table-responsive-sm table-bordered table-striped table-hover' id='user' border='1' cellpadding='12'>
		<thead>
			<tr>
				<th border='0'>No</th>
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
                <td><?= $hasil['nik'] ?></td>
                <td><?= $hasil['nama_alternatif'] ?></td>
                <td><?= $hasil['alamat'] ?></td>
                <td><?= $hasil['kecamatan'] ?></td>
                <td><?= $hasil['kelurahan'] ?></td>
                <td><?= $hasil['periode'] ?></td>
				<td><?= $no1=round($hasil['kit1']/$max['maxK1'],2) ?></td>
				<td><?= $no2=round($hasil['kit2']/$max['maxK2'],2) ?></td>
				<td><?= $no3=round($hasil['kit3']/$max['maxK3'],2) ?></td>
				<td><?= $no4=round($hasil['kit4']/$max['maxK4'],2) ?></td>
				<td><?= $no5=round($hasil['kit5']/$max['maxK5'],2) ?></td>
				<td><?= $no6=round($hasil['kit6']/$max['maxK6'],2) ?></td>
				<td><?= $no7=round($hasil['kit7']/$max['maxK7'],2) ?></td>
				<td><?= $no8=round($hasil['kit8']/$max['maxK8'],2) ?></td>
				<td><?= $no9=round($hasil['kit9']/$max['maxK9'],2) ?></td>
				<?php $jm1=array(($no1*$jmld1),($no2*$jmld2),($no3*$jmld3),($no4*$jmld4),($no5*$jmld5),($no6*$jmld6),($no7*$jmld7),($no8*$jmld8),($no9*$jmld9)); ?>
                <td><?php $jm2=array_sum($jm1); echo "$jm2" ?></td>
                <td><?= $ranking++ ?></td>
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
                $('#user').DataTable(
                    {
                        "pageLength": 4,
                        responsive: true,
                        select: true
                    }
                    );
            } );
        </script>
