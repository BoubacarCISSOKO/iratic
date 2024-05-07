<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admindashbord()
    {
        return view('admin.adminPage');
    }

    public function contact(){
        return view('contact');
    }


    public function cotisation_index()
    {
       
        return view('cotisation');
    }

    public function detail_article()
    {
       
        return view('detailArticle');
    }

}
