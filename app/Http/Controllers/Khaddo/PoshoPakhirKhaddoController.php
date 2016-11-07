<?php

namespace App\Http\Controllers\Khaddo;

use App\Models\PoshoPakhirKhaddo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class PoshoPakhirKhaddoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $khaddos = PoshoPakhirKhaddo::paginate(10);

        return view('khaddo.posho_pakhi.index', compact('khaddos'));
    }

    public function create()
    {
        return view('khaddo.posho_pakhi.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $khaddo = PoshoPakhirKhaddo::create(['image' => $fileName,
                                        'name' => $request->name,
                                        'code' => $request->code,
                                        'quantity' => $request->quantity,
                                        'price' => $request->price,
                                        'description' => $request->description
                                       ]);

        flash()->message($khaddo->name . ' Successfully Created');

        return redirect('posho-pakhir-khaddo-auth');
    }

    public function edit($id)
    {
        $khaddo = PoshoPakhirKhaddo::find($id);

        return view('khaddo.posho_pakhi.edit', compact('khaddo'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $khaddo = PoshoPakhirKhaddo::find($id);
        File::delete('uploads/' . $khaddo->image);
        $khaddo->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($khaddo->name . ' Successfully Updated');

        return redirect('posho-pakhir-khaddo-auth');
    }

    public function destroy($id)
    {
        $khaddo = PoshoPakhirKhaddo::find($id);
        File::delete('uploads/' . $khaddo->image);

        $khaddo::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('posho-pakhir-khaddo-auth');
    }
}
