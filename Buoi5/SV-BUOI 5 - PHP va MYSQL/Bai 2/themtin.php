<body>
<?php 
			$chuyenMuc = $_POST['oCM'];
			$noiDung = $_POST['tND'];
			$diaDiem = $_POST['oDD'];
			$email = $_POST['tEM'];
            $server = "localhost";
			$username = "root";
			$password = "vertrigo";
			$dbname = "qltin";

            if(trim($chuyenMuc) == "" || trim($noiDung) == "" || trim($diaDiem) == "" || trim($email) == ""){
                echo "Phải nhập các hạng mục!";
            }
            else{
                if(isset($chuyenMuc) && isset($noiDung) && isset($diaDiem) && isset($email))
                {
                    
                    $connect = new mysqli($server, $username, $password, $dbname);
                    if($connect->connect_error){
                        die("Không thể kết nối: ".$connect->connect_error);
                        exit();
                    }

                    $sqlthem = "INSERT INTO baidang( chuyenmuc, noidung, diadiem, email) 
                                VALUES ('$chuyenMuc', '$noiDung', '$diaDiem', '$email')";
                    if($connect->query($sqlthem) === TRUE){
                        header("Location: xulytin.php");
                    }
                    else{
                        echo ("Lỗi: ".$connect->error);
                    }
                    $connect->close();
                }
            }

		?>
</body>