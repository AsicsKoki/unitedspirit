@extends('layouts.master')

@section('content')
<style>
    @media (min-width: 992px) {
    body {
        padding-top: 56px;
        margin-top: 35px; 
    }
}
.card_holder {
    height: 400px;
    border: solid 1px #eee;
    padding: 40px;
    margin: 20px auto;
} 
.card-img-top {
    width: 100%;
}

</style>
     <!-- Page Content -->
     <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">United Spirit Subscriptions</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="{{ route('postSubscribe') }}" class="btn btn-success btn-lg">Call to action!</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card_holder">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">{{ $subscription_types[0]->price }}€/{{ $subscription_types[0]->name }}</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary subscriptions_btn" id="sub_20">Subscribe</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card_holder">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">{{ $subscription_types[1]->price }}€/{{ $subscription_types[1]->name }}</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary subscriptions_btn" id="sub_55">Subscribe</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card_holder">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">{{ $subscription_types[2]->price }}€/{{ $subscription_types[2]->name }}</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary subscriptions_btn" id="sub_100">Subscribe</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card_holder">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">{{ $subscription_types[3]->price }}€/{{ $subscription_types[3]->name }}</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary subscriptions_btn" id="sub_200">Subscribe</button>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->
        <!-- stripe form payment -->

         <!-- <form accept-charset="UTF-8" action="/" class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="pk_live_cNAAgOnhvXmvXrmFUTt6PPAM"
                    id="payment-form" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="hiddenammount" value="" id="hidden_input_val">
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

    <!-- The needed JS files -->
    <!-- Stripe JS -->

    <!-- Your JS File -->
   

                <form action="charge.php" method="post" id="payment-form">
                    <div class="form-row">
                        <label for="card-element">Credit or debit card</label>
                        <div id="card-element">
                        <!-- a Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors -->
                        <div id="card-errors"></div>
                    </div>
                    <button>Submit Payment</button>
                </form>
    </div>
    <!-- /.container -->



@endsection