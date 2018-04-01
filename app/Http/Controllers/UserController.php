<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if(Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
        return back()->withInput()->withErrors(['ელ.ფოსტა ან პაროლი არასწორია']);
    }

    public function register() {
        return view('auth.register');
    }

    public function postRegister(Request $request) {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        try{
        User::create($data);    
        return redirect('/auth/login');
    }catch(\Exeption $e)  {
        return back()->withErrors(['რეგისტრაცია შეუძლებელია'])->withInput();
    }
        
        
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
