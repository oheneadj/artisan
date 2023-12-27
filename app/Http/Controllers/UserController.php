<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'date_of_birth' => 'required',
            'location' => 'required',
            'card_type' => 'required',
            'card_number' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        return User::create($data) ? $data['first_name'] : "Error creating service";
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
    public function edit()
    {
        return view('user.edit-profile', ['page_title' => 'Edit Your Profile']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $form_fields = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'card_type' => 'required',
            'card_number' => 'required',
            'phone_number' => 'required|numeric|digits:10',
            'email' => 'required',
        ]);

        $form_fields['username'] = Str::slug($form_fields['name']);

        $users_number = User::where('name', '=', $form_fields['name'])->latest()->count();

        if (($users_number !== null) && $users_number >= 1) {
            $form_fields['username'] .= "-" . $users_number;
        }

        if ($user->update($form_fields)) {
            return  redirect(route('profile'))
                ->with('success', 'Your profile has been updated successfully');
        }

        return back()->with('danger', 'User profile update unsuccessful,. Please try again');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function dashboard()
    {
        return view('user.dashboard',
            ['page_title' => 'Dashboard']);
    }

    public function profile()
    {
        return view('user.profile', ['page_title' => 'Profile']);
    }
}
