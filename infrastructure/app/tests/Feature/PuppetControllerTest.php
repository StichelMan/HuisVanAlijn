<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PuppetControllerTest extends TestCase
{
    /**
     * @dataProvider languageProvider
     */
    public function testGetRooms($language)
    {
        $response = $this->get("/api/$language/rooms");
        $response->assertStatus(200);
        $rooms = $response->json();
        $this->assertCount(6, $rooms);//check that there are 6 room returned
    }

    /**
     * @dataProvider languageProvider
     */
    public function testGetPuppetsOnRoom($language)
    {
        $response = $this->get("/api/$language/room/1/puppets");
        $response->assertStatus(200);
        $puppets = $response->json();
        foreach ($puppets as $puppet) {
            $this->assertEquals($language, $puppet['language_id']);//check that each puppets language is correct
        }
    }

    /**
     * @dataProvider languageProvider
     */
    public function testGetPuppet($language)
    {
        $response = $this->get("/api/$language/puppet/2021-029-005");
        $response->assertStatus(200);
    }

    /**
     * @dataProvider languageProvider
     */
    public function testGetGameData($language)
    {
        $response = $this->get("/api/$language/game");
        $response->assertStatus(200);
        $data = $response->json();

        foreach ($data['types'] as $type) {
            $this->assertEquals(1, $type['gameRelevant']);//check that only the types for the game are returned
        }
        //check unique type id,counts,check puppets are equal to types
        $this->assertCount(count($data['puppets']), array_unique(array_column($data['puppets'], 'type_id')));
    }

    /**
     * @dataProvider languageProvider
     */
    public function testGetPuppets($language)
    {
        $response = $this->get("/api/$language/puppets");
        $response->assertStatus(200);
    }

    public static function languageProvider(): array
    {
        return [
            ['nl'],
            ['en'],
            ['fr'],
        ];
    }
}

