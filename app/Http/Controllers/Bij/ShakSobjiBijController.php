<?php

namespace App\Http\Controllers\Bij;

use App\Models\ShakSobjiBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ShakSobjiBijController extends Controller
{
    public function index()
    {
        return 'test';
    }

    public function create()
    {
        return view('bij.shak_sobji_bij.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        //$sossoBij = SassoBij::create($request->all());
        $shakSobjiBij = ShakSobjiBij::create(['image' => $fileName,
                                      'name' => $request->name,
                                      'code' => $request->code,
                                      'quantity' => $request->quantity,
                                      'price' => $request->price,
                                      'description' => $request->description
                                     ]);

        flash()->message($shakSobjiBij->name . ' Successfully Created');

        return redirect()->back();
    }
}
