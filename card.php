<?php 
	include("config.php");
?>
<html>
<head>
	<title>Graduates</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<script>
	$(document).ready(function(){
		load_data();
		function load_data(query)
		{
			$.ajax({
			url:"searchresult.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
			});
		}
		$('#search').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
		});
	});
	</script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/queries.css">
</head>
<body>
	 
<!-- header section starts  -->
    <!-- navigation -->
    <nav>
	<a class="" href="index.php"><img src="Group 2.png" alt="" /></a>
      <div class="navigation">
        <ul>
          <i id="menu-close" class="fas fa-times"></i>
          <li><a href="index.php" >Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="card.php"  class="active">Students</a></li>
          <li><a href="mentorship.php">Mentorship</a></li>
          <li><a href="course.php">Courses</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="btn">
        <a class="blue" href="#">Login</a>
        <img id="menu-btn" src="images/menu.png" alt="" />
      </div>
    </nav>



<!-- header section ends -->
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

<div class="container-fluid" style="text-align:center;">       
<div class="content-wrapper">
	<div class="containers" style="margin-top: 40px;">
		<h1 style=" font-size: 3rem;      
                   font-weight: 700;
  color: #000;">Search Categories interested </h1>
		<div class="rows">
		<div class="" style=" justify-content: center; text-align:center; ">
			<input type="text" name="search" id="search" placeholder="Search for full-stack, frontend ,backend etc." class="form-control" style="padding:35px; text-align:center; align-self:center; width:70%; margin:0 auto;"  />
			 <br>
		</div>
		<br>
		<br>
		<div id="result"></div>
		</div>	
	</div>
</div>
</div>


<br>

<!-- 
<footer style="margin-top: 50px">
      <div class="footer-col">
        <h3>Top Links</h3>
        <li>Home</li>
        <li>About</li>
        <li>Contact</li>
        <li>Mentorship</li>
      </div>

      <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Manage Website</li>
        <li>Marketing Services</li>
      </div>
      <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Manage Website</li>
        <li>Marketing Services</li>
      </div>
    </footer>
<!-- footer section ends -->





<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>





</body>
</html>



</body>
</html>