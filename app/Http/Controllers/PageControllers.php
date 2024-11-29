<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    public function showdata()
    {
        $data = [
            [
                
            ]
        ];

        return view("Pages/welcome");
    }
}