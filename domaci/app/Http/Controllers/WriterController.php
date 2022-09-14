<?php

namespace App\Http\Controllers;

use App\Http\Resources\WriterResource;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = Writer::all();
        return WriterResource::collection($writers);
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
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function show($writer_id)
    {
        $writer = Writer::find($writer_id);
        if(is_null($writer))
            return response()->json('Writer not found',404);
        return new WriterResource($writer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function edit(Writer $writer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Writer $writer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Writer $writer)
    {
        //
    }
}
