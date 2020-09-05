<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{//construct payment
    public function payment()
    {
        $data = [];
        $data['items'] = [
            [
                'name' => 'mytask.com',
                'price' => 10,
                'desc'  => 'no description',
                'qty' => 1
            ]
        ];
  
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "donation #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = 10;
  
        $provider = new ExpressCheckout;
  
        $response = $provider->setExpressCheckout($data);
  
        $response = $provider->setExpressCheckout($data, true);
        //dd($response);
       return redirect($response['paypal_link']);
    }
   //on failing cancel payment
    public function cancel()
    {
        echo "Sorry you payment is canceled";
    }
  //on success payment
    public function success(Request $request)
    {
        $response = $provider->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
           echo "Your payment was successful. ";
        }
  
        echo "Something is wrong";
    }
}
