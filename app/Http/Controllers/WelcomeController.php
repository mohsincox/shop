<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\SassoBij;
use App\Models\ShakSobjiBij;
use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index()
    {
        $sassoBijs = SassoBij::get();
        $shakSobjiBijs = ShakSobjiBij::get();
        return view('welcome', compact('sassoBijs', 'shakSobjiBijs'));
    }

    public function showToModel(Request $request)
    {
        $sassoBij = SassoBij::find($request->id);

        $shakSobjiBij = ShakSobjiBij::find($request->id);

        return view('show_to_model', compact('sassoBij', 'shakSobjiBij'));
    }

    public function storeCustomer(Request $request)
    {
        //return $request->all();
        Customer::create($request->all());
    }
}
