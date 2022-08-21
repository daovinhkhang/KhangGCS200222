<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Hash;
use Session;

class CustomerController extends Controller
{
    public function register()
    {
        return view('legoshop.register');
    }

    public function login()
    {
        return view('legoshop.login');
    }

    public function registerProcess(Request $request)
    {
        $customer = new Customer();
        $customer->customerID = $request->username;
        $customer->customerPass = Hash::make($request->password);
        $customer->customerFullname = $request->fullname;
        $customer->customerEmail = $request->email;
        $customer->customerPhone = $request->phone;
        $res = $customer->save();
        if($res) {
            return back()->with('success', 'You have registered successfully!');
        } else {
            return back()->with('fail', 'Oh No! Something wrong!!!');
        }
    }

    public function loginProcess(Request $request)
    {
        $customer = Customer::where('customerID', '=', $request->username)->first();
        if($customer) {
            if(Hash::check($request->password, $customer->customerPass)) {
                $request->session()->put('loginID', $customer->customerID);
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
        $admin = Customer::where('customerID', '=', $request->username)->first();
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
