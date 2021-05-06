<!doctype html>
<html class="no-js" lang="zxx">

<?php include 'head.php' ?>

<body>
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

  <!-- header-start -->
  <?php include 'header.php' ?>
  <!-- header-end -->

  <!-- slider_area_start -->
  <div class="bradcam_area bradcam_bg_1">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="bradcam_text text-center">
            <h3>About Us</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider_area_end -->
  <form id="paymentForm">

    <div class="form-group">

      <label for="email">Email Address</label>

      <input type="email" id="email-address" required />

    </div>

    <div class="form-group">

      <label for="first-name">First Name</label>

      <input type="text" id="first-name" />

    </div>

    <div class="form-group">

      <label for="last-name">Last Name</label>

      <input type="text" id="last-name" />

    </div>

    <div class="form-submit">

      <button type="submit" onclick="payWithPaystack()"> Pay </button>

    </div>

  </form>

  <script src="https://js.paystack.co/v1/inline.js"></script>




  <?php //include'front_properties.php'
  ?>

  <!-- contact_action_area  -->
  <?php include 'call_to_action.php' ?>
  <!-- /contact_action_area  -->


  <!-- footer start -->
  <?php include 'footer.php' ?>
  <!--/ footer end  -->

  <!-- link that opens popup -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

  <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <!-- <script src="js/gijgo.min.js"></script> -->
  <script src="js/slick.min.js"></script>



  <!--contact js-->
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>


  <script src="js/main.js"></script>
  <script>
    function collision($div1, $div2) {
      var x1 = $div1.offset().left;
      var w1 = 40;
      var r1 = x1 + w1;
      var x2 = $div2.offset().left;
      var w2 = 40;
      var r2 = x2 + w2;

      if (r1 < x2 || x1 > r2)
        return false;
      return true;
    }
    // Fetch Url value 
    var getQueryString = function(parameter) {
      var href = window.location.href;
      var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
      var string = reg.exec(href);
      return string ? string[1] : null;
    };
    // End url 
    // // slider call
    $('#slider').slider({
      range: true,
      min: 20,
      max: 200,
      step: 1,
      values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
        getQueryString('maxval') : 200
      ],

      slide: function(event, ui) {

        $('.ui-slider-handle:eq(0) .price-range-min').html(ui.values[0] + 'K');
        $('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[1] + 'K');
        $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

        // get values of min and max
        $("#minval").val(ui.values[0]);
        $("#maxval").val(ui.values[1]);

        if (ui.values[0] == ui.values[1]) {
          $('.price-range-both i').css('display', 'none');
        } else {
          $('.price-range-both i').css('display', 'inline');
        }

        if (collision($('.price-range-min'), $('.price-range-max')) == true) {
          $('.price-range-min, .price-range-max').css('opacity', '0');
          $('.price-range-both').css('display', 'block');
        } else {
          $('.price-range-min, .price-range-max').css('opacity', '1');
          $('.price-range-both').css('display', 'none');
        }

      }
    });

    $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
      ' - </i>' + $('#slider').slider('values', 1) + '</span>');

    $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
      'k</span>');

    $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
      'k</span>');
  </script>

  <!-- payment -->
  <script>
    const paymentForm = document.getElementById('paymentForm');

    paymentForm.addEventListener("submit", payWithPaystack, false);

    function payWithPaystack(e) {

      e.preventDefault();

      let handler = PaystackPop.setup({

        key: 'pk_test_c9ca3055dbbb92e1f0009295a4402c5caeb938b4', // Replace with your public key

        email: document.getElementById("email-address").value,

        amount: document.getElementById("amount").value * 100,

        ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

        // label: "Optional string that replaces customer email"

        onClose: function() {
          window.location = "https://localhost/daarsalam/payment.php?tansaction=canclled"
          alert('Tansaction Canclled.');

        },

        callback: function(response) {

          let message = 'Payment complete! Reference: ' + response.reference;

          alert(message);
          window.location = "https://localhost/daarsalam/verify_transaction.php?reference=" + response.reference;

        }

      });

      handler.openIframe();

    }
  </script>

</body>

</html>