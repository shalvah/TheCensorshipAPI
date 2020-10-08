<?php

namespace Database\Factories;

use App\BadWord;
use Illuminate\Database\Eloquent\Factories\Factory;

class BadWordFactory extends Factory
{
    protected $model = BadWord::class;

    public function definition()
    {
        return [
            'word' => $this->faker->word,
            'how_bad_is_it' => $this->faker->randomElement(['unspeakable', 'horrible', 'very bad', 'bad'])
        ];
    }
}
