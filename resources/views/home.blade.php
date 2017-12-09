@extends('layouts.master')

@section('content')
    <!-- Carousel
        ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div id="carousel_filter">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!-- <img class="first-slide" src="img/Campus_home.jpg" alt="First slide"> -->
                    <div class="container">
                        <div class="carousel-caption cf">
                            <h1>the innovative school of self realiztion</br>a non profit project to change ourselves</br> and change the world.</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- <img class="second-slide" src="img/Campus_home.jpg" alt="Second slide"> -->
                    <div class="container">
                        <div class="carousel-caption cf">
                            <h1>the innovative school of self realiztion</br>a non profit project to change ourselves</br> and change the world.</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- <img class="third-slide" src="img/Campus_home.jpg" alt="Third slide"> -->
                    <div class="container">
                        <div class="carousel-caption cf">
                            <h1>the innovative school of self realiztion</br>a non profit project to change ourselves</br> and change the world.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->
    </div>
    <!-- /.carousel -->


    <!-- Marketing messaging and featurettes
        ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="marketing" id="marketing">
        
        <div class="marketing_content">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                
                    <div class="col-lg-4" id="selfrel">
                        <div class="marketing_img_holder">
                            <a href="#self_realization">
                                <img src="img/Self_Realization.jpg" alt="self realization">
                            </a>
                        </div>
                        <a href="#self_realization">
                            <p>Questionning who we are and the meaning we want to give to our lives getting our confidence back</p>
                        </a>
                        <h2><a href="#self_realization">Self realization</a></h2>
                    </div>
                
                <!-- /.col-lg-4 -->
               
                    <div class="col-lg-4" id="wisdom">
                        <div class="marketing_img_holder">
                             <a href="#wfromthew">
                                <img src="img/Wisdom_from_the_World.jpg" alt="wisdom from the world">
                            </a>
                        </div>
                        <a href="#wfromthew">
                            <p>Questionning who we are and the meaning we want to give to our lives getting our confidence back</p>
                        </a>
                        <h2><a href="#wfromthew">Wisdom from the world</a></h2>
                    </div>
               
                <!-- /.col-lg-4 -->
                
                    <div class="col-lg-4" id="health">
                        <div class="marketing_img_holder">
                            <img src="img/healthy_mind_in_healthy_body.jpg" alt="healthy mind in healthy body">
                        </div>
                        <a href="#healthymind">
                            <p>Questionning who we are and the meaning we want to give to our lives getting our confidence back</p>
                        </a>
                        <h2><a href="#healthymind">Healthy mind in a healthy body</a></h2>
                    </div>

                <!-- /.col-lg-4 -->
            </div>
        <!-- /.row -->
        </div>
    </div>

    <!-- self realization -->
    <div class="self_realization" id="self_realization">

        <div class="overlay_div"></div>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="text-center">Self Realization</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h3>
                    <a href="">Meditation</a>
                </h3>
            </div>
            <div class="col-lg-4">
                <h3>
                    <a href="">Introspection</a>
                </h3>
            </div>
            <div class="col-lg-4">
                <h3>
                    <a href="">Relationship With Others</a>
                </h3>
            </div>
        </div>
    </div>
    <!-- Welcome from the world -->
    <div class="container wfromthew" id="wfromthew">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2>Wisdom from the world</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="img-wrapper">

                    <p class="img_text">
                        Philosophy
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-wrapper">

                    <p class="img_text">
                        Sciences
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-wrapper">

                    <p class="img_text">
                        Humanities
                    </p>
                </div>
            </div>
        </div>

        <div class="half_logo_right">
             <img src="img/half-logo.png" alt="Half logo united spirit">
        </div>
    </div>
    <!--- healthy mind in a healthy body -->
    <div class="healthymind" id="healthymind">
        <div class="overlay_div"></div>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2>Healthy mind in a healthy body</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="img-wrapper">
                    <img src="img/Philosophy.jpg" alt="philosophy">
                    <p class="img_text">
                        Permaculture
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-wrapper">
                    <img src="img/ScienceHero.jpg" alt="philosophy">
                    <p class="img_text">
                        Vegeterian Alimentation
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-wrapper">
                    <img src="img/Humanities.jpg" alt="philosophy">
                    <p class="img_text">
                        Phisical activity
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="experts cf" id="experts">
        <hr>
        <h2 class="text-center">Our Experts</h2>
        <div class="text-center row">
        @foreach($experts as $expert)
            <div class="col-lg-2">
                <div class="experts_img_holder">
                    <img src="{{ URL::to('/') . $expert->path }}" alt="">
                </div>
                <h3> {{$expert->title}}</h3>
            </div>
        @endforeach
            <!-- <div class="col-lg-2">
                <div class="experts_img_holder">
                    <img src="http://simpleicon.com/wp-content/uploads/user1.png" alt="">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="experts_img_holder">
                    <img src="http://simpleicon.com/wp-content/uploads/user1.png" alt="">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="experts_img_holder">
                    <img src="http://simpleicon.com/wp-content/uploads/user1.png" alt="">
                </div>
            </div>
        </div> -->

        <div class="half_logo_left">
             <img src="img/half-logo-left.png" alt="Half logo united spirit">
        </div>
    </div>

