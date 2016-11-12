<?php

namespace App\Http\Controllers\OrganicFood;

use App\Models\OrganicVegetables;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class OrganicVegetablesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $foods = OrganicVegetables::paginate(10);

        return view('organic_food.vegetables.index', compact('foods'));
    }

    public function create()
    {
        return view('organic_food.vegetables.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $food = OrganicVegetables::create(['image' => $fileName,
                                'name' => $request->name,
                                'code' => $request->code,
                                'quantity' => $request->quantity,
                                'price' => $request->price,
                                'description' => $request->description
                               ]);

        flash()->message($food->name . ' Successfully Created');

        return redirect('organic-vegetables-auth');
    }

    public function edit($id)
    {
        $food = OrganicVegetables::find($id);

        return view('organic_food.vegetables.edit', compact('food'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $food = OrganicVegetables::find($id);
        File::delete('uploads/' . $food->image);
        $food->update(['image' => $fileName,
                          'name' => $request->name,
                          'code' => $request->code,
                          'quantity' => $request->quantity,
                          'price' => $request->price,
                          'description' => $request->description
                         ]);

        flash()->message($food->name . ' Successfully Updated');

        return redirect('organic-vegetables-auth');
    }

    public function destroy($id)
    {
        $food = OrganicVegetables::find($id);
        File::delete('uploads/' . $food->image);

        $food::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('organic-vegetables-auth');
    }
}
