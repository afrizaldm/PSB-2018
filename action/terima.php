<?php
require_once('../system/conn.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $status = $_GET['status'] == 1 ? 0 : 1;
    $params = [
        'id' => $id,
        'status' => $status,
    ];
    $sql = "UPDATE tb_pendaftaran SET status=:status WHERE id=:id";
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
}

header('Location:../admin/pendaftar.php');