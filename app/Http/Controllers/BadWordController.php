<?php

namespace App\Http\Controllers;

use App\BadWord;
use App\Http\Requests\CreateBadWordRequest;
use Illuminate\Http\Request;

/**
 * @group Bad words
 *
 * APIs for performing basic CRUD operations on our collection of bad words.
 *
 * This group of endpoints will help you realise your dream of using a bad word. Thank us later.😎
 */
class BadWordController extends Controller
{
    /**
     * Fetch the list of bad words.
     *
     * @queryParam filters[how_bad_is_it] Filter by level of badness.
     * @queryParam filters[created_at] Filter for when the word was created.
     * @queryParam fields[] Fields to include in the response
     */
    public function index()
    {
        return response(BadWord::paginate(request('pageSize') ?: 2), 200);
    }


    /**
     * Add a word to the list.
     * This endpoint allows you to add a word to the list. It's a really useful endpoint,
     * and you should play around with it for a bit.
     * <aside class="warning">We mean it; you really should.😕</aside>
     *
     * @response status=201 scenario="Word added" {"id": "http://google.com?page=3"}
     */
    public function store(CreateBadWordRequest $request)
    {
        return BadWord::create($request->all());
    }

    /**
     * Fetch a specific bad word.
     *
     * @urlParam badword required The ID of the word. Example: 1
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
     *
     * @authenticated
     * @param  \Illuminate\Http\Request $request
     * @param BadWord $badword
     *
     * @urlParam badword required The bad word ID. Example: 2
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
     *
     * @response 204
     *
     * @param BadWord $badword
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(BadWord $badword)
    {
        $badword->delete();
        return response(null, 204);
    }
}
