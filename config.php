<?php

	$servername = "localhost";
	$username = "id16192566_id16073135_root2";
	$password = "Ln0$j#c$8!+9XIFx";
	$dbname = "id16192566_kashyap";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>