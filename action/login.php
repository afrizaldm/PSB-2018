<?php
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
            echo [ 'status' => true, 'mess' => 'Selamat!!! Login Berhasil'];
        }
        else
        {
            echo [ 'status' => false, 'mess' => 'Username atau Password yang anda masukan salah'];
        }
    }
    else
    {
        echo [ 'status' => false, 'mess' => 'maaf sedang terjadi kesalahan'];
    }

}