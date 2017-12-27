<!DOCTYPE html>


<!-- 
  Theme Name: Resto
  Theme URL: https://probootstrap.com/resto-free-restaurant-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจองห้องพัก</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- Fixed navbar -->
    
    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" title="ProBootstrap:FineOak">FineOak</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#" data-nav-section="welcome">Welcome</a></li>
            <li><a href="#" data-nav-section="reservation">Booking</a></li>
            <li><a href="#" data-nav-section="Lifestyle">Lifestyle</a></li>
            <li><a href="#" data-nav-section="events">Stay</a></li>
            <li><a href="#" data-nav-section="contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>




    <section class="flexslider" data-section="welcome">
      <ul class="slides">
        <li style="background-image: url(img/38565844.jpg)" class="overlay" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Welcome</h1><br>
                  <span class="seperator"><h1>thechiclipe</h1></span>
                  <p class="seperator">อาคีรา หลีเป๊ะ รีสอร์ท รีสอร์ท<a href="#"> (เพิ่มเติม)</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(img/91529389.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Welcome</h1><br>
                    <span class="seperator"><h1>thechiclipe</h1></span>
                  <p class="seperator">อาคีรา หลีเป๊ะ รีสอร์ท รีสอร์ท<a href="#"> (เพิ่มเติม)</a></p>                </div>
              </div>
            </div>
          </div>
          
        </li>
        <li style="background-image: url(img/38565844.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                 <h1 class="primary-heading">Welcome</h1><br>
                    <span class="seperator"><h1>thechiclipe</h1></span>
                  <p class="seperator">อาคีรา หลีเป๊ะ รีสอร์ท รีสอร์ท<a href="#"> (เพิ่มเติม)</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>


    <section class="probootstrap-section probootstrap-bg-white" data-section="reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 probootstrap-animate">
            <form method="get" class="probootstrap-form" action="booking_room.php" id="add_meeting">
              <div class="row">  
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="date">Chet in</label>
                    <div class="form-field">
                      <i class="icon icon-calendar"></i>
                      <input type="date"  name="checkin" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="date">chet out</label>
                    <div class="form-field">
                      <i class="icon icon-calendar"></i>
                      <input type="date"   name="checkout" class="form-control">
                    </div>
                  </div>
                </div>
               <div class="col-md-4">
                  <div class="form-group">
                    <label for="people">How Many People</label>
                    <div class="form-field">
                      <i class="icon icon-chevron-down"></i>
                      <select name="people" id="people" class="form-control" disble>
                        <option value="1">1 people</option>
                        <option value="2">2 people</option>
                        <option value="3">3 people</option>
                        <option value="4">4+ people</option>
                      </select>
                    </div>
                  </div>
                </div>
              <!-- END row -->
              <div class="row"> 
              </div>
              <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <input type="submit" name="submit" id="submit" value="FIND THE BEST RATES" class="btn btn-lg btn-danger btn-block">
                </div>
              </div> 
            </form>
          </div>
        </div>
      </div>
    </section>


       <section class="probootstrap-section probootstrap-bg-white" data-section="Lifestyle">
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
              <h1 class="primary-heading">Lifestyle</h1><br>
              <h5 class="secondary-heading"></h5>
              <span class="seperator"><h1>thechiclipe</h1></span>
            </div>
            <p>KIRA Lipe Resort ห่างจากท่าเรือลอยน้ำเกาะหลีเป๊ะ 500 เมตร มีสระว่ายน้ำกลางแจ้ง และห้องอาหาร ให้บริการห้องพักสะดวกสบายพร้อมเครื่องปรับอากาศ และบริการอินเทอร์เน็ตไร้สาย (Wi-Fi) ฟรี

ห่างจากค่ายทหาร 1 กิโลเมตร และห่างจากตัวเมืองสตูล 60 กิโลเมตร

ที่พักมีเคเบิลทีวีจอแบน เครื่องเล่นดีวีดี พื้นที่นั่งเล่นพร้อมโซฟา ห้องน้ำส่วนตัวมีฝักบัว อ่างอาบน้ำ เครื่องเป่าผม และเครื่องใช้ในห้องน้ำฟรี

มีโต๊ะบริการทัวร์ และบริการรับฝากสัมภาระ

มีบริการอาหารท้องถิ่นและอาหารนานาชาติที่ห้องอาหาร และบาร์วิวทะเลให้บริการเครื่องดื่มสดชื่น 

ที่พักแห่งนี้ได้รับการลงความเห็นว่ามีทำเลดีที่สุดในเกาะหลีเป๊ะ! โดยผู้เข้าพักชอบทำเลของที่นี่มากกว่าเมื่อเปรียบเทียบกับที่พักอื่น ๆ ในย่านนี้

คู่รักชอบทำเลนี้เป็นพิเศษ โดยให้คะแนน 9.1 สำหรับการเข้าพัก 2 ท่าน

ที่พักแห่งนี้ได้รับการลงความเห็นว่าคุ้มค่าเงินที่สุดในเกาะหลีเป๊ะ! โดยคุ้มค่ากว่าเมื่อเปรียบเทียบกับที่พักอื่น ๆ ในเมืองนี้

เราพูดภาษาของท่าน!</p>
            <p><a href="#" class="probootstrap-custom-link">About Resort</a></p>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            <p><img src="img/38565844.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></p>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url(img/23122560.jpg);"  data-stellar-background-ratio="0.5" data-section="events">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Stay</h2><br><br>
              <h3 class="seperator">thechiclipe</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

<section>
      <div class="container">
        <div class="row"><br><br><br><br><br>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="img/Room1.jpg" alt="Free Bootstrap Template by ProBootstrap.com"></figure>
              <div class="text">
                <span class="date">ห้องที่1</span>
                <h3><a href="room.php">Laboriosam Quod Dignissimos</a></h3>
                <p>---------------------</p>
                <p class=""><a href="booking.php" class="probootstrap-custom-link link-sm">รายละเอียด</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="img/Room2.jpg" alt="Free Bootstrap Template by ProBootstrap.com"></figure>
              <div class="text">
                <span class="date">ห้องที่2</span>
                <h3><a href="room.php">Laboriosam Quod Dignissimos</a></h3>
                <p>***************</p>
                <p class=""><a href="booking.php" class="probootstrap-custom-link link-sm">รายละเอียด</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="img/Room3.jpg" alt="Free Bootstrap Template by ProBootstrap.com"></figure>
              <div class="text">
                <span class="date">ห้องที่3</span>
                <h3><a href="room.php">Laboriosam Quod Dignissimos</a></h3>
                <p>////////////////</p>
                <p class=""><a href="booking.php" class="probootstrap-custom-link link-sm">รายละเอียด</a></p>
              </div>
            </div>
          </div>
        </div>
                <div class="row">
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="img/Room4.jpg" alt="Free Bootstrap Template by ProBootstrap.com"></figure>
              <div class="text">
                <span class="date">ห้องที่4</span>
                <h3><a href="room.php">Laboriosam Quod Dignissimos</a></h3>
                <p>---------------------</p>
                <p class=""><a href="booking.php" class="probootstrap-custom-link link-sm">รายละเอียด</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="img/Room5.jpg" alt="Free Bootstrap Template by ProBootstrap.com"></figure>
              <div class="text">
                <span class="date">ห้องที่5</span>
                <h3><a href="room.php">Laboriosam Quod Dignissimos</a></h3>
                <p>***************</p>
                <p class=""><a href="booking.php" class="probootstrap-custom-link link-sm">รายละเอียด</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="img/Room6.jpg" alt="Free Bootstrap Template by ProBootstrap.com"></figure>
              <div class="text">
                <span class="date">ห้องที่6</span>
                <h3><a href="room.php">Laboriosam Quod Dignissimos</a></h3>
                <p>////////////////</p>
                <p class=""><a href="booking.php" class="probootstrap-custom-link link-sm">รายละเอียด</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white" data-section="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
              <h1 class="primary-heading">Contact</h1><br><br>
              <h6 class="secondary-heading"></h6>
            </div>
            <p> 370 Moo 7 Koh Lipe, Koh Sarai Sub-district,
   Muang, Satun 91000 Thailand.<br>
  +66 (0) 74 750777,+66 (0) 91 301 3011, +66 (0) 91 301 3012 <br>
  Office Hours 08.00 am. – 06.00 pm. (Thai time)
  E-mail :  rsvn@akiralipe.com<br>
  Website : www.akiralipe.com</p>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            <form method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="c_name">Your Name</label>
                <div class="form-field">
                  <input type="text" id="c_name" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="c_email">Your Email</label>
                <div class="form-field">
                  <input type="text" id="c_email" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="c_message">Your Message</label>
                <div class="form-field">
                  <textarea name="c_message" id="c_message" cols="30" rows="10" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="c_submit" id="c_submit" value="Send Message" class="btn btn-primary btn-lg">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
            <div class="probootstrap-footer-widget">
              <h3>Locations</h3>
              <div class="row">
                <div class="col-md-6">
                   <p> 370 Moo 7 Koh Lipe, Koh Sarai Sub-district,
   Muang, Satun 91000 Thailand.<br>
  +66 (0) 74 750777,+66 (0) 91 301 3011, +66 (0) 91 301 3012 <br>
  Office Hours 08.00 am. – 06.00 pm. (Thai time)
  E-mail :  rsvn@akiralipe.com<br>
  Website : www.akiralipe.com</p>
                </div>
                <div class="col-md-6">
                  <p> <p>Akira Beach Resort Lipe<br>
                  The Steakhouse Restaurant<br>
                  Sugoi Teppanyaki Japanese Restaurant<br>
                  Art Beach Club<br>
                  Shine Bar<br>
                  Chill Out Bar</p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 probootstrap-animate">
            <div class="probootstrap-footer-widget">
              <h3>Open Hours</h3>
              <div class="row">
                <div class="col-md-4">
                  <p>Monday - Thursday <br> 5:30pm - 10:00pm</p>
                </div>
                <div class="col-md-4">
                  <p>Friday - Sunday <br> 5:30pm - 10:00pm</p>
                </div>
                <div class="col-md-4">
                  <p>Available for Catering <br> Email or Call Us</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="copyright-text">&copy; 2017 <a href="#">*******</a>. ------ <a href="#">+++++++</a> &amp; <a href="#">//</a></p>
          </div>
          <div class="col-md-4">
            <ul class="probootstrap-footer-social right">
              <li><a href="https://twitter.com/"><i class="icon-twitter"></i></a></li>
              <li><a href="www.facebook.com"><i class="icon-facebook"></i></a></li>
              <li><a href="www.instagram.com"><i class="icon-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script src="js/scripts.min.js"></script>
    <script src="js/custom.min.js"></script>

  </body>
</html>