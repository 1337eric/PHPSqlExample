<?php
$servername = "localhost";
$username = "thisUsername";
$password = "thisPassword";
$db="thisDatabaseName";

$conn = new mysqli($servername, $username, $password, $db);

 if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
} else {
	 $sql = "SELECT * FROM thisDataTable;";
	 $results = mysqli_query($conn, $sql);
	 $resultcheck = mysqli_num_rows($results);
	 if ($resultcheck > 0) {
		 foreach($results as $row) {
		 	//echo "1";
		 	if($row['thisDataRow'] == $_GET["thisURLArgument"]) {
		 		if ($row['thisDataColumn'] == 1) {
		 			echo "Found!";
		 		} else {
		 			echo "Not Found!";
		 		}
		 	}
		 }
	 }
}
?>
