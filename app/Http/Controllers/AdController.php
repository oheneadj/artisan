<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Shop;
use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/**
 *
 */
class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ads.index', [
            "ads" => Ad::with('shop')->latest()
                ->paginate(6)->withQueryString(),
            "categories" => Category::get()
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

        return view('ads.create-ad', ['page_title' => 'Post Ad', 'categories' => Category::get()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector
     * @throws \Exception
     */
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required|max:500',
            'category_id' => 'required',
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sale'=> 'nullable',
            'sale_price' => 'nullable|numeric'
        ]);

        if($request->sale !== null) $formFields['sale'] = '1';

        $formFields['slug'] = Str::slug($formFields['name']);

        $ad = Ad::where('name', '=', $formFields['name'])->latest()->count();

        if (($ad !== null) && $ad >= 1) {
            $formFields['slug'] .= "-" . $ad;
        }

        $formFields['user_id'] = auth()->user()->id;
        $formFields['shop_id'] = auth()->user()->shop->id;

        $ad = Ad::create($formFields);

        if ($ad) {

            if ($formFields['images']) {
                foreach ($formFields['images'] as $image) {
                    $imageName = time() . random_int(1, 999) . '.' . $image->extension();

                    $image->move(public_path('images'), $imageName);

                    Image::create([
                        'name' => $imageName,
                        'ad_id' => $ad['id']
                    ]);
                }
            }

            return  redirect(route('ad.single', $ad->slug))
                ->with('success', 'Ad created successfully ');
        }

        return back()->with('danger', 'There was a problem creating your Ad please try again');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop, Ad $ad)
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
    public function edit(Ad $ad)
    {
        return auth()->user()->id !== $ad->user_id ? back() : view(
            'ads.edit-ad',
            [
                'page_title' => 'Edit Ad',
                'ad' => $ad,
                'categories' => Category::get()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ad $ad)
    {
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required|max:500',
            'category_id' => 'required',
            'images' => 'nullable|max:6',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sale'=> 'nullable',
            'sale_price' => 'nullable|numeric'
        ]);

        $request->sale !== null ? $formFields['sale'] = '1' :$formFields['sale'] = '0';

        $formFields['slug'] = Str::slug($formFields['name']);

        $single_ad = Ad::where('name', '=', $formFields['name'])->latest()->count();

        if (($single_ad !== null) && $single_ad >= 1) {
            $formFields['slug'] .= "-" . $single_ad;
        }



        $ad->update($formFields);

        if ($ad) {

            if (isset($formFields['images'])) {
                foreach ($formFields['images'] as $image) {



                    $imageName = time() . random_int(1, 999) . '.' . $image->extension();

                    $image->move(public_path('images'), $imageName);

                    Image::create([
                        'name' => $imageName,
                        'ad_id' => $ad['id']
                    ]);
                }
            }

            return  redirect(route('ad.single', $ad->slug))
                ->with('success', 'Ad created successfully ');
        }

        return back()->with('danger', 'There was a problem creating your Ad please try again');
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
