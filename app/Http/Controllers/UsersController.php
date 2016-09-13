<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view ('welcome');
    }


    /**
     Redirect to profile page
     */
        public function profile()
    {
        return view ('profile');
    }

    /**
     Redirect to contact page
     */
        public function contact()
    {
        return view ('contact');
    }
    
}
