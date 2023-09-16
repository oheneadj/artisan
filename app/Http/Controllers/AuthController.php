<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function store(string $id)
    {
        //
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
