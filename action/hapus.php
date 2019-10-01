<?php
require_once('../system/conn.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $params = [
        'id' => $id,
    ];
    $sql = "DELETE FROM tb_pendaftaran WHERE id=:id";
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
}

header('Location:../admin/pendaftar.php');