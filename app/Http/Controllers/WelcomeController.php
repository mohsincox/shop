<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kitnashok;
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
        $kitnashoks = Kitnashok::take(6)->get();
        return view('welcome', compact('sassoBijs', 'shakSobjiBijs', 'kitnashoks'));
    }

    public function showToModelSassoBij(Request $request)
    {
        $sassoBij = SassoBij::find($request->id);

//        $shakSobjiBij = ShakSobjiBij::find($request->id);

        return view('show_to_model', compact('sassoBij'));
    }

    public function showToModelShakSobjiBij(Request $request)
    {
        $shakSobjiBij = ShakSobjiBij::find($request->id);

        return view('show_to_model', compact('shakSobjiBij'));
    }

    public function showToModelKitnashok(Request $request)
    {
        $kitnashok = Kitnashok::find($request->id);

        return view('show_to_model', compact('kitnashok'));
    }

    public function storeCustomer(Request $request)
    {
        //return $request->all();
        Customer::create($request->all());

        return redirect('/');
    }

    public function showCustomer()
    {
        $customers = Customer::orderBy('id', 'desc')->paginate(1);

        return view('customer.index', compact('customers'));
    }

    public function test()
    {
        return view('test');
    }
}
