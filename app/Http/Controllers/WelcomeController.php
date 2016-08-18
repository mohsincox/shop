<?php

namespace App\Http\Controllers;

use App\Models\SassoBij;
use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index()
    {
        $sossoBijs = SassoBij::get();
        return view('welcome', compact('sossoBijs'));
    }
}
