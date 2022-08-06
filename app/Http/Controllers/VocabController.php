<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VocabController extends Controller
{
    //
    function findWord (Request $request, $search) {
        return view('kamus', [
            
        ]);
    }
}
