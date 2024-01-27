<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;

class SeederTest extends TestCase
{
    public function testPuppetSeeder()
    {
        $rooms = 6;
        $companies = 13;
        $types = 17;

        //check de volgorde van alle objecten en of alle ids overeen komen
        $response = $this->get("/api/nl/puppets");
        $response->assertStatus(200);
        $nlData = $response->json();

        $response = $this->get("/api/fr/puppets");
        $response->assertStatus(200);
        $frData = $response->json();

        $response = $this->get("/api/en/puppets");
        $response->assertStatus(200);
        $enData = $response->json();

        for ($i=0; $i < count($nlData); $i++) {
            $this->assertEquals($nlData[$i]['object_number'],$frData[$i]['object_number'],$enData[$i]['object_number']);
            $this->assertEquals($nlData[$i]['room_id'],$frData[$i]['room_id']-$rooms,$enData[$i]['room_id']-($rooms*2));
            $this->assertEquals($nlData[$i]['company_id'],$frData[$i]['company_id']-$companies,$enData[$i]['company_id']-($companies*2));
            var_dump($i.": ".$nlData[$i]['type_id']." ".$frData[$i]['type_id']-$types." " . $enData[$i]['type_id']-($types*2));
            $this->assertEquals($nlData[$i]['type_id'],$frData[$i]['type_id']-$types,$enData[$i]['type_id']-($types*2));

        }
    }
    //test dat er overal gelijke gegevens inzitten zodat er niks kan mislopen
    //Dit voor companies,maker,productions en types
    public function testGetCompanies()
    {

        $response = $this->get("/api/nl/companies");
        $response->assertStatus(200);
        $companiesnl = $response->json();

        $response = $this->get("/api/fr/companies");
        $response->assertStatus(200);
        $companiesfr = $response->json();

        $response = $this->get("/api/en/companies");
        $response->assertStatus(200);
        $companiesEn = $response->json();

        assertEquals(count($companiesnl),count($companiesfr),count($companiesEn));
    }
    public function testGetTypes()
    {
        $response = $this->get("/api/nl/types");
        $response->assertStatus(200);
        $typesnl = $response->json();

        $response = $this->get("/api/fr/types");
        $response->assertStatus(200);
        $typesfr = $response->json();

        $response = $this->get("/api/en/types");
        $response->assertStatus(200);
        $typesEn = $response->json();

        assertEquals(count($typesnl), count($typesfr), count($typesEn));
    }
    public function testGetMakers()
    {
        $response = $this->get("/api/nl/makers");
        $response->assertStatus(200);
        $makersnl = $response->json();

        $response = $this->get("/api/fr/makers");
        $response->assertStatus(200);
        $makersfr = $response->json();

        $response = $this->get("/api/en/makers");
        $response->assertStatus(200);
        $makersEn = $response->json();

        assertEquals(count($makersnl), count($makersfr), count($makersEn));
    }
    public function testGetProductions()
    {
        $response = $this->get("/api/nl/productions");
        $response->assertStatus(200);
        $productionsnl = $response->json();

        $response = $this->get("/api/fr/productions");
        $response->assertStatus(200);
        $productionsfr = $response->json();

        $response = $this->get("/api/en/productions");
        $response->assertStatus(200);
        $productionsEn = $response->json();

        assertEquals(count($productionsnl), count($productionsfr), count($productionsEn));
    }
}

