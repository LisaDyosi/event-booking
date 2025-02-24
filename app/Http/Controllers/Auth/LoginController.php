<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard'); // Admin dashboard
        } elseif ($user->role === 'organizer') {
            return redirect()->route('organizer.dashboard'); // Organizer dashboard
        } else {
            return redirect()->route('dashboard'); // Default user dashboard
        }
    }
}
