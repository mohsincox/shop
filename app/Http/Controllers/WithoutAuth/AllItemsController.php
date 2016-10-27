<?php

namespace App\Http\Controllers\WithoutAuth;

use App\Models\Kitnashok;
use App\Models\SassoBij;
use App\Models\ShakSobjiBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AllItemsController extends Controller
{
    public function sassoBij()
    {
        $sassoBijs = SassoBij::get();

        return view('without_auth.sasso_bij', compact('sassoBijs'));
    }

    public function shakSobjiBij()
    {
        $shakSobjiBijs = ShakSobjiBij::get();

        return view('without_auth.shak_sobji_bij', compact('shakSobjiBijs'));
    }

    public function kitnashok()
    {
        $kitnashoks = Kitnashok::get();

        return view('without_auth.kitnashok', compact('kitnashoks'));
    }
}
