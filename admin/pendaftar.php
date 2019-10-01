<?php
    require_once('../system/ceklogin.php');
    require_once('../system/conn.php');
    $sql = "SELECT * FROM tb_pendaftaran  ORDER BY tgl DESC";
    $stmt = $db->prepare($sql);
    $stmt->execute();
?>

<?php include "header.php"; ?>
    <div id="page" class="homepage">
        <div class="container">
            <div class="row">
                <div class="content col-md-12">
                    <h1>DATA PENDAFTAR</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet similique corrupti eum qui
                        numquam, perspiciatis modi earum tempore labore alias sapiente quos ea repellendus repellat,
                        libero nobis maiores reprehenderit vero.</p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">alamat</th>
                                <th scope="col">kota</th>
                                <th scope="col">sekolah</th>
                                <th scope="col">kelamin</th>
                                <th scope="col">nem</th>
                                <th scope="col"></th>
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
                                <td>
                                    <a href="action/terima.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Terima</a>
                                    <a href="action/hapus.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>