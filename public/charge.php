<?php

require_once('../vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_sQWHOV4aMUS3Y3kO321JlF1i');
// Get the token from the JS script
$token = $_POST['stripeToken'];
// Create a Customer
$customer = \Stripe\Customer::create(array(
    "email" => "paying.user@example.com",
    "source" => $token,
));
// or you can fetch customer id from the database too.
// Creates a subscription plan. This can also be done through the Stripe dashboard.
// You only need to create the plan once.
// $subscription = \Stripe\Plan::create(array(
//     "amount" => 20000,
//     "interval" => "month",
//     "name" => "52 weeks",
//     "currency" => "eur",
//     "id" => "52 weeks"
// ));
// Subscribe the customer to the plan
$subscription = \Stripe\Subscription::create(array(
    "customer" => $customer->id,
    "plan" => "52 weeks"
));
print_r($subscription);
