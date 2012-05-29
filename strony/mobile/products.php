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
		<link rel="stylesheet" href="style_mobile.css" media="screen and (min-width: 100px) and (max-width: 200px)" />
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

		<h2>Juicer Recipes #1 - Plain O' O.J</h2>
		<div>
			<img src="Orange-Juice.jpg" alt="Orange Juice" />
		</div>
		<ul>
			<li>4 medium-sized oranges</li>
		</ul>
		<p>
			Juicing Tip: When juicing oranges (or any kind of citrus fruit in your recipes for juicers) it is a good idea to juice the white membranes at the center of the orange. The majority of the bio-flavonoids in citrus fruits are found in the white membranes. Scrape off some of the white membranes inside the peel and include them in the juice. We don't recommend juicing the whole peel, this will produce very sour unpleasant raw juice recipes.
		</p>

		<h2>Juicer Recipes #2 - Alkaline Juice</h2>
		<div>
			<img src="Alkaline-Juice.jpg" alt="Orange Juice" />
		</div>
		<ul class="recipe">
			<li>Juicer Recipes-1 cup of spinach</li>
			<li>1/2 cucumber</li>
			<li>2 stalks of celery including leaves</li>
			<li>3 carrots</li>
			<li>1/2 apple</li>
		</ul>
		<p>
			Juicing Tip: Juice cucumbers with their skins on. The dark green skin is a great source of chlorophyll, a phytochemical that can help build red blood cells. Cucumbers also contain silica, a mineral that is good for the skin. Make sure to wash them before making cucumber homemade juice recipes.
		</p>

		<h2>Juicer Recipes #3 - A Very Berry Medley</h2>
		<div>
			<img src="Very-Berry-Medley.jpg" alt="Orange Juice" />
		</div>
		<ul class="recipe">
			<li>2 cups of strawberries</li>
			<li>2 cups of blueberries</li>
			<li>1 1/2 cups of raspberries</li>
		</ul>
		<p>
			Berries are among the quickest and easiest of fruits to juice. The only prepping they need is a quick rinse. Strawberries are a small exception as they will need to be topped before juicing. All berries are a great source of antioxidants such as anthocyanins, flavonoids and ellagic acid, all of which have been associated with anti-cancer and anti-heart disease benefits.
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
					<a class="menu_entry" href="index.php">home</a>
					<a class="menu_entry menu_entry_selected" href="products.php">products</a>
					<a class="menu_entry" href="contact.php">contacts</a>
				</nav>
			</section>

			<section class="site">
				<article>
					<section>
						Juicer Recipes #1 - Plain O' O.J
					</section>
					<section>
						<aside>
							<img src="Orange-Juice.jpg" alt="Orange Juice" />
						</aside>
						<section class="right">
							<ul class="recipe">
								<li>4 medium-sized oranges</li>
							</ul>
							Juicing Tip: When juicing oranges (or any kind of citrus fruit in your recipes for juicers) it is a good idea to juice the white membranes at the center of the orange. The majority of the bio-flavonoids in citrus fruits are found in the white membranes. Scrape off some of the white membranes inside the peel and include them in the juice. We don't recommend juicing the whole peel, this will produce very sour unpleasant raw juice recipes.
						</section>
					</section>
				</article>

				<article>
					<section>
						Juicer Recipes #2 - Alkaline Juice
					</section>
					<section>
						<aside>
							<img src="Alkaline-Juice.jpg" alt="Orange Juice" />
						</aside>
						<section class="right">
							<ul class="recipe">
								<li>Juicer Recipes-1 cup of spinach</li>
								<li>1/2 cucumber</li>
								<li>2 stalks of celery including leaves</li>
								<li>3 carrots</li>
								<li>1/2 apple</li>
							</ul>
							Juicing Tip: Juice cucumbers with their skins on. The dark green skin is a great source of chlorophyll, a phytochemical that can help build red blood cells. Cucumbers also contain silica, a mineral that is good for the skin. Make sure to wash them before making cucumber homemade juice recipes.
						</section>
					</section>
				</article>

				<article>
					<section>
						Juicer Recipes #3 - A Very Berry Medley
					</section>
					<section>
						<aside>
							<img src="Very-Berry-Medley.jpg" alt="Orange Juice" />
						</aside>
						<section class="right">
							<ul class="recipe">
								<li>2 cups of strawberries</li>
								<li>2 cups of blueberries</li>
								<li>1 1/2 cups of raspberries</li>
							</ul>
							Berries are among the quickest and easiest of fruits to juice. The only prepping they need is a quick rinse. Strawberries are a small exception as they will need to be topped before juicing. All berries are a great source of antioxidants such as anthocyanins, flavonoids and ellagic acid, all of which have been associated with anti-cancer and anti-heart disease benefits.
						</section>
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
