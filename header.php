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
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
	<div <? if ($currentPage === "Home") echo "class='d-none d-sm-block'"; ?>>
		<div class="flex-container">
			<header class="masthead pt-3 pl-md-3 pb-5">
				<div class="inner">
					<nav class="nav nav-masthead justify-content-center">
						<?php	
							$urls = array(
								"Home"            => "./index.php",
								"About"           => "./about.php",
								"Support Us"      => "./support.php",
								"Join the Chorus" => "./join.php",
								"Events"          => "./events.php",
								"Contact"         => "./contact.php"
							);
							foreach ($urls as $name => $url) {
								$aClass = (($currentPage === $name) ? "class='nav-link active'" : "class='nav-link'");
								print "<a $aClass href='$url'>$name</a>";
							}
						?>
					</nav>
				</div>
			</header>
		</div>
	</div>

				
