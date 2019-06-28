<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Registration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('vendorboard');   
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::create($request->all());
          auth()->login($user);
          return redirect()->to('/userdashboard');
        
        //auth()->login($user);
        
     
    }
    
    public function vendorRegister(Request $request){
                        $this->validate(request(), [
                    'fullname' => 'required',
                    'email' => 'required|email',
                    'password' => 'required',
                    'phone' => 'required|integer',
                    'cardnumber' => 'required_if:mode,credit',
                    'expiry'=>'required|date',
                    'city' => 'required',
                   // 'country' => 'required',
                    'password' => 'required',
                    'ccv'=>'required|integer'
     
        ]);
               $user = User::create($request->all());
                auth()->login($user);
                return redirect()->to('/vendorboard');
    }
    
    
    public function vendorView(){
        return view('vendorRegistration');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
  /*  public function __construct()
    {
        $this->middleware('guest')->except('index');
    }
   */
}
