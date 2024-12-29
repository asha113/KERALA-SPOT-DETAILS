<DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-image: url("ekm2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 300px;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
</div>
<?php
session_start();
if(isset($_POST['login'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
    require_once "connect.php";
    $query="select * from userlogin where username='$user' and password='$pass'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    echo ("$user,$pass");
    echo ("hii");
    echo ("$count");
	if($count==1){
    
		echo("login success");
		//$_SESSION['username']=$u; 
		header("Location: index.php");
        
        die();
	}
	else{
		echo("login failed");
	}
}
?>
<div class="container">

        <form action="login.php" method="post">
            <p style="color:#07aaeb;"><h2><strong> Login </strong></h2></p>
            <div class="form-group">
                <input type="text" style="width: 250px;" placeholder="Enter Username:" name="username" class="form-control" >
            </div>
            <div class="form-group">
                <input type="password" style="width: 250px;" placeholder="Enter Password:" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="login" name="login" class="btn btn-primary">
            </div>  
        </form>
            <!--<div class="form-btn">
                
               <input type="submit" value="signup" name="signup" class="btn btn-primary">
               
            </div> -->     
                                                                                                                            
       
        <form action="signup.php">
            <div class="form-btn">
                <button type="submit" class="btn btn-primary">Signup</button>
            </div> 
        </form>     
        <!--<div><p style="color:blue;"><strong>signin </strong></p></div>-->
    </div>
</body>
</html>


