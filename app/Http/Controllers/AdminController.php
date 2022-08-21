<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Home;
use App\Models\Admin;
use App\Models\Customer;
use Hash;
use Session;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = Product::get();
        return view('admin.dashboard', compact('data'));
    }

    public function getProduct()
    {
        $data = Product::get();
        return view('list', compact('data'));       
    }

    public function Customers()
    {
        $data = Customer::get();
        return view('admin.dashboard', compact('data'));
    }
    
    public function register()
    {
        $data = Product::get();
        return view('admin.register', compact('data'));
    }

    public function login()
    {
        $data = Product::get();
        return view('admin.login', compact('data'));
    }

    public function registerProcess(Request $request)
    {
        $admin = new Admin();
        $admin->adminID = $request->username;
        $admin->adminPass = Hash::make($request->password);
        $admin->adminFullname = $request->fullname;
        $admin->adminEmail = $request->email;
        $admin->adminPhone = $request->phone;
        $res = $admin->save();
        if($res) {
            return back()->with('success', 'You have registered successfully!');
        } else {
            return back()->with('fail', 'Oh No! Something wrong!!!');
        }
    }

    public function loginProcess(Request $request)
    {
        $admin = Admin::where('adminID', '=', $request->username)->first();
        if($admin) {
            if(Hash::check($request->password, $admin->adminPass)) {
                $request->session()->put('loginID', $admin->adminID);
                return redirect('products');
            } else {
                return back()->with('fail', 'Password not matches!!!');
            } 
        } else {
            return back()->with('fail', 'This email does not registered!!!');
        }
    }

    public function logout()
    {
        if(Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('home');
        }
    }
    public function loginAdmin()
    {
        $admin = Admin::where('adminID', '=', $request->username)->first();
        if($admin) {
            if(Hash::check($request->password, $admin->adminPass)) {
                $request->session()->put('loginID', $admin->adminID);
                return redirect('login');
            } else {
                return back()->with('fail', 'Password not matches!!!');
            } 
        } else {
            return back()->with('fail', 'This email does not registered!!!');
        }
    }
}
