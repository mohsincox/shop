<?php

namespace App\Http\Controllers\Osodh;

use App\Models\HasMorgirOsodh;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class HasMorgirOsodhController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $osodhs = HasMorgirOsodh::paginate(10);

        return view('osodh.has_morgi.index', compact('osodhs'));
    }

    public function create()
    {
        return view('osodh.has_morgi.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $osodh = HasMorgirOsodh::create(['image' => $fileName,
                                     'name' => $request->name,
                                     'code' => $request->code,
                                     'quantity' => $request->quantity,
                                     'price' => $request->price,
                                     'description' => $request->description
                                    ]);

        flash()->message($osodh->name . ' Successfully Created');

        return redirect('has-morgir-osodh-auth');
    }

    public function edit($id)
    {
        $osodh = HasMorgirOsodh::find($id);

        return view('osodh.has_morgi.edit', compact('osodh'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $osodh = HasMorgirOsodh::find($id);
        File::delete('uploads/' . $osodh->image);
        $osodh->update(['image' => $fileName,
                        'name' => $request->name,
                        'code' => $request->code,
                        'quantity' => $request->quantity,
                        'price' => $request->price,
                        'description' => $request->description
                       ]);

        flash()->message($osodh->name . ' Successfully Updated');

        return redirect('has-morgir-osodh-auth');
    }

    public function destroy($id)
    {
        $osodh = HasMorgirOsodh::find($id);
        File::delete('uploads/' . $osodh->image);

        $osodh::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('has-morgir-osodh-auth');
    }
}
