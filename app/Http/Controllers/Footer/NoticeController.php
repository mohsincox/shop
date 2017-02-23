<?php

namespace App\Http\Controllers\Footer;

use App\Models\Notice;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $notices = Notice::paginate(10);

        return view('footer.notice.index', compact('notices'));
    }

    public function create()
    {
        return view('footer.notice.create');
    }

    public function store(Request $request)
    {
        //return $request->all();
        $notice = Notice::create($request->all());

        //flash()->message($notice->title . ' Successfully Created');

        return redirect('/');
    }

    public function edit($id)
    {
        $notice = Notice::find($id);

        return view('footer.notice.edit', compact('notice'));
    }

    public function update(Request $request, $id)
    {
        $notice = Notice::find($id);

        $notice->update($request->all());

        flash()->message($notice->title . ' Successfully Updated');

        return redirect('notice-auth');
    }

    public function destroy($id)
    {
        Notice::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('notice-auth');
    }
}
