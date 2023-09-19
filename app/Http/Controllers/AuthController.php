<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login', ['page_title' => 'Login']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function authenticate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
        return view('auth.register', ['page_title' => 'Register']);
    }

    /**
     * Display the specified resource.
     */
    public function store(Request  $request)
    {

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'gender' => ['required'],
            'date_of_birth' => ['required', 'date', 'min:3'],
            'phone_number' => ['required', 'numeric', Rule::unique('users', 'phone_number')],
            'password' => 'required | confirmed | min:8'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $userObject = new User;

        $formFields['username'] = $userObject->generateUserName($formFields['name']);
        $formFields['location'] = 'nkoranza';

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('success', 'User created successfully and logged in');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function forgotPassword()
    {
        return view('auth.forgot-password', ['page_title' => 'Forgot Password']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function resetPassword(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(string $id)
    {
        //
    }
}
