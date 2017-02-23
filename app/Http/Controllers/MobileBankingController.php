<?php

namespace App\Http\Controllers;

use App\Models\MobileBanking;
use Illuminate\Http\Request;

use App\Http\Requests;

class MobileBankingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mobileBankings = MobileBanking::paginate(10);

        return view('mobile_banking.index', compact('mobileBankings'));
    }

    public function create()
    {
        return view('mobile_banking.create');
    }

    public function store(Request $request)
    {
        $mobileBanking = MobileBanking::create($request->all());

        flash()->message($mobileBanking->number . ' Successfully Created');

        return redirect('mobile-banking-auth');
    }

    public function edit($id)
    {
        $mobileBanking = MobileBanking::find($id);

        return view('mobile_banking.edit', compact('mobileBanking'));
    }

    public function update(Request $request, $id)
    {
        $mobileBanking = MobileBanking::find($id);

        $mobileBanking->update($request->all());

        flash()->message($mobileBanking->number . ' Successfully Updated');

        return redirect('mobile-banking-auth');
    }

    public function destroy($id)
    {
        MobileBanking::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('mobile-banking-auth');
    }
}
