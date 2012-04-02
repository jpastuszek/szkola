<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Thunder, thunder, thundercats, Ho!</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body class="wrapper">
		<header>
			<div class="title">Thunder, thunder, thundercats, Ho!</div>
		</header>

		<section class="container">
			<section class="left">
				<nav>
					<a class="menu_entry" href="cw3.php">cw3</a>
					<a class="menu_entry" href="products.html">products</a>
					<a class="menu_entry menu_entry_selected" href="contact.html">contacts</a>
				</nav>
			</section>

			<section class="site">
				<article>
					<section>
						PHP
					</section>
					<section>
<?php
if (isset($_POST['message'])) {
	#$tekst = $_POST['message'];
	$tekst = htmlspecialchars($_POST['message']);
	print "Wpisana wartość to <b> $tekst </b><br/>"; 
	print '<a href="contact.html"> Powrót do formularza </a>'; 

} else { // nie ma wpisanych danych, wyświetlasz formularz
	echo "brak danych!!!";
}
?>

						<p>
<?php
	$tekst = htmlspecialchars($_POST['message']);
	mysql_connect ("localhost","root","") or die("Nie można się połączyć. Komunikat: ".mysql_error()."; Numer błędu: ".mysql_errno());

	$sql = mysql_select_db("form") or die("Nie można pobrać".mysql_error()."; Numer błędu: ".mysql_errno());
	$zapytanie = "SELECT * FROM telefony;";
	$wykonaj = mysql_query($zapytanie) or die("Błąd w zapytaniu");
	while($row = mysql_fetch_row($wykonaj)) { print_r($row); echo "<br/>";
	}

	mysql_close();
?>
						</p>
					</section>
				</article>
			</section>
		</section>
		<footer>Copyright 2011 Jakub Pastuszek</footer>
	</body>
</html>


