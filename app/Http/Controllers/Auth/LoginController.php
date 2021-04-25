<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Category;
use Illuminate\Http\Request;  

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getUser(){
        return $request->user();
    }

    public function home() {
        return redirect('login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password')))
            $request->session()->regenerate();
        else
            return redirect('/login');

        return redirect('/login')->with(['message'=>'Account Successfully Created.']);
    }
    
    public function show()
    {
        $categories = Category::all()->sortBy("category_id");
        return view('auth.login')->with('categories', $categories);
    }
}
