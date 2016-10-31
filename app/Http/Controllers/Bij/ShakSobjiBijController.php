<?php

namespace App\Http\Controllers\Bij;

use App\Models\ShakSobjiBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class ShakSobjiBijController extends Controller
{
    public function index()
    {
        $shakSobjiBijs = ShakSobjiBij::paginate(10);

        return view('bij.shak_sobji_bij.index', compact('shakSobjiBijs'));
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

        return redirect('shak-sobji-bij-auth');
    }

    public function edit($id)
    {
        $shakSobjiBij = ShakSobjiBij::find($id);

        return view('bij.shak_sobji_bij.edit', compact('shakSobjiBij'));
    }

    public function update(Request $request, $id)
    {
            if (Input::file('image')->isValid()) {
                $destinationPath = 'uploads';
                $extension = Input::file('image')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                Input::file('image')->move($destinationPath, $fileName);
            }


        $shakSobjiBij = ShakSobjiBij::find($id);
        File::delete('uploads/' . $shakSobjiBij->image);
        $shakSobjiBij->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($shakSobjiBij->name . ' Successfully Updated');

        return redirect('shak-sobji-bij-auth');
    }

    public function destroy($id)
    {
        $shakSobjiBij = ShakSobjiBij::find($id);
        File::delete('uploads/' . $shakSobjiBij->image);

        ShakSobjiBij::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('shak-sobji-bij-auth');
    }
}
