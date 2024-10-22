<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        // $users = User::all();
        // dd($user);
        return view('admin.dashboard', compact('user'));
    }
}
