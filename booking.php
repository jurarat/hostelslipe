<?php include_once('connectdb.php');?>
<?include("nav.php");?>
<section class="probootstrap-section-bg overlay" style="background-image: url(img/76156231.jpg);" >

  <section class="probootstrap-section probootstrap-bg-white" data-section="reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                  <div class="panel panel-primary">
                            <div class="panel-heading">
                            <?php 
$checkin = $_REQUEST['checkin'];
$checkout = $_REQUEST['checkout'];
$people = $_REQUEST['people'];
$idroom = $_REQUEST['idroom'];
?>
<form method="post" class="probootstrap-form" action="addbooking.php" id="add_meeting">
                              รายละเอียดการจอง  Check-in:<input class="form-control" name="checkin" value="<?php echo $checkin; ?>">
                              Check-out:<input class="form-control" name="checkout" value="<?php echo $checkout; ?>">  
                              <input type="text"  name="idroom" value="<?php echo $idroom; ?>" hidden>
                              <input type="text"  name="people" value="<?php echo $people; ?>" hidden>
                            </div>
                           
                  </div>
                </div>
          </div>
          <div class="col-md-6">
             
              <div class="row">  
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="date">name</label>
                    <div class="form-field">
                      <i class="icon icon-user"></i>
                      <input type="text" id="name" name="name" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="date">phone</label>
                    <div class="form-field">
                      <i class="icon icon-phone"></i>
                      <input type="text" id="phone" name="phone" class="form-control">
                    </div>
                  </div>
                </div>
               <div class="col-md-12">
                  <div class="form-group">
                    <label for="people">E-mail</label>
                    <div class="form-field">
                      <i class="icon icon-email"></i>
                      <input type="text" id="email" name="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-5 col-md-offset-8">
                <button role="button"class="btn btn-lg btn-danger" type="submit">ยืนยันการจอง</button>
                </div>
            </div>
            </form>
              </div>
            
<div class="col-md-6 probootstrap-animate">
           
              <!-- END row -->
              <div class="row"> 
                 <div class="col-md-12"> 
                <div class="form-group"><br>
                  <div class="panel panel-primary">
                            <div class="panel-heading">นโยบายการยกเลิกการจอง</div>
                            <div class="panel-body">การจองนี้ไม่สามารถขอเงินคืนได้</div>
                  </div>
                </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                  <div class="panel panel-primary">
                      <div class="panel-heading">รายละเอียดราคา</div>
                      <div class="panel-body">*****</div>
                  </div>
              </div>
            </div>

            
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
