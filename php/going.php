<html>
    <head>
        <title>Who's Going</title>
    </head>
    <body>
        <table border="1">
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Number of Attendees</td>
                <td>Food Preference?</td>
            </tr>
        </thead>
        <tbody>
        <?php
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
		$sql = "SELECT * FROM Attendees";
		$results = $conn->query($sql);
            	while($row = mysqli_fetch_array($results)) {
        ?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['num_attendees']?></td>
                    <td><?php echo $row['food']?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
    </body>
</html>
