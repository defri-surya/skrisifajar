<?php
include "../_config/config.php";

$id = $_POST['id'];
$modul = $_POST['modul'];

if ($modul == "Kelurahan") {
    $sql = mysqli_query($koneksi,"SELECT * FROM tb_kelurahan WHERE kecamatan_id = '$id' ORDER BY nama ASC") or die (mysqli_error($koneksi));
    $kelurahan = '<option>-- Pilih Kelurahan --</option>';
    while ($dt = mysqli_fetch_array($sql)) {
        $kelurahan .= '<option value="'.$dt['id'].'">'.$dt['nama'].'</option>';
    }
    echo $kelurahan;
}
?>