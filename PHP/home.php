<!doctype html>
<?php
		$connect = mysqli_connect("localhost", "root", "", "doan_2") or die("không thể kết nối được");
		mysqli_query($connect,'SET NAMES UTF8');
	?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trang chủ</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	 <div id="menu">
      	<header>
        	<div class="logo">
        		<a href="#"><img src="../image/logo-cv-cntt.png" height="100px"/></a>
        	</div>
        	<div class="menu">
          		<a href="#">Đăng Ký</a> | 
          		<a href="#">Đăng Nhập</a>
        	</div>
      </header>
	 <div id="nav">
        <ul>
          <li>
            <a href="#">
              <i class="fa fa-home" style="font-size:25px"></i>
             HOME</a>
          </li>
          <li><a href="#">CHUYÊN NGÀNH</a>
    	     <ul class="sub-nav">
    	       <li><a href="#">Kỹ thuật phần mềm</a></li>
              <li><a href="#">Khoa học máy tính</a></li>
              <li><a href="#">Hệ thống thông tin</a></li>
           </ul>
          </li>
        </ul>
      </div>
    <div id="content">
    <div class="CV">
      <p><i class="fa fa-address-card-o" style="font-size:24px"></i> CV mới cập nhật</p>
    </div>
    <div class="CVcapnhat">
    	<table class="table table-hover">
  		<tbody>
         <?php
	  	$query = "SELECT * from thong_tin_cv, chuyen_nghanh where chuyen_nghanh.ma_chuyen_nghanh = thong_tin_cv.ma_chuyen_nghanh";
		$result = mysqli_query($connect,$query);
		if(mysqli_num_rows($result)>0){
			while ($row =mysqli_fetch_assoc($result)){
				$ho_ten =$row['ho_ten'];
				$ten_chuyen_nghanh=$row['ten_chuyen_nghanh'];
    	echo "<tr>";
        	echo "<td></td>";
      		echo "<td><br><br>$ho_ten</td>";
      		echo "<td><br><br>$ten_chuyen_nghanh</td>";
			}
		}
	  ?>
      </tbody>
		</table>
      </div>
     </div>
     <footer>
     <p>© Copyright by Kai Trần - Sky Lê</p>
     </footer>
     </div>

</body>
</html>
