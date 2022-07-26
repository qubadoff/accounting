  <div class="copyright">
    <div class="row">
      <div class="col-sm-12">
        <p class="text-center">  BurnFinance </p>
      </div>
    </div>
  </div>

  <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JAVASCRIPT FILES -->
  <script src="{{asset('/')}}assets_frontend/js/jquery.min.js"></script>
  <script src="{{asset('/')}}assets_frontend/js/bootstrap.min.js"></script>
  <script src="{{asset('/')}}assets_frontend/js/jquery.hoverIntent.js"></script>
  <script src="{{asset('/')}}assets_frontend/js/superfish.min.js"></script>
  <script src="{{asset('/')}}assets_frontend/js/owl.carousel.min.js"></script>
  <script src="{{asset('/')}}assets_frontend/js/odometer.min.js"></script>
  <script src="{{asset('/')}}assets_frontend/js/waypoints.min.js"></script>
  <script src="{{asset('/')}}assets_frontend/js/jquery.slicknav.min.js"></script>
  <script src="{{asset('/')}}assets_frontend/js/wow.min.js"></script>
  <script src="{{asset('/')}}assets_frontend/js/retina.min.js"></script>
  <script src="{{asset('/')}}assets_frontend/js/custom.js"></script>
  <!-- END OF JAVASCRIPT FILES -->

  <script>
jQuery(document).ready(function($) {
      "use strict";

      window.odometerOptions = {
        format: 'd'
      };

        $('.odometer').waypoint(function() {

          setTimeout(function() {
            $('#odometer1.odometer').html(38);
          }, 500);

          setTimeout(function() {
            $('#odometer2.odometer').html(606);
          }, 1000);

          setTimeout(function() {
            $('#odometer3.odometer').html(24);
          }, 1500);

          setTimeout(function() {
            $('#odometer4.odometer').html(308);
          }, 2000);

          setTimeout(function() {
            $('#odometer5.odometer').html(740);
          }, 2500);

        }, {
          offset: 800,
          triggerOnce: true
        });
 });
  </script>

</body>
</html>