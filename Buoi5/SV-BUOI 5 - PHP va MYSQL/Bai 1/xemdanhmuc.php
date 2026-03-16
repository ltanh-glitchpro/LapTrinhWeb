<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="dinhdang/mystyle.css">
</head>

<body>
	<table class="bieumau1" border="1">
		<tr> 
		  <td colspan="5" class="canhgiua"><h2>Danh mục sản phẩm</h2></td>
		</tr>
		<tr> 
		  <td>STT</td>
		  <td>Tên Sản Phẩm</td>
		   <td>Hình ảnh</td>
		   <td>Giá bán</td>
		   <td>Giá gốc</td>
		</tr>
	<?php
		//BỔ SUNG CODE TẠI ĐÂY
		//Kết nối CSDL
		$servername = "localhost";
		$username = "root";
		$password = "vertrigo";
		$dbname = "qlhanghoa";
		// Kết nói database tin tức
		$connect = new mysqli ($servername, $username, $password, $dbname);
		// Nếu kết nối bị lỗi thì xuất báo lỗi và thoát
		if($connect->connect_error)
			{
				die ("Không kết nối :". $connect->connect_error);
				exit();
			}
		$sql = "SELECT * FROM mathang";
		$danhsach = $connect->query($sql);
		if(!$danhsach)
			{
				die ("Không thể định dạng câu lệnh SQL: ". $connect->connect_error);
				exit();
			}
		$ss = 1;
		while($row = $danhsach->fetch_array(MYSQLI_ASSOC))
			{
				echo "<tr><td>".$ss."</td>";
				echo "<td>".$row["TenHang"]."</td>";
				echo "<td><img src=\"".$row["HinhAnh"]."\"</td>";
				echo "<td>".$row["GiaBan"]."</td>";
				echo "<td>".$row["GiaGoc"]."</td>";
				echo "</tr>";
				$ss++;
			}
			// đóng kết nối database
		$connect->close();
	?>		
	</table>
</body>
</html>