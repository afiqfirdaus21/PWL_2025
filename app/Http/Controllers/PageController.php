<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Muhammad Afiq Firdaus dan 2341760189';
    }

    public function articles($id){
        return 'Halaman Artikel dengann Id' .$id;
    }
}
