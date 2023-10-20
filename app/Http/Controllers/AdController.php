<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Shop;
use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ads.index', [
            "ads" => Ad::with('shop')->latest()
                ->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Check to see if user has already created a shop else take him to shop create page
        if (Shop::where('user_id', auth()->user()->id)->first() == null) {
            // store the intended link in session
            session(['intendedURL' => Route::currentRouteName()]);
            return redirect(route('create.shop'));
        }

        return view('ads.create-ad', ['page_title' => 'Post Ad']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => 'required', 'min:3',
            'price' => 'required', 'numeric',
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $formFields['slug'] = Str::slug($formFields['name']);
        $formFields['user_id'] = auth()->user()->id;
        $formFields['shop_id'] = Shop::where('user_id', '=', auth()->user()->id)->first()->id;
        //$formFields['category_id'] = 1;



        $ad = Ad::create($formFields);

        if ($ad) {

            if ($formFields['images']) {
                foreach ($formFields['images'] as $image) {
                    $imageName = time() . rand(1, 999) . '.' . $image->extension();

                    $image->move(public_path('images'), $imageName);

                    Image::create([
                        'name' => $imageName,
                        'ad_id' => $ad['id']
                    ]);
                }
            }

            return  redirect(route('ad.single', $ad->slug))
                ->with('success', 'Ad created successfully ');
        } else {
            return redirect('/about')->with('danger', 'Ad creation unsuccessfully');
        }
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

        return view(
            'ads.my-ads',
            [
                'page_title' => 'My Ads',
                "shop" => Shop::where('user_id', auth()->user()->id)->first(),
            ]
        );
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
