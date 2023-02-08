<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
?>
<?php include('../db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<header class="header">

<a href="#" class="logo">Job<span style="color:orange ;">Search</span> </a>

<nav class="navbar">
   <div id="close-navbar" class="fas fa-times"></div>
   <a href="index.php">home</a>
   <a href="about.php">about</a>
   <a href="mentorship.php">Mentorship</a>
   <a href="card.php">All Students</a>
   <a href="contact.php">contact</a>
</nav>

<div class="icons">
  <!-- <button class="login-btn" >Login</button> -->
   <a class="login-btn" href="login.php">Login</a>
   <a class="login-btn" href="register.php">Register</a>
   <div id="menu-btn" class="fas fa-bars"></div>
</div>

</header>
<body>
<?php echo  $_SESSION['username'] ?>
    <a href="../logout.php">Logout</a>
    <br>

    <div class="container" style="width:100%;">
    <h3 align="center">Our Amazing Tech Talents</h3> <br>
    <div>
    <ul class="nav nav-pills nav-fill shadow-lg p-3">
  <li class="nav-item">
  <a href="userhome.php">All</a>
  </li>|
  <li class="nav-item">
  <a href="fullstack.php">Full Stack</a>
  </li>|
  <li class="nav-item">
  <a href="frontend.php">Frontend</a>
  </li>|
  <li class="nav-item">
  <a href="backend.php">Backend</a>
  </li>|
  <li class="nav-item">
  <a href="uiux.php">UI / UX Designer</a>
    </li>|
    <li class="nav-item">
    <a href="mobileapp.php">Mobile App Developer</a>
    </li>|
    <li class="nav-item">
    <a href="officeassistant.php">Office Assistant</a>
    </li>|
    <li class="nav-item">
    <a href="dataanalysts.php">Data Analyst</a>
    </li>
</ul>
</div>
    <?php
     $query = "SELECT * FROM graduates WHERE specialization = 'Mobile App'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
        ?>
        <div class="mainContent">
  <div class="content">
    <ul class="grid columns-3">
        <?php
    while($row = mysqli_fetch_array($result)){
        ?>
        
      <li  class="m-3 shadow-lg p-3  bg-white rounded" style=" background-color: #f1f1f1; border-radius: 5px; padding: 16px;" align="center">
      <div class="card" style="width: 18rem;">
     <img src="../admin/images/<?php echo $row['filename']; ?> " >
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["username"]; ?></h5>
    <p class="card-text"><?php echo $row["description"]; ?></p>
    <h5 class="text-info h6"><?php echo $row["skills"]; ?></h5>
    <h5 class="text-info h6"><?php echo $row["specialization"]; ?></h5>
    
    <button onclick="sendMail();  return false" style="margin-top:5px;" class="btn btn-danger questionContainer">Click to Hire</button>
           <button type="button" class="btn btn-info ml-4" data-toggle="modal" data-target="#myModal" style="margin-top:5px">View more</button>
  </div>
</div>
    </li>


           
         
           
           <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      </li>
    
      <?php }
      ?>
     </ul>
  </div>
</div> 
   <?php }
   ?>
    <script src="app.js"></script>
</body>
</html>