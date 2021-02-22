<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($param)
    {
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games/'. $param .'">https://www.educastudio.com/category/marbel-and-friends-kids-games/'. $param .'</a>';
    }

    public function about()
    {
        return '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
    }
}
