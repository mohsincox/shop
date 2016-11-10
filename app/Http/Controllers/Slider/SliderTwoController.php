<?php

namespace App\Http\Controllers\Slider;

use App\Models\SliderTwo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class SliderTwoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = SliderTwo::paginate(10);

        return view('slider.two.index', compact('sliders'));
    }

    public function create()
    {
        $slider = SliderTwo::orderBy('created_at', 'desc')->first();
        if(isset($slider)) {
            if($slider->id >= 1) {
                flash()->error('No permission to create slider');
                return redirect()->back();
            }
        }
        return view('slider.two.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = date('Y-m-d-H:i:s.u').'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $slider = SliderTwo::create(['image' => $fileName,
                                     'title_one' => $request->title_one,
                                     'title_two' => $request->title_two,
                                     'title_three' => $request->title_three
                                    ]);

        flash()->message($slider->title_one . ' Successfully Created');

        return redirect('slider-two-auth');
    }

    public function edit($id)
    {
        $slider = SliderTwo::find($id);

        return view('slider.two.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = date('Y-m-d H:i:s.u').'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $slider = SliderTwo::find($id);
        File::delete('uploads/' . $slider->image);
        $slider->update(['image' => $fileName,
                         'title_one' => $request->title_one,
                         'title_two' => $request->title_two,
                         'title_three' => $request->title_three
                        ]);

        flash()->message($slider->name . ' Successfully Updated');

        return redirect('slider-two-auth');
    }
}
