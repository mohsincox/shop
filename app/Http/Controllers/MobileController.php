<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

use App\Http\Requests;

class MobileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mobiles = Mobile::paginate(10);

        return view('mobile.index', compact('mobiles'));
    }

    public function create()
    {
        return view('mobile.create');
    }

    public function store(Request $request)
    {
        $mobile = Mobile::create($request->all());

        flash()->message($mobile->number . ' Successfully Created');

        return redirect('mobile-auth');
    }

    public function edit($id)
    {
        $mobile = Mobile::find($id);

        return view('mobile.edit', compact('mobile'));
    }

    public function update(Request $request, $id)
    {
        $mobile = Mobile::find($id);

        $mobile->update($request->all());

        flash()->message($mobile->number . ' Successfully Updated');

        return redirect('mobile-auth');
    }

    public function destroy($id)
    {
        Mobile::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('mobile-auth');
    }
}
