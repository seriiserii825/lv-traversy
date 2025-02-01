<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerView()
    {
        return view('auth.register');
    }
    public function registerStore() {}
        public function loginView() {
        return view('auth.login');
        }
    public function loginStore() {}
}
