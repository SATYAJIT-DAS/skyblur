<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    //
    public function login(Request $request){
        $data=$request->all();
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            if (Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])) {
                return redirect('admin/dashboard');
            }
            else{
                $request->session()->flash('error', 'Credential is not correct');
                return redirect()->back();
            }
        }
        return view('layouts.admin.login');
    }

    public function dashboard(){
        return view('layouts.admin.home');
    }

    public function settings(){
        return view('layouts.admin.settings');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

}
