<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
        
    public function index()
    {
        return[
            'NIS' => '3103119148',
            'Name' => 'Rafa alfarizi',
            'Gender' => 'Laki-laki',
            'Phone' => '6282313666691',
            'Class' => 'XII RPL 5',
        ];
    }
}