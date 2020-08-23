<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//SELECT `Id`, `Name`, `Email`, `Phone`, `DateContacted`, `Reason` FROM `contactmessages` WHERE 1




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

$fullname = mysqli_real_escape_string($conn, $data['fname']);
$email = mysqli_real_escape_string($conn, $data['email']);
$phone = mysqli_real_escape_string($conn, $data['phone']);
$reason = mysqli_real_escape_string($conn, $data['reason']);



$sql =  "INSERT INTO contactmessages( Name, Email, Phone, DateContacted, Reason) 
        VALUES ('$fullname','$email','$phone', now(), '$reason')";
       
 if (!mysqli_query($conn, $sql))
  {
  die("Error inserting booking record: ".mysqli_error()); 
  }  
else{
   echo "1 record added"; 
   echo'<br>';
 	  
   $emailBody ="";
   $emailBody .= "Thank you for contacting us. Your query will be dealt with soon. ";
   $to = $email;
   $subject = "Your query at www.signupforevents.com";
   $txt = $emailBody;
   $headers = "From: signupforeventsinfo@gmail.com"."\r\n" .
   "CC: ";
    //mail($to,$subject,$txt,$headers);
    } 

print_r("<br> printing full name: ". $fullname.' '.$email.'<br>');
//print json_encode($data);
$conn->close();
 


