<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">

  <style>
  .navbar-brand{
    font-size:20px;
    font-weight:bolder;
    font-family: 'Anton', sans-serif;
  }
  .navbar-default {
    background-color: transparent;
    border-color: transparent;
}
  </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
       <div class="navbar-brand" >
       KH-Medical Center 
    </div>
    </div>
    <ul class="nav navbar-nav navbar-right">
     <li><a style="font-size:17px;font-weight:bolder;" href="logout.php"> <span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
     </ul>
    <ul class="nav navbar-nav">
          <li><a style="font-size:17px;font-weight:bolder;" class="navbar-brand" href="dashboard.php"> Home Page </a></li>
          <li><a style="font-size:17px;font-weight:bolder;" href="add.php">Add/Delete Patient</a></li>
          <li><a style="font-size:17px;font-weight:bolder;" href="#">Room Information</a></li>
          
    </ul>
  </div>
</nav>
</body>
</html>