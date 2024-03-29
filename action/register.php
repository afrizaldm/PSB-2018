<?php

require_once('../system/conn.php');

$name = $_POST['name'];
$kota = $_POST['kota'];
$alamat = $_POST['alamat'];
$tempatLahir = $_POST['tempatLahir'];
$tglLahir = $_POST['tglLahir'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$noHp = $_POST['noHp'];
$namaWali = $_POST['namaWali'];
$kotaWali = $_POST['kotaWali'];
$alamatWali = $_POST['alamatWali'];
$telpWali = $_POST['telpWali'];
$pekerjaanWali = $_POST['pekerjaanWali'];
$asalSekolah = $_POST['asalSekolah'];
$alamatSekolah = $_POST['alamatSekolah'];
$nem = $_POST['nem'];

$datetime = new DateTime();
$no = $datetime->format('YmdHis');

$params = [
    ':no' => "NP$no",
    ':name' => $name,
    ':kota' => $kota,
    ':alamat' => $alamat,
    ':tempatLahir' => $tempatLahir,
    ':tglLahir' => $tglLahir,
    ':jk' => $jk,
    ':agama' => $agama,
    ':noHp' => $noHp,
    ':namaWali' => $namaWali,
    ':kotaWali' => $kotaWali,
    ':alamatWali' => $alamatWali,
    ':telpWali' => $telpWali,
    ':pekerjaanWali' => $pekerjaanWali,
    ':asalSekolah' => $asalSekolah,
    ':alamatSekolah' => $alamatSekolah,
    ':nem' => $nem,
];

try {
    $sql = "INSERT INTO tb_pendaftaran ( id, no, tgl, nama_lengkap, kota, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, no_hp, nama_wali, kota_wali, alamat_wali, telp_wali, pekerjaan_wali, asal_sekolah, alamat_sekolah, nilai_akhir) VALUES (null, :no, CURDATE(), :name, :kota, :alamat, :tempatLahir, :tglLahir, :jk, :agama, :noHp, :namaWali,:kotaWali, :alamatWali, :telpWali, :pekerjaanWali, :asalSekolah, :alamatSekolah, :nem)";
    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    $sqlid = "SHOW TABLE STATUS LIKE tb_pendaftaran";
    $cek = $db->prepare($sqlid);
    $cek->execute();

    header('Location:../index.php');
} catch(Exception $e){
    $res = json_encode([ 'id'=>$id,'status' => true, 'mess' => 'Selamat!!! Registrasi Berhasil']);
}