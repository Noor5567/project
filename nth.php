  <?php
  /*$pdblink =  mysqli_connect("127.0.0.1" , "root" ,"", "software");
  $pSqlquery = "SELECT * FROM patient where pname=ahmad;";
  $pResult = mysqli_query($pdblink , $pSqlquery);
  $test = mysqli_result($pResult);

  $rescheck = mysqli_num_rows($test);*/
  $pdblink =  mysqli_connect("127.0.0.1" , "root" ,"", "software");
  $pSqlquery = "SELECT rid FROM patient WHERE pname='ahmad'";
  $pResult = mysqli_query($pdblink , $pSqlquery) or die( mysqli_error($pdblink));
  $pRow = mysqli_fetch_array($pResult,MYSQLI_NUM);
  $pIsThere = mysqli_affected_rows($pdblink);
  mysqli_close($pdblink);
  if($pIsThere){
    echo $pRow[0];
}

  /*if ($rescheck > 0){
      $row = mysqli_fetch_assoc($pResult);
      echo $row['pname'];

  }?>*/