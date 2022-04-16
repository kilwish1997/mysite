
<?php


$user = 'root';
$password = '';

$database = 'test_db';


$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);


if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}


$sql = "SELECT * FROM test ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Night Walkers User details</title>
	<link rel="stylesheet" href="css/style6.css">
	
	
	
</head>

<body>
	<section>
		<h1>Night Walkers</h1>

		<table>
			<tr>
				<th>Id</th>
				<th> Name</th>
				<th>Message</th>
				<th>Created at</th>
			

			</tr>
			
			<?php 
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['message'];?></td>
				<td><?php echo $rows['created_at'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
