<!DOCTYPE html>
<html>
<body>

<?php
	require "connection.php";
	$connection = connection();
	$query = "SELECT * FROM bike_sharing.bike_sharing;";
	$names = pg_query($connection, $query);
	pg_close($connection);
?>

<h1>Percobaan Deployment Basis Data</h1>
<p>Daftar Nama</p>
<?php
	$size = count($names);
	if ($size != 0) {
		while($row = pg_fetch_assoc($names)) {
			echo ($row["nama"]);
			echo ("<br />");
			echo ($row["email"]);
			echo ("<br />");
		}
	}
?>

</body>
</html>