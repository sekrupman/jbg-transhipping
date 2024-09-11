<?php

namespace App\Http\Controllers;

use App\Models\MasterData;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masterData = MasterData::all();
        return view('dashboard', compact('masterData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createMaster');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $createMasterData = MasterData::create($request->all());
        return redirect('/dashboard')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteMasterData = MasterData::find($id)->delete();
        return redirect('/dashboard');
    }
}
