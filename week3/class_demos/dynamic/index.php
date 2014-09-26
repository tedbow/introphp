<?php
/**
 * 1. Change to load main content from url: index.php?page=my-
 *
 */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title> Demo | Responsive Web</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<link href="styles/main.css" type="text/css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type='text/javascript' src='scripts/respond.min.js'></script>
	</head>
	<body>

		<div id="wrapper">

			<header>

				<nav id="skipTo">
					<ul>
						<li>
							<a href="#main" title="Skip to Main Content">Skip to Main Content</a>
						</li>
					</ul>
				</nav>

				<h1>Demo</h1>

				<nav>
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#" title="About">About</a></li>
						<li><a href="#" title="Work">Work</a></li>
						<li><a href="#" title="Contact">Contact</a></li>
					</ul>
				</nav>

				<div id="banner">
					<img src="images/banner.jpg" alt="banner" />
				</div>

			</header>

              <section id="main">
				<h1>Main section</h1>
                <p>
                <?php
                //var_dump($_GET);

                $module_name = $_GET['module'];
                $module_file_to_include = $module_name . '/module.php';
                echo "from index.php";
                // @todo Handle if module doesn't exist
                if (file_exists($module_file_to_include)) {

                  require $module_file_to_include;
                }




                //echo "<br>filetoinclude=$file_to_include";


                ?>
                </p>

			</section>

			<aside>
				<h1>Sub-section</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<h1>Sub-section2</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</aside>

		</div>

	</body>
</html>
