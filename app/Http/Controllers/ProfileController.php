<?php

namespace App\Http\Controllers;

use index;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profile-index');
    }
}
