<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormalController extends Controller
{
    public function __construct()
    {
        $this->middleware('normal');
    }
    public function index()
    {
        return view('normal');
    }
}
