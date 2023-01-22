<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/jobs');
        }
        return redirect('/')->with('errorMessage', 'Encorrect Name Or Password')->with('className', 'danger');
    }
    public function user_auth_check()
    {
        if (Auth::check()) {
            $allPosts = Post::all();
            $userId = Auth::user()->id;
            $userPosts = Post::all()->where('userId', '=', $userId);
            return view('jobs', compact('userPosts', 'allPosts'));
        } else {
            return redirect('/')->with('errorMessage', '! Forbidden error Please login first')->with('className', 'danger');
        }
    }
}