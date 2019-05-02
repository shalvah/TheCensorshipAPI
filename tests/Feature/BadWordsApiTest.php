<?php

namespace Tests\Feature;

use App\BadWord;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BadWordsApiTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        factory(BadWord::class, 3)->create();
    }

    public function testCanCreateBadWords()
    {
        $response = $this->postJson('/api/badwords', [
            'word' => 'haha',
            'how_bad_is_it' => 'unspeakable',
        ]);

        $response->assertStatus(201);
        $response->assertJsonStructure([
            'id',
            'word',
            'how_bad_is_it',
            'created_at',
            'updated_at',
        ]);
        $response->assertJson([
            'word' => 'haha',
            'how_bad_is_it' => 'unspeakable',
        ]);
    }

    public function testCanFetchBadWords()
    {
        $response = $this->get('/api/badwords');

        $response->assertOk();
        $response->assertJsonStructure([
            '*' => [
            'id',
            'word',
            'how_bad_is_it',
            'created_at',
            'updated_at',
        ]
        ]);
        $json = $response->json();
        $this->assertGreaterThanOrEqual(3, count($json));
    }

    public function testCanFetchABadWord()
    {
        $response = $this->get('/api/badwords/1');

        $response->assertOk();
        $response->assertJsonStructure([
                'id',
                'word',
                'how_bad_is_it',
                'created_at',
                'updated_at',

        ]);
    }

    public function testCanEditABadWord()
    {
        $response = $this->putJson('/api/badwords/2', [
            'how_bad_is_it' => 'bad',
        ]);

        $response->assertOk();
        $response->assertJsonStructure([
            'id',
            'word',
            'how_bad_is_it',
            'created_at',
            'updated_at',
        ]);
        $response->assertJson([
            'how_bad_is_it' => 'bad',
        ]);
    }

    public function testCanDeleteABadWord()
    {
        $response = $this->delete('/api/badwords/3');

        $response->assertStatus(204);

        $response = $this->get('/api/badwords/3');

        $response->assertNotFound();
    }
}
