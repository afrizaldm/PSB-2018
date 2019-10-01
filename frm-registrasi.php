<?php include "header.php"; ?>
    <div id="page" class="registrasi">
        <div class="container">
            <div class="row">
                <div class="content col-md-8">
                    <h1>FORMULIR PENDAFTARAN</h1>
                    <form action="action/register.php" method="POST">
                        <div class="form-group">
                            <h2>Data Pribadi</h2>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="name" class="form-control" id="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota">
                        </div>
                        <div class="form-group">
                            <label for="tempatlahir">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempatLahir" id="tempatlahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tglLahir" id="tgl_lahir" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Kelamin</label>
                            <select name="jk" class="form-control" id="jk" name="jk">
                                <option value="">- Pilih Jenis Kelamin -</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Agama</label>
                            <select class="form-control" name="agama" id="agama" name="agama">
                                <option value="">- Pilih Agama -</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hp">No HP</label>
                            <input type="text" name="noHp" class="form-control" id="hp" placeholder="No HP">
                        </div>
                        <div class="form-group">
                            <h2>Orang Tua</h2>
                        </div>
                        <div class="form-group">
                            <label for="nama_wali">Nama Wali</label>
                            <input type="text" name="namaWali" class="form-control" id="nama_wali" placeholder="Nama Wali">
                        </div>
                        <div class="form-group">
                            <label for="alamat_wali">Alamat Wali</label>
                            <textarea class="form-control" name="alamatWali" id="alamat_wali" placeholder="Alamat Wali"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kota_wali">Kota Wali</label>
                            <input type="text" name="kotaWali" class="form-control" id="kota_wali" placeholder="Kota Wali">
                        </div>
                        <div class="form-group">
                            <label for="telp_wali">Telepon Wali</label>
                            <input type="text" name="telpWali" class="form-control" id="telp_wali" placeholder="Telepon Wali">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_wali">Pekerjaan Wali</label>
                            <input type="text" name="pekerjaanWali" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali">
                        </div>
                        <div class="form-group">
                            <h2>Pendidikan</h2>
                        </div>
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asalSekolah" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="alamat_sekolah">Alamat Sekolah</label>
                            <textarea class="form-control" name="alamatSekolah" id="alamat_sekolah" placeholder="Alamat Sekolah"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nem">NEM</label>
                            <input type="number" class="form-control" name="nem" id="nem" placeholder="NEM">
                        </div>
                        <button type="submit" class="btn btn-danger">DAFTAR</button>
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