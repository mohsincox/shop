<?php

namespace App\Http\Controllers\OrganicFood;

use App\Models\OrganicFruits;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class OrganicFruitsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $foods = OrganicFruits::paginate(10);

        return view('organic_food.fruits.index', compact('foods'));
    }

    public function create()
    {
        return view('organic_food.fruits.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $food = OrganicFruits::create(['image' => $fileName,
                                           'name' => $request->name,
                                           'code' => $request->code,
                                           'quantity' => $request->quantity,
                                           'price' => $request->price,
                                           'description' => $request->description
                                          ]);

        flash()->message($food->name . ' Successfully Created');

        return redirect('organic-fruits-auth');
    }

    public function edit($id)
    {
        $food = OrganicFruits::find($id);

        return view('organic_food.fruits.edit', compact('food'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $food = OrganicFruits::find($id);
        File::delete('uploads/' . $food->image);
        $food->update(['image' => $fileName,
                       'name' => $request->name,
                       'code' => $request->code,
                       'quantity' => $request->quantity,
                       'price' => $request->price,
                       'description' => $request->description
                      ]);

        flash()->message($food->name . ' Successfully Updated');

        return redirect('organic-fruits-auth');
    }

    public function destroy($id)
    {
        $food = OrganicFruits::find($id);
        File::delete('uploads/' . $food->image);

        $food::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('organic-fruits-auth');
    }
}
