<?php
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $dob=date("d/m/Y", strtotime($dob));
    $edu=$_POST['edu'];
    $email=$_POST['email'];
    echo "<h1>The Entered details are: </h1>";
    echo "Name: ".$name."<br>";
    echo "Password: ".$pass."<br>";
    echo "Gender: ".$gender."<br>";
    echo "Date of Birth: ".$dob."<br>";
    echo "Education: ".$edu."<br>";
    echo "Email id: ".$email."<br>";
?>