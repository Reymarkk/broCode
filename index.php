<?php
    include_once 'header.php';
?>
<!-- this call header file; makes the code shorter -->


    <section class="hero">
        
        <div class="container">
            <div class="left-col">
                <p class="subhead" data-aos="fade-up" data-aos-delay="800">We'll help you code pareh</p>
                <h1 data-aos="zoom-out" data-aos-delay="2000">A E-Learning based platform for programmer, shesh</h1>
                <div class="hero-cta" >
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<p class='subhead' data-aos='fade-up' data-aos-delay='0'>Uy! Welcome ". $_SESSION["useruid"] . "</p>";
                    }
                    else {
                        echo "<a href='signup.php' class='primary-cta' data-aos='fade-up' data-aos-delay='3000'>Sign up now</a>";
                        echo "<a href='login.php' class='guest-login-cta' data-aos='zoom-out' data-aos-delay='3000'><img src='images/#' alt=''>Login</a>";
                    }
                ?>
                </div>
            </div>
            <!--
            <img src="" class="hero-img" alt="Illustration">-->
        </div>
    
    <img src="images/man-mobile-legit.png" class="man" alt="Illustration">
    </section>

    <section class="features-section">
      <div class="container">
          <h1> Features </h1>
          <ul class="features-list">
              <li data-aos="fade-up-right" data-aos-delay="">Shessh</li>
              <li data-aos="fade-up-right">Lets go bro</li>
              <li data-aos="fade-up-right">I'll help you pareh</li>
              <li data-aos="fade-up-right">ngl real t to pareh</li>
              <li data-aos="fade-up-right">egg woffles is my go to pareh,sheesh</li>
          </ul>

          <img src="images/mema2.svg" alt="Toilet paper">

      </div>

  </section>

  <section class="testimonials-section">
    <div class="container">
        <ul>
            <li>
                <img src="images/person.svg" alt="person">

                <blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</blockquote>
                <cite>- Reymark Calexterio</cite>
            </li>
            <li>
                <img src="images/person.svg" alt="person">

                <blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</blockquote>
                <cite>- Reymark Calexterio</cite>
            </li>
            <li>
                <img src="images/person.svg" alt="person">

                <blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</blockquote>
                <cite>- Reymark Calexterio</cite>
            </li>
        </ul>
    </div>
  </section>


  <section class="contact-section">
    <div class="container">
        <div class="contact-left">
            <h2>Contact Us</h2>

            <form action="">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your Email">

                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>

                <input type="submit" class="send-message-cta" value="Send message">
            </form>
        </div>
        <div class="contact-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6490.42351550573!2d121.08292692557703!3d14.69964283048103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba751aa45673%3A0xc97dd4e6435de50c!2sPUP%20Commonwealth%20Campus!5e0!3m2!1sen!2sph!4v1662042226948!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
  </section>
  <section>
    heheh
  </section>


    
    <!--Javascript-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 2000,
        once: true,
      });



      const mobileBtn = document.getElementById('mobile-cta');
          nav = document.querySelector('nav');
          mobileBtnExit = document.getElementById('mobile-exit');

      mobileBtn.addEventListener('click' , () => {
          nav.classList.add('menu-btn');
      })
        
      mobileBtnExit.addEventListener('click' , () => {
          nav.classList.remove('menu-btn');
      })
    </script>

  </body>
</html>
