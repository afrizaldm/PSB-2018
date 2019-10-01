<?php
require_once('../system/conn.php');
session_start();
$username = $_POST['username'];
$password = $_POST["password"];
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])){
    $params = [
        'username' => $username,
        'password' => $password,
    ];

    $sql = "SELECT * FROM tb_operator WHERE username=:username AND password=:password";
    $stmt = $db->prepare($sql);

    if($stmt->execute($params))
    {
        if($stmt->rowCount() > 0)
        {
            $row = $stmt->fetch();
            $_SESSION['nik'] = $row[0]['nik'];
            $_SESSION['nama'] = $row[0]['nama'];
            $_SESSION['username'] = $row[0]['username'];
            header('Location:../admin/index.php?status=success&mess=Selamat datang kembali');
        }
        else
        {
            header('Location:../admin/login.php?status=error&mess=Username atau password yang ada masukan salah');
        }
    }
    else
    {
        header('Location:../admin/login.php?status=error&mess=Selamat datang kembali');
    }

}