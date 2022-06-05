<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reviewdec;
use Illuminate\Http\Request;

class ReviewdecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Reviewdec::all();
        return view('admin.reviewdec', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reviewdec  $reviewdec
     * @return \Illuminate\Http\Response
     */
    public function show(Reviewdec $reviewdec,$id)
    {
        $data = Reviewdec::find($id);
        return view('admin.reviewdec_edit', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reviewdec  $reviewdec
     * @return \Illuminate\Http\Response
     */
    public function edit(Reviewdec $reviewdec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reviewdec  $reviewdec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reviewdec $reviewdec,$id)
    {
        $data = Reviewdec::find($id);
        $data->status = $request->input('status');
        $data->save();
        return back()->with('success', 'Review updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reviewdec  $reviewdec
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviewdec $reviewdec,$id)
    {
        $data=Reviewdec::find($id);
        $data->delete();
        return redirect()->back()->with('success','Review Deleted');
    }
}
