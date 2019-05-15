<?php
	function connection() {
		$db_connection = pg_connect("host=localhost dbname=try user=postgres password=resty") or die("Could not connect");

		return $db_connection;
	}
?>