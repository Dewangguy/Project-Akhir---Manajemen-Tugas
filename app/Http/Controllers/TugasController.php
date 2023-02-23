<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $kelas = Kelas::all();
        return view('layout.assignment',compact("kelas"));
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
        $fery = $request->validate([
            "nama_tugas" => "required",
            "deskripsi_tugas" => "required",
            "due_date" => "required",
            "kelas_id" => "required",
        ]);

        Tugas::create($fery);

        return redirect('/mapel/' . $request->kelas_id);
    }

    public function class_assignment(Request $request,$id){
        $fery = $request->validate([
            "nama_tugas" => "required",
            "deskripsi_tugas" => "required",
            "due_date" => "required",
        ]);

        $fery['kelas_id'] = $id;

        Tugas::create($fery);

        return redirect('/mapel/' . $id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas = Kelas::find($id);
        return view('layout.assignment_class', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
            $tugas = Tugas::find($id);
            $tugas->nama_tugas = $request->nama_tugas;
            $tugas->deskripsi_tugas = $request->deskripsi_tugas;
            $tugas->due_date = $request->due_date;
            $tugas->kelas_id = $request->kelas_id;
            $tugas->Update();
            return redirect()->back();
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

    public function store_assignment(Request $request){
        $request->validate([
            'nama_tugas' => 'required',
            'deskripsi_tugas' => 'required',
            'kelas_id' => 'required',
            'due_date' => 'required'
        ]);

        Tugas::create([
            'nama_tugas' => $request->nama_tugas,
            'deskripsi_tugas' => $request->deskripsi_tugas,
            'due_date' => $request->due_date,
            'kelas_id' => $request->kelas_id
        ]);

    return redirect('/mapel/' . $request->kelas_id);
    }
}
