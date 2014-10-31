<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Best Bar craft cocktails local beer pub eastside">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>School House | Best Bar,  Craft Cocktails, Local Beer Pub,  Eastside</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheets/application.css">
  </head>
  
  <body>
    <header class="l-top-nav">
      <div class="l-container">
        <a href="/" class="l-logo-container">
          <img src="img/school-house-logo.png" class="l-logo" alt="School House Logo">
          <h1 class="bg-logo-text">School House</h1>
        </a>
        <nav>
          <ul class="list-top-nav">
            <li><a class="t-list-top-nav" href="drinks.html">DRINKS</a></li>
            <li><a class="t-list-top-nav" href="food.html">FOOD</a></li>
            <li><a class="t-list-top-nav active" href="contact.php">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <section class="carousel slide">
        <div class="carousel-inner">
          <div class="item active">
            <div class="l-hero-container bg-hero-contact"></div>
          </div>
        </div>
        
        <div class="l-hero-overlay"></div>
        <div class="l-container l-hero-contact-info bg-hero-contact-info">
          <a class="t-hero-phone-number" href="tel:512-469-7630">512-469-7630</a>
          <hr>
          <h2 class="t-hero-hours">MON-FRI 3PM TO 12AM</h2>
          <h2 class="t-hero-hours">SAT 3PM TO 1AM</h2>
        </div>
        
        <header>
          <h1 class="l-hero-header t-hero-header">CONTACT</h1>
        </header>
      </section>
      
      <div class="l-grid-container">
        <section class="l-container">
          <header>
            <h1>HAPPY HOUR <span class="t-gs-light">SPECIALS</span></h1>
            <h2 class="t-home-specials-schedule">MON - SAT 3PM TO 7PM</h2>
            <hr class="l-menu-divider">
            <hr class="l-menu-divider">
          </header>
          
          <div class="l-special-container">
            <div class="l-special">
              <i class="icon-special icon-monday"></i>
              <header>
                <h2 class="t-special-heading">MONDAY</h2>
                <h3 class="t-special-sub-heading">&#36;4 ALL PINTS</h3>
              </header>
            </div>
            
            <div class="l-special">
              <i class="icon-special icon-tuesday"></i>
              <header>
                <h2 class="t-special-heading">TUESDAY</h2>
                <h3 class="t-special-sub-heading">SCHOOL OF HARD KNOCKS</h3>
              </header>
              <p>&#36;2 Lonestar and PBR&apos;s &amp; &#36;3 Wells</p>
            </div>
            
            <div class="l-special">
              <i class="icon-special icon-wednesday"></i>
              <header>
                <h2 class="t-special-heading">WEDNESDAY</h2>
                <h3 class="t-special-sub-heading">&#36;4 CIDERS</h3>
              </header>
            </div>
            
            <div class="l-special">
              <i class="icon-special icon-thursday"></i>
              <header>
                <h2 class="t-special-heading">THURSDAY</h2>
                <h3 class="t-special-sub-heading">&#36;5 OFF ALL BOTTLES OF WINE</h3>
              </header>
            </div>
            
            <div class="l-special-center">
              <div class="l-special">
                <i class="icon-special icon-friday"></i>
                <header>
                  <h2 class="t-special-heading">FRIDAY</h2>
                  <h3 class="t-special-sub-heading">&#36;3 BEER &amp; &#36;3 BOOZE</h3>
                </header>
                <p>On featured brands</p>
              </div>
              
              <div class="l-special">
                <i class="icon-special icon-saturday"></i>
                <header>
                  <h2 class="t-special-heading">SATURDAY</h2>
                  <h3 class="t-special-sub-heading">&#36;3 OFF SCOTCH</h3>
                </header>
              </div>
            </div>
          </div>
        </section>
        
        <section class="l-container">
          <header>
            <hr class="l-menu-divider">
            <hr class="l-menu-divider">
            <h1>CONTACT <span class="t-gs-light">US</span></h1>
          </header>
          <form action="thank-you.php" id="#schoolhouseForm" method="post">
            <label for="name">NAME<span class="t-required">&#42;</span></label>
            <input type="text" name="name" id="name" required />
            
            <label for="email">EMAIL<span class="t-required">&#42;</span></label>
            <input type="email" name="email" id="email" required />
            
            <label for="subject">SUBJECT<span class="t-required">&#42;</span></label>
            <input type="text" name="subject" id="subject" required />
            
            <label for="message">MESSAGE<span class="t-required">&#42;</span></label>
            <textarea name="message" id="message" required ></textarea>
            <input type="submit" name="submit" id="submit" value="SEND MESSAGE"/>
          </form>
          
          <div class="bg-contact-map">
            <iframe width="100%" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=School%20House%20Pub%2C%20Manor%20Road%2C%20Austin%2C%20TX%2C%20United%20States&key=AIzaSyCwPpL0dHrGLpQYf2JNDYNDO1YTlzCsu40"></iframe>
          </div>
          
          <ul class="list-contact-info">
            <li>
              <a class="l-contact-info-email" href="mailto:info@schoolhousepub.com">
                <span class="bg-contact-disc"><i class="icon-contact-email"></i></span>
                <h3 class="t-contact-info-heading">INFO@SCHOOLHOUSEPUB.COM</h3>
              </a>
            </li>
            <li>
              <a class="l-contact-info-phone" href="tel:512-469-7630">
                <span class="bg-contact-disc"><i class="icon-contact-phone"></i></span>
                <h3 class="t-contact-info-heading">512.469.7630</h3>
              </a>
            </li>
          </ul>
        </section>
      </div>
    </main>
    <footer class="bg-footer">
      <nav class="l-grid-container">
        <ul class="list-footer-nav">
          <li>
            <a class="bg-social-disc" href="mailto:info@schoolhousepub.com">
              <i class="icon-social-email"></i>
            </a>
          </li>
          <li>
            <a class="bg-social-disc" href="http://twitter.com/schoolhousepub" target="_blank">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li>
            <a class="bg-social-disc" href="http://www.facebook.com/schoolhousepubaustin" target="_blank">
              <i class="icon-social-fb"></i>
            </a>
          </li>
        </ul>
      </nav>
    </footer>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main-ck.js"></script>
  </body>
</html>