<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Store;

class StoreController extends Controller
{
    public function index()
    {
        $title='Admin | Manager Store';
        $user=User::where('is_admin',null)->get();

        return view('Admin.mystore',compact('title','user'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
