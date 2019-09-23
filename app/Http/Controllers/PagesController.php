<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to HomePage!';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'Welcome to About Us!';
        return view('pages.about')->with('title', $title);
    }

    public function contact() {
        $title = 'Welcome to Contact US!';
        return view('pages.contact')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO'],
            'name' => 'Bryan'
        );
        $title = 'Welcome to Services!';
        return view('pages.services')->with($data);
    }

    public function post() {
        $title = 'Welcome to Post!';
        return view('posts.index')->with('title', $title);
    }
}
