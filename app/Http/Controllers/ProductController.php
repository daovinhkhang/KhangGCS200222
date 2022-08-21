<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producer;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::get();
        return view('list', compact('data'));
    }

    public function add()
    {
        $producers = Producer::get();
        return view('add', compact('producers'));
    }

    public function save(Request $request)
    {
        $product = new product();
        $product->productID = $request->id;
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->productDetails = $request->details;
        $product->productImage1 = $request->image1;
        $product->producerID = $request->producer;
        $product->save();

        return redirect()->back()->with('success', 'Product Added Successfully');
    }

    public function edit($id)
    {
        $producers = Producer::get();
        $data = Product::where('productID', '=', $id)->first();
        return view('edit', compact('data'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        Product::where('productID', '=', $id)->update([
            'productName'=>$request->name,
            'productPrice'=>$request->price,
            'productDetails'=>$request->details,
            'productImage1'=>$request->image1,
            'producerID'=>$request->producer
        ]);
        $product = new product();
        $product->productID = $request->id;
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->productDetails = $request->details;
        $product->productImage1 = $request->image1;
        $product->producerID = $request->producer;
        $product->update();

        return redirect()->back()->with('success', 'Product Updated Successfully');
    }

    public function delete($id)
    {
        Product :: where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product delete Successfully');
    }
}
