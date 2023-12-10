
<?php

include("./Config.php");

// $servername = "127.0.0.1:3306";
// $username = "root";
// $password = "";
// $dbname = "eventsandperfs";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname); 


//echo 'this is prod id:' .$searchterm; 
if (isset($_GET['searchtext'])) {
  $searchterm = $_GET['searchtext']; 
  
$result = mysqli_query($conn,"SELECT Id, Donation, UserFullName, UserContact, EventRandCode, UserStatus, Description FROM bookings WHERE EventRandCode like '%$searchterm%'");
	 
		 
$data = array();
while ($row = mysqli_fetch_array($result)) {
  $data[] = $row; 
}

print json_encode($data);

}
else
{
   echo 'search term is null :' .$searchterm; 
}
$conn->close();	

?>



