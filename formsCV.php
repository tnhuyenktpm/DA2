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
<title>Forms CV</title>
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
    <center style="font-size:30px"><p>THÔNG TIN CV</p></center>
    <form >
    	<div class="form-group">
    		<label for="ten">Họ và tên:</label>
    		<input type="text" class="form-control" id="ten" name="ten">
    	</div>
    	<div class="form-group">
      		<label for="ngaysinh">Ngày sinh:</label>
      		<input type="date" class="form-control" id="ngaysinh" name="ngaysinh">
    	</div>
    	<div class="form-group">
    		<label for="diachi">Địa chỉ:</label>
    		<input type="text" class="form-control" id="diachi" name="diachi">
   		</div>
   		<div class="row">
    		<div class="col">
    			<label for="phone">Phone:</label>
    			<input type="text" class="form-control" id="phone" name="phone">
    		</div>
    		<div class="col">
    			<label for="email">Email:</label>
      			<input type="text" class="form-control" id="email" name="email">
    		</div>
  		</div>
  		<label for="email">Chuyên nghành:</label>
  		<select class="custom-select">
  			<option selected></option>
  			<option value="1">Kỹ Thuật Phần Mềm</option>
  			<option value="2">Khoa Học Máy Tính</option>
  			<option value="3">Hệ Thống Thông Tin</option>
		</select>
		<div class="form-group">
  			<label for="gioithieu">Giới thiệu:</label>
  			<textarea class="form-control" rows="3" id="gioithieu"></textarea>
		</div>
   		<div class="form-group">
  			<label for="muctieu">Mục tiêu:</label>
  			<textarea class="form-control" rows="3" id="muctieu"></textarea>
		</div>
		<div class="form-group">
  			<label for="kinhnghiem">Kinh nghiệm:</label>
  			<textarea class="form-control"  rows="3" id="kinhnghiem"></textarea>
		</div>
   		<label for="diachi">Hình ảnh:</label>
  		 <div class="custom-file">
  			<input type="file" class="custom-file-input" id="customFile">
  			<label class="custom-file-label" for="customFile">Choose image</label>
  		</div>
  		<p></p>
    	<center><button type="submit" class="btn btn-primary">Cập nhật</button></center>
  </form>
  
     </div>
     <footer>
     <p>© Copyright by Kai Trần - Sky Lê</p>
     </footer>
     </div>

</body>
</html>

