<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesControler extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel 5.4';
        // return view('pages.index', compact('title')); prvi nacin
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
