<?php

namespace App\Http\Controllers\Bij;

use App\Models\BonojoBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class BonojoBijController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bonojoBijs = BonojoBij::paginate(10);

        return view('bij.bonojo_bij.index', compact('bonojoBijs'));
    }

    public function create()
    {
        return view('bij.bonojo_bij.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $bonojoBij = BonojoBij::create(['image' => $fileName,
                                  'name' => $request->name,
                                  'code' => $request->code,
                                  'quantity' => $request->quantity,
                                  'price' => $request->price,
                                  'description' => $request->description
                                 ]);

        flash()->message($bonojoBij->name . ' Successfully Created');

        return redirect('bonojo-bij-auth');
    }

    public function edit($id)
    {
        $bonojoBij = BonojoBij::find($id);

        return view('bij.bonojo_bij.edit', compact('bonojoBij'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $bonojoBij = BonojoBij::find($id);
        File::delete('uploads/' . $bonojoBij->image);
        $bonojoBij->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($bonojoBij->name . ' Successfully Updated');

        return redirect('bonojo-bij-auth');
    }

    public function destroy($id)
    {
        $bonojoBij = BonojoBij::find($id);
        File::delete('uploads/' . $bonojoBij->image);

        BonojoBij::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('bonojo-bij-auth');
    }
}
