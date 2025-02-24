<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserProfileController extends BaseController
{
    public function show()
    {
        echo "Nama Saya Muhammad Afiq Firdaus";
        echo "SIB 2B";
    }
}