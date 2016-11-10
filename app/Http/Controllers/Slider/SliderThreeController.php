<?php

namespace App\Http\Controllers\Slider;

use App\Models\SliderThree;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class SliderThreeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = SliderThree::paginate(10);

        return view('slider.three.index', compact('sliders'));
    }

    public function create()
    {
        $slider = SliderThree::orderBy('created_at', 'desc')->first();
        if(isset($slider)) {
            if($slider->id >= 1) {
                flash()->error('No permission to create slider');
                return redirect()->back();
            }
        }
        return view('slider.three.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = date('Y-m-d-H:i:s.u').'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $slider = SliderThree::create(['image' => $fileName,
                                     'title_one' => $request->title_one,
                                     'title_two' => $request->title_two,
                                     'title_three' => $request->title_three
                                    ]);

        flash()->message($slider->title_one . ' Successfully Created');

        return redirect('slider-three-auth');
    }

    public function edit($id)
    {
        $slider = SliderThree::find($id);

        return view('slider.three.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = date('Y-m-d H:i:s.u').'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $slider = SliderThree::find($id);
        File::delete('uploads/' . $slider->image);
        $slider->update(['image' => $fileName,
                         'title_one' => $request->title_one,
                         'title_two' => $request->title_two,
                         'title_three' => $request->title_three
                        ]);

        flash()->message($slider->name . ' Successfully Updated');

        return redirect('slider-three-auth');
    }
}
