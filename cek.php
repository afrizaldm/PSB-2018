<?php include "header.php"; ?>
<?php
    require_once('system/conn.php');
    if(isset($_POST['no']))
    {
        $no = $_POST['no'];
        $status = "MAAF PENDAFTARAN DENGAN NO $no BELUM DITERIMA";
        $sql = "SELECT * FROM tb_pendaftaran WHERE no=:no";
        $stmt = $db->prepare($sql);
        $params = [
            'no' => $no
        ];
        $stmt->execute($params);
        if($stmt->rowCount() > 0)
        {
            $status = "SELAMAT!!! PENDAFTARAN DENGAN NO $no TELAH DI TERIMA";
        }
    }
    else
    {
        $status = "";
    }
?>
    <div id="page" class="registrasi">
        <div class="container">
            <div class="row">
                <div class="content col-md-8">
                    <h1>CEK PENDAFTARAN ANDA</h1>
                    <form action="action/register.php" method="POST">
                        <div class="form-group">
                            <h2>Masukkan No Pendaftaran</h2>
                        </div>
                        <div class="form-group">
                            <label for="nama">No</label>
                            <input type="text" name="no" class="form-control" id="no" placeholder="No Pendaftaran">
                        </div>
                        <button type="submit" class="btn btn-danger">CEK</button>
                        <div class="form-group">
                            <h2><?php echo $status ?></h2>
                        </div>
                    </form>
                </div>
                <div class="sidebar col-md-4">
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