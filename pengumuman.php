<?php
    require_once('system/ceklogin.php');
    require_once('system/conn.php');
    $sql = "SELECT * FROM tb_pendaftaran WHERE status = 1 ORDER BY nilai_akhir DESC";
    $stmt = $db->prepare($sql);
    $stmt->execute();
?>
<?php include "header.php"; ?>
    <div id="page" class="homepage">
        <div class="container">
            <div class="row">
                <div class="content col-md-8">
                    <h1>Selamat Datang</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet similique corrupti eum qui
                        numquam, perspiciatis modi earum tempore labore alias sapiente quos ea repellendus repellat,
                        libero nobis maiores reprehenderit vero.</p>
                    <table class="table table-hover">
                    <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">sekolah</th>
                                <th scope="col">nem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $stmt->fetch()) { ?>
                            <tr>
                                <th scope="row"><?php echo $row['no'] ?></th>
                                <td><?php echo $row['nama_lengkap'] ?></td>
                                <td><?php echo $row['asal_sekolah'] ?></td>
                                <td><?php echo $row['nilai_akhir'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="sidebar col-md-4">
                    <div class="widget">
                        <a href="frm-registrasi.php" class="btn btn-danger">DAFTAR SEKARANG</a>
                    </div>
                    <div class="widget">
                        <h2>Download</h2>
                        <ul>
                            <li>
                                <a href="#">Brosur</a>
                            </li>
                            <li>
                                <a href="#">Persyaratan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>