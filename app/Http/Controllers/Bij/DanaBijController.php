<?php

namespace App\Http\Controllers\Bij;

use App\Models\DanaBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class DanaBijController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $danaBijs = DanaBij::paginate(10);

        return view('bij.dana_bij.index', compact('danaBijs'));
    }

    public function create()
    {
        return view('bij.dana_bij.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $danaBij = DanaBij::create(['image' => $fileName,
                                  'name' => $request->name,
                                  'code' => $request->code,
                                  'quantity' => $request->quantity,
                                  'price' => $request->price,
                                  'description' => $request->description
                                 ]);

        flash()->message($danaBij->name . ' Successfully Created');

        return redirect('dana-bij-auth');
    }

    public function edit($id)
    {
        $danaBij = DanaBij::find($id);

        return view('bij.dana_bij.edit', compact('danaBij'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $danaBij = DanaBij::find($id);
        File::delete('uploads/' . $danaBij->image);
        $danaBij->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($danaBij->name . ' Successfully Updated');

        return redirect('dana-bij-auth');
    }

    public function destroy($id)
    {
        $danaBij = DanaBij::find($id);
        File::delete('uploads/' . $danaBij->image);

        DanaBij::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('dana-bij-auth');
    }
}
