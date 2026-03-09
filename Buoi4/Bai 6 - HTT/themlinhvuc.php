<?php
// Bat bo dem dau ra
ob_start(); 
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
	<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "quanly_tin";

	// Kiem tra nut Luu
	if (isset($_POST['btnLuu'])) {
		$malv = $_POST['txtMaLinhVuc'];
		$tenlv = $_POST['txtTenLinhVuc'];

		if (trim($malv) == "" || trim($tenlv) == "") {
			echo "Phải nhập tên lĩnh vực và mã lĩnh vực";
		} else {
			// Ket noi database bang huong thu tuc
			$conn = mysqli_connect($servername, $username, $password, $dbname); 

			if (!$conn) { 
				die("Lỗi kết nối: " . mysqli_connect_error()); 
			}

			// Insert du lieu
			$sql = "INSERT INTO linhvuc (MaLinhVuc, TenLinhVuc) VALUES ('$malv', '$tenlv')"; 

			if (mysqli_query($conn, $sql)) { 
				// Chuyen huong trang
				header("Location: hienthi.php"); 
				exit();
			} else { 
				echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn); 
		}
	} else {
        echo "Vui lòng nhập dữ liệu từ trang Thêm Lĩnh Vực!";
    }
	?>
	<p><a href="formlinhvuc.php">Quay lại trang nhập mới</a></p>
</body>
</html>
<?php
ob_end_flush();
?>