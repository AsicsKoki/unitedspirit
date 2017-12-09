<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="csrf-token" content="{!! csrf_token() !!}">

    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="unitedspirit" />
      <meta property="og:description"   content="Your description" />
      <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />

    <title>United Spirit</title>
    <script src="https://use.fontawesome.com/8e099a0110.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@yield('styles')
</head>

<body>

    <div class="app_holder">
        @include('layouts.header')
        @yield('content')


        @include('layouts.footer')
    </div>

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>


<!-- popup open -->
<div class="popup2">
    <div class="row text-center">
        <h2>Subscriptions</h2>

        <div class="col-lg-2"><button class="btn btn-default subscription_btn">20&euro; / Month</button></div>

        <div class="col-lg-2"><button class="btn btn-default subscription_btn">55&euro; / 13 weeks</button></div>

        <div class="col-lg-2"><button class="btn btn-default subscription_btn">100&euro; / 26 weeks</button></div>

        <div class="col-lg-2"><button class="btn btn-default subscription_btn">200&euro; / 52 weeks</button></div>


         <button class="close_popup btn btn-danger center-block" name="close">
              <i class="fa fa-times" aria-hidden="true"></i>
          </button>
    </div>

    <!-- added stripe form -->
</div>


<div class="popup">
  <div class="row text-center">
      <h2>Donate to us</h2>
          <div class="col-lg-2"><button class="btn btn-default donation_btn">5&euro;</button></div>

          <div class="col-lg-2"><button class="btn btn-default donation_btn">10&euro;</button></div>

          <div class="col-lg-2"><button class="btn btn-default donation_btn">20&euro;</button></div>

          <div class="col-lg-2"><button class="btn btn-default donation_btn">50&euro;</button></div>

          <div class="col-lg-4 custom_donate_holder">
              <input name="other_donation" type="number" class="form_group other_amount"><span class="euros_text">&euro;</span>

              <label class="label_custom_donate" for="other_donation">Custom amount<small> (number)</small></label>

              
              <button class="btn btn-default donation_btn_other">donate</button>
          </div>
               
      <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_live_cNAAgOnhvXmvXrmFUTt6PPAM" id="payment-form" method="post">

          {{ csrf_field() }}
          <input type="hidden" name="hiddenammount" value="">
          <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                  <label class='control-label'>Name on Card</label> 
                  <input class='form-control' size='4' type='text'>
              </div>
          </div>

          <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                  <label class='control-label'>Card Number</label> 
                  <input autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
          </div>

          <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                  <label class='control-label'>CVC</label> <input autocomplete='off'
                      class='form-control card-cvc' placeholder='ex. 311' size='4'
                      type='text'>
              </div>

              <div class='col-xs-4 form-group expiration required'>
                  <label class='control-label'>Expiration</label> 
                  <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>

              <div class='col-xs-4 form-group expiration required'>
                  <label class='control-label'> 
                  </label> <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
          </div>

          <div class='form-row'>
              <div class='col-md-12'>
                  <div class='form-control total btn btn-info'>
                      Total: <span class='amount'>300</span>
                  </div>
              </div>
          </div>

          <div class='form-row'>
              <div class='col-md-12 form-group'>
                  <button class='form-control btn btn-primary submit-button' type='submit' style="margin-top: 10px;">Pay »</button>
              </div>
          </div>

          <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                  <div class='alert-danger alert'>Please correct the errors and try gain.</div>
              </div>
          </div>

      </form>

  </div>

  <button class="close_popup btn btn-danger center-block" name="close">
      <i class="fa fa-times" aria-hidden="true"></i>
  </button>

</div>
</body>

</html>

