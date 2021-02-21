<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "selamat datang";
    }

    public function about()
    {
        echo "Abdur Rozak Junaidi - 1941720094";
    }

    public function articles()
    {
        return "Halaman artikel dengan id ";
    }
}
