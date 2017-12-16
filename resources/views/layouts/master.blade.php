<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favico -->
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
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
    @if(Request::is('subscriptions'))
     <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/charge.js') }}"></script>
    @endif

    @if(Request::is('home'))
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('pk_test_H3EzMRKDqpXxlAd1hye8xpJH');
    var elements = stripe.elements();
// Custom Styling
    var style = {
    base: {
        color: '#32325d',
        lineHeight: '24px',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};
// Create an instance of the card Element
    var card = elements.create('card', { style: style });
// Add an instance of the card Element into the `card-element` <div>
    card.mount('#card-element2');
// Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors2');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});
// Handle form submission
    var form = document.getElementById('payment-form2');
form.addEventListener('submit', function(event) {
    event.preventDefault();
    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error
            var errorElement = document.getElementById('card-errors2');
            errorElement.textContent = result.error.message;
        } else {
            stripeTokenHandler(result.token);
        }
    });
});
// Send Stripe Token to Server
function stripeTokenHandler(token) {

    var form = document.getElementById('payment-form2');
    // Add Stripe Token to hidden input
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit form
    form.submit();
}
    </script>
    @endif 


</body>

</html>

