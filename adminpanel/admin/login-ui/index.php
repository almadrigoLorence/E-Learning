<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>    
<link rel="shortcut icon" type="images/png" href="img/favicon2.png">
<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<style type="text/css">
	h2 {
        font-size: 23px;
        margin: 0 0 15px;
        font-family: Arial;
    }
	.login-form {
		width: 390px;
    	margin: 30px auto;
    	padding-top: 100px;
        position: absolute center;
    	
	}
    .login-form form {        
        background: #fcfcfc;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        border-radius: 15px;

    }    
    .form-control, .btn {
        height: 36px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: default;
        width: 100%;
        border-radius: 5px;
        border: none;
        background-color: #12d393;
        color: white;
    }
    button:hover{
        background-color: #232b2b;
    }

    .remember-me {
        margin: 8px 0 0 12px;
    }
    body{
    	background-color: #f2f2f2;
        font-family: Arial;
        font-size: 90%;
        padding-top: -100px;
        
    }
    .input100{
        width: 86.5%;
        height: 45px;
        border: none;
        padding-left: 40px;
        padding-top: 2px;
        background: #fffeff;
        box-shadow:  10px 10px 20px #cccbcc,
                     -10px -10px 20px #ffffff;
    }
    .input100:hover{
        box-shadow:  10px 10px 20px #0ea976,
                     -10px -10px 20px #16fdb0;
    }
    .log_username, .log_password{
        border: none;
        position: relative;
    }
    .log_username i, .log_password i{
        position: absolute;
        left:1px;
        padding: 17px;
    }
    .log_notif{
        color: #999999;
    }

   
</style>
</head>
<body>
<div class="login-form">
    <form class="row login100-form" method="post" id="adminLoginFrm">
        <center>
            <img src="assets/images/cvsu.png" style="background-color: #e8e8e8;border-radius: 50%;margin-bottom: 25px;">
        </center>
        <center>
            <h2>Sign in</h2>     
            <div class="">
                <i class="fa fa-exclamation-circle p-r-5"></i><span class="fs-10 log_notif">You are about to sign in as administrator</span>
            </div>
        </center>
        <hr>  
        <div class="form-group">
            <label></label>
            <div class="log_username">
                <i class="fa fa-user" style="position: absolute;"></i>
                <input type="text" class="input100" name="username" placeholder="Enter Username" required autocomplete="off">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label></label>
            <div class="log_password">
            <i class="fa fa-lock"></i>
            <input type="password" class="input100" name="pass" placeholder="Enter Password" required autocomplete="off" id="password"><ul></ul>
            </div>
            <div class="w-full">
                <label class="checkbox-inline remember-me" style="font-family: Arial;">
                <input type="checkbox" onclick="myFunction()">Show Password
            </div>
        </div>
        <br>
        <div class="form-group clearfix">
            <button type="submit" class="btn">LOG IN</button>
          
        </div>      
    </form>
</div>
</body>

</html>      
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>                      


