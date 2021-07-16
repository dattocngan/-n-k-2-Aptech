<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //Index
    public function index(Request $request)
    {
        return view('project.client.index');
    }

    //Product
    public function product(Request $request)
    {
        return view('project.client.product');
    }

    //Single
    public function single(Request $request)
    {
        return view('project.client.single');
    }

    //Checkout
    public function checkout(Request $request)
    {
        return view('project.client.checkout');
    }

    //Privacy
    public function privacy(Request $request)
    {
        return view('project.client.privacy');
    }

    //Payment
    public function payment(Request $request)
    {
        return view('project.client.payment');
    }

    //Terms
    public function terms(Request $request)
    {
        return view('project.client.terms');
    }

    //Faqs
    public function faqs(Request $request)
    {
        return view('project.client.faqs');
    }

    //Help
    public function help(Request $request)
    {
        return view('project.client.help');
    }
    
    //Contact
    public function contact(Request $request)
    {
        return view('project.client.contact');
    }
    
    //About
    public function about(Request $request)
    {
        return view('project.client.about');
    }
}
