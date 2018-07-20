<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = \App\User::latest()->limit(5)->get(); 
        $teams = \App\Team::latest()->limit(5)->get(); 
        $timeentries = \App\TimeEntry::latest()->limit(5)->get(); 
        $contentpages = \App\ContentPage::latest()->limit(5)->get(); 

        return view('home', compact( 'teams', 'users', 'timeentries', 'contentpages' ));
    }
}
