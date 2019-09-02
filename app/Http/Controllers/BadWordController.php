<?php

namespace App\Http\Controllers;

use App\BadWord;
use Illuminate\Http\Request;

/**
 * @group Bad words
 *
 * Do it
 */
class BadWordController extends Controller
{
    /**
     * @group Other
     *
     * Fetch the list of bad words.
     */
    public function index()
    {
        return BadWord::all();
    }

    /**
     * Add a word to the list.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @bodyParam word string The bad word. Example: fudge
     * @bodyParam how_bad_is_it string One of: `unspeakable`, `horrible`, `very bad`, `bad`. Example: very bad
     */
    public function store(Request $request)
    {
        return BadWord::create($request->all());
    }

    /**
     * Fetch a specific bad word.
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
     * Update a bad word.
     * @authd
     * @param  \Illuminate\Http\Request $request
     * @param BadWord $badword
     *
     * @bodyParam how_bad_is_it string One of: `unspeakable`, `horrible`, `very bad`, `bad`. Example: very bad
     *
     * @return BadWord
     */
    public function update(Request $request, BadWord $badword)
    {
        $badword->update($request->only('how_bad_is_it'));
        return $badword;
    }

    /**
     * Remove a bad word from the list.
     * @group Other
     * Other bad words APIs.
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
