<?php
include('dbconnection.php');
$compname=$_POST['companyname'];
$email=$_POST['email'];
$prob=$_POST['prob'];
$type=$_POST['type'];

$query=mysqli_query($connection,"insert into myDB.giveproblems (Company,Email,Abstract,Type) values('$compname','$email','$prob','$type')");


if($query)
{
	echo $query;
}
















?>