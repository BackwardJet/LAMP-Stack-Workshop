<?php
	#foreach($_POST as $key => $value) {
	#	echo $key . " : " . $value . "<br />\r\n";
	#}
	if ($_POST) {
		$servername = "localhost";
		$username = "root";
		$password = "password";
		$dbname = "RSVP";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}  
		if (!$_POST[food]) {
			$params = "'" . $_POST[name] . "','" . $_POST[email] . "'," . $_POST[num_attendees] . ",NULL";
		} else {
			$params = "'" . $_POST[name] . "','" . $_POST[email] . "'," . $_POST[num_attendees] . ",'" . $_POST[food] . "'";
		}
		$sql = "INSERT INTO Attendees (id,name,email,num_attendees,food) VALUES (NULL," . $params . ")";
		#echo $params;
		echo "\n</br>";
		#echo $sql;
		$result = $conn->query($sql);
		if ($result) {
			echo "New record created successfully";	
		}
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}

?>
