<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = post::all();
        return view('index', compact('data'));
    }

    public function redirects()
    {
        $data = post::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.admin');

        } else {
            return view('index', compact('data'));

        }

    }
}
