<?php include "header.php"; ?>
<?php
    require_once('../system/conn.php');
    if(isset($_GET['id']))
    {
        $sql = "SELECT * FROM tb_pendaftaran WHERE id=:id ORDER BY tgl DESC";
        $stmt = $db->prepare($sql);
        $params = [
            'id' => $_GET['id']
        ];
        $stmt->execute($params);
        $row = $stmt->fetch();
    }
    else
    {
        $row = [
            'id' => '',
            'tgl' => '',
            'nama_lengkap' => '',
            'kota' => '',
            'alamat' => '',
            'tempat_lahir' => '',
            'tanggal_lahir' => '',
            'jenis_kelamin' => '',
            'agama' => '',
            'no_hp' => '',
            'nama_wali' => '',
            'kota_wali' => '',
            'alamat_wali' => '',
            'telp_wali' => '',
            'pekerjaan_wali' => '',
            'asal_sekolah' => '',
            'alamat_sekolah' => '',
            'nilai_akhir' => '',
            'status' => '',
        ];
    }
?>
    <div id="page" class="registrasi">
        <div class="container">
            <div class="row">
                <div class="content col-md-8">
                    <h1>FORMULIR PENDAFTARAN</h1>
                    <form action="action/edit.php" method="POST">
                        <div class="form-group">
                            <h2>Data Pribadi</h2>
                        </div>
                        <?php if(isset($_GET['id'])) { ?>
                            <input value="<?php echo $row['id'] ?>" type="hidden" name="id">
                        <?php } ?>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input value="<?php echo $row['nama_lengkap'] ?>" type="text" name="name" class="form-control" id="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea value="<?php echo $row['alamat'] ?>" class="form-control" name="alamat" id="alamat" placeholder="Alamat"><?php echo $row['alamat'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input value="<?php echo $row['kota'] ?>" type="text" class="form-control" name="kota" id="kota" placeholder="Kota">
                        </div>
                        <div class="form-group">
                            <label for="tempatlahir">Tempat Lahir</label>
                            <input value="<?php echo $row['tempat_lahir'] ?>" type="text" class="form-control" name="tempatLahir" id="tempatlahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input value="<?php echo $row['tanggal_lahir'] ?>" type="date" class="form-control" name="tglLahir" id="tgl_lahir" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Kelamin</label>
                            <select name="jk" class="form-control" id="jk" name="jk">
                                <option value="">- Pilih Jenis Kelamin -</option>
                                <option <?php echo $row['jenis_kelamin'] == "Laki-Laki" ? 'selected' : '' ?> value="Laki-Laki">Laki-Laki</option>
                                <option <?php echo $row['jenis_kelamin'] == "Perempuan" ? 'selected' : '' ?> value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Agama</label>
                            <select class="form-control" name="agama" id="agama" name="agama">
                                <option value="">- Pilih Agama -</option>
                                <option <?php echo $row['agama'] == "Islam" ? 'selected' : '' ?> value="Islam">Islam</option>
                                <option <?php echo $row['agama'] == "Kristen" ? 'selected' : '' ?> value="Kristen">Kristen</option>
                                <option <?php echo $row['agama'] == "Katolik" ? 'selected' : '' ?> value="Katolik">Katolik</option>
                                <option <?php echo $row['agama'] == "Hindu" ? 'selected' : '' ?> value="Hindu">Hindu</option>
                                <option <?php echo $row['agama'] == "Budha" ? 'selected' : '' ?> value="Budha">Budha</option>
                                <option <?php echo $row['agama'] == "Konghuchu" ? 'selected' : '' ?> value="Konghuchu">Konghuchu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hp">No HP</label>
                            <input value="<?php echo $row['no_hp'] ?>" type="text" name="noHp" class="form-control" id="hp" placeholder="No HP">
                        </div>
                        <div class="form-group">
                            <h2>Orang Tua</h2>
                        </div>
                        <div class="form-group">
                            <label for="nama_wali">Nama Wali</label>
                            <input type="text" value="<?php echo $row['nama_wali'] ?>" name="namaWali" class="form-control" id="nama_wali" placeholder="Nama Wali">
                        </div>
                        <div class="form-group">
                            <label for="alamat_wali">Alamat Wali</label>
                            <textarea class="form-control" value="<?php echo $row['alamat_wali'] ?>" name="alamatWali" id="alamat_wali" placeholder="Alamat Wali"><?php echo $row['alamat_wali'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kota_wali">Kota Wali</label>
                            <input type="text" value="<?php echo $row['kota_wali'] ?>" name="kotaWali" class="form-control" id="kota_wali" placeholder="Kota Wali">
                        </div>
                        <div class="form-group">
                            <label for="telp_wali">Telepon Wali</label>
                            <input value="<?php echo $row['telp_wali'] ?>" type="text" name="telpWali" class="form-control" id="telp_wali" placeholder="Telepon Wali">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_wali">Pekerjaan Wali</label>
                            <input type="text" value="<?php echo $row['pekerjaan_wali'] ?>" name="pekerjaanWali" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali">
                        </div>
                        <div class="form-group">
                            <h2>Pendidikan</h2>
                        </div>
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input value="<?php echo $row['asal_sekolah'] ?>" type="text" name="asalSekolah" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="alamat_sekolah">Alamat Sekolah</label>
                            <textarea value="<?php echo $row['alamat_sekolah'] ?>" class="form-control" name="alamatSekolah" id="alamat_sekolah" placeholder="Alamat Sekolah"><?php echo $row['alamat_sekolah'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nem">NEM</label>
                            <input value="<?php echo $row['nilai_akhir'] ?>" type="number" class="form-control" name="nem" id="nem" placeholder="NEM">
                        </div>
                        <button type="submit" class="btn btn-danger">SIMPAN</button>
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