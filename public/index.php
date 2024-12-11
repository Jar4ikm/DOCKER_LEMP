<pre style="font-size: 50px">
<?php
echo "PHP is working!"."<br>";


//Mysql Test
$host = "mysql";
$username = "jar4ik";
$password = "YOURPASSWORD";
$database = "site";

$con = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_error()) {
	die("Connecting error: " . mysqli_connect_error());
}

$line = "SELECT * FROM messages";
$select = mysqli_query($con, $line);

if (!$select) {
      	die("Error: " . mysqli_error($con));
}

while ($row = mysqli_fetch_assoc($select)) {
	echo $row['message']." ";
}

