<?php

namespace App\Http\Controllers;

use App\BadWord;
use Illuminate\Http\Request;

class BadWordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BadWord::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        return BadWord::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param BadWord $badword
     *
     * @return BadWord
     */
    public function show(BadWord $badword)
    {
        return $badword;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param BadWord $badword
     *
     * @return BadWord
     */
    public function update(Request $request, BadWord $badword)
    {
        $badword->update($request->all());
        return $badword;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param BadWord $badword
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(BadWord $badword)
    {
        $badword->delete();
        return response()->noContent();
    }
}
