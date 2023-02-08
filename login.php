<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "odc_jobsearch";

session_start();

$dbcon = mysqli_connect($host, $user, $password, $db);
if($dbcon === false)
{
    die("connection_error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "select * from login where username = '".$username."' AND '".$password."'";

    $result = mysqli_query($dbcon,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {   $_SESSION['username']=$username;
        header("Location: card.php");
    }
    elseif($row["usertype"]=="admin")
    {     $_SESSION['username']=$username;
        header("Location:./admin/adminhome.php");
    }
    else
    {
        echo "Username or password incorrect";
    }
}





?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://code.jquery.com/jquery-3.6.1.min.js"
      integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- navigation -->
    <nav>
      <img src="Group 2.png" alt="" />
      <div class="navigation">
        <ul>
          <i id="menu-close" class="fas fa-times"></i>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="Students.php">Students</a></li>
          <li><a href="mentorship.php">Mentorship</a></li>
          <li><a href="course.php">Courses</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="btn">
        <a class="blue" href="login.php">Login</a>
        <img id="menu-btn" src="images/menu.png" alt="" />
      </div>
    </nav>

    <!-- home section -->

    <main class="main">
      <div class="containerss">
        <section class="wrapper">
          <div class="heading">
            <h1 class="text text-large">Login</h1>
            <p class="text text-normal">
              New user?
              <span
                ><a href="register.php" class="text text-links">Create an account</a></span
              >
            </p>
          </div>
          <form name="login" class="form"  action="#" method="POST">

            <div class="input-control">
              <label for="email" class="input-label" hidden
                >Email Address</label
              >
              <input
                type="text"
                name="username"
                id="email"
                class="input-field"
                placeholder="Username"
              />
            </div>
            <div class="input-control">
              <label for="password" class="input-label" hidden>Password</label>
              <input
                type="password"
                name="password"
                id="password"
                class="input-field"
                placeholder="Password"
              />
            </div>
           
      

            <div class="input-control">
              <a href="forgotpassword.html" class="text text-links">Forgot Password</a>
              <input
                type="submit"
                name="submit"
                class="input-submit"
                value="Login"
      
              />
            </div>
          </form>
        
          </div>
        </section>
      </div>
    </main>

    <footer style="margin-top: 50px">
    <div class="footer-col">
    <img src="img/gp2.png" alt="" />
    <div class="pro-links">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
          </div>
      </div>
      <div class="footer-col">
        <h3>Top Links</h3>
        <li>Home</li>
        <li>About</li>
        <li>Contact</li>
        <li>Mentorship</li>
      </div>

      <div class="footer-col">
        <h3>Top Links</h3>
        <li>Privacy Policy</li>
        <li>Terms of use</li>
        <li>Frequently Asked Questions</li>
        <li>Marketing Services</li>
      </div>
      <div class="footer-col">
        <h3>Top Products</h3>
        <li>Top Student</li>
        <li>How to Hire</li>
        <li>courses</li>
        <li>Training Analysis</li>
      </div>
    </footer>
    <script>
      $("#menu-btn").click(function () {
        $("nav .navigation ul").addClass("active");
      });
      $("#menu-close").click(function () {
        $("nav .navigation ul").removeClass("active");
      });
    </script>

    <script src="js/index.js
  "></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </body>
</html>
