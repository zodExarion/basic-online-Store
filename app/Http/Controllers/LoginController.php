<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\UpdateloginRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }
    public function view_register()
    {
        return view('register');
    }
    public function login(Request $request)
    {

        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'yes'
            ]);
        } else {
            return response()->json([
                'message' => 'no'
            ]);
        }
    }
    public function register(Request $request)
    {


        $login = new Login;
        $login->name = $request->name;
        $login->email = $request->email;
        $login->password = Hash::make($request->password);
        $login->save();
        return response()->json([
            'message' => 'Reqgistered'
        ]);
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
    public function store(StoreloginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateloginRequest $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login $login)
    {
        //
    }
}
