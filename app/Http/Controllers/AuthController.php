<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests\RegisterRequest;
use App\User;
use App\Mail\AccountConfirmation;
use Carbon\Carbon;

class AuthController extends Controller
{


    public function getRegisterForm(){
        return view('register');
    }

    public function register(RegisterRequest $request) {
        // validiraj request
        $data = $request->validated();
        //kreiraj usera
        $user = User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password'])
        ]);

      Mail::to($user)->send(new AccountConfirmation($user));
     
              //redirektuj negde

        return redirect('/teams');
    }

    public function getLoginForm() {
        return view('login');
      }

      public function login(Request $request) {
        $credentials = [
          'email' => $request->get('email'),
          'password' => $request->get('password'),
          
        ];

       /* User::where(('email', $credentials['email'])->first()->email_verified_at == null) {
          return view('not-verified');
        }
        */
        $user = User::where('email', $credentials['email'])->first();
        if ($user->email_verified_at == null) {
          return view('not-verified');
        }
        if (auth()->attempt($credentials)) {
          return redirect('/teams');
        }
    
        return view('login', ['loginFailed' => true]);
      }
    
      public function logout() {
        info(auth()->user());

        auth()->logout();

        info('asdf logout');
        return redirect('/login');
      }

      public function verifyUser($id) {
        $user = User::findOrFail($id);

        $user->email_verified_at = new Carbon;
        $user->save();

        return redirect('/teams');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function destroy($id)
    {
        //
    }
}
