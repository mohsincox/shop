<?php

namespace App\Http\Controllers\Slider;

use App\Models\SliderOne;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class SliderOneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = SliderOne::paginate(10);

        return view('slider.one.index', compact('sliders'));
    }

    public function create()
    {
        $slider = SliderOne::orderBy('created_at', 'desc')->first();
        if(isset($slider)) {
            if($slider->id >= 1) {
                flash()->error('No permission to create slider');
                return redirect()->back();
            }
        }
        return view('slider.one.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
<<<<<<< HEAD
            $fileName = rand(11111,99999).'.'.$extension;
=======
            $fileName = date('Y-m-d-H:i:s.u').'.'.$extension;
>>>>>>> 4ad126d736af6dd763239fd791ccdd1833a9172c
            Input::file('image')->move($destinationPath, $fileName);
        }

        $slider = SliderOne::create(['image' => $fileName,
                                'title_one' => $request->title_one,
                                'title_two' => $request->title_two,
                                'title_three' => $request->title_three
                               ]);

        flash()->message($slider->title_one . ' Successfully Created');

        return redirect('slider-one-auth');
    }

    public function edit($id)
    {
        $slider = SliderOne::find($id);

        return view('slider.one.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
<<<<<<< HEAD
            $fileName = rand(11111,99999).'.'.$extension;
=======
            $fileName = date('Y-m-d H:i:s.u').'.'.$extension;
>>>>>>> 4ad126d736af6dd763239fd791ccdd1833a9172c
            Input::file('image')->move($destinationPath, $fileName);
        }

        $slider = SliderOne::find($id);
        File::delete('uploads/' . $slider->image);
        $slider->update(['image' => $fileName,
                         'title_one' => $request->title_one,
                         'title_two' => $request->title_two,
                         'title_three' => $request->title_three
                         ]);

        flash()->message($slider->name . ' Successfully Updated');

        return redirect('slider-one-auth');
    }
}
