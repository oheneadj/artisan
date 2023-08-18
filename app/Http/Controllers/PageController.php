<?php

namespace App\Http\Controllers;


use App\Models\Ad;
use App\Models\Faq;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        //
        return view('pages.index', ["ads" => Ad::all()]);
    }


    public function about()
    {
        //
        return view('pages.about');
    }


    public function faq()
    {
        return view('pages.faq', ["faqs" => Faq::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function terms_of_use()
    {
        //
    }


    public function privacy_policy(string $id)
    {
        //
    }


    public function support()
    {
        //
    }


    public function contact_us()
    {
        //
    }
}
