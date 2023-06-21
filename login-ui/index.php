
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | Student Login - STS E-learning Platform</title>    
<link rel="shortcut icon" type="images/png" href="img/favicon1.png">
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
        background-image: url("assets/images/bg-bg.jpg");
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
    .contact-section{
        float: right;
        display: inline-flex;
    }
    .contact-section div{
        background-color: white;
        border-radius: 50%;
        padding: 10px;
        margin: 2px;
    }
    .contact-section div i{
        font-size: 20px;
        color: #12d393;
    }

   
</style>
</head>
    <div class="app-header bg-happy-green switch-sidebar-cs-class active" data-class="bg-happy-green sidebar-text-light">
       
    </div>
<body>
    <div class="contact-section">
    <div>
        <i class="fa fa-home"></i>
    </div>
    <div>
        <i class="fa fa-phone"></i>
    </div>
    <div>
        <i class="fa fa-university"></i>
    </div>
</div>
<div class="login-form">
<!--     <form class="row login100-form" method="post" id="examineeLoginFrm">
        <h2>Sign in </h2>     
        <hr>  
        <div class="form-group">
            <label>Student Number</label>
            <input type="text" class="input100" name="username" required autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="input100" name="pass" required autocomplete="off" id="password"><ul></ul>
            <label class="checkbox-inline pull-right remember-me" style="font-family: Arial;"><input type="checkbox" onclick="myFunction()">Show Password <label class="checkbox-inline pull-right forgot-password" style="font-family: Arial;"></span></label>
        </div>
        <br>
        <div class="form-group clearfix">
            <button type="submit" class="btn btn-success ">Log in</button> 
            
        </div>      
    </form> -->
    <form class="row login100-form" method="post" id="examineeLoginFrm">
        <center>
            <img src="assets/images/cvsu.png" style="background-color: #e8e8e8;border-radius: 50%;margin-bottom: 25px;">
        </center>
        <center>
            <h2>Sign in</h2>
        </center>
        <hr>  
        <div class="form-group">
            <label></label>
            <div class="log_username">
                <i class="fa fa-user" style="position: absolute;"></i>
                <input type="text" class="input100" name="username" placeholder="Enter Student #" required autocomplete="off">
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
</html>                            
</body>
<!--     <div class="title">
    <h5>@cvsu.edu.ph</h5>
    <span></span>
    </div>
    <div class="float-left d-flex">
            <div> 
                <i class="pe-7s-home"></i><a href="#" style="color: black; text-decoration: none"><i class="fa fa-home"></i> Home <ul> </a>
            </div>
            <div> <a href="#" style="color: black; text-decoration: none"><i class="fa fa-phone"></i> Contact Us <ul> </a>
            </div>
            <div> <a href="#" style="color: black; text-decoration: none"> CvSU Portal <ul></a>
            </div>
    </div> -->

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


