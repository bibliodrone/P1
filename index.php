<?php require('p1_logic.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gerry Walden</title>
    <link rel="stylesheet" href="css/p1.css">
  </head>
  <body>
	<header>
	<h2>Gerry Walden</h2>
	</header>
	<main>
	<div id="portrait">
		<img src="images/GerryWalden.png" alt="Gerry Walden">
	</div>
	<div id="aboutMe">
<p> I live in Boston and work in the Harvard Library. I am excited to learn more about server side Web development and PHP as well. In terms of programming languages, I have previous experience with Python, Javascript, and Java.</p>
</div> 
	<div id="quotes">
	<?php echo $finalQuote ?>
	</div>
	</main>
  </body>
</html>

