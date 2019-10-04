<?php
require_once '../../vendor/autoload.php';
require_once('../../system/ceklogin.php');
require_once('../../system/conn.php');
$sql = "SELECT * FROM tb_pendaftaran status=1 ORDER BY tgl DESC";
$stmt = $db->prepare($sql);
$stmt->execute();

$mpdf = new \Mpdf\Mpdf();

ob_start();
?>
<div class="content col-md-12">
    <h1>DATA PENDAFTAR YANG SUDAH MENDAFTAR</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet similique corrupti eum qui
        numquam, perspiciatis modi earum tempore labore alias sapiente quos ea repellendus repellat,
        libero nobis maiores reprehenderit vero.</p>
    <table border="1" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">alamat</th>
                <th scope="col">kota</th>
                <th scope="col">sekolah</th>
                <th scope="col">kelamin</th>
                <th scope="col">nem</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $stmt->fetch()) { ?>
            <tr>
                <th scope="row"><a href="admin/detail_pendaftar.php?id=<?php echo $row['id'] ?>"><?php echo $row['nama_lengkap'] ?></a></th>
                <td><?php echo $row['alamat'] ?></td>
                <td><?php echo $row['kota'] ?></td>
                <td><?php echo $row['asal_sekolah'] ?></td>
                <td><?php echo $row['jenis_kelamin'] ?></td>
                <td><?php echo $row['nilai_akhir'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
$content = ob_get_clean();
$mpdf->WriteHTML($content);
$mpdf->Output();