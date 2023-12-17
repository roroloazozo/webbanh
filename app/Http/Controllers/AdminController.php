<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function authLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function index(){
        return view('admin_login');
    }

    public function show_dashboard(){
        $this->authLogin();
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){
        $this->authLogin();
        $email = $request->email;
        $password = md5($request->password);

        $result = DB::table('tbl_admin')->where('email', $email)->orwhere('password', $password)->first();
        if($result){
            Session::put('username', $result->username);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Sai tai khoan hoac mat khau');
            return Redirect::to('/admin');
        }
    }

    public function logout(Request $request){
        $this->authLogin();
        Session::put('username', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }
}