<!-- stripe forma -->

<script src='https://js.stripe.com/v2/' type='text/javascript'></script>

<div class="donations" id="donations">

    <div class="donations_content">
        <hr>

        <h3 class="text-center">Make a donation</h3>

        <button class="btn btn-default center-block main_donation_btn" data-js="open">donate</button>

        <div class="popup">
            <div class="row text-center">
                <h2>Donate to us</h2>
                    <div class="col-lg-2"><button class="btn btn-default donation_btn">5&euro;</button></div>
                    <div class="col-lg-2"><button class="btn btn-default donation_btn">10&euro;</button></div>
                    <div class="col-lg-2"><button class="btn btn-default donation_btn">20&euro;</button></div>
                    <div class="col-lg-2"><button class="btn btn-default donation_btn">50&euro;</button></div>
                    <div class="col-lg-4 custom_donate_holder">
                        <input name="other_donation" type="number" class="form_group other_amount">
                        <label class="label_custom_donate" for="other_donation">Custom amount<small> (number)</small></label>

                        <span>euros</span><button class="btn btn-default donation_btn_other">donate</button>
                    </div>
                         
                <form accept-charset="UTF-8" action="/" class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="pk_live_cNAAgOnhvXmvXrmFUTt6PPAM"
                    id="payment-form" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="hiddenammount" value="">
                    <div class='form-row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label> <input
                                class='form-control' size='4' type='text'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label> <input
                                autocomplete='off' class='form-control card-number' size='20'
                                type='text'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-xs-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'>Expiration</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'> </label> <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>
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
                            <button class='form-control btn btn-primary submit-button'
                                type='submit' style="margin-top: 10px;">Pay »</button>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                                again.</div>
                        </div>
                    </div>
                </form>
          
                </div>
         
            <button class="close_popup btn btn-danger center-block" name="close">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>

            </div>
        </div>

          <div class="half_logo_right">
             <img src="img/half-logo.png" alt="Half logo united spirit">
        </div>
</div>


