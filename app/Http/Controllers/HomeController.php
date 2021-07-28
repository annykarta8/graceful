<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function redirects()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.admin');

        } else {
            return view('index');

        }

    }
}