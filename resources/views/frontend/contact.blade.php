@include('frontend.header')

 <!-- PAGE HEADER -->
   <div id="page-header" class="contact">
   <div class="title-breadcrumbs">
   <h1>CONTACT</h1>
   <div class="thebreadcumb">
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Contact</li>
    </ul>
   </div>
   </div>

    </div>
    <!-- END OF PAGE HEADER -->
  </div>

 <!--  ICON BOXES -->
<div class="about1-numbers contact">
      <div class="row">

        <div class="col-sm-4">
        <div class="shadow-effect">
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="number lightgray"><span class="typcn typcn-mail"></span></div>
            </div>
            <div class="col-sm-12 col-md-9">
              <h4>DROP US A LINE</h4>
              <p>Collaboratively administrate empowered markets via plug-and-play networks.</p>
              <span><a href="#">CONTACT@GOOGROWTH.COM</a></span>
            </div>
          </div>
          </div>
        </div>

        <div class="col-sm-4">
         <div class="shadow-effect">
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="number blue"><span class="typcn typcn-heart"></span></div>
            </div>
            <div class="col-sm-12 col-md-9">
              <h4>ASK FOR SUPPORT</h4>
              <p>Dynamically procrastinate B2C users after installed base benefits efficiently.</p>
              <span><a href="#">SUPPORT@GOOGROWTH.COM</a></span>
            </div>
          </div>
          </div>
        </div>

        <div class="col-sm-4">
         <div class="shadow-effect">
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="number green"><span class="typcn typcn-location"></span></div>
            </div>
            <div class="col-sm-12 col-md-9">
              <h4>VISIT OUR OFFICES</h4>
              <p>4771 West Field Mint<br/>Salt Lake City,<br/>UT 72883</p>
              <span>Call us: 800.1148.800</span>
            </div>
            </div>
          </div>
        </div>
      </div>

      </div>
<!--  END OF ICON BOXES -->

<!--  FORM -->
<section class="contact-form">
<div class="row">
<div class="col-sm-12">
 <h2>SEND US A <span>MESSAGE</span></h2>
<hr class="small"/>
</div>
</div>
<div class="row">
<div class="col-sm-12">
 <div id="sendstatus"></div>

   <div id="contactform">
<form method="post" action="">
<div class="row">
<div class="col-sm-6">
            <p><label for="name">Name:*</label> <input type="text" class="form-control" name="name" id="name" tabindex="1" /></p>
            <p><label for="email">Email:*</label> <input type="text" class="form-control" name="email" id="email" tabindex="2" /></p>
            <p><label for="phone">Phone Number:*</label> <input type="text" class="form-control" name="phone" id="phone" tabindex="3" /></p>
</div>
<div class="col-sm-6">
            <p><label for="comments">Message:*</label> <textarea  class="form-control" name="comments" id="comments" tabindex="4"></textarea></p>
</div>
</div>
 <p><input name="submit" type="submit" id="submit" class="submit" value="Send" tabindex="5" /></p>
</form>

</div>
</div>
</div>
</section>
<!--  END OF FORM -->
</div>

@include('frontend.footer')