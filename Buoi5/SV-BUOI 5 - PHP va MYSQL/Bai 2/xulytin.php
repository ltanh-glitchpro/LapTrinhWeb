<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
table{
	border: 1px groove maroon;
	font-family: Arial;
	font-size: 10pt;
	border-collapse: separate; 
	border-spacing: 0px; 	
	width: 1200px;
	color: black;
	
}
td{
	border: thin dotted maroon;
	padding: 5px;	
	text-align: justify;
}

th{ 
	color: #FFFFFF;	
	font-size: 11pt;
	font-weight:bold;
	text-align:center;
	background-color: #FF0000;
	border: thin solid #FFFFFF;
}
</style>
</head>
<body>
		<p align="right" style="font-size:9pt;font-weight:bold;padding:5px;">
		<a href="trangtin.html">Trang chủ</a> | 
		<a href="dangtin.htm">Đăng tin</a>
		</p>
		<table>
			<tr>
				<th>Chuyên Mục</th>
				<th>Nội Dung</th>
				<th>Địa điểm</th>
				<th>Email</th>
			</tr>
			<?php
				$servername = "localhost";
		$username = "root";
		$password = "vertrigo";
		$dbname = "qltin";
		// Kết nói database tin tức
		$connect = new mysqli ($servername, $username, $password, $dbname);
		// Nếu kết nối bị lỗi thì xuất báo lỗi và thoát
		if($connect->connect_error)
			{
				die ("Không kết nối :". $connect->connect_error);
				exit();
			}
				$sql = "SELECT * FROM BAIDANG";
				$danhsach = $connect->query($sql);
				if(!$danhsach){
					die("không thể định dạng câu lệnh SQL:".$connect->connect-error);
					exit();
				}
				while($row = $danhsach ->fetch_array(MYSQLI_ASSOC)){
					echo ("<tr><td>".$row["chuyenmuc"]."</td>");
					echo ("<td>".$row["noidung"]."</td>");
					echo ("<td>".$row["diadiem"]."</td>");
					echo ("<td>".$row["email"]."</td>");
				}
			$connect->close();
			?>	
</body>
</html>