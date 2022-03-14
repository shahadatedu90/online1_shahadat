<?php
	$email = $_GET["email"];
	$appt = $_GET["appt"];
    $from = $_GET["from"];
    $to = $_GET["to"];

	require_once('db_config.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO ticket_booking VALUES ( '', '$email', '$appt', '$from', '$to','' )" )
		or die("Can not execute query");

	echo "Record inserted";

	echo "<p><a href=index.php>READ all records</a>";
?>