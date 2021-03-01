<!DOCTYPE html>
<html>
<head>
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
	<title></title>
</head>
<body>
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="gallery.php">Gallery</a>-
  <a href="signup.php">Login</a>
  <a href="demoPage.php">Demo</a>
</div>

<!-- Use any element to open the sidenav -->


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">


<div class="hero-image">
    <span style="cursor: pointer;margin-left: 20px;" onclick="openNav()">&#9776;</span>
  <div class="hero-text">
    <h1>VendorX</h1>
    <p>Take your company forward by making your very own custom products</p>
    <form action="gallery.php">
    	<button>View Gallery</button>
    </form>
    
  </div>
</div>


<div class="top-products">
	Our top Selling Products
</div>


<div class="row">
  <div class="column">
  	<div class="img-container">
  		<img src="assets/tshirt.png" alt="Snow" class="image">
  		<div class="middle">
    		<div class="text">
    			T-Shirts
    		</div>
		</div>
  	</div>
  </div>
  <div class="column">
  	<div class="img-container">
  		<img src="assets/cofee_mug.jpg" alt="Forest" class="image">
		<div class="middle">
    		<div class="text">
    			Coffee mugs
    		</div>
		</div>
  	</div>
  </div>
  <div class="column">
  	<div class="img-container">
		<img src="assets/pen.jpg" alt="Forest" class="image">
		<div class="middle">
    		<div class="text">
    			Pens
    		</div>
		</div>
  	</div>
  </div>
</div>


<div class="footer">
  <p style="color: white;">Engraving © 2021. Privacy Policy</p>
</div>


</body>
<script type="text/javascript">
	function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>
</html>