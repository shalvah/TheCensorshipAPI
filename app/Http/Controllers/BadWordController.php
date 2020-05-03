<?php

namespace App\Http\Controllers;

use App\BadWord;
use Illuminate\Http\Request;

/**
 * @group Bad words
 *
 * Do it. Use a bad word today, make your family proud. This API will make that possible.
 */
class BadWordController extends Controller
{
    /**
     * @group Other
     *
     * Fetch the list of bad words.
     *
     * @queryParam filter[how_bad_is_it] Duh. Example: bad
     * @queryParam filter[contains] String that word must contain.
     * @queryParam ids[] List of IDs.
     * @queryParam pageSize Um. Example: 5
     */
    public function index()
    {
        return response(BadWord::all(), 201);
    }

    /**
     * Add a word to the list.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @bodyParam word string The bad word. Example: people
     * @bodyParam how_bad_is_it string One of: `unspeakable`, `horrible`, `very bad`, `bad`. Example: very bad
     * @bodyParam nothing string A useless parameter for demo purposes. No-example
     */
    public function store(Request $request)
    {
        return BadWord::create($request->all());
    }

    /**
     * Fetch a specific bad word.
     *
     * @urlParam badword required The bad word ID. Example: 1
     * @response "family"
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
     * @urlParam badword required The bad word ID. Example: 3
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
     * Other bad words APIs. You shouldn't use these unless you're a bad boy.
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
