<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class LoyaltyController extends Controller
{
    public function index()
    {
        $title='Admin | Loyalty Point';
        $user=User::where('is_admin',null)->get();

        return view('Admin.loyalty',compact('title','user'));
    }//
}
