<html>
<head>
</head>
<body>
<?php
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$dbase = 'PHOTOSHARE';

	$conn = mysqli_connect($server, $user, $pass, $dbase);
		
		if(!$conn){
		die('Could not connect to database because '.mysqli_connect_error()).'<br /><br />';
		} else {
			echo "You are successfully connected to $dbase.";
		}
		
		$qry = "INSERT INTO USERS(fname, lname, email, phone, uname, pwd) VALUES ('$fname', '$lname', '$email', '$phone', '$uname', '$pwd');";
		
		$publish = mysqli_query($conn,$qry);
		
		if($publish){
			echo "User was successfully created.<br /><br />";
		} else {
			echo "An error has occured: ".mysqli_error($conn)."<br /><br />";
		}
?>
</body>
</html>