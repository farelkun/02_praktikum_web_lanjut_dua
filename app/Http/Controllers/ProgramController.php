<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir()
    {
        return '<a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a>';
    }

    public function magang()
    {
        return '<a href="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a>';
    }

    public function kunjungan_industri()
    {
        return '<a href="https://www.educastudio.com/program/kunjungan-industri">https://www.educastudio.com/program/kunjungan-industri</a>';
    }
}
