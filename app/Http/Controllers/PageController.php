<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return '2041723016 - Farel Putra Hidayat';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan Id '. $id;
    }
}
