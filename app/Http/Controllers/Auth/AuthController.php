<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    /**
     * view login page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginView(){
        return view('auth.login');
    }

    /**
     * login post
     * @param Request $request
     * @return array
     */
    public function login(Request $request){
        $this->validate($request ,[
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request['email'],'password' => $request['password']],false)){
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }

    /**
     * view register page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registerView(){
        return view('auth.register');
    }

    /**
     * register
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(Request $request){
        $this->validate($request , [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3'
        ]);

        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];

        if ($user->save()){
            return redirect('/login');
        }else{
            return redirect()->back();
        }
    }

    /**
     * logout
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
