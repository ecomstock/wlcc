<?php $currentPage = "Home"; ?>

<?php include "./header.php"; ?>

	<main role="main">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="false">
			<div class="carousel-inner" data-pause="false">
				<div class="carousel-caption d-block">
					<div class="d-sm-none">
						<div class="flex-container">
							<header class="masthead pt-3 pl-3">
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
					<h1 class="main-title">WEST LINN COMMUNITY CHORUS</h1>
					<hr class="pt-3" style="max-width: 750px;">
					<p style="max-width: 750px; display: inline-block;"><em>The mission of the West Linn Community Chorus is to share the joy of music and enrich the community through quality choral performance.</em></p>
				</div>
				<div class="carousel-item active" id="bg-1" ></div>
				<div class="carousel-item" id="bg-2"></div>
				<div class="carousel-item" id="bg-3"></div>
				<div class="carousel-item" id="bg-4"></div>
				<div class="carousel-item" id="bg-5"></div>
				<div class="carousel-item" id="bg-6"></div>
				<div class="carousel-item" id="bg-7"></div>
				<div class="carousel-item" id="bg-8"></div>
				<div class="carousel-item" id="bg-9"></div>
				<div class="carousel-item" id="bg-10"></div>
				<div class="carousel-item" id="bg-11"></div>
			</div>
		</div>
	</main>

<?php include "./footer.php"; ?>