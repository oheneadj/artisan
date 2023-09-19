<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'ads.index',
            [
                "ads" => Ad::all(),
                "categories" => Category::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ads.create-ad', ['page_title' => 'Post Ad']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ad $ad)
    {
        return view(
            'ads.show-ad',
            [
                'page_title' => 'Post Ad',
                'ad' => $ad,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function myAds()
    {
        return view('ads.my-ads', ['page_title' => 'My Ads']);
    }

    public function favourites()
    {
        return view('ads.favourite', ['page_title' => 'My Ads']);
    }
    public function bookmarked()
    {
        return view('ads.bookmarked', ['page_title' => 'My Ads']);
    }
}
