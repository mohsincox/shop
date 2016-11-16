<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kitnashok;
use App\Models\Jontropati;
use App\Models\Marquee;
use App\Models\Mobile;
use App\Models\Opokoron;
use App\Models\Postika;

use App\Models\SassoBij;
use App\Models\ShakSobjiBij;
use App\Models\MoslaBij;
use App\Models\FulBij;
use App\Models\FalojoBij;
use App\Models\Thikana;
use App\Models\TontoBij;
use App\Models\ToilBij;
use App\Models\DanaBij;
use App\Models\OsodhiBij;
use App\Models\BonojoBij;

use App\Models\GobadiPoshorKhaddo;
use App\Models\HasMorgirKhaddo;
use App\Models\MacherKhaddo;
use App\Models\PoshoPakhirKhaddo;
use App\Models\KrishiKhaddo;

use App\Models\GobadiPoshorOsodh;
use App\Models\HasMorgirOsodh;
use App\Models\MotsoOsodh;
use App\Models\PoshoPakhirOsodh;

use App\Models\Ful;
use App\Models\Fal;
use App\Models\Osodhi;
use App\Models\Bonoj;
use App\Models\Kaktas;

use App\Models\OrganicVegetables;
use App\Models\OrganicFruits;
use App\Models\OrganicFarming;
use App\Models\BioPesticidesAndTraps;

use App\Models\SliderOne;
use App\Models\SliderTwo;
use App\Models\SliderThree;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index()
    {
        $shakSobjiBijs = ShakSobjiBij::take(4)->get();
        $moslaBijs = MoslaBij::take(3)->get();
        $fulBijs = FulBij::take(3)->get();
        $falojoBijs = FalojoBIj::take(1)->get();
        $tontoBijs = TontoBij::take(1)->get();
        $toilBijs = ToilBij::take(2)->get();
        $danaBijs = DanaBij::take(1)->get();
        $sassoBijs = SassoBij::take(1)->get();
        $osodhiBijs = OsodhiBij::take(1)->get();
        $bonojoBijs = BonojoBij::take(1)->get();

        $gobadiPoshorKhaddos = GobadiPoshorKhaddo::take(2)->get();
        $hasMorgirKhaddos = HasMorgirKhaddo::take(3)->get();
        $macherKhaddos = MacherKhaddo::take(2)->get();
        $poshoPakhirKhaddos = PoshoPakhirKhaddo::take(3)->get();
        $krishiKhaddos = KrishiKhaddo::take(2)->get();

        $gobadiPoshorOsodhs = GobadiPoshorOsodh::take(1)->get();
        $hasMorgirOsodhs = HasMorgirOsodh::take(2)->get();
        $motsoOsodhs = MotsoOsodh::take(1)->get();
        $poshoPakhirOsodhs = PoshoPakhirOsodh::take(2)->get();

        $fuls = Ful::take(3)->get();
        $fals = Fal::take(3)->get();
        $osodhis = Osodhi::take(2)->get();
        $bonojs = Bonoj::take(1)->get();
        $kaktas = Kaktas::take(3)->get();

        $kitnashoks = Kitnashok::take(6)->get();
        $jontropatis = Jontropati::take(12)->get();
        $opokorons = Opokoron::take(12)->get();
        $postikas = Postika::take(6)->get();

        $marquees = Marquee::take(15)->get();
        $mobiles = Mobile::take(3)->get();

        $organicVegetables = OrganicVegetables::take(4)->get();
        $organicFruits = OrganicFruits::take(4)->get();
        $traps = BioPesticidesAndTraps::take(2)->get();
        $organicFarmings = OrganicFarming::take(2)->get();

        $sliderOne = SliderOne::first();
        $sliderTwo = SliderTwo::first();
        $sliderThree = SliderThree::first();

        $thikanas = Thikana::take(1)->get();

        return view('welcome', compact('sassoBijs', 'shakSobjiBijs', 'fulBijs', 'falojoBijs', 'osodhiBijs', 'bonojoBijs', 'moslaBijs', 'tontoBijs', 'toilBijs', 'danaBijs', 'kitnashoks', 'jontropatis', 'opokorons', 'postikas', 'gobadiPoshorKhaddos', 'hasMorgirKhaddos', 'macherKhaddos', 'poshoPakhirKhaddos', 'krishiKhaddos', 'gobadiPoshorOsodhs', 'hasMorgirOsodhs', 'motsoOsodhs', 'poshoPakhirOsodhs', 'fuls', 'fals', 'osodhis', 'bonojs', 'kaktas', 'organicVegetables', 'organicFruits', 'traps', 'organicFarmings', 'sliderOne', 'sliderTwo', 'sliderThree', 'marquees', 'mobiles', 'thikanas'));
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
        $customers = Customer::orderBy('id', 'desc')->paginate(10);

        return view('customer.index', compact('customers'));
    }

    public function test()
    {
        return view('test');
    }
}
