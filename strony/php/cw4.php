<?php echo '<!doctype html>' ?>
<html lang="pl">
	<head>
		<meta charset="UTF-8"> <title>Formularz</title>
	</head>
	<body>
	<?php
		if (isset($_GET['tekst'])) {
			$tekst = $_GET['tekst'];
			print "Wpisana wartość to <b>$tekst</b><br/>";
			print '<a href="cw4.php">Powrót do formularza</a>';
		} else {
			print '<form action="cw4.php" method=get>';
			print '<input type="text" name="tekst">';
			print '<input type="submit" value="Wyśli">';
			print '</form>';
		} 
	?>
	</body>
</html>
