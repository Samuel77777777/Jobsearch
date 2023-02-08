<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
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
    <a class="" href="index.php"><img src="Group 2.png" alt="" /></a>
      <div class="navigation">
        <ul>
          <i id="menu-close" class="fas fa-times"></i>
          <li><a href="index.php" >Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="card.php">Students</a></li>
          <li><a href="mentorship.php" class="active">Mentorship</a></li>
          <li><a href="course.php">Courses</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="btn">
        <a class="blue" href="Login.html">Login</a>
        <img id="menu-btn" src="images/menu.png" alt="" />
      </div>
    </nav>

    <!-- home section -->

    <section id="home" class="home">
      <h2>
        We Encourage people to mentor our students
      </h2>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi
        sapiente, velit hic fuga ut distinctio praesentium similique placeat
        ipsam, eaque ducimus alias unde dolorum cupiditate nam ex doloribus
        consequuntur. Unde?
      </p>
      <div class="btn">
        <a class="blue" href="dboard/dboard.php">Start Mentoring</a>
        <a class="yellow" href="course.php">Visit Courses</a>
      </div>
    </section>

    <section class="mission">
      <h1>Why we Need Mentors</h1>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quia nobis
        quaerat quas rem possimus, alias laborum libero consectetur, similique
        voluptates doloremque suscipit deserunt ipsum fugiat animi voluptate ab
        autem modi ratione tempora. Debitis ipsum et iste! Architecto inventore
        beatae dignissimos ad sit, eligendi provident accusamus cum deleniti
        corrupti dolores minus dolore impedit aperiam expedita necessitatibus
        odio mollitia vero officia in eos, dolorum quod. Autem perferendis
        fugiat commodi necessitatibus ipsum eaque magni iste magnam esse, amet
        ab quaerat consequuntur laboriosam nihil deleniti culpa, accusamus, eum
        vel perspiciatis ea fugit consectetur modi temporibus? Harum hic
        adipisci dolores at a, voluptatem officiis assumenda cum! Nam at sed
        magnam consequatur corporis nisi fuga, molestiae iure temporibus ?
      </p>
    </section>

    <div class="card-sec">
      <div class="card-sec1">
        <i class="fas fa-share-alt"></i>
        <br />
        <h2>Give back and change the world</h2>
        <p>
          We are changing the mindset of students and teaching them what it
          means to become an entrepreneur
        </p>
      </div>

      <div class="card-sec1">
        <i class="fas fa-trophy"></i>
        <br />
        <h2>Feel Happy, proud, and satisfied</h2>
        <p>
          We are changing the mindset of students and teaching them what it
          means to become an entrepreneur
        </p>
      </div>

      <div class="card-sec1">
        <i class="fas fa-share-alt"></i>
        <br />
        <h2>Expand your business networks</h2>
        <p>
          We are changing the mindset of students and teaching them what it
          means to become an entrepreneur
        </p>
      </div>

      <div class="card-sec1">
        <i class="fas fa-air-freshener"></i>
        <br />
        <h2>Travelto intersting destionation</h2>
        <p>
          We are changing the mindset of students and teaching them what it
          means to become an entrepreneur
        </p>
      </div>

      <div class="card-sec1">
        <i class="fas fa-arrows-alt-v"></i>
        <br />
        <h2>mentoring bridges the generation gap</h2>
        <p>
          We are changing the mindset of students and teaching them what it
          means to become an entrepreneur
        </p>
      </div>
    </div>

    
 <section class="videos" style="text-align:center; margin-top: 40px;">
       <video src="img/The power of mentoring Lori Hunt at TEDxCCS.mp4" style="width: 100%; height:auto;" controls autoplay></video>
    </iframe>
    </section>
   

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
