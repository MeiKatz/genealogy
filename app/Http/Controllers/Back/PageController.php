<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dependencies(Request $request)
    {
        return view('back.dependencies');
    }

    public function persons(Request $request)
    {
        return view('back.persons');
    }

    public function session(Request $request)
    {
        return view('back.session');
    }

    public function teams(Request $request)
    {
        return view('back.teams');
    }

    public function users(Request $request)
    {
        return view('back.users');
    }
}
