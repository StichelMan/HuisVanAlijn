<?php

namespace Database\Seeders;

use App\Models\Production;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productionsNL = [
            'Onbekend',
            'Meerdere',
            'Assepoester',
            'Babi Pangang',
            'Beerenbodegem',
            'Blind',
            'De avonturen van Nero & co',
            'De dag dat Karageus… (aankwam)',
            'De kleine prins',
            'De klute van Nu Noch',
            'De maan schildert sterren boven Bursa',
            'De tuin van de Walvis',
            'De Vliegende Hollander',
            'De zeer schone miniatuur van Juffrouw Symforosa, begijntje',
            'Doctor Frankenstein',
            'Don G.',
            'Faust',
            'Faust (jaren 1940)',
            'Faust (jaren 1960)',
            'Faust (jaren 1970)',
            'Gepetto',
            'Hemel!',
            'Het esbatement van de appelboom',
            'Het kleine zeemeerminnetje',
            'Herman Teirlinck, een Brusseleer',
            'Lène Maréchal, de revue van een proeverigge',
            'Mieke Miserie',
            'Nieuwjaarke Zoete',
            'OMOEstuintje',
            'O.a. De toverboom',
            'OINK!',
            'Planeet Nivanir',
            'Pruuke Dossche',
            'Reggae Peggy',
            'Sjoerd zegt FOERT!',
            'Thomas zit te dromen in de klas',
            'Tim of Tiene... en negen maanden',
            'Tijl, een vuist in het hart',
            'Ubu Kaka Pipi',
            'Visselke Timpeltee',
            'reis naar de maan',
            'De figuurrijke reis',
        ];
        $productionsFR = [
            'Inconnu',
            'Plusieurs',
            'Cendrillon',
            'Babi Pangang',
            'Beerenbodegem',
            'Aveugle',
            'Les aventures de Nero & co',
            "Le jour où Karageus... (est arrivé)",
            'Le petit prince',
            'Le brouillon de Nu Noch',
            'La lune peint des étoiles au-dessus de Bursa',
            'Le jardin de la baleine',
            'Le Hollandais volant',
            'La très belle miniature de Madame Symforosa, béguine',
            'Docteur Frankenstein',
            'Don G.',
            'Faust',
            'Faust (années 1940)',
            'Faust (années 1960)',
            'Faust (années 1970)',
            'Gepetto',
            'Ciel !',
            "La farce de l'arbre aux pommes",
            'La petite sirène',
            'Herman Teirlinck, un Bruxellois',
            'Lène Maréchal, le revue d\'une dégustation',
            'Mieke Miserie',
            'Bonne année sucrée',
            'OMOEstuintje',
            'Y compris l\'arbre magique',
            'OINK!',
            'Planète Nivanir',
            'Perruque Dossche',
            'Reggae Peggy',
            'Sjoerd dit FOERT!',
            'Thomas rêve en classe',
            'Tim ou Tine... et neuf mois',
            'Tijl, un poing dans le cœur',
            'Ubu Kaka Pipi',
            'Visselke Timpeltee',
            'Voyage vers la lune',
            'Le voyage figuratif',
        ];

        $productionsEN = [
            'Unknown',
            'Multiple',
            'Cinderella',
            'Babi Pangang',
            'Beerenbodegem',
            'Blind',
            'The Adventures of Nero & Co',
            'The Day Karageus... (Arrived)',
            'The Little Prince',
            'The Klute of Nu Noch',
            'The Moon Paints Stars Above Bursa',
            'The Garden of the Whale',
            'The Flying Dutchman',
            'The Very Beautiful Miniature of Miss Symforosa, Beguine',
            'Doctor Frankenstein',
            'Don G.',
            'Faust',
            'Faust (1940s)',
            'Faust (1960s)',
            'Faust (1970s)',
            'Gepetto',
            'Heaven!',
            'The Entertainment of the Apple Tree',
            'The Little Mermaid',
            'Herman Teirlinck, a Brussels Resident',
            'Lène Maréchal, the Revue of a Taster',
            'Mieke Miserie',
            'Sweet New Year',
            'OMO Garden',
            'Including The Magic Tree',
            'OINK!',
            'Planet Nivanir',
            'Wig Dossche',
            'Reggae Peggy',
            'Sjoerd Says FOERT!',
            'Thomas Dreams in Class',
            'Tim or Tiene... and Nine Months',
            'Tijl, a Fist in the Heart',
            'Ubu Kaka Pipi',
            'Visselke Timpeltee',
            'Journey to the Moon',
            'The figurative journey',
        ];




        foreach ($productionsNL as $name) {
            Production::create([
                'name' => $name,
                'language_id' => 'nl',
            ]);
        }

        foreach ($productionsFR as $name) {
            Production::create([
                'name' => $name,
                'language_id' => 'fr',
            ]);
        }

        foreach ($productionsEN as $name)
        {
            Production::create(['name' => $name, 'language_id' => 'en',]);
        }
    }
}
