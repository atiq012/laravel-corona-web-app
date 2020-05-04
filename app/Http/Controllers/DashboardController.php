<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Information;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index')->with('data',Information::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Information::create([
            'thana' => $request->Thana,
            'infected' => $request->Infected,
            'new_infected' => $request->New_Infected,
            'recover' => $request->Recovered,
            'deaths' => $request->Deaths

        ]);
        session()->flash('success','Information Added Successfully');
        
        return redirect(route('dashboard.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $dashboard)
    {
        return view('dashboard.edit')->with('item',$dashboard);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $dashboard)
    {
        $dashboard->update([
            'thana' => $request->Thana,
            'infected' => $request->Infected,
            'new_infected' => $request->New_Infected,
            'recover' => $request->Recovered,
            'deaths' => $request->Deaths

        ]);
        $dashboard->save();
        session()->flash('success','Information Updated Successfully');
        
        return redirect(route('dashboard.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
