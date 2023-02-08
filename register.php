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
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="Students.html">Students</a></li>
          <li><a href="mentorship.html">Mentorship</a></li>
          <li><a href="course.html">Courses</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>

      <div class="btn">
        <a class="blue" href="login.php">Login</a>
        <img id="menu-btn" src="images/menu.png" alt="" />
      </div>
    </nav>

<div class="icons">
  <!-- <button class="login-btn" >Login</button> -->
   <a class="login-btn" href="login.php">Login / Register</a>
   <div id="menu-btn" class="fas fa-bars"></div>
</div>

</header>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $company    = stripslashes($_REQUEST['company']);
        $company    = mysqli_real_escape_string($con, $company);
        $address    = stripslashes($_REQUEST['address']);
        $address    = mysqli_real_escape_string($con, $address);
        // $usertype    = stripslashes($_REQUEST['']);
        // $usertype    = mysqli_real_escape_string($con, $usertype);
      
        $query    = "INSERT into `login` (username, password, email, company, address)
                     VALUES ('$username', '" . md5($password) . "', '$email','$company', '$address')";
        $result   = mysqli_query($con, $query);
        if ($result) {

            echo '<script>alert("You have successfully Registered")</script>';
            header("Location: card.php");
            
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

<main class="main">
      <div class="containerss">
        <section class="wrapper">
          <div class="heading">
            <h1 class="text text-large">Sign Up</h1>
            <p class="text text-normal">
              Fill in the form  to create account
            
            </p>
          </div>
          <form name="signin" class="form">
            <div class="input-control">
                <label for="email" class="input-label" hidden
                  >User Name</label
                >
                <input
                  type="text"
                  name="username"
                  id="email"
                  class="input-field"
                  placeholder="User Name"
                />
              </div>
            <div class="input-control">
              <label for="email" class="input-label" hidden
                >Email Address</label
              >
              <input
                type="email"
                name="email"
                id="email"
                class="input-field"
                placeholder="Email Address"
              />
            </div>
            <div class="input-control">
              <label for="password" class="input-label" hidden>Company</label>
              <input
                type="text"
                name="company"
                id="password"
                class="input-field"
                placeholder="Company"
              />
            </div>
            <div class="input-control">
                <label for="password" class="input-label" hidden>Address</label>
                <input
                  type="address"
                  name="address"
                  id="password"
                  class="input-field"
                  placeholder="Address"
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
              <a href="Login.php" class="text text-links">Login</a>
              <input
                type="submit"
                name="submit"
                class="input-submit"
                value="register"
       
              />
            </div>
          </form>
        
          </div>
        </section>
      </div>
    </main>
<?php
    }
?>
</body>
</html>