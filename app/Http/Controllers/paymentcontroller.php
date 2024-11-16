<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentcontroller extends Controller
{
    public function show(){
        return view('paymentsystem.stripepayment');
    }
    public function create(Request $request){
        \Stripe\Stripe::setApiKey ( 'sk_test_5gFXUqOjsO2BzEMCnK726Jz900R9kEUsdS' );
        try {
            \Stripe\Charge::create ( array (
                "amount" => 300 * 100,
                "currency" => "usd",
                "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                "description" => "Test payment."
            ) );
            Session::flash ( 'success-message', 'Payment done successfully !' );
            return Redirect::back ();
        } catch ( \Exception $e ) {
            Session::flash ( 'fail-message', "Error! Please Try again." );
            return Redirect::back ();
        }
    }
}
