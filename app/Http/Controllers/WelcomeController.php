<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kitnashok;
use App\Models\Jontropati;
use App\Models\Opokoron;
use App\Models\Postika;
use App\Models\SassoBij;
use App\Models\ShakSobjiBij;
use App\Models\FulBij;
use App\Models\FalojoBij;
use App\Models\OsodhiBij;
use App\Models\BonojoBij;
use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index()
    {
        $sassoBijs = SassoBij::take(1)->get();
        $shakSobjiBijs = ShakSobjiBij::take(3)->get();
        $fulBijs = FulBij::take(1)->get();
        $falojoBijs = FalojoBIj::take(1)->get();
        $osodhiBijs = OsodhiBij::take(1)->get();
        $bonojoBijs = BonojoBij::take(1)->get();
        $kitnashoks = Kitnashok::take(6)->get();
        $jontropatis = Jontropati::take(6)->get();
        $opokorons = Opokoron::take(6)->get();
        $postikas = Postika::take(6)->get();
        return view('welcome', compact('sassoBijs', 'shakSobjiBijs', 'fulBijs', 'falojoBijs', 'osodhiBijs', 'bonojoBijs', 'kitnashoks', 'jontropatis', 'opokorons', 'postikas'));
    }

    public function showToModelSassoBij(Request $request)
    {
        $sassoBij = SassoBij::find($request->id);

        return view('show_to_model', compact('sassoBij'));
    }

    public function showToModelShakSobjiBij(Request $request)
    {
        $shakSobjiBij = ShakSobjiBij::find($request->id);

        return view('show_to_model', compact('shakSobjiBij'));
    }

     public function showToModelFulBij(Request $request)
    {
        $fulBij = FulBij::find($request->id);

        return view('show_to_model', compact('fulBij'));
    }

     public function showToModelFalojoBij(Request $request)
    {
        $falojoBij = FalojoBIj::find($request->id);

        return view('show_to_model', compact('falojoBij'));
    }

     public function showToModelOsodhiBij(Request $request)
    {
        $osodhiBij = OsodhiBij::find($request->id);

        return view('show_to_model', compact('osodhiBij'));
    }

     public function showToModelBonojoBij(Request $request)
    {
        $bonojoBij = BonojoBij::find($request->id);

        return view('show_to_model', compact('bonojoBij'));
    }

    public function showToModelKitnashok(Request $request)
    {
        $kitnashok = Kitnashok::find($request->id);

        return view('show_to_model', compact('kitnashok'));
    }

    public function showToModelJontropati(Request $request)
    {
        $jontropati = Jontropati::find($request->id);

        return view('show_to_model', compact('jontropati'));
    }

    public function showToModelOpokoron(Request $request)
    {
        $opokoron = Opokoron::find($request->id);

        return view('show_to_model', compact('opokoron'));
    }

    public function showToModelPostika(Request $request)
    {
        $postika = Postika::find($request->id);

        return view('show_to_model', compact('postika'));
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
