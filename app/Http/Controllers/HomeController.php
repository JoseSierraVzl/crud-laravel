<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\UsersProfile;

class HomeController extends Controller
{
    public function home(): View
    {
        $usersData = UsersProfile::all();
        return view('pages.home', compact('usersData'));
    }
}
