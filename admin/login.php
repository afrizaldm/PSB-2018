<?php include "header.php"; ?>
    <div id="page" class="registrasi">
        <div class="container">
            <div class="row">
                <div class="content col-md-8">
                    <h1>LOGIN</h1>
                    <form action="action/login.php" method="POST">
                        <div class="form-group">
                            <label for="nama">Username</label>
                            <input type="text" name="username" class="form-control" id="nama" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-danger">MASUK</button>
                    </form>
                </div>
                <div class="sidebar col-md-4">
                    <div class="widget">
                        <h2>Download</h2>
                        <ul>
                            <li>
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