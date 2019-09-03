<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>West Linn Community Chorus</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200&display=swap" rel="stylesheet">
	<link href="wlcc.css?<?php echo rand(1, 1000);?>" rel="stylesheet" type="text/css">

</head>

<body>
	<!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="./index.php">
			<img src="./img/logo.jpg" class="figure-img img-fluid mb-0" alt="" style="max-width: 60px;">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
			aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<?php	
					// $urls = array(
					// 	"Home"    => "./index.php",
					// 	"About"   => "./about.php",
					// 	"Support" => "./support.php",
					// 	"Join"    => "./join.php",
					// 	"Events"  => "./events.php",
					// 	"Contact" => "./contact.php"
					// );
					// foreach ($urls as $name => $url) {
					// 	$listClass = (($currentPage === $name) ? "class='nav-item active'" : "class='nav-item'");
					// 	$SRSpan = (($currentPage === $name) ? "<span class='sr-only'>(current)</span>" : "");

					// 	print 
					// 		"<li $listClass>
					// 			<a class='nav-link' href='$url'>$name $SRSpan</a>
					// 		</li>";
					// }
				?>
			</ul>
		</div>
	</nav> -->

	<div class="flex-container">
		<header class="masthead pt-3 pl-3">
			<div class="inner">
				<nav class="nav nav-masthead justify-content-center">
					<!-- <a class="nav-link active" href="#">Home</a> -->
					<?php	
						$urls = array(
							"Home"    => "./index.php",
							"About"   => "./about.php",
							"Support Us" => "./support.php",
							"Join the Chorus"    => "./join.php",
							"Events"  => "./events.php",
							"Contact" => "./contact.php"
						);
						foreach ($urls as $name => $url) {
							$aClass = (($currentPage === $name) ? "class='nav-link active'" : "class='nav-link'");
							// $SRSpan = (($currentPage === $name) ? "<span class='sr-only'>(current)</span>" : "");
	
							print 
								"<a $aClass href='$url'>$name</a>";
						}
					?>
				</nav>
			</div>
		</header>
	</div>

				
