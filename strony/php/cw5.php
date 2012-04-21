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
	if (!isset($_POST['message'])) {
		echo "brak danych!!!";
	}
	// create table contact (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, title VARCHAR(4) NOT NULL, name VARCHAR(128) NOT NULL, email VARCHAR(128) NOT NULL, message TEXT NOT NULL, rating VARCHAR(10), marketing BOOL);
	mysql_connect("localhost","root","") or die("Nie można się połączyć. Komunikat: ".mysql_error()."; Numer błędu: ".mysql_errno());
	$sql = mysql_select_db("form") or die("Nie można pobrać: ".mysql_error()."; Numer błędu: ".mysql_errno());

	$title = $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = htmlspecialchars($_POST['message']);
	$rating = $_POST['rating'];
	$marketing = $_POST['marketing'];

	$zapytanie = "INSERT INTO contact (title, name, email, message, rating, marketing) VALUES ('$title','$name','$email','$message','$rating','$marketing');";
	//echo "<p>$zapytanie</p>\n";
	mysql_query($zapytanie) or die("Błąd zapytania: ".mysql_error()."; Numer błędu: ".mysql_errno());

	$zapytanie = "SELECT * FROM contact;";
	$wykonaj = mysql_query($zapytanie) or die("Błąd zapytania: ".mysql_error()."; Numer błędu: ".mysql_errno());
?>
						<table>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Name</th>
								<th>E-mail</th>
								<th>Message</th>
								<th>Rating</th>
								<th>Marketing</th>
							</tr>	
<?php
	while($row = mysql_fetch_row($wykonaj)) { 
		echo "<tr>\n";
		echo "<td>$row[0]</td>\n";
		echo "<td>$row[1]</td>\n";
		echo "<td>$row[2]</td>\n";
		echo "<td>$row[3]</td>\n";
		echo "<td>$row[4]</td>\n";
		echo "<td>$row[5]</td>\n";
		if ($row[6] == 0 )
			echo "<td>No</td>\n";
		else
			echo "<td>Yes</td>\n";
		echo "</tr>\n";
	}

	mysql_close();
?>
						</table>
					</section>
				</article>
			</section>
		</section>
		<footer>Copyright 2011 Jakub Pastuszek</footer>
	</body>
</html>

