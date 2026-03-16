<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="dinhdang/mystyle.css">

</head>

<body>		
		<form name="f" method="post" action="">
			<table class="bieumau">
				<tr> 
				  <td colspan="3" class="canhgiua"><h2>PHIẾU MUA HÀNG TRẢ GÓP</h2></td>
				</tr>
				
				<tr> 
				  <td colspan="3" class="tieude">THÔNG TIN SẢN PHẨM</td>
				</tr>
				<tr> 
				  <td>Chọn sản phẩm</td>
					<!-- BỔ SUNG CODE TẠI ĐÂY-->
						<td>
							<select name = "optSanPham">
								<?php
								//Kết nối CSDL
								$servername = "localhost";
								$username = "root";
								$password = "vertrigo";
								$dbname = "qlhanghoa";
								$connect = new mysqli ($servername, $username, $password, $dbname);
								if ($connect->connect_error){
									die ("Không kết nối :". $conn->connect_error);
									exit();
								}
								$sql = "SELECT * FROM mathang";
								$danhsach = $connect->query($sql);
								if(!$danhsach){
									die("Không thể định dạng câu lệnh SQL: ". $connect->connect_error);
									exit();
								}
								while($row = $danhsach ->fetch_array(MYSQLI_ASSOC)){
									echo ("<option>"); 
									echo ($row["TenHang"]);
									echo ("</option>");
								}
								$connect->close();
								?>
						</select>
					</td>
					<td>&nbsp;</td>
				</tr>
				<tr> 
				  <td>Thời hạn trả</td>
				  <td>  <input type="radio" name="radThoiHan" value="1">6 tháng	    
						<input type="radio" name="radThoiHan" value="2">12 tháng</td>
				  <td>&nbsp;</td>
				</tr>       
				  <td>&nbsp;</td>
				  <td><input type="checkbox" name="chkGiaoHang">
					  Giao hàng tận nơi</td>
				  <td>&nbsp;</td>
				</tr>
				<tr> 
				  <td colspan="3" class="tieude">THÔNG TIN KHÁCH HÀNG</td>
				</tr>
				<tr> 
				  <td>Họ tên</td>
				  <td><input type="text" name="txtHoTen" onchange="ktHoTen();"></td>
				  <td>*</td>
				</tr>
				<tr> 
				  <td>Năm sinh</td>
				  <td>
					<select name="optNamSinh">
						<option>---Chọn---</option>
						<script>
						var d = new Date();
						var namht = d.getYear()+1900;
						for(i=namht;i>=1900;i--)
							document.write("<option>"+i+"</option>");
						</script>
					</select>
				  </td>
				  <td>&nbsp;</td>
				</tr>
				
				<tr> 
				  <td colspan="3" class="canhgiua"> 
					  <input type="button" name="btnXacNhan" value="Xác nhận" onclick="ktXacNhan();">
					  <input type="reset" name="btnKhong" value="Không">
				  </td>
				</tr>
			</table>
		</form>

		
</body>
</html>
