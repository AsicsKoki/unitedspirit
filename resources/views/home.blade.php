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
                            <h1>L'école innovante de l'accomplissement de soi<span>un projet associatif pour se changer Soi-Meme</br> et changer le monde.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- <img class="second-slide" src="img/Campus_home.jpg" alt="Second slide"> -->
                    <div class="container">
                        <div class="carousel-caption cf">
                            <h1>the innovative school of self realiztion<span>a non profit project to change ourselves</br> and change the world.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- <img class="third-slide" src="img/Campus_home.jpg" alt="Third slide"> -->
                    <div class="container">
                        <div class="carousel-caption cf">
                            <h1>the innovative school of self realiztion<span>a non profit project to change ourselves</br> and change the world.</span></h1>
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
                            <p>S'interroger sur qui nous sommes et le sens que l'on veut donner a sa vie en retrouvant confiance en soi</p>
                        </a>
                        <h2><a href="#self_realization">Accomplissement de soi</a></h2>
                    </div>
                
                <!-- /.col-lg-4 -->
               
                    <div class="col-lg-4" id="wisdom">
                        <div class="marketing_img_holder">
                             <a href="#wfromthew">
                                <img src="img/Wisdom_from_the_World.jpg" alt="wisdom from the world">
                            </a>
                        </div>
                        <a href="#wfromthew">
                            <p>Apprendre a partir des enseignements des grands penseurs et philosophies de ce monde</p>
                        </a>
                        <h2><a href="#wfromthew">Sagesse du Monde</a></h2>
                    </div>
               
                <!-- /.col-lg-4 -->
                
                    <div class="col-lg-4" id="health">
                        <div class="marketing_img_holder">
                            <img src="img/healthy_mind_in_healthy_body.jpg" alt="healthy mind in healthy body">
                        </div>
                        <a href="#healthymind">
                            <p>Prendre soin de son intelect sans negliger son corps</p>
                        </a>
                        <h2><a href="#healthymind">Esprit sain, dans un corps sain</a></h2>
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
                <h2 class="text-center">Accomplissement de soi</h2>
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
                    <a href="">Rapport a autrui</a>
                </h3>
            </div>
        </div>
    </div>
    <!-- Welcome from the world -->
    <div class="container wfromthew" id="wfromthew">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2>Sagesse du Monde</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="img-wrapper">

                    <p class="img_text">
                        Philosophie 
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
                        Humanite
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
                <h2>Esprit sain, dans un corps sain</h2>
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
                        Alimentation vegetarienne 
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-wrapper">
                    <img src="img/Humanities.jpg" alt="philosophy">
                    <p class="img_text">
                        Activite physique
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="experts cf" id="experts">
        <hr>
        <h2 class="text-center">Nos Experts</h2>
        <div class="text-center row">
            @foreach($experts as $expert)
                <div class="col-lg-2">
                    <div class="experts_img_holder">
                        <img src="{{ URL::to('/') . $expert->path }}" alt="">
                    </div>
                    <h3> {{$expert->title}} </h3>
                    <h6> {{$expert->role}} </h6>
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
    </div>
<!-- stripe forma -->

<script src='https://js.stripe.com/v2/' type='text/javascript'></script>

<div class="donations" id="donations">

    <div class="donations_content">
        <hr>

        <h3 class="text-center">Faire un don</h3>

        <button class="btn btn-default center-block main_donation_btn" data-js="open">Faire un don</button>
    
    </div>

    <div class="half_logo_right">
        <img src="img/half-logo.png" alt="Half logo united spirit">
    </div>

</div>



<div class="text-center campus_box" id="campus_box">
    <div class="campus_box_content">
        <hr>
        <h3 class="campus_box_title">Campus Box</h3>
        <h4>Vivez un apercu de l'experence Campus, de la ou vous etes.</h4>
        <p>
           Recevez sur 52 semaines le contenu des cours de campus (Accomplissement de soi, Sagesse du Monde, esprit sain dans un corps sain)</br>
           pour transformer votre vie en retrouvantle votre chemin
            <span>Progress at your own rythm with weekly exercises</span>
        </p>
        <a href="{{ route('getSubscriptions') }}"><button class="btn btn-default center-block">Inscription / Connexion</button></a>
        <small>Toutes les personnes de l'association sont benevoles, les fonds recoltes serviront uniquement a fonder l'ecole</small>
        

    </div>

    <div class="half_logo_left">
         <img src="img/half-logo-left.png" alt="Half logo united spirit">
    </div>

</div>


    <!-- /stripe forma -->

    <div class="contact cf" id="contact">
        <hr>
        <h2 class="contact_title text-center">Contact</h2>
        <form action="{{ route('sendContactMail') }}" method="POST">
            <div class="contact_content text-center">
                <div class="container">
                    <div class="form-group">
                        <label for="contact_name" class="text-center">Votre name</label>
                        <input type="text" name="contact_name" class="center-block form-control" id="contact_name" placeholder="Your name">
                    </div>
                    <!-- Email input-->
                    <div class="form-group">
                        <label for="contact_email" class="text-center">Votre e-mail</label>
                        <input type="email" name="contact_email" class="center-block form-control" id="contact_email" placeholder="Your email">
                    </div>
                    <div class="form-group">
                        <label for="text" class="text-center">Votre message</label>
                        <textarea name="text" id="" cols="30" rows="10" class="center-block"></textarea>
                        {{ csrf_field() }}
                        <button class="btn btn-default center-block" type="submit">Send</button>
                    </div>
                 
                </div>
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
                    <div class="col-lg-2 partner_holder">
                        <div class="partner_img">
                            <img src="{{ URL::to('/') . $partner->path }}" alt="">
                        </div>
                        <p class="partner_name">{{$partner->title }}</p>
                    </div>
                @endforeach
                </div>

            </div>
    </div>

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
              <form action="{{ route('submitDonation') }}" method="post" id="payment-form2">
                  {{ csrf_field() }}
                  <div class="form-row">
                      <div class="col-md-6">
                      <label> First Name </label>
                      <input type="text" class="form-control" name="name" placeholder="First name" required>
                      </div>
                      <div class="col-md-6">
                      <label> Last Name </label>
                      <input type="text" class="form-control" name="lastName" placeholder="Last name" required>
                      </div>
                      <div class="col-md-12">
                      <label> Your E-mail </label>
                      <input type="e-mail" class="form-control" name="email" placeholder="Adresse email" required >
                      </div>
                  </div>
                    <div class="form-row">
                            <label for="card-element2">Credit or debit card</label>
                            <div id="card-element2">
                            <!-- a Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display form errors -->
                            <div id="card-errors"></div>
                    </div>
                  <label class="text-center">Total amount to pay: <span class="don_amount"></span>
                <input type="hidden" value="" name="hidden_donation" id="donation_sum"> 
            <input type="submit" class="btn btn-primary center-block" value="Submit Payment"></input>

          </form>
     </div>
</div>

<button class="close_popup btn btn-danger center-block" name="close">
    <i class="fa fa-times" aria-hidden="true"></i>
</button>

</div>

@endsection