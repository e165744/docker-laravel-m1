<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function __construct()
    // {
    //    $this->middleware('auth'); //authミドルウェアを使い、特定のルートやアクションを、認証済みユーザーだけがアクセスできるよう保護する
    // }
    public function getSignup(){
        return View('user.signup');
    }
    public function signupPost(Request $request){
        // return response(User::all());
          // バリデーション
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
        ]);

        // dd($request->password);

        $user = new User();
        $user->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        // dd($request);
        return View('user.profile');
    }

    public function getSignin(){
        return View('user.signin');
    }

    public function signinPost(Request $request){
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required|min:4',
        ]);
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return view('user.profile');
            }
            return redirect()->back();
    }

    public function getProfile(){
        return view('user.profile');
        }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('signin');
        }
}
