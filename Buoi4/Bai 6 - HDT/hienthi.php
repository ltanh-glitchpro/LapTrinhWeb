<!DOCTYPE html>
<html>

<head>
	<title>Trang Tin</title>
	<meta charset="utf-8" />
	<style>
		table {
			border-collapse: collapse;
			width: 400px;
			margin: auto;
			border: solid green 1px;
		}

		th,
		td {
			font-size: 16px;
			text-align: left;
			padding: 8px;
			border-bottom: solid green 1px;
			color: #000080;
		}

		th {
			color: blue;
			background-color: #F0FFF0;
		}

		tr:hover {
			background-color: #FFFACD;
		}

		caption {
			font-size: 24px;
			color: blue;
			text-align: left;
			font-weight: bold;
		}
	</style>

</head>

<body>
	<?php
	//bo sung code
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quanly_tin";
	$connect = new mysqli($servername, $username, $password, $dbname);

	if ($connect->connect_error) {
		die("Không kết nối: " . $connect->connect_error);
	}

	$sql = "SELECT * FROM linhvuc";
	$danhsach = $connect->query($sql);

	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->error);
	}

	?>
	<table>
		<caption>Danh sách lĩnh vực</caption>
		<tr>
			<th>STT</th>
			<th>Mã Lĩnh Vực</th>
			<th>Tên Lĩnh Vực</th>
		</tr>
		<?php
		//bo sung code
		$stt = 1;
		while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) {
			echo "<tr>";
				echo "<td>{$stt}</td>";
				echo "<td>{$row['MaLinhVuc']}</td>";
				echo "<td>{$row['TenLinhVuc']}</td>";
			echo "</tr>";
			$stt++;
		}
		$connect->close();
		?>
		<tr>
			<td colspan="8">
				<a href="formlinhvuc.php">Thêm lĩnh vực</a>
			</td>
		</tr>
	</table>
</body>

</html>