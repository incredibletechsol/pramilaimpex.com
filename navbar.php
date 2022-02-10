  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="index.php"><img src="assets/img/logo.jpeg" border="0"></a></h1>
      <nav class="nav-menu d-none d-lg-block">
		<ul>
			<?php
		    $pageName = basename($_SERVER['PHP_SELF']);
			if($pageName == "index.php") {
			echo "<li class='active'><a href='index.php'>Home</a></li>";
			echo "<li><a href='aboutus.php'>About Us</a></li>";
			echo "<li><a href='services.php'>Services</a></li>";
			echo "<li><a href='products.php'>Products</a></li>";
			echo "<li><a href='contact.php'>Contact Us</a></li>";
			}
			if($pageName == "aboutus.php") {
			echo "<li><a href='index.php'>Home</a></li>";
			echo "<li class='active'><a href='aboutus.php'>About Us</a></li>";
			echo "<li><a href='services.php'>Services</a></li>";
			echo "<li><a href='products.php'>Products</a></li>";
			echo "<li><a href='contact.php'>Contact Us</a></li>";
			}
			if($pageName == "services.php") {
			echo "<li><a href='index.php'>Home</a></li>";
			echo "<li><a href='aboutus.php'>About Us</a></li>";
			echo "<li class='active'><a href='services.php'>Services</a></li>";
			echo "<li><a href='products.php'>Products</a></li>";
			echo "<li><a href='contact.php'>Contact Us</a></li>";
			}
			if($pageName == "products.php") {
			echo "<li><a href='index.php'>Home</a></li>";
			echo "<li><a href='aboutus.php'>About Us</a></li>";
			echo "<li><a href='services.php'>Services</a></li>";
			echo "<li class='active'><a href='products.php'>Products</a></li>";
			echo "<li><a href='contact.php'>Contact Us</a></li>";
			}
			if($pageName == "contact.php") {
			echo "<li><a href='index.php'>Home</a></li>";
			echo "<li><a href='aboutus.php'>About Us</a></li>";
			echo "<li><a href='services.php'>Services</a></li>";
			echo "<li><a href='products.php'>Products</a></li>";
			echo "<li class='active'><a href='contact.php'>Contact Us</a></li>";
			}
			?>
        </ul>

      </nav><!-- .nav-menu -->
    </div>
  </header>