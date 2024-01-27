<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesNL = [
            ['name' => 'Decorstuk', 'language_id' => 'nl', 'gameRelevant' => 0],
            ['name' => 'Masker', 'language_id' => 'nl', 'gameRelevant' => 0],
            ['name' => 'Ontwerp', 'language_id' => 'nl', 'gameRelevant' => 0],
            ['name' => 'Figuur aan draadje', 'language_id' => 'nl', 'gameRelevant' => 0],
            ['name' => 'Bek- en stokpop', 'language_id' => 'nl', 'gameRelevant' => 0],
            ['name' => 'Stok- en staafpop', 'language_id' => 'nl', 'gameRelevant' => 0],
            ['name' => 'Lingeriepop', 'language_id' => 'nl', 'gameRelevant' => 0],
            ['name' => 'Vlakke figuur', 'language_id' => 'nl', 'gameRelevant' => 0],
            ['name' => 'Handgreeppop', 'language_id' => 'nl', 'gameRelevant' => 0],
            ['name' => 'Scène', 'language_id' => 'nl', 'gameRelevant' => 0],
            ['name' => 'Bekpop', 'language_id' => 'nl', 'gameRelevant' => 1,'video' => 'bekpop.mp4'],
            ['name' => 'Handpop', 'language_id' => 'nl', 'gameRelevant' => 1, 'video' => 'handpop.mp4'],
            ['name' => 'Marionet', 'language_id' => 'nl', 'gameRelevant' => 1, 'video' => 'marionet.mp4'],
            ['name' => 'Schimpop', 'language_id' => 'nl', 'gameRelevant' => 1, 'video' => 'schimpop.mp4'],
            ['name' => 'Staafpop', 'language_id' => 'nl', 'gameRelevant' => 1, 'video' => 'staafpop.mp4'],
            ['name' => 'Stangpop', 'language_id' => 'nl', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Stokpop', 'language_id' => 'nl', 'gameRelevant' => 1, 'video' => 'stokpop.mp4'],
        ];
        $typesFR = [
            ['name' => 'Décor', 'language_id' => 'fr', 'gameRelevant' => 0],
            ['name' => 'Masque', 'language_id' => 'fr', 'gameRelevant' => 0],
            ['name' => 'Conception', 'language_id' => 'fr', 'gameRelevant' => 0],
            ['name' => 'Marionnette à fil', 'language_id' => 'fr', 'gameRelevant' => 0],
            ['name' => 'Marionnette à tige et à bâton', 'language_id' => 'fr', 'gameRelevant' => 0],
            ['name' => 'Marionnette à bâton et à tige', 'language_id' => 'fr', 'gameRelevant' => 0],
            ['name' => 'Marionnette lingerie', 'language_id' => 'fr', 'gameRelevant' => 0],
            ['name' => 'Figure plate', 'language_id' => 'fr', 'gameRelevant' => 0],
            ['name' => 'Marionnette à main', 'language_id' => 'fr', 'gameRelevant' => 0],
            ['name' => 'Scène', 'language_id' => 'fr', 'gameRelevant' => 0],
            ['name' => 'Marionnette à bec', 'language_id' => 'fr', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Marionnette à main', 'language_id' => 'fr', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Marionnette à fils', 'language_id' => 'fr', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Marionnette d\'ombre', 'language_id' => 'fr', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Marionnette à tige', 'language_id' => 'fr', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Marionnette à tringle', 'language_id' => 'fr', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Marionnette à bâton', 'language_id' => 'fr', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
        ];
        $typesEN = [
            ['name' => 'Set Piece', 'language_id' => 'en', 'gameRelevant' => 0],
            ['name' => 'Mask', 'language_id' => 'en', 'gameRelevant' => 0],
            ['name' => 'Design', 'language_id' => 'en', 'gameRelevant' => 0],
            ['name' => 'Threaded Figure', 'language_id' => 'en', 'gameRelevant' => 0],
            ['name' => 'Beak and Stick Puppet', 'language_id' => 'en', 'gameRelevant' => 0],
            ['name' => 'Stick and Rod Puppet', 'language_id' => 'en', 'gameRelevant' => 0],
            ['name' => 'Lingerie Puppet', 'language_id' => 'en', 'gameRelevant' => 0],
            ['name' => 'Flat Figure', 'language_id' => 'en', 'gameRelevant' => 0],
            ['name' => 'Handheld Puppet', 'language_id' => 'en', 'gameRelevant' => 0],
            ['name' => 'Scene', 'language_id' => 'en', 'gameRelevant' => 0],
            ['name' => 'Beak Puppet', 'language_id' => 'en', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Hand Puppet', 'language_id' => 'en', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Marionette', 'language_id' => 'en', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'shadow Puppet', 'language_id' => 'en', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Rod Puppet', 'language_id' => 'en', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Shaft Puppet', 'language_id' => 'en', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
            ['name' => 'Stick Puppet', 'language_id' => 'en', 'gameRelevant' => 1, 'video' => 'stangpop.mp4'],
        ];

        foreach ($typesNL as $type)
        {
            Type::create($type);
        }
        foreach ($typesFR as $type)
        {
            Type::create($type);
        }
        foreach ($typesEN as $type)
        {
            Type::create($type);
        }
    }
}
