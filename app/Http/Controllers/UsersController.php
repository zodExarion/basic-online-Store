<?php

namespace App\Http\Controllers;

use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\StoreusersRequest;
use App\Http\Requests\UpdateloginRequest;
use App\Http\Requests\UpdateusersRequest;

class UsersController extends Controller
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


        $login = new User;
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
    public function store(StoreusersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateusersRequest $request, User $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users)
    {
        //
    }
}
