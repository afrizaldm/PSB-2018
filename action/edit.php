<?php

require_once('../system/conn.php');

$id = $_POST['id'];
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

$params = [
    ':id' => $id,
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
    $sql = "UPDATE tb_pendaftaran SET nama_lengkap=:name, kota=:kota, alamat=:alamat, tempat_lahir=:tempatLahir, tanggal_lahir=:tglLahir, jenis_kelamin=:jk, agama=:agama, no_hp=:noHp, nama_wali=:namaWali, kota_wali=:kotaWali, alamat_wali=:alamatWali, telp_wali=:telpWali, pekerjaan_wali=:pekerjaanWali, asal_sekolah=:asalSekolah, alamat_sekolah=:alamatSekolah, nilai_akhir=:nem WHERE id=:id";
    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    header('Location:../admin/pendaftar.php');
} catch(Exception $e){
    $res = json_encode([ 'id'=>$id,'status' => true, 'mess' => 'Selamat!!! Registrasi Berhasil']);
}