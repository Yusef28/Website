<?php
include('config/setup.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title> YCC french guys site </title>
<link rel="stylesheet" href="french/frenchcss.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body class="body">
	<header class="mainheader">
		<img src="imagespolitics/sky.jpg">
		
		<nav>
			<ul>
				<li><a href="index.php?page=home">Home</a></li>
				<li><a href="index.php?page=about">About</a></li>
				<li><a href="index.php?page=portfolio">Portfolio</a></li>
				<li><a href="index.php?page=contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="maincontent">
		<?php 	
			include('french/pages/'.$pg.'.php');
		?>
	</div>
	



<footer class="mainfooter">
<p>copyright</p>
</footer>
</body>
</html>

