<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      return view('welcome');
    }

    public function home()
    {
      return view('registration');
    }
    public function reg()
    {
      return view('asholreg');
    }
}
