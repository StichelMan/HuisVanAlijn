<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuppetsProductionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $puppets = 105; $productions = 42;
        $puppetProductionData = [
            ['puppet_id' => 1, 'production_id' => 9],
            ['puppet_id' => 2, 'production_id' => 9],
            ['puppet_id' => 3, 'production_id' => 9],
            ['puppet_id' => 4, 'production_id' => 18],
            ['puppet_id' => 5, 'production_id' => 18],
            ['puppet_id' => 6, 'production_id' => 19],
            ['puppet_id' => 7, 'production_id' => 19],
            ['puppet_id' => 8, 'production_id' => 20],
            ['puppet_id' => 9, 'production_id' => 20],
            ['puppet_id' => 10, 'production_id' => 2],
            ['puppet_id' => 11, 'production_id' => 2],
            ['puppet_id' => 12, 'production_id' => 2],
            ['puppet_id' => 12, 'production_id' => 41],
            ['puppet_id' => 12, 'production_id' => 28],
            ['puppet_id' => 13, 'production_id' => 16],
            ['puppet_id' => 14, 'production_id' => 16],
            ['puppet_id' => 15, 'production_id' => 8],
            ['puppet_id' => 16, 'production_id' => 8],
            ['puppet_id' => 17, 'production_id' => 26],
            ['puppet_id' => 18, 'production_id' => 11],
            ['puppet_id' => 19, 'production_id' => 5],
            ['puppet_id' => 20, 'production_id' => 17],
            ['puppet_id' => 20, 'production_id' => 17],
            ['puppet_id' => 21, 'production_id' => 27],
            ['puppet_id' => 22, 'production_id' => 23],
            ['puppet_id' => 23, 'production_id' => 23],
            ['puppet_id' => 24, 'production_id' => 2],
            ['puppet_id' => 25, 'production_id' => 14],
            ['puppet_id' => 26, 'production_id' => 14],
            ['puppet_id' => 27, 'production_id' => 2],
            ['puppet_id' => 28, 'production_id' => 10],
            ['puppet_id' => 29, 'production_id' => 1],
            ['puppet_id' => 30, 'production_id' => 2],
            ['puppet_id' => 31, 'production_id' => 2],
            ['puppet_id' => 32, 'production_id' => 2],
            ['puppet_id' => 33, 'production_id' => 2],
            ['puppet_id' => 34, 'production_id' => 2],
            ['puppet_id' => 35, 'production_id' => 35],
            ['puppet_id' => 36, 'production_id' => 2],
            ['puppet_id' => 37, 'production_id' => 23],
            ['puppet_id' => 38, 'production_id' => 2],
            ['puppet_id' => 39, 'production_id' => 2],
            ['puppet_id' => 40, 'production_id' => 2],
            ['puppet_id' => 40, 'production_id' => 41],
            ['puppet_id' => 41, 'production_id' => 2],
            ['puppet_id' => 42, 'production_id' => 2],
            ['puppet_id' => 43, 'production_id' => 2],
            ['puppet_id' => 44, 'production_id' => 2],
            ['puppet_id' => 45, 'production_id' => 2],
            ['puppet_id' => 46, 'production_id' => 2],
            ['puppet_id' => 47, 'production_id' => 15],
            ['puppet_id' => 48, 'production_id' => 34],
            ['puppet_id' => 49, 'production_id' => 2],
            ['puppet_id' => 50, 'production_id' => 2],
            ['puppet_id' => 50, 'production_id' => 4],
            ['puppet_id' => 51, 'production_id' => 2],
            ['puppet_id' => 52, 'production_id' => 36],
            ['puppet_id' => 53, 'production_id' => 2],
            ['puppet_id' => 54, 'production_id' => 2],
            ['puppet_id' => 55, 'production_id' => 2],
            ['puppet_id' => 56, 'production_id' => 2],
            ['puppet_id' => 57, 'production_id' => 36],
            ['puppet_id' => 58, 'production_id' => 24],
            ['puppet_id' => 59, 'production_id' => 10],
            ['puppet_id' => 60, 'production_id' => 1],
            ['puppet_id' => 61, 'production_id' => 11],
            ['puppet_id' => 62, 'production_id' => 7],
            ['puppet_id' => 63, 'production_id' => 42],
            ['puppet_id' => 64, 'production_id' => 36],
            ['puppet_id' => 65, 'production_id' => 38],
            ['puppet_id' => 66, 'production_id' => 26],
            ['puppet_id' => 67, 'production_id' => 30],
            ['puppet_id' => 68, 'production_id' => 25],
            ['puppet_id' => 69, 'production_id' => 39],
            ['puppet_id' => 70, 'production_id' => 22],
            ['puppet_id' => 71, 'production_id' => 16],
            ['puppet_id' => 72, 'production_id' => 2],
            ['puppet_id' => 73, 'production_id' => 2],
            ['puppet_id' => 74, 'production_id' => 23],
            ['puppet_id' => 75, 'production_id' => 2],
            ['puppet_id' => 76, 'production_id' => 17],
            ['puppet_id' => 77, 'production_id' => 2],
            ['puppet_id' => 78, 'production_id' => 27],
            ['puppet_id' => 79, 'production_id' => 27],
            ['puppet_id' => 80, 'production_id' => 2],
            ['puppet_id' => 81, 'production_id' => 23],
            ['puppet_id' => 82, 'production_id' => 2],
            ['puppet_id' => 83, 'production_id' => 31],
            ['puppet_id' => 84, 'production_id' => 39],
            ['puppet_id' => 85, 'production_id' => 16],
            ['puppet_id' => 86, 'production_id' => 11],
            ['puppet_id' => 87, 'production_id' => 2],
            ['puppet_id' => 88, 'production_id' => 10],
            ['puppet_id' => 89, 'production_id' => 2],
            ['puppet_id' => 90, 'production_id' => 17],
            ['puppet_id' => 91, 'production_id' => 2],
            ['puppet_id' => 92, 'production_id' => 17],
            ['puppet_id' => 93, 'production_id' => 35],
            ['puppet_id' => 94, 'production_id' => 21],
            ['puppet_id' => 95, 'production_id' => 37],
            ['puppet_id' => 96, 'production_id' => 29],
            ['puppet_id' => 97, 'production_id' => 31],
            ['puppet_id' => 98, 'production_id' => 8],
            ['puppet_id' => 99, 'production_id' => 39],
            ['puppet_id' => 100, 'production_id' => 33],
            ['puppet_id' => 101, 'production_id' => 13],
            ['puppet_id' => 102, 'production_id' => 6],
            ['puppet_id' => 103, 'production_id' => 12],
            ['puppet_id' => 104, 'production_id' => 32],
            ['puppet_id' => 105, 'production_id' => 40],
        ];


        $puppetProductionDataFr = [];
        $puppetProductionDataEn = [];
        foreach ($puppetProductionData as $data) {
            $puppet_idFr = $data['puppet_id'] + $puppets;
            $production_idFr = $data['production_id'] + $productions;
            $puppet_idEn = $data['puppet_id'] + ($puppets*2);
            $production_idEn = $data['production_id'] + ($productions*2);
            $puppetProductionDataFr[] = ['puppet_id' => $puppet_idFr, 'production_id' => $production_idFr];
            $puppetProductionDataEn[] = ['puppet_id' => $puppet_idEn, 'production_id' => $production_idEn];
        }
        foreach ($puppetProductionData as $data) {
            DB::table('puppets_productions')->insert($data);
        }
        foreach ($puppetProductionDataFr as $data) {
            DB::table('puppets_productions')->insert($data);
        }
        foreach ($puppetProductionDataEn as $data) {
            DB::table('puppets_productions')->insert($data);
        }
    }
}
