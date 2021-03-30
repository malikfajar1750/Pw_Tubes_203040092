<?php

	$conn = mysqli_connect("Localhost", "root", "","pw_tubes_203040092");
	



function query ($sql)
{
	global $conn;
	$result = mysqli_query($conn, $sql);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

?>