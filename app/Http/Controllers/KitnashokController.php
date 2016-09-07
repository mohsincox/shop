<?php

namespace App\Http\Controllers;

use App\Models\Kitnashok;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use File;

class KitnashokController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //return 'test';
        $kitnashoks = Kitnashok::paginate(2);

        return view('kitnashok.index', compact('kitnashoks'));
    }

    public function create()
    {
        return view('kitnashok.create');
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
        $kitnashok = Kitnashok::create(['image' => $fileName,
                                      'name' => $request->name,
                                      'code' => $request->code,
                                      'quantity' => $request->quantity,
                                      'price' => $request->price,
                                      'description' => $request->description
                                     ]);

        flash()->message($kitnashok->name . ' Successfully Created');

        return redirect('kitnashok-auth');
    }

    public function edit($id)
    {
        $kitnashok = Kitnashok::find($id);

        return view('kitnashok.edit', compact('kitnashok'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $kitnashok = Kitnashok::find($id);
        File::delete('uploads/' . $kitnashok->image);
        $kitnashok->update(['image' => $fileName,
                           'name' => $request->name,
                           'code' => $request->code,
                           'quantity' => $request->quantity,
                           'price' => $request->price,
                           'description' => $request->description
                          ]);

        flash()->message($kitnashok->name . ' Successfully Updated');

        return redirect('kitnashok-auth');
    }

    public function destroy($id)
    {
        $kitnashok = Kitnashok::find($id);
        File::delete('uploads/' . $kitnashok->image);

        Kitnashok::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('kitnashok-auth');
    }
}
