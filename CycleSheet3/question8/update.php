<?php
 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "cyclesheet3";

  $conn = mysqli_connect($servername, $username, $password, $database);
  if (!$conn) 
  {
    die("Sorry we failed to connect: ". mysqli_connect_error());
  }

  $updateQuery = "UPDATE employee SET Salary = Salary + (Salary * 0.1) WHERE Department='SALE'";
  $result = mysqli_query($conn, $updateQuery);
  $aff = mysqli_affected_rows($conn);
  if($result){
    echo "The Record has been Updated Successfully!<br><br>";
  }
  else{
    echo "The record was not updated successfully because of this error ---> ". mysqli_error($conn);
  }

  echo "Number of records updated: ".$aff;

?>

