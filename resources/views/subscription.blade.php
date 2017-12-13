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
#payment-form {
  background: #eeeeee54;
  padding: 30px;
  display: none;
  padding-bottom: 90px;
  margin-bottom: 15px;
}

#payment-form label {
    padding: 10px;
}
#card-element {
    border: solid 2px #eee;
    border-radius: 330px;
    padding: 5px;
    margin-bottom: 10px;
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
            <a href="#payment-form"><button class="btn btn-primary subscriptions_btn" id="sub_20">Subscribe</button></a>
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
            <a href="#payment-form"><button class="btn btn-primary subscriptions_btn" id="sub_55">Subscribe</button></a>
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
            <a href="#payment-form"><button class="btn btn-primary subscriptions_btn" id="sub_100">Subscribe</button></a>
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
            <a href="#payment-form"><button class="btn btn-primary subscriptions_btn" id="sub_200">Subscribe</button></a>
            </div>
          </div>
        </div>
      </div>   
        <form action="charge.php" method="post" id="payment-form">
                <div class="form-row">
                 <div class="row">
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
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                 <label for="inputCity">Ville</label>
                    <input type="text" class="form-control" name="city" id="inputCity" placeholder="Ville">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>France</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="Code Postal">
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-4">
                    <label for="statenum">Numero de estat</label>
                    <select id="statenum" class="form-control">
                        <option selected>France(+33)</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-8">
                <label for="statenum">Numero de telephone</label>
                    <input type="text" class="form-control" id="telnum" placeholder="Numero de telephone" >
                </div>
                <div class="col-md-12">
                     <label> Adrese Postale </label>
                     <input type="text" class="form-control" placeholder="Adresse postale" >
                 </div>
                </div>
                <div class="form-row">
                        <label for="card-element">Credit or debit card</label>
                        <div id="card-element">
                        <!-- a Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors -->
                        <div id="card-errors"></div>
                 </div>
            <div class="col-md-12">
                <label class="text-center">Total amount to pay: <span class="sub_amount"></span>, your selected plan is : <span id="plan"></span></label>
                <input type="hidden" value="" name="hidden_plan" id="planName">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary center-block">Submit Payment</button>
            </div>
        </form>
    </div>
    <!-- /.container -->
@endsection