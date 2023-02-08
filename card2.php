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
			url:"searchresult2.php",
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

<header class="header">

<a class="" href="index.php"><img src="Group 2.png" alt="" /></a>


<nav class="navbar" style="margin-top: 40px;">
  <div id="close-navbar" class="fas fa-times"></div>
  <a href="index.php">home</a>
  <a href="about.php">about</a>
  <a href="mentorship.php">Mentorship</a>
  <a href="card2.php">All Students</a>
  <a href="contact.php">contact</a>
  <a href="team.php">Team</a>
</nav>
 

<div class="icons">

			 <a class="login-btn" href="register.php">Login / Register</a>
  <div id="menu-btn" class="fas fa-bars"></div>
</div> 


</header>


<!-- header section ends -->

<div class="container-fluid">       
<div class="content-wrapper">
	<div class="container">
		<h1>Graduates </h1>
		<div class="row">
		<div class="col-xs-6">
			<input type="text" name="search" id="search" placeholder="Search for full-stack, frontend ,backend etc." class="form-control"  />
			
		</div>
		<br>
		<br>
		<div id="result"></div>
		</div>	
	</div>
</div>
</div>





<section class="footer">

   <div class="boxes-container">

      <div class="boxes">
         <a href="index.php" class="logo"><img src="Group 1.png" alt="" style="width: 35%;"> </a>
         <p>You can follow us on social media for any updates.</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="boxes">
         <h3>quick links</h3>
         <a href="index.php" class="link">home</a>
         <a href="about.php" class="link">about</a>
         <a href="mentorship.php" class="link">Mentorship</a>
         <a href="contact.php" class="link">contact</a>
      </div>

      <div class="boxes">
         <h3>useful links</h3>
         <a href="#" class="link">help center</a>
         <a href="#" class="link">Frequently ask questions</a>
         <a href="#" class="link">send feedback</a>
         <a href="#" class="link">private policy</a>
         <a href="#" class="link">terms of use</a>
      </div>
     


   </div>

  

</section>


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