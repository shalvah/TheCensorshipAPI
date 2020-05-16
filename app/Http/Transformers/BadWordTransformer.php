<?php


namespace App\Http\Transformers;


use App\BadWord;
use League\Fractal\TransformerAbstract;

class BadWordTransformer extends TransformerAbstract
{
    public function transform(BadWord $badWord)
    {
        return [
            'word' => $badWord->word,
            'last_used' => time(),
            'frequency' => rand(),
        ];
    }
}
