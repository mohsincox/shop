<?php

namespace App\Http\Controllers;

use App\Models\Postika;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use File;

class PostikaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $postikas = Postika::paginate(10);

        return view('postika.index', compact('postikas'));
    }

    public function create()
    {
        return view('postika.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $postika = Postika::create(['image' => $fileName,
                                      'name' => $request->name,
                                      'code' => $request->code,
                                      'quantity' => $request->quantity,
                                      'price' => $request->price,
                                      'description' => $request->description
                                     ]);

        flash()->message($postika->name . ' Successfully Created');

        return redirect('postika-auth');
    }

    public function edit($id)
    {
        $postika = Postika::find($id);

        return view('postika.edit', compact('postika'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $postika = Postika::find($id);
        File::delete('uploads/' . $postika->image);
        $postika->update(['image' => $fileName,
                           'name' => $request->name,
                           'code' => $request->code,
                           'quantity' => $request->quantity,
                           'price' => $request->price,
                           'description' => $request->description
                          ]);

        flash()->message($postika->name . ' Successfully Updated');

        return redirect('postika-auth');
    }

    public function destroy($id)
    {
        $postika = Postika::find($id);
        File::delete('uploads/' . $postika->image);

        Postika::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('opokoron-auth');
    }
}
