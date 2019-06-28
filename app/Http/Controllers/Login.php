<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use DB;
use Hash;
use Carbon;

class Login extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      
        return view('userdashboard');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
    ]);


    $remember_me = $request->has('remember_me') ? true : false; 


    if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me))
    { $user = User::where('email', $request->email)->first();
     auth()->login($user);
       if(Auth::user()->role=='user')
            return redirect('/userdashboard');
        elseif(Auth::user()->role=='vendor')
             return redirect('/vendorboard');
        else
            return redirect('/admin/admin');
       
    }else{
        return redirect()->back()->withErrors(['error'=>'your username or password are wrong.']);
    }
        
    }
    
   
    public function forgetpassword(){
        return view('forgetpassword');
    }
   
   public function sendPasswordResetToken(Request $request)
   {
       
        $user = User::where('email', $request->email)->first();
       
       if ( !$user ) return redirect()->back()->withErrors(['error' => '404']);

        $token = str_random(60);
        //create a new token to be sent to the user. 
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token, //change 60 to any length you want
            'created_at' => \Carbon\Carbon::now()
        ]);

        /*$tokenData = DB::table('password_resets')
        ->where('email', $request->email)->first();

       $token = $tokenData->token;
       $email = $tokenData->email;  
    */
        
        \Mail::send('emails.reset_password', ['token' => $token, 'user' => $user], function($message) use($user) {
           $message->to($user->email)->subject('Reset Password'); 
        });

    
    
    
    
   }
    
    public function showPasswordResetForm($token)
 {
     $tokenData = DB::table('password_resets')
     ->where('token', $token)->first();

     if ( !$tokenData ) return redirect()->to('login'); 
     return view('resetpassword',['token' => $token]);
 }
    
   
    public function resetPassword(Request $request, $token)
    {
     
//        dd($request->password);
     $password = $request->password;
     $tokenData = DB::table('password_resets')
     ->where('token', $token)->first();
//    dd($tokenData->email);    
     $user = User::where('email', $tokenData->email)->first();
//     dd($user);
        if ( !$user ) return redirect()->to('login'); 
    
//        $user->update(['password' => $password]);
     $user->password = $password;
     $user->save();

    


//    DB::table('password_resets')->where('email', $user->email)->delete();

   return redirect()->to('login');
 }
    
    public function showAdmin(){
        
        
         
            return view('admin/admin');
        
    }
    
    
    
    
        

   
    public function show($id)
    {
        //
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
    public function destroy()
    {
           auth()->logout();
       
        return redirect()->to('/login');
    }
    
    /*public function __construct()
    { 
        $this->middleware('guest')->except(['destroy']);
    }*/
   
}
