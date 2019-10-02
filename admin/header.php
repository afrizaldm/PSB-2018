<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PSB | SMA MUHAMMADIYAH PONOROGO | ADMIN</title>
    <base href="http://localhost/psb/">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="logo col-md-3">
                    <img src="assets/images/logo.png" alt="">
                </div>
                <div class="title col-md-9">
                    <h1>ADMIN DASHBOARD</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">PSB</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="admin/index.php">Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" admin/pendaftar.php">Data Pendaftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/terdaftar.php">Data Diterima</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/laporan.php">Laporan</a>
                        </li>                        
                    </ul>
                    <a href="action/logout.php">
                        <button type="button" class="btn btn-dark">Log Out</button>
                    </a>
                </div>
            </nav>
        </div>
    </div>