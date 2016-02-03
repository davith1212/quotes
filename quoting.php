<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Quoting Dojo</title>
	<link rel="stylesheet" type="text/css" href="quoting_css.php">
</head>
<body>
	<div id="container">
	<fieldset>
		<form action="process_quoting.php" method="post">
			<h1>Welcome to QuotingDojo</h1>	
			<h3>Your Name:</h3>
			<input id="input" type="text" name="name">
<?php
		if(isset($_SESSION['error'])) {
			echo $_SESSION['error'] ;
		}

?>
			<div id="quote">
			<h3 id="line">Your Quote:</h3>
			<textarea name="content"></textarea>
<?php
			if(isset($_SESSION['error_content'])){
				echo $_SESSION['error_content'];
			}

?>			
			<ul>
				<li><a class="button" href="process_quoting.php"><button>Add My Quote</button></a></li>
				<li><a class="button" href="billboard.php"><button>Skip to Quote</button></a></li>
			</ul>	
			</div>
		</form>	
	</fieldset>
	</div>
</body>
</html>