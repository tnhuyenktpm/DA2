
<!DOCTYPE html>
<?php
session_start();
if(isset($_SESION["email"]))
{
  header("location:home.php");
  }
  ?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  #box
  {
    width: 100%;
    max-width: 500px;
    border: 1px solid #ccc;
    border-radius:10px;
    margin: 10px auto;
    padding: 15px 20px;
    box-sizing: border-box;
    height: 300px;  
  }
</style>
</head>
<body>
      <div class="container">
        
					<h2><center><b>Đăng nhập</b></center></h2>
          <br/>
          <div id="box">
  					<form method="POST">
    					<div class="form-group">
      						<label><b>Email:</b></label>
      						<input type="text" class="form-control" id="email" placeholder="Nhập email" name="email">
    					</div>
   					  <div class="form-group">
      						<label><b>Mật khẩu:</b></label>
      						<input type="password" class="form-control" id="pass" placeholder="Nhập mật khẩu" name="pass">
    					</div>
              <div class="form-group">
    					<input type="button" id="login" name="login" value="Login" class="btn btn-primary"></input>
              </div>
              <div id="error"></div>
  					</form>
            <br/>
		</div>
	</div>
</body>
</html>
<script>
  $(document).ready(function(){
    $('#login').click(function(){
        var email = $('email').val();
        var pass = $('pass').val();

        if($.trim(email).length > 0 && $.trim(pass).length > 0)
        {
            $.ajax({
                url:"xuly.php",
                method:"POST",
                data:{email:email, pass:pass},
                cache: false,
                beforeSend:function()
                {
                  $('#login').val("connecting..."),
                }
                success:function(data)
                {
                  if(data)
                  {
                    $("body").load("home.php").hide().fadeIn(1500);
                  }
                  else
                  {
                    var options ={
                      distance:'40',
                      direction:'left',
                      time:'3',
                    }
                    $("#box").effect("shake", options, 800);
                    $('#login').val("Login");
                    $('#error').html("<span class='text-danger'>chưa nhập email or mật khẩu</span>");
                  }
                }
            });
        }
        else
        {
          return false;
        }
    });

  });
</script>