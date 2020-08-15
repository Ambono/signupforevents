<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("./Config.php");

// $servername = "127.0.0.1:3306";
// $username = "root";
// $password = "";
// $dbname = "eventsandperfs";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname); 

//header("Access-Control-Allow-Origin: *");
   
$data = json_decode(file_get_contents("php://input"), true);
print_r("<br> start printing data: ". $data.'<br>');
 
$fname = mysqli_real_escape_string($conn, $data['fname']);
$lname = mysqli_real_escape_string($conn, $data['sname']);
$email = mysqli_real_escape_string($conn, $data['email']);
$number = mysqli_real_escape_string($conn, $data['phonumber']);
$account = mysqli_real_escape_string($conn, $data['orgaccount']);
$addescription = mysqli_real_escape_string($conn, $data['adddescription']);
 
$sql = "INSERT INTO users (Name, Surname, Email, DateRegistered, AccountCode, PhoneNumber) 
        VALUES ('$fname', '$lname', '$email', now(),'$account', '$number')";
       
 if (!mysqli_query($conn, $sql))
  {
  die("Error inserting user record: ".mysqli_error()); 
  }  
else{
   echo "1 record added"; 
    } 

print_r("<br> printing full name: ". $fname.' '.$lname.'<br>');
//print json_encode($data);
$conn->close();
 


