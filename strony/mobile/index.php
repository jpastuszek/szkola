<?php
// Include the configuration file
include_once './inc/wurfl_config_standard.php';

$wurflInfo = $wurflManager->getWURFLInfo();

$ua = $_SERVER['HTTP_USER_AGENT'];
// This line detects the visiting device by looking at its HTTP Request ($_SERVER)
$requestingDevice = $wurflManager->getDeviceForHttpRequest($_SERVER);

if (preg_match("/xhtmlmp|wml/", $requestingDevice->getCapability('preferred_markup'))) {
	header("Content-Type: application/xhtml+xml");
	echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n";
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>
	<head>
		<title>Thunder, thunder, thundercats, Ho!</title>
	</head>
	<body>
		<h1>Thunder, thunder, thundercats, Ho!</h1>

		<div>
			<a accesskey="1" href="index.php">home</a>
		</div>
		<div>
			<a accesskey="2" href="products.php">products</a>
		</div>
		<div>
			<a accesskey="3" href="contact.php">contacts</a>
		</div>

		<h2>There's a voice</h2>
		<p>
			There's a voice that keeps on calling me. Down the road, that's where I'll always be. Every stop I make, I make a new friend. Can't stay for long, just turn around and I'm gone again. Maybe tomorrow, I'll want to settle down, Until tomorrow, I'll just keep moving on.
		</p>

		<h2>Ten years ago</h2>
		<p>
			Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.
		</p>

		<h2>School</h2>
		<p>
			I never spend much time in school but I taught ladies plenty. It's true I hire my body out for pay, hey hey. I've gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it's only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. 'Cause I'm the unknown stuntman that makes Eastwood look so fine.
		</p>

		<h2>Ulysses</h2>
		<p>
			Ulysses, Ulysses - Soaring through all the galaxies. In search of Earth, flying in to the night. Ulysses, Ulysses - Fighting evil and tyranny, with all his power, and with all of his might. Ulysses - no-one else can do the things you do. Ulysses - like a bolt of thunder from the blue. Ulysses - always fighting all the evil forces bringing peace and justice to all.
		</p>

		<div><strong>Copyright 2011 Jakub Pastuszek</strong></div>
	</body>
</html>
<?php
} else {
?>
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
					<a class="menu_entry menu_entry_selected" href="index.php">home</a>
					<a class="menu_entry" href="products.php">products</a>
					<a class="menu_entry" href="contact.php">contacts</a>
				</nav>
			</section>

			<section class="site">
				<article>
					<section>
						There's a voice
					</section>
					<section>
						There's a voice that keeps on calling me. Down the road, that's where I'll always be. Every stop I make, I make a new friend. Can't stay for long, just turn around and I'm gone again. Maybe tomorrow, I'll want to settle down, Until tomorrow, I'll just keep moving on.
					</section>
				</article>

				<article>
					<section>
						Ten years ago
					</section>
					<section>
						Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.
					</section>
				</article>

				<article>
					<section>
						School
					</section>
					<section>
						I never spend much time in school but I taught ladies plenty. It's true I hire my body out for pay, hey hey. I've gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it's only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. 'Cause I'm the unknown stuntman that makes Eastwood look so fine.
					</section>
				</article>

				<article>
					<section>
						Ulysses
					</section>
					<section>
						Ulysses, Ulysses - Soaring through all the galaxies. In search of Earth, flying in to the night. Ulysses, Ulysses - Fighting evil and tyranny, with all his power, and with all of his might. Ulysses - no-one else can do the things you do. Ulysses - like a bolt of thunder from the blue. Ulysses - always fighting all the evil forces bringing peace and justice to all.
					</section>
				</article>
			</section>
		</section>
		<footer>Copyright 2011 Jakub Pastuszek</footer>
	</body>
</html>
<?php
}
?>
