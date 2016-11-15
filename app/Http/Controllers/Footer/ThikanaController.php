<?php

namespace App\Http\Controllers\Footer;

use App\Models\Thikana;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ThikanaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $thikanas = Thikana::paginate(10);

        return view('footer.thikana.index', compact('thikanas'));
    }

    public function create()
    {
        $thikana = Thikana::orderBy('created_at', 'desc')->first();
        if(isset($thikana)) {
            if($thikana->id >= 1) {
                flash()->error('No permission to create Address.');
                return redirect()->back();
            }
        }
        return view('footer.thikana.create');
    }

    public function store(Request $request)
    {
        $thikana = Thikana::create($request->all());

        flash()->message($thikana->office . ' Successfully Created');

        return redirect('thikana-auth');
    }

    public function edit($id)
    {
        $thikana = Thikana::find($id);

        return view('footer.thikana.edit', compact('thikana'));
    }

    public function update(Request $request, $id)
    {
        $thikana = Thikana::find($id);

        $thikana->update($request->all());

        flash()->message($thikana->office . ' Successfully Updated');

        return redirect('thikana-auth');
    }
}
