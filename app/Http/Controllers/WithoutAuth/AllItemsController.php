<?php

namespace App\Http\Controllers\WithoutAuth;

use App\Models\Kitnashok;

use App\Models\ShakSobjiBij;
use App\Models\MoslaBij;
use App\Models\FulBij;
use App\Models\FalojoBij;
use App\Models\TontoBij;
use App\Models\ToilBij;
use App\Models\DanaBij;
use App\Models\SassoBij;
use App\Models\OsodhiBij;
use App\Models\BonojoBij;

use App\Models\GobadiPoshorKhaddo;
use App\Models\HasMorgirKhaddo;
use App\Models\MacherKhaddo;
use App\Models\PoshoPakhirKhaddo;
use App\Models\KrishiKhaddo;

use App\Models\Thikana;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AllItemsController extends Controller
{
    public function shakSobjiBij()
    {
        $shakSobjiBijs = ShakSobjiBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.shak_sobji_bij', compact('shakSobjiBijs', 'thikanas'));
    }

    public function moslaBij()
    {
        $moslaBijs = MoslaBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.mosla_bij', compact('moslaBijs', 'thikanas'));
    }

    public function fulBij()
    {
        $fulBijs = FulBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.ful_bij', compact('fulBijs', 'thikanas'));
    }

    public function falojoBij()
    {
        $falojoBijs = FalojoBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.falojo_bij', compact('falojoBijs', 'thikanas'));
    }

    public function tontoBij()
    {
        $tontoBijs = TontoBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.tonto_bij', compact('tontoBijs', 'thikanas'));
    }

    public function toilBij()
    {
        $toilBijs = ToilBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.toil_bij', compact('toilBijs', 'thikanas'));
    }

    public function danaBij()
    {
        $danaBijs = DanaBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.dana_bij', compact('danaBijs', 'thikanas'));
    }

    public function sassoBij()
    {
        $sassoBijs = SassoBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.sasso_bij', compact('sassoBijs', 'thikanas'));
    }

    public function osodhiBij()
    {
        $osodhiBijs = OsodhiBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.osodhi_bij', compact('osodhiBijs', 'thikanas'));
    }

    public function bonojoBij()
    {
        $bonojoBijs = BonojoBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.bonojo_bij', compact('bonojoBijs', 'thikanas'));
    }

    public function kitnashok()
    {
        $kitnashoks = Kitnashok::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.kitnashok', compact('kitnashoks', 'thikanas'));
    }

    public function gobadiPoshorKhaddo()
    {
        $gobadiPoshorKhaddos = GobadiPoshorKhaddo::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.khaddo.gobadi_poshor_khaddo', compact('gobadiPoshorKhaddos', 'thikanas'));
    }

    public function hasMorgirKhaddo()
    {
        $hasMorgirKhaddos = HasMorgirKhaddo::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.khaddo.has_morgir_khaddo', compact('hasMorgirKhaddos', 'thikanas'));
    }

    public function macherKhaddo()
    {
        $macherKhaddos = MacherKhaddo::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.khaddo.macher_khaddo', compact('macherKhaddos', 'thikanas'));
    }

    public function poshoPakhirKhaddo()
    {
        $poshoPakhirKhaddos = PoshoPakhirKhaddo::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.khaddo.posho_pakhir_khaddo', compact('poshoPakhirKhaddos', 'thikanas'));
    }

    public function krishiKhaddo()
    {
        $krishiKhaddos = KrishiKhaddo::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.khaddo.krishi_khaddo', compact('krishiKhaddos', 'thikanas'));
    }
}
