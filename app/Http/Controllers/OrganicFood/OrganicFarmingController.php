<?php

namespace App\Http\Controllers\OrganicFood;

use App\Models\OrganicFarming;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class OrganicFarmingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $foods = OrganicFarming::paginate(10);

        return view('organic_food.farming.index', compact('foods'));
    }

    public function create()
    {
        return view('organic_food.farming.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $food = OrganicFarming::create(['image' => $fileName,
                                           'name' => $request->name,
                                           'code' => $request->code,
                                           'quantity' => $request->quantity,
                                           'price' => $request->price,
                                           'description' => $request->description
                                          ]);

        flash()->message($food->name . ' Successfully Created');

        return redirect('organic-farming-auth');
    }

    public function edit($id)
    {
        $food = OrganicFarming::find($id);

        return view('organic_food.farming.edit', compact('food'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $food = OrganicFarming::find($id);
        File::delete('uploads/' . $food->image);
        $food->update(['image' => $fileName,
                       'name' => $request->name,
                       'code' => $request->code,
                       'quantity' => $request->quantity,
                       'price' => $request->price,
                       'description' => $request->description
                      ]);

        flash()->message($food->name . ' Successfully Updated');

        return redirect('organic-farming-auth');
    }

    public function destroy($id)
    {
        $food = OrganicFarming::find($id);
        File::delete('uploads/' . $food->image);

        $food::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('organic-farming-auth');
    }
}
