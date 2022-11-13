<?php

namespace App\Http\Controllers;

use App\Models\Total;
use Illuminate\Http\Request;

class TotalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totals = Total::all();
        //dd($totals);
        return view('total.index',compact('totals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('total.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['hobbies'] = implode(',',$input['hobbies']);
        Total::create($input);
        return redirect()->route('total.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function show(Total $total)
    {
        return view('total.show',compact('total'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $total = Total::find($id);
        return view('total.edit',compact('total'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $total = Total::Find($id);
        $total->fill($input)->save();
        return redirect()->route('total.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function destroy(Total $total)
    {
        $total->delete();
        return redirect()->route('total.index');
    }
}
