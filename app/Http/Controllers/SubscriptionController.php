<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use App\SubscriptionType as SubscriptionType;
use Illuminate\Support\Facades\Input;
use App\Invoice as Invoice;
Use App\User as User;


class SubscriptionController extends Controller
{
    /**
     * Display a li 1sting of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }

    public function getSubcriptions()
    {
        $sub_t = SubscriptionType::all();
        return view('subscription',['subscription_types' => $sub_t]);
    }


    public function submitSubscription()
    {
        \Stripe\Stripe::setApiKey('sk_test_sQWHOV4aMUS3Y3kO321JlF1i');
        // Get the token from the JS script
        $token = Input::get('stripeToken');
        // user info
        $plan = Input::get('hidden_plan');
        $name = Input::get('name');
        $lastName = Input::get('lastName');
        $email = Input::get('email');
        $city = Input::get('city');
        // Create a Customer
        $customer = \Stripe\Customer::create(array(
            "email" => $email,
            "source" => $token,
            'metadata' => array("name" => $name, "last_name" => $lastName, "city" => $city)
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
            "plan" => $plan,
            'metadata' => array("name" => $name, "last_name" => $lastName, "city" => $city)
        ));

        if ($subscription) {
            $user = User::where('id',Auth::user()->id)->with('invoices')->first();
            $invoice = new Invoice;
            $invoice->first_name = Input::get('name');
            $invoice->last_name = Input::get('lastName');
            $invoice->email = Input::get('e-mail');
            $invoice->city = Input::get('city');
            $invoice->country = Input::get('country');
            $invoice->area_code = Input::get('statenum');
            $invoice->zip = Input::get('zip');
            $invoice->address = Input::get('address');

            $user->invoices()->attach($invoice);
            $user->save();
            

            return $subscription;
            return redirect::route('subscribe');
        }
    }

    public function submitDonation()
    {
        \Stripe\Stripe::setApiKey('sk_test_sQWHOV4aMUS3Y3kO321JlF1i');
        // Get the token from the JS script
        $token = Input::get('stripeToken');
        // user info
        $plan = Input::get('hidden_plan');
        $name = Input::get('name');
        $lastName = Input::get('lastName');
        $email = Input::get('email');
        $city = Input::get('city');
        // Create a Customer
        $customer = \Stripe\Customer::create(array(
            "email" => $email,
            "source" => $token,
            'metadata' => array("name" => $name, "last_name" => $lastName, "city" => $city)
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
            "plan" => $plan,
            'metadata' => array("name" => $name, "last_name" => $lastName, "city" => $city)
        ));

        if ($subscription) {
            $user = User::where('id',Auth::user()->id)->with('invoices')->first();
            $invoice = new Invoice;
            $invoice->first_name = Input::get('name');
            $invoice->last_name = Input::get('lastName');
            $invoice->email = Input::get('e-mail');
            $invoice->city = Input::get('city');
            $invoice->country = Input::get('country');
            $invoice->area_code = Input::get('statenum');
            $invoice->zip = Input::get('zip');
            $invoice->address = Input::get('address');

            $user->invoices()->attach($invoice);
            $user->save();
            

            return $subscription;
            return redirect::route('subscribe');
        }
    }
}
