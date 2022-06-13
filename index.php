<?php  include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Monoton&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap"
      rel="stylesheet">
    <title>New Scrap Workshop</title>
    <link rel="shortcut icon" href="img/logo.jpg">

    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy"
    />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

  <body
    id="myPage"
    data-spy="scroll"
    data-target=".navbar"
    data-offset="60"
    onload="myFunction()"
  >
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button
                  type="button"
                  class="navbar-toggle"
                  data-toggle="collapse"
                  data-target="#ScrapMenu"
                >
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">NewScrap</a>
              </div>
              <div class="collapse navbar-collapse" id="ScrapMenu">
                <ul class="nav navbar-nav navbar-right navbar-border">
                  <li class="active"><a href="#main-header">Home</a></li>
                  <li><a href="#about">Meet Me</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#contact">Contact Me</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-12 wow fadeIn delay-05s">
                <div class="banner-text">
                  <h2>
                    HORROR <br />
                    FANTASY
                  </h2>
                  <p>
                    STEAMPUNK <br />
                    DYSTOPIAN futurism
                  </p>
                </div>
                <div class="overlay-detail text-center">
                  <a href="#about"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="about" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-right">
            <h2 class="title-text"><span class="deco">Explore the creations of my twisted mind, from Horror and Fantasy to Steampunk and Dystopian futurism.
FEAST YOUR EYES FURTHERMORE</span></h2>
          </div>
          <div class="col-md-6 text-left">
            <div class="iframe-container">
              <p>
                <iframe
                  src="https://www.youtube.com/embed/5sBEe3iPLKc?autoplay=1"
                  width="800"
                  height="500"
                  title="A YouTube video"
                  frameborder="0"
                  allowfullscreen
                ></iframe>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

               <!-- ======= Gallery Section ======= -->

    <section>
    <input type="radio" name="Photos" id="check1" checked />
    <input type="radio" name="Photos" id="check2" />
    <input type="radio" name="Photos" id="check3" />
    <input type="radio" name="Photos" id="check4" />
    <div id="portfolio" class="container section-padding wow fadeInUp delay-05s">
      <h4>Portfolio</h4>
      <div class="top-content" >
        <label for="check1">All Photo</label>
        <label for="check2">HORROR/FANTASY</label>
        <label for="check3">STEAMPUNK</label>
        <label for="check4">DISTROPIAN</label>
      </div>
      <div class="photo-gallery">
        <div class="pic horror">
          <img src="img/om3.jpg" />
        </div>
        <div class="pic steampunk">
          <img src="img/joben.jpg" />
        </div>
        <div class="pic distropian">
          <img src="img/om.jpg" />
        </div>
        <div class="pic horror">
          <img src="img/paianjen.jpg" />
        </div>
        <div class="pic steampunk">
          <img src="img/caprioara.jpg" />
        </div>
        <div class="pic distropian">
          <img src="img/om2.jpg" />
        </div>
        <div class="pic horror">
          <img src="img/tentacule.jpg" />
        </div>
        <div class="pic steampunk">
          <img src="img/ochelari.jpg" />
        </div>
        <div class="pic distropian">
          <img src="img/plafonierarobo.jpg" />
        </div>
        <div class="pic horror">
          <img src="img/capmort2.jpg" />
        </div>
        <div class="pic steampunk">
          <img src="img/motan.jpg" />
        </div>
        <div class="pic distropian">
          <img src="img/alien_egg.jpg" />
        </div>
        <div class="pic distropian">
          <img src="img/alien_egg.jpg" />
        </div>
        <div class="pic horror">
          <img src="img/tentacule2.jpg" />
        </div>
        <div class="pic steampunk">
          <img src="img/joben2.jpg" />
        </div>
        <div class="pic horror">
          <img src="img/tentacule3.jpg" />
        </div>
        <div class="pic steampunk">
          <img src="img/capmort.jpg" />
        </div>
        <div class="pic steampunk">
          <img src="img/pui.jpg" />
        </div>


        
      </div>
    </div>

    </section>
    <section id="contact" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-sec text-center">
              <h2>Do you want to collaborate?</h2>
              <p>You can find me on social media or leave me a message.</p>
            </div>
          </div>

          <div class="col-md-8 col-md-push-2">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="name"
                  placeholder="Your Name"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars"
                />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  placeholder="Your Email"
                  data-rule="email"
                  data-msg="Please enter a valid email"
                />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Subject"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject"
                />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  data-rule="required"
                  data-msg="Please write something for us"
                  placeholder="Message"
                ></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer-2 text-center-xs bg--white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="footer">
              © Copyright Berchez Adrian. All Rights Reserved
            </div>
          </div>
          <div class="col-md-6 text-right">
            <ul class="social-list">
              <li>
                <a
                  href="https://www.facebook.com/NewScrapWorkshop"
                  target="_blank"
                  ><i class="fa fa-facebook"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://www.youtube.com/channel/UCFZF7D1A5WLJarLVf0xINSQ"
                  target="_blank"
                  ><i class="fa fa-youtube"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/newscrapworkshop/?fbclid=IwAR38bOzQLJ58AyVOtr8u6AOaTEzDPpcxdcCwruqzfphO0A8Hx6CE3pD5NnU"
                  target="_blank"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
  </body>
</html>