<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bobot;

class BobotController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria= Kriteria::get();
        return view('kriterias.index',compact ('kriteria'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kriterias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_kriteria' => 'required',
            'jenis_kriteria' => 'required',
        ]);

        Kriteria::create([
            'nama_kriteria' => $request->input('nama_kriteria'),
            'jenis_kriteria' => $request->input('jenis_kriteria'),
        ]);

        return redirect()->route('kriterias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        return view('kriterias.show', compact('kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        return view('kriterias.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Kriteria::find($id)->update([
            'nama_kriteria' => $request->get('nama_kriteria'),
            'jenis_kriteria' => $request->get('jenis_kriteria')
        ]);

        return redirect()->route('kriterias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kriteria::find($id)->delete();
        return redirect()->route('kriterias.index');
    }
}
