<?php

namespace App\Http\Controllers\Bij;

use App\Models\SassoBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
//use Illuminate\Pagination\Paginator;

class SassoBijController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //return 'test';
        $sassoBijs = SassoBij::paginate(2);

        return view('bij.sasso_bij.index', compact('sassoBijs'));
    }

    public function create()
    {
        return view('bij.sasso_bij.create');
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
        $sassoBij = SassoBij::create(['image' => $fileName,
                          'name' => $request->name,
                          'code' => $request->code,
                          'quantity' => $request->quantity,
                          'price' => $request->price,
                          'description' => $request->description
                         ]);

        flash()->message($sassoBij->name . ' Successfully Created');

        return redirect('sasso-bij-auth');
    }

    public function edit($id)
    {
        $sassoBij = SassoBij::find($id);

        return view('bij.sasso_bij.edit', compact('sassoBij'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $sassoBij = SassoBij::find($id);
        File::delete('uploads/' . $sassoBij->image);
        $sassoBij->update(['image' => $fileName,
                                      'name' => $request->name,
                                      'code' => $request->code,
                                      'quantity' => $request->quantity,
                                      'price' => $request->price,
                                      'description' => $request->description
                                     ]);

        flash()->message($sassoBij->name . ' Successfully Updated');

        return redirect('sasso-bij-auth');
    }

    public function destroy($id)
    {
        $sassoBij = SassoBij::find($id);
        File::delete('uploads/' . $sassoBij->image);

        SassoBij::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('sasso-bij-auth');
    }

}
