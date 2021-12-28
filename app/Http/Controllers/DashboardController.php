<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DashboardController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    function index(){
      return view('index');
    }

    function admin_index(){
      $user=User::all();
      return view('Dashboard.admin_index',compact('user'));
    }

    function custom_login(){
      return view('Dashboard.custom_login.login');
    }

    function custom_register(){
      return view('Dashboard.custom_login.register');
    }

    function add_hotel(){
      return view('Dashboard.add_hotel');
    }
}