<div class="text-center campus_box" id="campus_box">
    <div class="campus_box_content">
        <hr>
        <h3 class="campus_box_title">Campus Box</h3>
        <h4>Get a taste of Campus from where you are.</h4>
        <p>
            Receive for 52 weeks the content of the class from Campus (Self Realization, Wisdom of the World, Healthy mind in a healthy body) to transform your life by finding your path</br>
            <span>Progress at your own rythm with weekly exercises</span>
        </p>
        <button class="btn btn-default center-block" data-js="open2">Subscription / Connection</button>
        <small>*All people working on Campus are volunteer, the money collected will be used to found the school</small>
        <!-- popup open -->
        <div class="popup2">
            <div class="row text-center">
                <h2>Subscriptions</h2>
                    <div class="col-lg-2"><button class="btn btn-default subscription_btn">20&euro;/month</button></div>
                    <div class="col-lg-2"><button class="btn btn-default subscription_btn">55&euro;/13weeks</button></div>
                    <div class="col-lg-2"><button class="btn btn-default subscription_btn">100&euro;/26weeks</button></div>
                    <div class="col-lg-2"><button class="btn btn-default subscription_btn">200&euro;/52weeks</button></div>
                <button class="btn btn-danger" name="close">Close popup</button>
                <!-- added stripe form -->
                <!-- <form accept-charset="UTF-8" action="/" class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="pk_live_cNAAgOnhvXmvXrmFUTt6PPAM"
                    id="payment-form" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="hiddenammount" value="">
                    <div class='form-row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label> <input
                                class='form-control' size='4' type='text'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label> <input
                                autocomplete='off' class='form-control card-number' size='20'
                                type='text'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-xs-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'>Expiration</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label class='control-label'> </label> <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-md-12'>
                            <div class='form-control total btn btn-info'>
                                Total: <span class='amount'>$300</span>
                            </div>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-md-12 form-group'>
                            <button class='form-control btn btn-primary submit-button'
                                type='submit' style="margin-top: 10px;">Pay »</button>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                                again.</div>
                        </div>
                    </div>
                </form> -->
            </div>

            <!-- added stripe form -->
            </div>
        </div>
    </div>

    <div class="half_logo_left">
         <img src="img/half-logo-left.png" alt="Half logo united spirit">
    </div>
</div>

<!-- stripe forma -->

<script src='https://js.stripe.com/v2/' type='text/javascript'></script>

<!-- /stripe forma -->

<div class="contact cf" id="contact">
    <hr>
    <h2 class="contact_title text-center">Contact</h2>
    <form action="">
            <div class="contact_content text-center">
                <div class="container">
                <div class="form-group">
                    <label for="contact_name" class="text-center">Your name</label>
                    <input type="text" class="center-block form-control" id="contact_name" placeholder="Your name">
                </div>
                <!-- Email input-->
                <div class="form-group">
                    <label for="contact_email" class="text-center">Your e-mail</label>
                    <input type="email" class="center-block form-control" id="contact_email" placeholder="Your email">
                </div>
                <div class="form-group">
                    <label class="text-center">Your message</label>
                    <textarea name="" id="" cols="30" rows="10" class="center-block"></textarea>
                </div>
                </div>
           
            <button class="btn btn-default center-block" type="submit">Send</button>
        </div>
    </form>
    <div class="half_logo_right">
         <img src="img/half-logo.png" alt="Half logo united spirit">
    </div>
</div>

<div class="our_partners cf">
    <div class="overlay_div"></div>
    <div class="our_partners_content">

        <hr>
        <h3 class="text-center our_partners_title">Our Partners</h3>
        <div class="text-center row">
        @foreach($partners as $partner)
            <div class="col-lg-2">
                <p>{{$partner->title }}</p>
                    <img src="{{ URL::to('/') . $partner->path }}" alt="">
            </div>
        @endforeach
            <!-- <div class="col-lg-2">Partner</div>
            <div class="col-lg-2">Partner</div>
            <div class="col-lg-2">Partner</div>
            <div class="col-lg-2">Partner</div>
            <div class="col-lg-2">Partner</div>
            <div class="col-lg-2">Partner</div> -->
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$form = $('form.require-validation');
//validation
$(function() {
  $('.require-validation').bind('submit', function(e) {
    var $form = $(e.target).closest('form'),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
$errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault(); // cancel on first error
      }
    });
  });
});

// generating token
$form.on('submit', function(e) {
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
    if (response.error) {
        $('.error')
            .removeClass('hide')
            .find('.alert')
            .text(response.error.message);
    } else {
        // token contains id, last4, and card type
        var token = response['id'];
        // insert the token into the form so it gets submitted to the server
        $form.find('input[type=text]').empty();
        $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
        $form.get(0).submit();
    }
}

</script>



@endsection