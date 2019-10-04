<?php
require_once '../../vendor/autoload.php';
require_once('../../system/ceklogin.php');
require_once('../../system/conn.php');
$sql = "SELECT * FROM tb_pendaftaran ORDER BY tgl DESC";
$stmt = $db->prepare($sql);
$stmt->execute();

$mpdf = new \Mpdf\Mpdf();

ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test table</title>
</head>
<style>
   table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

	/* Zebra striping */
	tr:nth-of-type(odd) { 
		background: #eee; 
		}

	th { 
		background: #3498db; 
		color: white; 
		font-weight: bold; 
		}

	td, th { 
		padding: 10px; 
		border: 1px solid #ccc; 
		text-align: left; 
		font-size: 18px;
		}

	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {

		table { 
			width: 100%; 
		}

		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}

		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
			/* Label the data */
			content: attr(data-column);

			color: #000;
			font-weight: bold;
		}

	}

	.text-center {
		text-align: center;
	}
</style>

<body>
    <div class="content col-md-12">
        <h1 class="text-center">DATA PENDAFTAR YANG SUDAH MENDAFTAR</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet similique corrupti eum qui
            numquam, perspiciatis modi earum tempore labore alias sapiente quos ea repellendus repellat,
            libero nobis maiores reprehenderit vero.</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">alamat</th>
                    <th scope="col">kota</th>
                    <th scope="col">sekolah</th>
                    <th scope="col">kelamin</th>
                    <th scope="col">nem</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch()) { ?>
                <tr>
                    <td><?php echo $row['nama_lengkap'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['kota'] ?></td>
                    <td><?php echo $row['asal_sekolah'] ?></td>
                    <td><?php echo $row['jenis_kelamin'] ?></td>
                    <td><?php echo $row['nilai_akhir'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php
$content = ob_get_clean();
$mpdf->WriteHTML($content);
$mpdf->Output();