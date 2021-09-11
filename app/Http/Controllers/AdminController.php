<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view('admin.users', compact('data'));
    }

    public function delete($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function posts()
    {
        $data = post::all();
        return view('admin.posts', compact('data'));
    }

    public function upload(Request $request)
    {
        $data = new post;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('image', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back();

    }

    public function createimg()
    {

        return view('admin.createimg');
    }

    public function deleteimg($id)
    {
        $data = post::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateimg($id)
    {
        $data = post::find($id);
        return view('admin.updateimg', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = post::find($id);
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('image', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back();

    }
    public function products()
    {
        $datas = product::paginate(5);
        return view('admin.products', compact('datas'));
    }

    public function createproduct()
    {
        $categories = category::get();
        return view('admin.createproduct', compact('categories'));
    }
    public function uploadproduct(Request $request)
    {

        $data = new product;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product-image', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->category = $request->category;
        $data->content = $request->content;
        $data->save();
        return redirect()->back();

    }
    public function deleteproduct($id)
    {
        $data = product::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateproduct($id)
    {
        $data = product::find($id);
        $categories = category::get();
        return view('admin.updateproduct', compact('data', 'categories'));
    }

    public function updateview(Request $request, $id)
    {
        $data = product::find($id);

        if (isset($request->image)) {
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('product-image', $imagename);
            $data->image = $imagename;
        }
        $data->category = $request->category;
        $data->name = $request->name;
        $data->content = $request->content;
        $data->save();
        return redirect()->back();

    }

}