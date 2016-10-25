
<?php
$DBHOST="localhost";
$DBNAME="myDB";
$DBPASS="tejas";
$DBUSER="root";

$connection=mysqli_connect('$DBHOST','$DBUSER','$DBUSER','$DBNAME');


	if($connection)
	{
		echo "<script>alert('connection successful')</script>";

	}
	else
	{
		echo mysql_error();
	}
?>
