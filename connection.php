<?php
	function connection() {
		$db_connection = pg_connect("host=localhost dbname=bike_sharing user=postgres password=resty") or die("Could not connect");

		return $db_connection;
	}
?>