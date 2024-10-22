<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        return view('vendor.dashboard', compact('user'));
    }
}
