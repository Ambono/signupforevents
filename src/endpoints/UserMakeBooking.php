<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// include("./config/config.php");
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "eventsandperfs";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname); 

//header("Access-Control-Allow-Origin: *");
   
$data = json_decode(file_get_contents("php://input"), true);
print_r("<br> start printing data: ". $data.'<br>');

$fullname = mysqli_real_escape_string($conn, $data['fullname']);
$contact = mysqli_real_escape_string($conn, $data['contact']);
$randcode = mysqli_real_escape_string($conn, $data['randcode']);
$amount = mysqli_real_escape_string($conn, $data['amount']);
$vipcode = mysqli_real_escape_string($conn, $data['vipcode']);
$status = mysqli_real_escape_string($conn, $data['status']); 
$description = mysqli_real_escape_string($conn, $data['description']);


$sql =  "INSERT INTO bookings(DateBooked, VIPCode, Donation, UserFullName, UserContact, EventRandCode, UserStatus, Description) 
        VALUES (now(),'$vipcode', '$amount','$fullname','$contact','$randcode', '$status', '$description')";
       
 if (!mysqli_query($conn, $sql))
  {
  die("Error inserting booking record: ".mysqli_error()); 
  }  
else{
   echo "1 record added"; 
    } 

print_r("<br> printing full name: ". $fullname.' '.$contact.'<br>');
//print json_encode($data);
$conn->close();
