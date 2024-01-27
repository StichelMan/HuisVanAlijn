<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomsNL = [
            ['roomnumber' => 1, 'name' => 'LICHT UIT. POP OP.', 'language_id' => 'nl'],
            ['roomnumber' => 2, 'name' => 'Het Atelier', 'language_id' => 'nl'],
            ['roomnumber' => 3, 'name' => 'Poppenuniversum deel 1', 'language_id' => 'nl'],
            ['roomnumber' => 4, 'name' => 'Poppenuniversum deel 2', 'language_id' => 'nl'],
            ['roomnumber' => 5, 'name' => 'Slechteriken en schurken', 'language_id' => 'nl'],
            ['roomnumber' => 6, 'name' => 'Erfgoed', 'language_id' => 'nl'],
        ];

        $roomsFR = [
            ['roomnumber' => 1, 'name' => 'LES MARIONETTES À L\'ASSAUT DES PLANCHES', 'language_id' => 'fr'],
            ['roomnumber' => 2, 'name' => 'L’atelier', 'language_id' => 'fr'],
            ['roomnumber' => 3, 'name' => 'L’univers des marionnettes 1/2', 'language_id' => 'fr'],
            ['roomnumber' => 4, 'name' => 'L’univers des marionnettes 2/2', 'language_id' => 'fr'],
            ['roomnumber' => 5, 'name' => 'Méchants et vilains', 'language_id' => 'fr'],
            ['roomnumber' => 6, 'name' => 'Le patrimoine', 'language_id' => 'fr'],
        ];

        $roomsEN = [
            ['roomnumber' => 1, 'name' => 'LIGHTS OUT. PUPPET ON.', 'language_id' => 'en'],
            ['roomnumber' => 2, 'name' => 'The workshop', 'language_id' => 'en'],
            ['roomnumber' => 3, 'name' => 'Puppet universe 1/2', 'language_id' => 'en'],
            ['roomnumber' => 4, 'name' => 'Puppet universe 2/2', 'language_id' => 'en'],
            ['roomnumber' => 5, 'name' => 'Bad guys and villains', 'language_id' => 'en'],
            ['roomnumber' => 6, 'name' => 'Heritage', 'language_id' => 'en'],
        ];


        foreach ($roomsNL as $room)
        {
            Room::create($room);
        }
        foreach ($roomsFR as $room)
        {
            Room::create($room);
        }
        foreach ($roomsEN as $room)
        {
            Room::create($room);
        }
    }
}
