<?php
	require_once('db_config.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM ticket_booking" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>ID</th> <th>EMAIL</th> <th>APP_DATE</th> <th>FROM_LOCATION</th> <th>TO_LOCATION</th> <th>STATUS</th> <th>addBooking</th> <th>ConfirmBooking</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> ID </td>";
		echo "<td> EMAIL </td>";
        echo "<td> APPT_DATE </td>";
        echo "<td> FROM_LOCATION </td>";
        echo "<td> TO_LOCATION </td>";
        echo "<td> STATUS </td>";
		echo "<td> <a href = 'appt_input.php?ID=$ID'> addBooking </a> </td>";
		echo "<td> <a href = 'confirm_input.php?ID=$ID&EMAIL=$EMAIL&APPT_DATE=$APPT_DATE&FROM_LOCATION=$FROM_LOCATION&TO_LOCATION=$TO_LOCATION&STATUS=$STATUS'> ConfirmBooking </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=create_input.php>CREATE a new record</a>";
?>