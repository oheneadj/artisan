<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Shop;
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
        return view(
            "ads.index",
            [
                "ads" => Ad::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

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
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'location' => ['required']
        ]);

        $formFields['slug'] = Str::slug($formFields['name']);
        $formFields['user_id'] = auth()->user()->id;



        if (Shop::create($formFields)) {

            if (session('intendedURL') !== null) {

                //store session data in variable and delete from session
                $URL = session('intendedURL');
                session()->forget('intendedURL');

                return redirect(route($URL))
                    ->with('success', 'Shop created successfully. You can now create your ads');
            } else {
                return  redirect(route('user.shop'))
                    ->with('success', 'Shop created successfully ');
            }
        } else {
            return back()->with('danger', 'Shop creation unsuccessfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    public function user_shop()
    {

        return view(
            'shop.index',
            [
                "shop" => Shop::where('user_id', auth()->user()->id)->first(),
                'page_title' => "My Shop"
            ]
        );
    }
}
