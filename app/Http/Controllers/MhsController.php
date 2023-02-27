<?php

namespace App\Http\Controllers;

use App\Models\Mhs;
use App\Http\Requests\StoreMhsRequest;
use App\Http\Requests\UpdateMhsRequest;
use Illuminate\Auth\Events\Validated;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mhs')->with([
            'mhs' => Mhs::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMhsRequest $request)
    {
        $validate = $request->validated();
    }

    /**
     * Display the specified resource.
     */
    public function show(Mhs $mhs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mhs $mhs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMhsRequest $request, Mhs $mhs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mhs $mhs)
    {
        //
    }
}
