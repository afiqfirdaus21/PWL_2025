<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return "Nama: Muhammad Afiq Firdaus /  NIM: 2341760189 (Menggunakan AboutController.php)";
    }
}
