<!DOCTYPE html>
<html>
<body>

<h1>HNG Internship</h1>
<h2>My name is Trust</h2>
<h3>I am a Front end dev</h3>
<P> I am proficient in 
	<ul>
 		<li>HTML5</li>
		<li>CSS3</li>
		<li>JavaScript</li>
	</ul>
</p>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli('127.0.0.1','root', '');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connection OK!";
?>
 
</body>
</html>

