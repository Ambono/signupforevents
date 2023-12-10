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

$account = mysqli_real_escape_string($conn, $data['orgaccount']);
$code = mysqli_real_escape_string($conn, $data['code']);
$description = mysqli_real_escape_string($conn, $data['description']);
$venue = mysqli_real_escape_string($conn, $data['venue']);
$location = mysqli_real_escape_string($conn, $data['location']);
$addescription = mysqli_real_escape_string($conn, $data['adddescription']);
$vipcode = mysqli_real_escape_string($conn, $data['vipcode']); 
$planneddate = mysqli_real_escape_string($conn, $data['planneddate']);


$rand =  substr(rand(5000, 20000), 0, 5);

$sql =  "INSERT INTO events(Description, DateRegistered, Venue, VIPCode, OrganiserAccountCode, Location, Code, PlannedDate, RandCode) 
        VALUES ('$description', now(), '$venue', '$vipcode', '$account','$location','$code','$planneddate', '$rand')";
       
 if (!mysqli_query($conn, $sql))
  {
  die("Error inserting event record: ".mysqli_error()); 
  }  
else{
   echo "1 record added"; 
    } 

print_r("<br> printing full name: ". $location.' '.$venue.'<br>');
//print json_encode($data);
$conn->close();
 


