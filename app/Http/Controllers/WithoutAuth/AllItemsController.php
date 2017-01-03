<?php

namespace App\Http\Controllers\WithoutAuth;

use App\Models\Kitnashok;
use App\Models\SassoBij;
use App\Models\ShakSobjiBij;
use App\Models\Thikana;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AllItemsController extends Controller
{
    public function sassoBij()
    {
        $sassoBijs = SassoBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.sasso_bij', compact('sassoBijs', 'thikanas'));
    }

    public function shakSobjiBij()
    {
        $shakSobjiBijs = ShakSobjiBij::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.shak_sobji_bij', compact('shakSobjiBijs', 'thikanas'));
    }

    public function kitnashok()
    {
        $kitnashoks = Kitnashok::get();
        $thikanas = Thikana::take(1)->get();

        return view('without_auth.kitnashok', compact('kitnashoks', 'thikanas'));
    }
}
