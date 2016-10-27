<?php

namespace App\Http\Controllers\Bij;

use App\Models\FulBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class FulBijController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $fulBijs = FulBij::paginate(10);

        return view('bij.ful_bij.index', compact('fulBijs'));
    }

    public function create()
    {
        return view('bij.ful_bij.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $fulBij = FulBij::create(['image' => $fileName,
                                    'name' => $request->name,
                                    'code' => $request->code,
                                    'quantity' => $request->quantity,
                                    'price' => $request->price,
                                    'description' => $request->description
                                   ]);

        flash()->message($fulBij->name . ' Successfully Created');

        return redirect('ful-bij-auth');
    }

    public function edit($id)
    {
        $fulBij = FulBij::find($id);

        return view('bij.ful_bij.edit', compact('fulBij'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $fulBij = FulBij::find($id);
        File::delete('uploads/' . $fulBij->image);
        $fulBij->update(['image' => $fileName,
                          'name' => $request->name,
                          'code' => $request->code,
                          'quantity' => $request->quantity,
                          'price' => $request->price,
                          'description' => $request->description
                         ]);

        flash()->message($fulBij->name . ' Successfully Updated');

        return redirect('ful-bij-auth');
    }

    public function destroy($id)
    {
        $fulBij = FulBij::find($id);
        File::delete('uploads/' . $fulBij->image);

        FulBij::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('ful-bij-auth');
    }
}
