<?php
    require_once('../system/ceklogin.php');
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
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Siswa Yang Mendaftar</th>
                                <td>
                                    <a href="admin/laporan/pendaftar.php" class="btn btn-primary">Cetak laporan</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Siswa Yang Diterima</th>
                                <td>
                                    <a href="admin/laporan/terdaftar.php" class="btn btn-primary">Cetak laporan</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sidebar col-md-4">
                    <div class="widget">
                        <h2>Download</h2>
                        <ul>
                            <li>
                                <a href="admin/pendaftar.php">Data Pendaftar</a>
                            </li>
                            <li>
                                <a href="admin/terdaftar.php">Data Diterima</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>