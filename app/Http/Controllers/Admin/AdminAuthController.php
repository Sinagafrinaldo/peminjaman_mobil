<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
class AdminAuthController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }


    public function home (){
       
 
        return view('welcome' ); 
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admin')->user();
            if($user->is_admin == 1){
                return redirect(url('admin'));
            }
        }else {
            return back()->with('error','Whoops! invalid email and password.');
        }
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('adminLogin'));
    }

    // public function logoutAdmin(Request $request)
    // {
    //     Auth::guard("admin")->logout();
    //     $request->session()->flush();
    //     return redirect()->route("adminLogin");
    // }

    
}