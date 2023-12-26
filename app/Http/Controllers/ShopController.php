<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Shop;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shop.index', [
            "shops" => Shop::with('ad')->latest()
                ->paginate(6),
            "categories" => Category::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        // Check if user already has a shop
        if (Shop::where('user_id', auth()->user()->id)->first() != null) {
            //return user to shop
            return redirect(route('user.shop'));
        }

        //return user to create shop page
        return view(
            'shop.create',
            [

                'page_title' => "My Shop"
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // Check if user already has a shop
        if (Shop::where('user_id', auth()->user()->id)->first() != null) {
            //if user has a shop, return to user shop
            return redirect(route('user.shop'));
        }

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'location' => ['required'],
            'phone_number' => ['required', 'numeric', 'digits:10', 'unique:shops,phone_number'],
            'description' => ['required', 'max:250'],
            'certificate_number' => ['required'],
            'shop_type' => ['required'],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'video' => ['nullable', 'url'],
        ]);

        if ($request->image) {
            $image = time() . random_int(1, 999) . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $image);
            $formFields['logo'] = $image;
        }

        $formFields['slug'] = Str::slug($formFields['name']);
        $formFields['user_id'] = auth()->user()->id;


        if (Shop::create($formFields)) {

            if (session('intendedURL') !== null) {

                //store session data in variable and delete from session
                $URL = session('intendedURL');
                session()->forget('intendedURL');

                return redirect(route($URL))
                    ->with('success', 'Shop created successfully. You can now create your ads');
            }

            return  redirect(route('user.shop'))
                ->with('success', 'Shop created successfully ');
        }

        return back()->with('danger', 'Shop creation unsuccessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {

        $ads = Ad::where('shop_id', $shop->id);
        return view(
            'shop.show-shop',
            [
                'page_title' => $shop->name,
                'shop' => $shop,
                'ads' => $ads->latest()->paginate(6)
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        if(auth()->user()->shop->id === $shop->id){
            return view('shop.edit',[
                'shop' => $shop,
                'page_title' => $shop->name,
            ]);
        }
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

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function user_shop()
    {

        $ads = Ad::where('shop_id', auth()->user()->shop->id);
        return view(
            'shop.show-shop',
            [
                'page_title' => auth()->user()->shop->name,
                'shop' => auth()->user()->shop,
                'ads' => $ads->latest()->paginate(6)
            ]
        );
    }
}
