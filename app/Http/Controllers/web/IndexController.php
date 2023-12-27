<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function about()
    {
        return view('web.about');
    }

    public function contact()
    {
        return view('web.contact');
    }

     public function service1()
    {
        return view('web.service1');
    }

    public function service2()
    {
        return view('web.service2');
    }

    public function service3()
    {
        return view('web.service3');
    }

    public function service4()
    {
        return view('web.service4');
    }
}
