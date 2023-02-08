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
          <li><a href="mentorship.php" >Mentorship</a></li>
          <li><a href="course.php" >Courses</a></li>
          <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
      </div>

      <div class="btn">
        <a class="blue" href="Login.html">Login</a>
        <img id="menu-btn" src="images/menu.png" alt="" />
      </div>
    </nav>

    <section id="about-home" class="about-home">
      <h2>Contact Us/</h2>
    </section>

    <section id="contact">
      <div class="getin">
        <h2>Get In Touch</h2>
        <p>Looking for help? Fill the form ans start a new adventure.</p>

        <div class="getin-details">
          <h3>Headquarters</h3>
          <div>
            <i class="fas fa-home get"></i>
            <p>13 wilkinson road, freetown</p>
          </div>
          <h3>Phone</h3>
          <div>
            <i class="fas fa-phone-alt get"></i>
            <p>+232 75715080 <br />+232 75715080</p>
          </div>
          <h3>Support</h3>
          <div>
            <i class="fas fa-envelope-open-text get"></i>
            <p>
              odcsierraleone@gmail.com <br />
              odcsierraleone@gmail.com
            </p>
          </div>
          <h3>Follow Us</h3>
          <div class="pro-links">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-twitter"></i>
          </div>
        </div>
      </div>

      <div class="form">
        <h4>Lets connect</h4>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, soluta!
        </p>
        <div class="form-row">
          <input type="text" placeholder="Your Name" />
          <input type="text" placeholder="Your Email" />
        </div>
        <div class="form-col">
          <input type="text" placeholder="subject" />
        </div>
        <div class="form-col">
          <textarea
            name=""
            id=""
            cols="30"
            rows="8"
            placeholder="How can we help you?"
          ></textarea>
        </div>
        <div class="form-col">
          <button>Send Message</button>
        </div>
      </div>
    </section>

    <section id="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.142149126941!2d-13.265067526156832!3d8.48555649726127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf04c3862450eeaf%3A0x9f5cfae2d6d71abd!2s13%20Wilkinson%20Road%2C%20Freetown%2C%20Sierra%20Leone!5e0!3m2!1sen!2ses!4v1670407094019!5m2!1sen!2ses"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
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
