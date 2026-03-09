<?php
// Bật bộ đệm đầu ra để tránh lỗi khi dùng lệnh header() chuyển trang
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

	// Kiểm tra xem người dùng đã bấm nút "Lưu" từ form chưa
	if (isset($_POST['btnLuu'])) {
		$malv = $_POST['txtMaLinhVuc'];
		$tenlv = $_POST['txtTenLinhVuc'];

		if (trim($malv) == "" || trim($tenlv) == "") {
			echo "Phải nhập tên lĩnh vực và mã lĩnh vực";
		} else {
			// Kết nối database
			$connect = new mysqli($servername, $username, $password, $dbname);

			if ($connect->connect_error) {
				die("Không kết nối : " . $connect->connect_error);
			}

			// Insert dữ liệu
			$sql = "INSERT INTO linhvuc (MaLinhVuc, TenLinhVuc) VALUES ('$malv', '$tenlv')";

			if ($connect->query($sql) === TRUE) {
				// Chuyển hướng sang trang hiển thị khi thêm thành công
				header("Location: hienthi.php");
				exit();
			} else {
				echo "Lỗi: " . $sql . "<br>" . $connect->error;
			}

			$connect->close();
		}
	} else {
        // Hiện thông báo nhắc nhở nếu truy cập trực tiếp vào file này
        echo "Vui lòng nhập dữ liệu từ trang Thêm Lĩnh Vực!";
    }
	?>
	<p><a href="formlinhvuc.php">Quay lại trang nhập mới</a></p>
</body>
</html>
<?php
ob_end_flush();
?>