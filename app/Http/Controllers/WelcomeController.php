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
        $sassoBijs = SassoBij::take(1)->get();
        $shakSobjiBijs = ShakSobjiBij::take(1)->get();
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

    public function test()
    {
        return view('test');
    }
}
