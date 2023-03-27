<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $text = '';
        $user_name = '';
        $users = new User();
        if (Auth::user()) {
            $text = 'Logout';
            $user_name = Auth::user()->name;
        } else {
            $text = "Login";
        }
        $users = DB::table('users')->get();
        $blogs = blog::all();
        return view('welcome', ['text' => $text, "blogs" => $blogs, "user" => $user_name, "users" => $users]);
    }
}