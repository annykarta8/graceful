<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view('admin.users', compact('data'));
    }
}