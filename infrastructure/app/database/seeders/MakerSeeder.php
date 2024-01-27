<?php

namespace Database\Seeders;

use App\Models\Maker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $makersNL = [
            '© Diego Franssens',
            '© Patrick Van Vlerken',
            'Annie Arndt',
            'Anthony Muller',
            'Bernard Van Guysse',
            'Dirk De Strooper',
            'Edmond Schools',
            'Eric Vande Pitte',
            'Herr Sele',
            'Jacqueline Boeykens',
            'Jacques Peeters',
            'Jan Deleu',
            'Jean-Paul Pollet',
            'Knut Kersse',
            'Leerlingen van de School voor poppenspel o.l.v. Jef Lettany',
            'Leerlingen van kunstacademie Gent',
            'Louis Contryn',
            'Luis Zornoza Boy',
            'Luk De Bruyker',
            'Michel Bracke',
            'Nicole Rutten',
            'Onbekend',
            'Patrick Bekaert',
            'Paul Verheylenzoon',
            'Rembert De Smedt',
            'René Magritte',
            'Silva Bachvarova',
            'Tsjechisch Atelier',
            'Till De Kock',
            'Wim Van De Vyver',
            'August Schools',
            'Yvonne van Eylen',
            'Rosalie Verbruggen',
            'Willy Verbruggen',
            'Pil (Joe Meulepas)',
            'Stefan Vermeersch',
            'Jo Gentier',
            'Oscar Bonnevalle',
            'Peter Adriaenssens',
            'Netty Neus',
            'Marc Sleen',
            'René Magritte',
            'Frantisek Liptak',
            'Yves Coumans',
            'Michaela Bartonova',
        ];
        $makersFR = [
            '© Diego Franssens',
            '© Patrick Van Vlerken',
            'Annie Arndt',
            'Anthony Muller',
            'Bernard Van Guysse',
            'Dirk De Strooper',
            'Edmond Schools',
            'Eric Vande Pitte',
            'Herr Sele',
            'Jacqueline Boeykens',
            'Jacques Peeters',
            'Jan Deleu',
            'Jean-Paul Pollet',
            'Knut Kersse',
            'Les élèves de l\'École de Marionnette dirigée par Jef Lettany',
            'Étudiants de l\'académie des beaux-arts de Gand',
            'Louis Contryn',
            'Luis Zornoza Boy',
            'Luk De Bruyker',
            'Michel Bracke',
            'Nicole Rutten',
            'Inconnu',
            'Patrick Bekaert',
            'Paul Verheylenzoon',
            'Rembert De Smedt',
            'René Magritte',
            'Silva Bachvarova',
            'Tsjechisch Atelier',
            'Till De Kock',
            'Wim Van De Vyver',
            'August Schools',
            'Yvonne van Eylen',
            'Rosalie Verbruggen',
            'Willy Verbruggen',
            'Pil (Joe Meulepas)',
            'Stefan Vermeersch',
            'Jo Gentier',
            'Oscar Bonnevalle',
            'Peter Adriaenssens',
            'Netty Neus',
            'Marc Sleen',
            'René Magritte',
            'Frantisek Liptak',
            'Yves Coumans',
            'Michaela Bartonova',
        ];
        $makersEN = [
            '© Diego Franssens',
            '© Patrick Van Vlerken',
            'Annie Arndt',
            'Anthony Muller',
            'Bernard Van Guysse',
            'Dirk De Strooper',
            'Edmond Schools',
            'Eric Vande Pitte',
            'Herr Sele',
            'Jacqueline Boeykens',
            'Jacques Peeters',
            'Jan Deleu',
            'Jean-Paul Pollet',
            'Knut Kersse',
            'Students of the School for Puppetry led by Jef Lettany',
            'Students of the Ghent art academy',
            'Louis Contryn',
            'Luis Zornoza Boy',
            'Luk De Bruyker',
            'Michel Bracke',
            'Nicole Rutten',
            'Unknown',
            'Patrick Bekaert',
            'Paul Verheylenzoon',
            'Rembert De Smedt',
            'René Magritte',
            'Silva Bachvarova',
            'Tsjechisch Atelier',
            'Till De Kock',
            'Wim Van De Vyver',
            'August Schools',
            'Yvonne van Eylen',
            'Rosalie Verbruggen',
            'Willy Verbruggen',
            'Pil (Joe Meulepas)',
            'Stefan Vermeersch',
            'Jo Gentier',
            'Oscar Bonnevalle',
            'Peter Adriaenssens',
            'Netty Neus',
            'Marc Sleen',
            'René Magritte',
            'Frantisek Liptak',
            'Yves Coumans',
            'Michaela Bartonova',
        ];
        foreach ($makersNL as $name)
        {
            Maker::create([
                'name' => $name,
                'language_id' => 'nl',
            ]);
        }
        foreach ($makersFR as $name)
        {
            Maker::create([
                'name' => $name,
                'language_id' => 'fr',
            ]);
        }
        foreach ($makersEN as $name)
        {
            Maker::create([
                'name' => $name,
                'language_id' => 'en',
            ]);
        }
    }
}
