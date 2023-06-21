
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | Student Login - STS E-learning Platform</title>    
<link rel="shortcut icon" type="images/png" href="img/favicon1.png">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<style type="text/css">
    body{
        background-color: #aaaaaa;
        font-family: Arial;
        font-size: 90%;
    }
	h2 {
        font-size: 23px;
        margin: 0 0 15px;
        font-family: Arial;
    }
	.login-form {
		width: 390px;
    	margin: 30px auto;
    	padding-top: 150px;
        position: absolute center;
    	margin-bottom: 100px;
        /*background-color: black;*/
	}
    .login-form form {        
        background: #f7f7f7;
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
        width: 50%;
        border-radius: 5px;
        background-color: #64bf6a;
        color: white;
    }
    button:hover{
        background-color: #232b2b;
    }

    .remember-me {
        margin: 8px 0 0 12px;
    }
    .header{
    	padding-top: 5px;
    	height: 15px;
    	color: white
    	background-color: black;
    }
    .input100{
        width: 90%;
        height: 25px;
        border-color: black;
        border-radius: 5px;
    }
    .input100:hover{
        border-color: green;
    }
    .container{
        column-width: 100%;
        padding-top: 50px;
        color: white;
        font-size: 40px;
        background-color: black;
        opacity: 50%;
        font-family: Arial;
        padding-left: 20px;
        border-radius: 20px;

    }

  /*  img{
        padding-top: -20px;
        position: absolute;
    }*/
    .footer{
        width: 100%;
        border-radius: 5px; 
        color: black;
     
        opacity: 50%;
    }
    .image-container{
        background-color: transparent;
        width: 50px;
        height: 50px;
        position: center;
        opacity: 300%;
    }
    .title{

        text-align: center;

    }
    .title-left{
        padding-top: 5px;
        padding-left: 20px;
    }
</style>
</head>
    <div class="app-header bg-happy-green switch-sidebar-cs-class active" data-class="bg-happy-green sidebar-text-light"">
       
    </div>
        

<body>
<div class="login-form">
   <center><img src="assets/images/logo.png"></center>
    <form class="row login100-form" method="post" id="examineeLoginFrm">
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
    </form>
</div>
</html>                            
</body>
<div class="footer">
     <div class="title-left">
        <center><span>You're not logged in.</span></center>

    </div>
    <div class="title">
    <h5>@cvsu.edu.ph</h5>
    <span></span>
    </div>
   
</div>

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


