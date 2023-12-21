<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
    public function update(Request $request, string $id)
    {
        $user = $request->validate([
            'full_name' => 'required',
            'location' => 'required',
            'card_type' => 'required',
            'card_number' => 'required',
            'phone_number' => 'required,numeric, size:10',
            'email' => 'required',
        ]);

        User::updated($user);
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
