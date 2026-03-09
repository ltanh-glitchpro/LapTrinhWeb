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

		th, td {
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
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quanly_tin";
	
    // Ket noi CSDL
	$conn = mysqli_connect($servername, $username, $password, $dbname); 

	if (!$conn) { 
		die("Không kết nối: " . mysqli_connect_error()); 
	}

	$sql = "SELECT * FROM linhvuc"; 
	$danhsach = mysqli_query($conn, $sql); 

	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . mysqli_error($conn));
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
        // Kiem tra co du lieu hay khong
		if (mysqli_num_rows($danhsach) > 0) { 
			$stt = 1; 
			while ($dong = mysqli_fetch_assoc($danhsach)) { 
				echo "<tr>"; 
				echo "<td>{$stt}</td>"; 
				echo "<td>{$dong['MaLinhVuc']}</td>"; 
				echo "<td>{$dong['TenLinhVuc']}</td>"; 
				echo "</tr>"; 
				$stt++; 
			}
		} else {
            echo "<tr><td colspan='3' align='center'>Chưa có lĩnh vực nào</td></tr>";
        }
        
		mysqli_close($conn);
		?>
		<tr>
			<td colspan="3">
				<a href="formlinhvuc.php">Thêm lĩnh vực</a> 
			</td>
		</tr>
	</table>
</body>
</html>