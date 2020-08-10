	<!-- Start header -->
	<header class="top-navbar">
	    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	        <div class="container">
	            <!-- <a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="bedrijfslogo" />
				</a> -->
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
	                aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>

	            <div class="collapse navbar-collapse" id="navbars-rs-food">
	                <ul class="navbar-nav ml-auto">

	                    <li class="nav-item <?php if ($bestand == "index.php") {
												echo "active";
											} ?>"><a class="nav-link" href="index.php">Home</a></li>
	                    <li class="nav-item <?php if ($bestand == "menu2.php") {
												echo "active";
											} ?>"><a class="nav-link" href="menu2.php">Menu</a></li>
	                    <li class="nav-item <?php if ($bestand == "about.php") {
												echo "active";
											} ?>"><a class="nav-link" href="about.php">About</a></li>
	                    <li class="nav-item dropdown <?php if ($bestand == "reservation.php" || $bestand == "stuff.php"  || $bestand == "gallery.php") {
															echo "active";
														} ?>">
	                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
	                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
	                            <a class="dropdown-item" href="reservation.php">Reservation</a>
	                            <a class="dropdown-item" href="stuff.php">Stuff</a>
	                            <a class="dropdown-item" href="gallery.php">Gallery</a>
	                        </div>
	                    </li>
	                    <li class="nav-item dropdown <?php if ($bestand == "blog.php" || $bestand == "blog-details.php") {
															echo "active";
														} ?>">
	                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
	                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
	                            <a class="dropdown-item" href="blog.php">blog</a>
	                            <a class="dropdown-item" href="blog-details.php">blog Single</a>
	                        </div>
	                    </li>
	                    <li class="nav-item <?php if ($bestand == "contact.php") {
												echo "active";
											} ?>"><a class="nav-link" href="contact.php">Contact</a></li>
	                    <?php
						if (isset($_SESSION['status']) && $_SESSION['status'] == 1) {
							echo '<li class="nav-item"><a class="nav-link" href="recepten.php">Recepten</a></li>';
						}

						?>
	                    <li class="nav-item"><a class="nav-link" href="admin.php">
	                            <?php
								if (isset($_SESSION['status'])) {
									echo 'Logout';
								} else {
									echo 'Login';
								}
								?>
	                        </a></li>
	                </ul>
	            </div>
	        </div>
	    </nav>
	</header>
	<!-- End header -->