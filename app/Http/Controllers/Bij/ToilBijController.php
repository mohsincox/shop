<?php

namespace App\Http\Controllers\Bij;

use App\Models\ToilBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class ToilBijController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $toilBijs = ToilBij::paginate(10);

        return view('bij.toil_bij.index', compact('toilBijs'));
    }

    public function create()
    {
        return view('bij.toil_bij.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $toilBij = ToilBij::create(['image' => $fileName,
                                  'name' => $request->name,
                                  'code' => $request->code,
                                  'quantity' => $request->quantity,
                                  'price' => $request->price,
                                  'description' => $request->description
                                 ]);

        flash()->message($toilBij->name . ' Successfully Created');

        return redirect('toil-bij-auth');
    }

    public function edit($id)
    {
        $toilBij = ToilBij::find($id);

        return view('bij.toil_bij.edit', compact('toilBij'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $toilBij = ToilBij::find($id);
        File::delete('uploads/' . $toilBij->image);
        $toilBij->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($toilBij->name . ' Successfully Updated');

        return redirect('toil-bij-auth');
    }

    public function destroy($id)
    {
        $toilBij = ToilBij::find($id);
        File::delete('uploads/' . $toilBij->image);

        ToilBij::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('toil-bij-auth');
    }
}
