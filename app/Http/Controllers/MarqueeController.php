<?php

namespace App\Http\Controllers;

use App\Models\Marquee;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use File;

class MarqueeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $marquees = Marquee::paginate(10);

        return view('marquee.index', compact('marquees'));
    }

    public function create()
    {
        return view('marquee.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $marquee = Marquee::create(['image' => $fileName
                                       ]);

        flash()->message('Successfully Created');

        return redirect('marquee-auth');
    }

    public function edit($id)
    {
        $marquee = Marquee::find($id);

        return view('marquee.edit', compact('marquee'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $marquee = Marquee::find($id);
        File::delete('uploads/' . $marquee->image);
        $marquee->update([ 'image' => $fileName ]);

        flash()->message('Successfully Updated');

        return redirect('marquee-auth');
    }

    public function destroy($id)
    {
        $marquee = Marquee::find($id);
        File::delete('uploads/' . $marquee->image);

        $marquee::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('marquee-auth');
    }
}
