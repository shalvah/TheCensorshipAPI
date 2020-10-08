<?php

namespace App\Http\Controllers;

use App\BadWord;
use App\Http\Resources\BadWordResource;
use App\Http\Transformers\BadWordTransformer;
use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Resource\Item;

/**
 * @group Services
 *
 * Services provided by this API.
 */
class ServicesController extends Controller
{
    /**
     * Highlight bad words in texts.
     *
     * This endpoint will highlight any bad words in the provided texts, surrounding them with `<em></em>` HTML tags.
     * @header Content-Type application/x-www-form-urlencoded
     * @bodyParam texts string[] Texts to be highlighted.  Example: [
     *   "He loves his family sooo much",
     *   "But they don't fucking love him back."
     * ]
     * @bodyParam things object[] Things to be done.
     * @bodyParam things[].name string required Thing.
     * @response {"highlighted": "He <em>loves</em> his <em>family</em> sooo much!"}
     */
    public function highlightBadWordsInText()
    {
        return response(BadWord::simplePaginate(1), 200);
    }

    /**
     * Censor bad words in texts.
     * This endpoint will censor any bad words in a list of texts.
     *
     * @urlParam mode Censorship mode. `full` will replace the entire word with `=====`,
     * `partial` will replace all characters but the first and last. Defaults to `partial`.
     *
     * @bodyParam texts string[] Text to be censored. Example: "He loves his family sooo much"
     * @bodyParam items object An it
     * @bodyParam items.inttt int Other it
     * @bodyParam things object[] Things to be done.
     * @bodyParam things[].name string required Thing.
     *
     * @response [
     *   "He l===s his f====y sooo much",
     *   "But they don't fucking l===e him back."
     * ]
     */
    public function censorTexts()
    {
        return BadWord::create($request->all());
    }

    /**
     * Censor bad words in an image.
     * This endpoint will censor any bad words in the provided image and return the censored image. All bad words will be replaced by ======.
     *
     * @bodyParam image file required The image containing text to be censored. Example: ./public/images/logo-scribe.png
     * @response <<binary>> The censored image
     * @responseFile status=400 scenario="When the image's words are too powerful😢" responses/operation_failed.json {"reason": "The words are too touching.😭"}
     */
    public function censorImage()
    {
        // ...
    }

    /**
     * Get the most frequently used bad words.
     *
     * PS: This response was generated using the `@apiResource` and `@apiResourceModel` tag. 😏
     *
     * @apiResourceCollection App\Http\Resources\BadWordResource
     * @apiResourceModel App\BadWord paginate=5,simple
     */
    public function getTopBadWords()
    {
        return BadWordResource::collection(BadWord::simplePaginate(5));
    }

    /**
     * Get stats for a word's usage.
     *
     * PS: This response was generated using the `@transformer` tag. 😏
     * @transformer App\Http\Transformers\BadWordTransformer
     * @responseField word The word
     * @responseField last_used Timestamp the word was last used anywhere in the world.
     * @responseField frequency The number of times people have used this word.
     */
    public function getBadWordStats()
    {
        $fractal = new Manager();
        $word = BadWord::latest()->first();
        $resource = new Item($word, new BadWordTransformer());
        return $fractal->createData($resource)->toArray();
    }
}
