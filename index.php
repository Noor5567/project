<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .alert-danger {
	position: fixed;
    width: -webkit-fill-available;
    text-align: center;
    font-size: x-large;
}
  </style>
</head>

<?php 
session_start(); 
if(isset($_SESSION['id']))
{
 header('Location:dashboard.php');
}
include "DB_conn.php";
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$ID=$_POST['username'];
	$password=$_POST['pass'];
    $firstTwoCharacters = substr($_POST['username'], 0, 2);

if($firstTwoCharacters == '00'){
	$stmt=$con->prepare("SELECT did,password from doctor,daccount where doctor.cid = daccount.cid AND did=? AND password=?" );
    $stmt->execute(array($ID,$password));
    $row=$stmt->fetch();
    $count=$stmt->rowCount();

    if($count>0)
     {
       $_SESSION['id']=$ID;
       $_SESSION['ID']=$row['did'];  // register session userID 
       header('Location:dashboard.php'); // redicret to dashboard page 
       exit();
    }  else {
		echo '<div class ="alert alert-danger" <strong> ID Or Password Is Incorrect </strong> </div>';
	}
}


else if($firstTwoCharacters == '11'){
	$stmt=$con->prepare("SELECT nid,password from nurse,naccount where nurse.cid = naccount.cid AND nid=? AND password=?" );
    $stmt->execute(array($ID,$password));
    $row=$stmt->fetch();
    $count=$stmt->rowCount();

    if($count>0)
     {
       $_SESSION['id']=$ID;
       $_SESSION['ID']=$row['nid'];  // register session userID 
       header('Location:NDashboard.php'); // redicret to dashboard page 
       exit();
    }   else {
		echo '<div class ="alert alert-danger" <strong> ID Or Password Is Incorrect </strong> </div>';
	}
}
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Doctor Login</title>
	<link rel='icon' href='images/icons/people.ico'/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/hero-bg.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
					<span class="login100-form-title p-b-49">
						Login
					</span>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100"> <strong> ID </strong> </span>
						<input class="input100" type="text" name="username" placeholder="Type your ID ">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100"> <strong> Password </strong></span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							
						</a>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
</body>
</html>