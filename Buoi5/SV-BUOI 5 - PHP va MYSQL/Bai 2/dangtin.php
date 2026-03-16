<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form action="xulytin.php" method="POST" name="f">
		<table style="clear:both;margin:100px 250px;padding:10px;font-size:11pt;">			
			<tr>
				<td colspan="2" align="center">
					<b>ĐĂNG RAO VẶT</b>
				</td>
			</tr>
			
			<tr>
				<td>Chuyên mục</td>
				<td>
					<select name="oCM">
						<option value="NhaDat">Nhà đất</option>
						<option value="OTo_XeMay">Ô tô - Xe máy</option>
						<option value="DienThoai">Điện thoại</option>
						<option value="MayTinh">Máy tính</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nội dung</td>
				<td><textarea name="tND" cols="30" rows="5"></textarea></td>
			</tr>
			<tr>
				<td>Địa điểm</td>
				<td>
					<select name="oDD">
						<option value="ToanQuoc">Toàn quốc</option>
						<option value="HaNoi">Hà Nội</option>
						<option value="TP.HoChiMinh">TP. Hồ Chí Minh</option>
						<option value="Khác">Khác</option>
					</select>
			</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input name="tEM" type="text"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Đăng"/>
					<input type="reset" value="Hủy"/>
				</td>
			</tr>			
		</table>		
	</form>	
</body>
</html>
