<?php
	$user ="root";
	$password ="";
	$serverName ="localhost";
	$db = "hackathon";

	$connection = mysqli_connect($serverName,$user,$password,$db);
	if ($connection->connect_error) die("Connection failed: " . $connection->connect_error);

	$query ="select * from review";
	$result = mysqli_query( $connection, $query);
	if(mysqli_num_rows($result) > 0) 
	{
		echo "success!";
		while($row = $result->fetch_assoc()) 
		{
			echo "id: " . $row["p_id"]. " - Name: " . $row["u_id"]. " rating" . $row["rating"]. "rating: " . $row["review"] . "<br>";
		}

	}
	else echo "unsuccessful";

	$connection->close();
?>