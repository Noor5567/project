<?php 
include "include/navbar.php";
include "DB_conn.php";
?>
<head>
<link href="css/dash.css" rel="stylesheet" media="all">
<style>
body
{
background-image: url('images/hero-bg.jpg');
}
.h2, h2 {
    font-size: 30px;
    position: relative;
    top: -15px;
    text-align: center;
    left:10px;
}
  </style>
</head>
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="doctor.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <?php 
                    session_start(); 
                     echo "<h1>". $_SESSION['ID']."</h1>" ;
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-1">First Name</h3>
                    </div>
                    <div class="lead">
                    <?php
                   $stmt=$con->prepare("SELECT fname FROM doctor WHERE did=".$_SESSION['ID'].""); // wrong nooo zaaabt 
                   $stmt->execute();
                   $row=$stmt->fetchALL();
                   foreach($row as $rows){
                     echo "<h2>".$rows['fname']."<h2>";
                   }
                   ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-4">Last Name</h3>
                    </div>
                    <div class="lead">
                    <?php
                    $stmt=$con->prepare("SELECT lname FROM doctor WHERE did=".$_SESSION['ID'].""); // wrong nooo zaaabt 
                   $stmt->execute();
                   $row=$stmt->fetchALL();
                   
                   foreach($row as $rows){
                     echo "<h2>".$rows['lname']."<h2>";
                   }
                   ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-2">Date of Birth</h3>
                    </div>
                    <div class="ll">
                    <?php
                    $stmt=$con->prepare("SELECT dob FROM doctor WHERE did=".$_SESSION['ID'].""); // wrong nooo zaaabt 
                    $stmt->execute();
                    $row=$stmt->fetchALL();
                   foreach($row as $rows){
                     echo "<h2>".$rows['dob']."<h2>";
                   }
                   ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-4">Shift Date</h3>
                    </div>
                    <div class="ll text-center ">
                    <?php
                    $stmt=$con->prepare("SELECT shiftdate FROM dshifts WHERE did=".$_SESSION['ID'].""); // wrong nooo zaaabt 
                    $stmt->execute();
                    $row=$stmt->fetchALL();
                   foreach($row as $rows){
                     echo "<h2>".$rows['shiftdate']."<h2>";
                   }
                   ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0">Shift Time</h3>
                    </div>
                    <div class="ll">
                    <?php
                    $stmt=$con->prepare("SELECT shifttime FROM dshifts WHERE did=".$_SESSION['ID'].""); // wrong nooo zaaabt 
                    $stmt->execute();
                    $row=$stmt->fetchALL();
                   foreach($row as $rows){
                     echo "<h2>".$rows['shifttime']."<h2>";
                   }
                   ?>
                    </div>
                  </div>
                   
             
                                
                            
                     