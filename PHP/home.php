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
<link rel="stylesheet" type="text/css" href="../jquery/jquery-3.3.1.slim.min">
<link rel="stylesheet" type="text/css" href="../jquery/popper.min">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	 <div id="menu">
      	<header>
        	<div class="logo">
        		<a href="home.php"><img src="../image/logo-cv-cntt.png" height="100px"/></a>
        	</div>
        	<div class="menu">
          		<a href="formsCV.php">Đăng Ký</a> | 
          		<a href="login.php">Đăng Nhập</a>
        	</div>
      </header>
	 <div id="nav">
        <ul>
          <li>
            <a href="home.php">
              <i class="fa fa-home" style="font-size:25px"></i>
             HOME</a>
          </li>
          <li><a href="#">CHUYÊN NGÀNH</a>
    	     <ul class="sub-nav">
             <?php
      $query = "SELECT * from chuyen_nghanh ";
    $result = mysqli_query($connect,$query);
      while ($row =mysqli_fetch_assoc($result)){
            echo "<li><a href='danhmuccv.php?dm=$row[id_dmuc]'>$row[ten_chuyen_nghanh]</a>";
            echo '</li>';
          }
              ?>
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
      $query = "SELECT * from thong_tin_cv, chuyen_nghanh  where chuyen_nghanh.ma_chuyen_nghanh = thong_tin_cv.ma_chuyen_nghanh ";
    $result = mysqli_query($connect,$query);
    if(mysqli_num_rows($result)>0){
      while ($row =mysqli_fetch_assoc($result)){
          $hinh_anh = $row['hinh_anh'];
         $ho_ten =$row['ho_ten'];
        $ten_chuyen_nghanh=$row['ten_chuyen_nghanh'];
      echo "<tr>";
        echo "<td></td>";
        echo "<td><a href='../ThongtinCV.php?id=$row[id]'><img width='100px' height='100px' src='../{$hinh_anh}'' alt='Hình ảnh' align='middle' class='rounded-circle'></a></td>";
        echo "<td><a href='../ThongtinCV.php?id=$row[id]'><br><br>$ho_ten</a></td>";
        echo "<td><a href='../ThongtinCV.php?id=$row[id]'><br><br>$ten_chuyen_nghanh</a></td>";
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
