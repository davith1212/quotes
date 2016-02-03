<?php
session_start();
require('new_connection.php');

	$query = "SELECT name, content, created_at FROM names
	ORDER BY created_at DESC";
	$quote_data = fetch_all($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>BillBoard</title>
	<link rel="stylesheet" type="text/css" href="quoting_css.php">
</head>
<body>
	<div id="container_billboard">
		<div id="wrapper">
		<h3>Here are the awesome quotes!</h3>
<?php
	foreach ($quote_data as $quote) {
?>		
		<div id="scroll">
		 <p>"<?= $quote['content']?>"</p>
		 <p id="p_tag" >- <?= $quote['name']?> at <?= $quote['created_at']?></p> 
		</div>	
<?php
	}
?>		

		</div>	
	</div>
</body>
</html>

