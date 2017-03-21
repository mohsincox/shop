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

use App\Models\Cosmetics;
use App\Models\Crockeries;
use App\Models\Electronics;
use App\Models\Fashion;
use App\Models\Furniture;
use App\Models\HostoShilpo;
use App\Models\LabEquipment;
use App\Models\ProyojonOnnanno;
use App\Models\SasthoProduct;
use App\Models\Telecom;

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

    public function furniture()
    {
        $furnitures = Furniture::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.proyojon.furniture', compact('furnitures', 'thikanas'));
    }

    public function fashion()
    {
        $fashions = Fashion::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.proyojon.fashion', compact('fashions', 'thikanas'));
    }

    public function crockeries()
    {
        $crockeries = Crockeries::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.proyojon.crockeries', compact('crockeries', 'thikanas'));
    }

    public function electronics()
    {
        $electronics = Electronics::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.proyojon.electronics', compact('electronics', 'thikanas'));
    }

    public function hostoShilpo()
    {
        $hostoShilpos = HostoShilpo::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.proyojon.hosto_shilpo', compact('hostoShilpos', 'thikanas'));
    }

    public function sasthoProduct()
    {
        $sasthoProducts = SasthoProduct::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.proyojon.sastho_product', compact('sasthoProducts', 'thikanas'));
    }

    public function cosmetics()
    {
        $cosmetics = Cosmetics::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.proyojon.cosmetics', compact('cosmetics', 'thikanas'));
    }

    public function telecom()
    {
        $telecoms = Telecom::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.proyojon.telecom', compact('telecoms', 'thikanas'));
    }

    public function labEquipment()
    {
        $labEquipments = LabEquipment::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.proyojon.lab_equipment', compact('labEquipments', 'thikanas'));
    }

    public function proyojonOnnanno()
    {
        $proyojonOnnannos = ProyojonOnnanno::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.proyojon.proyojon_onnanno', compact('proyojonOnnannos', 'thikanas'));
    }
}
