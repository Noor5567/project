<?php
function search($ID) {
  if($ID == '') {
    return '';
  }
if(preg_match("/^[a-z ]{1,50}$/",$ID)){
  $pdblink =  mysqli_connect("127.0.0.1" , "root" ,"", "software");
  $pSqlquery = "SELECT rid FROM patient WHERE pname='".$ID."'";
  $pResult = mysqli_query($pdblink , $pSqlquery) or die( mysqli_error($pdblink));
  $pRow = mysqli_fetch_array($pResult);
  $pIsThere = mysqli_affected_rows($pdblink);
  $userInfo ="";

if($pIsThere){
      $userInfo = "<p style='text-color:black;'>The room number of the patient ".$ID." is ".$pRow[0]." ";


  }

  $pSqlquery2 = "SELECT rgroup FROM room WHERE rid='".$pRow[0]."'";
  $pResult2 = mysqli_query($pdblink , $pSqlquery2) or die( mysqli_error($pdblink));
  $pRow2 = mysqli_fetch_array($pResult2);
  $pIsThere2 = mysqli_affected_rows($pdblink);
  mysqli_close($pdblink);

  if($pIsThere2){
    if($pRow2[0]==0){
    $userInfo = $userInfo."which is a normal room";}

    else if($pRow2[0]==1){
      $userInfo = $userInfo."which is an isolation room";}


                return $userInfo;
}

if($pIsThere){ return $userInfo;}

  return "There Isn't a patient whoes name $ID !!";
  
}
    else return "INVALID NAME (The name shouldn't include numbers or capital letters) !!!!";}


echo search(trim($_REQUEST['ID']));
?>
