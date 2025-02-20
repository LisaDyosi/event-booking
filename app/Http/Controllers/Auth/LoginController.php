<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function authenticated()
{
    if (Auth::user()->role === 'admin') {
        return redirect('/admin/dashboard'); // Redirect Admin to Admin Dashboard
    } elseif (Auth::user()->role === 'organizer') {
        return redirect('/organizer/dashboard'); // Redirect Organizer to Organizer Dashboard
    } else {
        return redirect('/dashboard'); // Redirect normal users to User Dashboard
    }
}
}
