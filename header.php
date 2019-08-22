<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>West Linn Community Chorus</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="wlcc.css?<?php echo rand(1, 1000);?>" rel="stylesheet" type="text/css">

</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="./index.php">
            <img src="./img/logo.jpg" class="figure-img img-fluid rounded mb-0" alt="" style="max-width: 60px;">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
			aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./support.php">Support</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./join.php">Join</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./events.php">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./contact.php">Contact</a>
				</li>
				<?php
					
					$urls = array(
						"Home"    => "./index.php",
						"About"   => "./about.php",
						"Support" => "./support.php",
						"Join"    => "./join.php",
						"Events"  => "./events.php",
						"Contact" => "./contact.php"
					);

					foreach ($urls as $name => $url) {
						$listClass = (($currentPage === $name) ? "class='nav-item active" : "class='nav-item'");
						$aSpan = (($currentPage === $name) ? " <span class='sr-only'>(current)</span>" : "");

						print 
							"<li $listClass>
								<a class='nav-link' href='$url'>$name <span class='sr-only'>(current)</span></a>
							</li>";
					}
				?>
			</ul>
		</div>
	</nav>