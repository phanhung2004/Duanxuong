<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        // Lấy tất cả sản phẩm từ cơ sở dữ liệu
        $products = Product::all();

        // Truyền dữ liệu vào view
        return view('home', ['products' => $products]);
    }
    public function shop(){
        $products = Product::all();

        // Truyền dữ liệu vào view
        return view('shop', ['products' => $products]);
    }
    public function showByCategory($categoryId){

        $category = Category::findOrFail($categoryId);
        $products = Product::where('category_id', $categoryId)->get();
        return view('shop', ['category' => $category, 'products' => $products]);
    }
    public function shopDetail($id){

        $product = Product::with(['variants', 'category'])->find($id);

            if (!$product) {
                return redirect()->route('clientShop')->with('error', 'Sản phẩm không tồn tại');
            }

            $relatedProducts = Product::where('category_id', $id)
            ->where('id', '!=', $id)
            ->get();

            $colors = Color::all();
            $sizes = Size::all();

            return view('shopDetail', ['product' => $product, 'colors' => $colors, 'sizes' => $sizes, 'relatedProducts' => $relatedProducts]);

    }
    public function shoppingCart(){
        return view('shoppingCart');
    }
    public function blog(){
        return view('blog');
    }
    public function checkout(){
        return view('checkout');
    }
}
