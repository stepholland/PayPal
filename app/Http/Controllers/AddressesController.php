<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Auth::check() )
            return view('create.index');
        return view('auth.login');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        if( Auth::check() )
            return view('edit.index');
        return view('auth.login');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Auth::check()){
            $address = Address::create([
                'gender'=>$request->input('gender'),
                'medschool'=>$request->input('medschool'),
                'gradyear'=>$request->input('gradyear'),
                'speciality'=>$request->input('speciality'),
                'add1'=>$request->input('add1'),
                'add2'=>$request->input('add2'),
                'city'=>$request->input('city'),
                'state'=>$request->input('state'),
                'zip'=>$request->input('zip'),
                'phone'=>$request->input('phone'),
                'user_id'=>Auth::user()->id
            ]);       
            if($address){
                $user = User::find(Auth()->user()->id);
                if($user){
                    $user->hasAddress = 1;
                    $user->save();
                }
                return redirect()->route('home')
                ->with('success' , 'Address added successfully');
            }
        }
        return back()->withInput()->with('errors', 'Error creating new address');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //save
        //redirect
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
