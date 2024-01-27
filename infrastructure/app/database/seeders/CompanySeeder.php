<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $companiesNl = [
            ['name' => 'Hopla', 'language_id' => 'nl',],
            ['name' => 'Mechels Stadspoppentheater', 'language_id' => 'nl',],
            ['name' => 'Theater Taptoe', 'language_id' => 'nl',],
            ['name' => 'Dudapaiva Company', 'language_id' => 'nl',],
            ['name' => 'DE MAAN', 'language_id' => 'nl',],
            ['name' => 'Spelleke van de Muide', 'language_id' => 'nl',],
            ['name' => 'Spelleken van Ulenspiegel', 'language_id' => 'nl',],
            ['name' => 'Spelleke van Folklore', 'language_id' => 'nl',],
            ['name' => 'Spelleke van Folklore, Pierke van Alijn', 'language_id' => 'nl',],
            ['name' => 'Hopla (familie Contryn)', 'language_id' => 'nl',],
            ['name' => 'Marionettentheater Taptoe', 'language_id' => 'nl',],
            ['name' => 'Mechels Stadspoppentheater (familie Contryn)', 'language_id' => 'nl',],
            ['name' => 'School voor poppenspel (familie Contryn)', 'language_id' => 'nl',],];
        $companiesFR = [
            ['name' => 'Hopla', 'language_id' => 'fr'],
            ['name' => 'Théâtre de marionnettes de Mechelen', 'language_id' => 'fr'],
            ['name' => 'Théâtre Taptoe', 'language_id' => 'fr'],
            ['name' => 'Compagnie Dudapaiva', 'language_id' => 'fr'],
            ['name' => 'Le MOON', 'language_id' => 'fr'],
            ['name' => 'Spectacle de la Muide', 'language_id' => 'fr'],
            ['name' => 'Spectacle d\'Ulenspiegel', 'language_id' => 'fr'],
            ['name' => 'Spectacle folklorique', 'language_id' => 'fr'],
            ['name' => 'Spectacle folklorique, Pierke Van Alijn', 'language_id' => 'fr'],
            ['name' => 'Hopla (famille Contryn)', 'language_id' => 'fr'],
            ['name' => 'Théâtre de marionnettes Taptoe', 'language_id' => 'fr'],
            ['name' => 'Théâtre de marionnettes de Mechelen (famille Contryn)', 'language_id' => 'fr'],
            ['name' => 'École de marionnettes (famille Contryn)', 'language_id' => 'fr'],
        ];
        $companiesEN = [
            ['name' => 'Hopla', 'language_id' => 'en'],
            ['name' => 'Mechelen Puppet Theater', 'language_id' => 'en'],
            ['name' => 'Taptoe Theater', 'language_id' => 'en'],
            ['name' => 'Dudapaiva Company', 'language_id' => 'en'],
            ['name' => 'DE MAAN', 'language_id' => 'en'],
            ['name' => 'Muide Puppet Show', 'language_id' => 'en'],
            ['name' => 'Ulenspiegel Puppet Show', 'language_id' => 'en'],
            ['name' => 'Folklore Puppet Show', 'language_id' => 'en'],
            ['name' => 'Folklore Puppet Show, Pierke Van Alijn', 'language_id' => 'en'],
            ['name' => 'Hopla (Contryn Family)', 'language_id' => 'en'],
            ['name' => 'Taptoe Marionette Theater', 'language_id' => 'en'],
            ['name' => 'Mechelen Puppet Theater (Contryn Family)', 'language_id' => 'en'],
            ['name' => 'Puppetry School (Contryn Family)', 'language_id' => 'en'],
        ];



        foreach ($companiesNl as $company)
        {
            Company::create($company);
        }
        foreach ($companiesFR as $company)
        {
            Company::create($company);
        }
        foreach ($companiesEN as $company)
        {
            Company::create($company);
        }
    }
}
