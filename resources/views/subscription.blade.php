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
            <h1 class="display-3">Le Programme 52 Semaines pour Changer de Vie</h1>
            <h2>La guide ultime pour redonnez du sens à sa vie et réaliser ses rêves.</h3>
            </br>
            <p class="lead">La compilation par nos experts des cours du Campus. Recevez chaque semaine des cours centrés sur quatre catégories. 
</br></br>
Accomplissement de soi : des vidéos de développement personnel pour accomplir vos rêves
Sagesse du Monde : des documents pdf synthétisant les enseignements de toutes les cultures
Un corps sain dans un esprit sain : des audios sur la santé du corps et de l'esprit 
Exercice pratique : des exercices pour avancer chaque de la semaine</p>
        </header>

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-lg-3 col-md-6 mb-4">
            <div class="card_holder">
                <img class="card-img-top" src="img/20month.jpg" alt="">
                <div class="card-body">
                <h4 class="card-title">{{ $subscription_types[0]->price }}€/{{ $subscription_types[0]->name }}</h4>
                <p class="card-text text-center">Étalez par mensualités. </br>
                Recevez l’intégralité du guide sur 52 semaines avec les quatre bilans. </p>
                </div>
                <div class="card-footer">
                <a href="#payment-form"><button class="btn btn-primary subscriptions_btn" id="sub_20">Subscribe</button></a>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
            <div class="card_holder">
                <img class="card-img-top" src="img/13weeks.jpg" alt="">
                <div class="card-body">
                <h4 class="card-title">{{ $subscription_types[1]->price }}€/{{ $subscription_types[1]->name }}</h4>
                <p class="card-text">Économisez en commandant le premier trimestre. Le programme complet jusqu'au premier bilan. </p>
                </div>
                <div class="card-footer">
                <a href="#payment-form"><button class="btn btn-primary subscriptions_btn" id="sub_55">Subscribe</button></a>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
            <div class="card_holder">
                <img class="card-img-top" src="img/26weeks.jpg" alt="">
                <div class="card-body">
                <h4 class="card-title">{{ $subscription_types[2]->price }}€/{{ $subscription_types[2]->name }}</h4>
                <p class="card-text">Économisez en commandant les deux premiers trimestres. Le programme complet jusqu'au second bilan. 
    </p>
                </div>
                <div class="card-footer">
                <a href="#payment-form"><button class="btn btn-primary subscriptions_btn" id="sub_100">Subscribe</button></a>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
            <div class="card_holder">
                <img class="card-img-top" src="img/52weeks.jpg" alt="">
                <div class="card-body">
                <h4 class="card-title">{{ $subscription_types[3]->price }}€/{{ $subscription_types[3]->name }}</h4>
                <p class="card-text">Changez votre vie tout en profitant de la réduction. Le guide complet avec ses quatre bilans.</p>
                </div>
                <div class="card-footer">
                <a href="#payment-form"><button class="btn btn-primary subscriptions_btn" id="sub_200">Subscribe</button></a>
                </div>
            </div>
            </div>
        </div>   
            <form action="{{ route('submitSubscription') }}" method="post" id="payment-form">
                {{ csrf_field() }}
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
                        <select id="inputState" class="form-control" name="country">
                            <option selected>France</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip" placeholder="Code Postal" name="zip">
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-4">
                        <label for="statenum">Numero de estat</label>
                        <select id="statenum" class="form-control" name="statenum">
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
                        <input type="text" class="form-control" placeholder="Adresse postale" name="address">
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
                    <input type="hidden" value="" name="dur" id="hidden_dur">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary center-block">Submit Payment</button>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script>
        $(document).ready(function() {
        $('#sub_20').click(function() {
            $('#payment-form').css('display', 'block');
            $('.sub_amount').text('{{ $subscription_types[0]->price }}€');
            $('#plan').text('{{ $subscription_types[0]->name }}');
            $('#planName').val('{{ $subscription_types[0]->name }}');
            $('#hidden_dur').val('30');
        });
        $('#sub_55').click(function() {
            $('#payment-form').css('display', 'block');
            $('.sub_amount').text('{{ $subscription_types[1]->price }}€');
            $('#plan').text('{{ $subscription_types[1]->name }}');
            $('#planName').val('{{ $subscription_types[1]->name }}');
            $('#hidden_dur').val('91');
        });

        $('#sub_100').click(function() {
            $('#payment-form').css('display', 'block');
            $('.sub_amount').text('{{ $subscription_types[2]->price }}€');
            $('#plan').text('{{ $subscription_types[2]->name }}');
            $('#planName').val('{{ $subscription_types[2]->name }}');
            $('#hidden_dur').val('338');
        });

        $('#sub_200').click(function() {
            $('#payment-form').css('display', 'block');
            $('.sub_amount').text('{{ $subscription_types[3]->price }}€');
            $('#plan').text('{{ $subscription_types[3]->name }}');
            $('#planName').val('{{ $subscription_types[3]->name }}');
            $('#hidden_dur').val('676');
        });

        });
        </script>
        <!-- /.container -->
    @endsection