<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    private function makeJson($status, $data = null, $msg = null)
    {
        //轉 JSON 時確保中⽂不會變成 Unicode
        return response()->json(['status' => $status, 'data' => $data, 'message' => $msg])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }
    public function index()
    {
        $data = post::all();
        return view('index', compact('data'));
    }

    public function about()
    {
        return view('about');
    }
    public function showlist($category_id)
    {
        $products = product::where('category', $category_id)->get();
        return view('product.category', compact('products'));
    }
    public function get_category(View $view)
    {
        $category = category::select('id', 'title')->get();
        $view->with('menu_category', $category);
    }

    // public function get_product_info(product $product)
    // {
    //     if (is_null($product)) {
    //         return $this->makeJson(0, null, '找不到商品');
    //     } else {
    //         return $this->makeJson(1, $product, null);
    //     }

    // }

    public function productdetail($product_id)
    {
        if (product::where('id', $product_id)->exists()) {
            $commodity = product::where('id', $product_id)->first();
            return view('product.productdetail', compact('commodity'));
        } else {
            return redirect('/')->with('status', "The links was broken");
        }

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