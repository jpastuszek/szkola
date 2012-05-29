<?php
// Include the configuration file
include_once './inc/wurfl_config_standard.php';

$wurflInfo = $wurflManager->getWURFLInfo();

$ua = $_SERVER['HTTP_USER_AGENT'];
// This line detects the visiting device by looking at its HTTP Request ($_SERVER)
$requestingDevice = $wurflManager->getDeviceForHttpRequest($_SERVER);

if (preg_match("/xhtmlmp/", $requestingDevice->getCapability('preferred_markup'))) {
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

		<h2>Contact us!</h2>
		<form enctype="text/plain" action="mailto:jpastuszek@gmail.com" method="post">
			<dl>
				<dt>
					<label for="name">Name</label>
				</dt>
				<dd>
					<input type="text" id="name"/>
				</dd>
			</dl>
			<dl>
				<dt>
					<label for="email">E-mail</label>
				</dt>
				<dd>
					<input type="text" id="email"/>
				</dd>
			</dl>
			<dl>
				<dt>
					<label for="message">Message</label>
				</dt>
				<dd>
					<input type="text" id="message"/>
				</dd>
			</dl>
			<div><input type="submit" value="Send!" /></div>
		</form>

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
					<a class="menu_entry" href="index.php">home</a>
					<a class="menu_entry" href="products.php">products</a>
					<a class="menu_entry menu_entry_selected" href="contact.php">contacts</a>
				</nav>
			</section>

			<section class="site">
				<article>
					<section>
						Contact us!
					</section>
					<section>
						<form enctype="text/plain" action="mailto:jpastuszek@gmail.com" method="post">
							<dl>
								<dt>
									<label for="name">Name</label>
								</dt>
								<dd>
									<input type="text" id="name" placeholder="John Smith" required />
								</dd>
							</dl>
							<dl>
								<dt>
									<label for="email">E-mail</label>
								</dt>
								<dd>
									<input type="email" id="email" placeholder="you@example.com" required />
								</dd>
							</dl>
							<dl>
								<dt>
									<label for="message">Message</label>
								</dt>
								<dd>
									<textarea id="message" rows="10" cols="80" required></textarea>
								</dd>
							</dl>
							<input type="submit" value="Send!" />
						</form>
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

