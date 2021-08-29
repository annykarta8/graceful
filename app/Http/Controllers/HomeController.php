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

    public function about()
    {
        return view('about');
    }
    public function earrings()
    {
        return view('/product/earrings');
    }
    public function bracelet()
    {
        return view('product.bracelet');
    }
    public function rings()
    {
        return view('product.rings');
    }
    public function necklace()
    {
        return view('product.necklace');
    }
    public function hairaccessory()
    {
        return view('product.hairaccessory');
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