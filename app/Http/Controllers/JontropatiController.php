<?php

namespace App\Http\Controllers;

use App\Models\Jontropati;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use File;

class JontropatiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //return 'test';
        $jontropatis = Jontropati::paginate(2);

        return view('jontropati.index', compact('jontropatis'));
    }

    public function create()
    {
        return view('jontropati.create');
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
        $jontropati = Jontropati::create(['image' => $fileName,
                                        'name' => $request->name,
                                        'code' => $request->code,
                                        'quantity' => $request->quantity,
                                        'price' => $request->price,
                                        'description' => $request->description
                                       ]);

        flash()->message($jontropati->name . ' Successfully Created');

        return redirect('jontropati-auth');
    }

    public function edit($id)
    {
        $jontropati = Jontropati::find($id);

        return view('jontropati.edit', compact('jontropati'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $jontropati = Jontropati::find($id);
        File::delete('uploads/' . $jontropati->image);
        $jontropati->update(['image' => $fileName,
                            'name' => $request->name,
                            'code' => $request->code,
                            'quantity' => $request->quantity,
                            'price' => $request->price,
                            'description' => $request->description
                           ]);

        flash()->message($jontropati->name . ' Successfully Updated');

        return redirect('jontropati-auth');
    }

    public function destroy($id)
    {
        $jontropati = Jontropati::find($id);
        File::delete('uploads/' . $jontropati->image);

        Jontropati::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('jontropati-auth');
    }
}
