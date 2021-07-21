<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //Index
    public function index(Request $request)
    {
        return view('client.index.index');
    }

    //Product
    public function product(Request $request)
    {
        return view('client.product.product');
    }

    //Single
    public function single(Request $request)
    {
        return view('client.single.single');
    }

    //Checkout
    public function checkout(Request $request)
    {
        return view('client.checkout.checkout');
    }

    //Privacy
    public function privacy(Request $request)
    {
        return view('client.privacy.privacy');
    }

    //Payment
    public function payment(Request $request)
    {
        return view('client.payment.payment');
    }

    //Terms
    public function terms(Request $request)
    {
        return view('client.terms.terms');
    }

    //Faqs
    public function faqs(Request $request)
    {
        return view('client.faqs.faqs');
    }

    //Help
    public function help(Request $request)
    {
        return view('client.help.help');
    }
    
    //Contact
    public function contact(Request $request)
    {
        return view('client.contact.contact');
    }
    
    //About
    public function about(Request $request)
    {
        return view('client.about.about');
    }

    //News
    public function news(Request $request)
    {
        return view('client.news.news');
    }
}
