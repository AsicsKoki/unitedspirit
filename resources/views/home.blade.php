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
                        <div class="carousel-caption">
                            <h1>the innovative school of self realiztion</br>a non profit project to change ourselves</br> and change the world.</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- <img class="second-slide" src="img/Campus_home.jpg" alt="Second slide"> -->
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>the innovative school of self realiztion</br>a non profit project to change ourselves</br> and change the world.</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- <img class="third-slide" src="img/Campus_home.jpg" alt="Third slide"> -->
                    <div class="container">
                        <div class="carousel-caption">
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

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4" id="selfrel">
                <div class="marketing_img_holder">
                    <img src="img/Self_Realization.jpg" alt="self realization">
                </div>
                <p>Questionning who we are and the meaning we want to give to our lives getting our confidence back</p>
                <h2>Self realization</h2>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4" id="wisdom">
                <div class="marketing_img_holder">
                    <img src="img/Wisdom_from_the_World.jpg" alt="wisdom from the world">
                </div>
                <p>Questionning who we are and the meaning we want to give to our lives getting our confidence back</p>
                <h2>Wisdom from the world</h2>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4" id="health">
                <div class="marketing_img_holder">
                    <img src="img/healthy_mind_in_healthy_body.jpg" alt="healthy mind in healthy body">
                </div>
                <p>Questionning who we are and the meaning we want to give to our lives getting our confidence back</p>
                <h2>Healthy mind in a healthy body</h2>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- self realization -->
    <div class="self_realization">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="text-center">Self Realization</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h3>Meditation</h3>
            </div>
            <div class="col-lg-4">
                <h3>Introspection</h3>
            </div>
            <div class="col-lg-4">
                <h3>Relationship With Others</h3>
            </div>
        </div>
    </div>
    <!-- Welcome from the world -->
    <div class="container wfromthew">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2>Welcome from the world</h2>
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
    </div>
    <!--- healthy mind in a healthy body -->
    <div class="healthymind">
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

    <div class="experts">
    <h3 class="text-center">Our Experts</h3>
    <div class="text-center row">
        <div class="col-lg-2"><img src="http://simpleicon.com/wp-content/uploads/user1.png" alt=""></div>
        <div class="col-lg-2"><img src="http://simpleicon.com/wp-content/uploads/user1.png" alt=""></div>
        <div class="col-lg-2"><img src="http://simpleicon.com/wp-content/uploads/user1.png" alt=""></div>
        <div class="col-lg-2"><img src="http://simpleicon.com/wp-content/uploads/user1.png" alt=""></div>
        <div class="col-lg-2"><img src="http://simpleicon.com/wp-content/uploads/user1.png" alt=""></div>
        <div class="col-lg-2"><img src="http://simpleicon.com/wp-content/uploads/user1.png" alt=""></div>
    </div>
</div>

<div class="donations">
<h3 class="text-center">Make a donation</h3>
<button class="btn btn-default center-block" data-js="open">donate</button>
<div class="popup">
    <div class="row text-center">
        <div class="col-lg-2"><button class="btn btn-default">5e</button></div>
        <div class="col-lg-2"><button class="btn btn-default">10e</button></div>
        <div class="col-lg-2"><button class="btn btn-default">20e</button></div>
        <div class="col-lg-2"><button class="btn btn-default">50e</button></div>
        <div class="col-lg-4"><button class="btn btn-default">other</button></div>
        <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-danger center-block" name="close">Close popup</button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-success center-block">Send Donation</button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="text-center campus_box">
<h3>Campus Box</h3>
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
        <button class="btn btn-danger" name="close">Close popup</button>
    </div>
</div>
</div>

<div class="container contact">
    <h2 class="text-center">Contact</h2>
    <textarea name="" id="" cols="30" rows="10" class="center-block"></textarea>
    <button class="btn btn-default center-block" type="submit">Send</button>
</div>

<div class="our_partners">
    <h3 class="text-center">Our Partners</h3>
    <div class="text-center row">
        <div class="col-lg-2">Partner</div>
        <div class="col-lg-2">Partner</div>
        <div class="col-lg-2">Partner</div>
        <div class="col-lg-2">Partner</div>
        <div class="col-lg-2">Partner</div>
        <div class="col-lg-2">Partner</div>
    </div>
</div>

@endsection