
<?php
include("./Config.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname); 
  
 
$result = mysqli_query($conn,"SELECT Id, Description, Venue, Location, PlannedDate, RandCode FROM events WHERE DateRegistered >= now() - INTERVAL 1 DAY ");
 
		 
$data = array();
while ($row = mysqli_fetch_array($result)) {
  $data[] = $row; }

print json_encode($data);

$conn->close();	

?>