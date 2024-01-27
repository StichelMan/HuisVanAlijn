<?php

namespace Database\Seeders;

use App\Models\Puppet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuppetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = 6;
        $companies = 13;
        $types = 17;


        $puppetsRoom1Nl = [
            [
                'object_number' => '2021-029-005',
                'language_id' => 'nl',
                'name' => 'Stok-staafpop van de kleine prins',
                'room_id' => 1,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 6, // Stok-staafpop
                'date' => '1978',
                'info' => 'In 1978 voert Theater Taptoe voor het eerst ‘De kleine prins’ op, naar het moderne sprookje van Antoine de Saint-Exupéry uit 1943. Het prinsje staat symbool voor de kinderlijke verwondering en verbeeldingskracht. In het stuk wordt hij vertolkt door verschillende soorten poppen. Acteurs spreken de stemmen in. Bij deze stok-staafpop zit het speelkruis onderaan. De armen bewegen via staven.',
            ],
            [
                'object_number' => '2021-029-001',
                'language_id' => 'nl',
                'name' => 'Marionet van de kleine prins',
                'room_id' => 1,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 13, // Marionet
                'date' => '1978',
                'info' => 'In 1978 voert Theater Taptoe voor het eerst ‘De kleine prins’ op, naar het moderne sprookje van Antoine de Saint-Exupéry uit 1943. Het prinsje staat symbool voor de kinderlijke verwondering en verbeeldingskracht. In het stuk wordt hij vertolkt door verschillende soorten poppen. Acteurs spreken de stemmen in. Bij deze marionet zit het speelkruis bovenaan. De ledematen van de pop bewegen via draden.',
            ],
            [
                'object_number' => '2021-029-008',
                'language_id' => 'nl',
                'name' => 'Decorstuk van een planeet',
                'room_id' => 1,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 1, // Decorstuk
                'date' => '1978',
                'info' => 'In 1978 voert Theater Taptoe voor het eerst ‘De kleine prins’ op, naar het moderne sprookje van Antoine de Saint-Exupéry uit 1943. Het speelt zich af in een verzonnen universum vol planeten.',
            ],
            [
                'object_number' => '2021-028-020',
                'language_id' => 'nl',
                'name' => 'Handpop van Faust',
                'room_id' => 1,
                'company_id' => 10, // Hopla (familie Contryn)
                'type_id' => 12, // Handpop
                'date' => '1948-1949',
                'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. Hopla baseert zicht op de tekst van Michel de Ghelderode (1898-1962) en kiest voor handpoppen. Acteurs spreken de stemmen in. Het gladde haar en de gezichten van de poppen doen aan wassen beelden denken.',
            ],
            [
                'object_number' => '2021-028-024',
                'language_id' => 'nl',
                'name' => 'Handpop van de Duivel',
                'room_id' => 1,
                'company_id' => 10, // Hopla (familie Contryn)
                'type_id' => 12, // Handpop
                'date' => '1948-1949',
                'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. Hopla baseert zicht op de tekst van Michel de Ghelderode (1898-1962) en kiest voor handpoppen. Acteurs spreken de stemmen in. Het gezicht van de duivel is asymmetrisch doordat één oog gesloten is. Dit versterkt de dynamiek in zijn gelaatstrekken.',
            ],
            [
                'object_number' => 'P1850111',
                'language_id' => 'nl',
                'name' => 'Staafpop van Faust',
                'room_id' => 1,
                'company_id' => 12, // Mechels Stadspoppentheater (familie Contryn)
                'type_id' => 15, // Staafpop
                'date' => 'Eind jaren 1960',
                'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. Eind jaren 1960 kiest het Mechels Stadspoppentheater voor de tekst van Gerard Walschap (1898-1989) en speelt met staafpoppen. De grote figuren zijn ontworpen door politiek karikaturist Pil. Deze Faust oogt hoekig en kleurrijk. Het hoofd is gemaakt op een basis van piepschuim.',
            ],
            [
                'object_number' => 'P185112',
                'language_id' => 'nl',
                'name' => 'Staafpop van Mephistopheles',
                'room_id' => 1,
                'company_id' => 12, // Mechels Stadspoppentheater (familie Contryn)
                'type_id' => 15, // Staafpop
                'date' => 'Eind jaren 1960',
                'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. Eind jaren 1960 kiest het Mechels Stadspoppentheater voor de tekst van Gerard Walschap (1898-1989) en speelt met staafpoppen. De grote figuren ogen hoekig en kleurrijk. Ze zijn ontworpen door politiek karikaturist Pil, die zich voor deze Mephistopheles laat inspireren door het uiterlijk van politicus Camille Huysmans.',
            ],
            [
                'object_number' => '2021-028-100',
                'language_id' => 'nl',
                'name' => 'Masker van een goede geest',
                'room_id' => 1,
                'company_id' => 13, // School voor poppenspel (familie Contryn)
                'type_id' => 2, // Masker
                'date' => '1974',
                'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. In 1974 maken leerlingen van de School voor poppenspel o.l.v. docent Jef Lettany experimentele figuren in de vorm van maskers voor hun versie.',
            ],
            [
                'object_number' => '2021-028-101',
                'language_id' => 'nl',
                'name' => 'Masker van een slechte geest',
                'room_id' => 1,
                'company_id' => 13, // School voor poppenspel (familie Contryn)
                'type_id' => 2, // Masker
                'date' => '1974',
                'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. In 1974 maken leerlingen van de School voor poppenspel o.l.v. docent Jef Lettany experimentele figuren in de vorm van maskers voor hun versie.',
            ],
            [
                'object_number' => '1965-089-035',
                'language_id' => 'nl',
                'name' => 'Stangpop van Pierke',
                'room_id' => 1,
                'company_id' => 6, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'Bij het Spelleke van de Muide (1922-1942) krijgt Pierke, voordien vaak Pierrot, een prominente rol als rebelse maar goedhartige held. Een klassiek stuk is ‘Reis naar de maan’ waarin Pierke met een kanon naar de maan wordt gestuurd en hij bij terugkeer als held wordt onthaald. In tegenstelling tot zijn voorganger heeft het huidige Pierke geen snor meer en is hij een echt Gents jongetje.',
            ],
            [
                'object_number' => '2022-007-230',
                'language_id' => 'nl',
                'name' => 'Decorstuk van een maan',
                'room_id' => 1,
                'company_id' => 9, // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 1, // Decorstuk
                'date' => 'Onbekend',
                'info' => 'De collectie van poppen, attributen en decorstukken van Pierke van Alijn gaan al jarenlang mee. Ze zijn niet gelinkt aan één stukje, maar komen voor in meerdere opvoeringen, zoals dit decorstuk van een vriendelijke maan.',
            ],
            [
                'object_number' => '2022-007-105',
                'language_id' => 'nl',
                'name' => 'Stangpop van een maanmannetje',
                'room_id' => 1,
                'company_id' => 9, // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 16, // Stangpop
                'date' => '1942-vandaag',
                'info' => 'Oorspronkelijk worden de maanmannetjes uit ‘Reis naar de maan’ bij elke voorstelling uit echte groenten gemaakt. Wat later besluiten de spelers toch poppen te gebruiken. Wanneer de spelers van het Spelleke van Folklore het stuk niet langer opvoeren, krijgen de poppen nieuwe rollen. Bij Pierke van Alijn zijn het Frosti en Zero, met nieuwe kleuren en kledij.',
            ],

        ];
        /*
           [
               'object_number' => 'V_2021-028-020',
               'name' => 'Handpop van Faust',
               'room_id' => 1,
               'company_id' => 6, // Hopla (familie Contryn)
               'type_id' => 4, // Handpop
               'date' => '1948-1949',
               'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. Hopla baseert zich op de tekst van Michel de Ghelderode (1898-1962) en kiest voor handpoppen. Acteurs spreken de stemmen in. Het gladde haar en de gezichten van de poppen doen aan wassen beelden denken.',
           ],
           [
               'object_number' => 'V_2021-028-024',
               'name' => 'Handpop van de Duivel',
               'room_id' => 1,
               'company_id' => 6, // Hopla (familie Contryn)
               'type_id' => 4, // Handpop
               'date' => '1948-1949',
               'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. Hopla baseert zich op de tekst van Michel de Ghelderode (1898-1962) en kiest voor handpoppen. Acteurs spreken de stemmen in. Het gezicht van de duivel is asymmetrisch doordat één oog gesloten is. Dit versterkt de dynamiek in zijn gelaatstrekken.',
           ],
           [
               'object_number' => 'V_2021-029-001',
               'name' => 'Marionet van de kleine prins',
               'room_id' => 1,
               'company_id' => 7, // Theater Taptoe
               'type_id' => 5, // Marionet
               'date' => '1978',
               'info' => 'In 1978 voert Theater Taptoe voor het eerst ‘De kleine prins’ op, naar het moderne sprookje van Antoine de Saint-Exupéry uit 1943. Het prinsje staat symbool voor de kinderlijke verwondering en verbeeldingskracht. In het stuk wordt hij vertolkt door verschillende soorten poppen. Acteurs spreken de stemmen in. Bij deze marionet zit het speelkruis bovenaan. De ledematen van de pop bewegen via draden.',
           ],
           [
               'object_number' => 'V_P185112',
               'name' => 'Staafpop van Mephistopheles',
               'room_id' => 1,
               'company_id' => 12, // Mechels Stadspoppentheater (familie Contryn)
               'type_id' => 21, // Staafpop
               'date' => 'Eind jaren 1960',
               'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. Eind jaren 1960 kiest het Mechels Stadspoppentheater voor de tekst van Gerard Walschap (1898-1989) en speelt met staafpoppen. De grote figuren ogen hoekig en kleurrijk. Ze zijn ontworpen door politiek karikaturist Pil, die zich voor deze Mephistopheles laat inspireren door het uiterlijk van politicus Camille Huysmans.',
           ],
           [
               'object_number' => 'V_1965-089-035',
               'name' => 'Stangpop van Pierke',
               'room_id' => 1,
               'company_id' => 13, // Spelleke van de Muide
               'type_id' => 22, // Stangpop,
               'date' => '1922-1942',
               'info' => 'Bij het Spelleke van de Muide (1922-1942) krijgt Pierke, voordien vaak Pierrot, een prominente rol als rebelse maar goedhartige held. Een klassiek stuk is ‘Reis naar de maan’ waarin Pierke met een kanon naar de maan wordt gestuurd en hij bij terugkeer als held wordt onthaald. In tegenstelling tot zijn voorganger heeft het huidige Pierke geen snor meer en is hij een echt Gents jongetje.',
           ],*/
        $puppetsRoom2Nl = [
            [
                'object_number' => '2022-006-017',
                'language_id' => 'nl',
                'name' => 'Ontwerp voor scenografie van ‘Don G.’',
                'room_id' => 2,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 3, // Ontwerp
                'date' => '2004',
                'info' => 'Met ‘Don G’ brengt Theater Taptoe muziek- en figurentheater op de muziek van Mozart (1756-1791). In zwarte kledij gehulde spelers dragen in deze productie kleurrijke figuren en maskers. De voorstelling is de eerste in een reeks samenwerkingen met blazersensemble I Solisti del Vento.',
            ],
            [
                'object_number' => '2022-006-029_004',
                'language_id' => 'nl',
                'name' => 'Kostuumontwerpen voor ‘Don G.’',
                'room_id' => 2,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 3, // Kostuumontwerpen
                'date' => '2004',
                'info' => 'Met ‘Don G ‘brengt Theater Taptoe muziek- en figurentheater op de muziek van Mozart (1756-1791). In zwarte kledij gehulde spelers dragen in deze productie kleurrijke figuren en maskers. De voorstelling is de eerste in een reeks samenwerkingen met blazersensemble I Solisti del Vento.',
            ],
            [
                'object_number' => '2022-006-035-003',
                'language_id' => 'nl',
                'name' => 'Scenografieontwerp voor ‘De dag dat Karageus… (aankwam)’',
                'room_id' => 2,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 3, // Scenografieontwerp
                'date' => '1986',
                'info' => '‘De dag dat Karageus…(aankwam)’ is gebaseerd op een stripverhaal van Knut Kersse en Freek Neirynck. Het gaat over een poppenspeler die vrede wil brengen in een land in oorlog. Voor het stuk wordt Luk De Bruyker ingewijd in het Turkse schimmenspel door Hayali Torun Çelebi. Niet veel later krijgt De Bruyker zelf de bijzondere titel van Hayali, grootmeester in het Turkse schimmenspel.',
            ],
            [
                'object_number' => '2022-006-037-016',
                'language_id' => 'nl',
                'name' => 'Scenografieontwerp voor ‘De dag dat Karageus… (aankwam)’',
                'room_id' => 2,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 3, // Scenografieontwerp
                'date' => '1986',
                'info' => '‘De dag dat Karageus…(aankwam)’ is gebaseerd op een stripverhaal van Knut Kersse en Freek Neirynck. Het gaat over een poppenspeler die vrede wil brengen in een land in oorlog. Voor het stuk wordt Luk De Bruyker ingewijd in het Turkse schimmenspel door Hayali Torun Çelebi. Niet veel later krijgt De Bruyker zelf de bijzondere titel van Hayali, grootmeester in het Turkse schimmenspel.',
            ],
            [
                'object_number' => '2022-006-065',
                'language_id' => 'nl',
                'name' => 'Decorontwerp voor ‘Lène Maréchal, de revue van een proeverigge’',
                'room_id' => 2,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 3, // Decorontwerp
                'date' => '1983',
                'info' => 'Met dit stuk brengt Theater Taptoe een ode aan Hélène Maréchal (1893-1970), een icoon uit het Gentse volkstheater. Ze was zangeres, actrice en cabaretière, maar zette zich tijdens haar carrière ook in voor allerlei goede doelen. De productie is een mix van poppenspel, sketches en zang.',
            ],
            [
                'object_number' => '2022-006-074-002',
                'language_id' => 'nl',
                'name' => 'Decorontwerp voor ‘De maan schildert sterren boven Bursa’',
                'room_id' => 2,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 3, // Decorontwerp
                'date' => '2001',
                'info' => '‘De maan schildert sterren boven Bursa’ is een sociaal-artistieke voorstelling van Theater Taptoe voor kinderen met een migratieachtergrond. De hoofdpersonages uit het Turkse schimmenspel, Karagöz en Haçivat, krijgen een prominente rol als acteur en figuur. Luk De Bruyker draagt zelf de bijzondere titel van Hayali, grootmeester in het Turkse schimmenspel.',
            ],
            [
                'object_number' => '2022-006-103',
                'language_id' => 'nl',
                'name' => 'Ontwerp van figuren uit ‘Beerenbodegem’',
                'room_id' => 2,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 3, // Ontwerp
                'date' => '1996/1997',
                'info' => '‘Beerenbodegem’ is een hedendaags sprookje geschreven door Freek Neirynck en Paul Berkenmann. In het stuk wordt een vredig berendorp verstoord door Herman Stressman, een handelsreiziger in elektronisch speelgoed en videospelletjes. De decors en kostuums zijn ontworpen door de bekende Nederlandse illustratrice van kinderboeken Nicole Rutten.',
            ],
            [
                'object_number' => 'FO-0122-047',
                'language_id' => 'nl',
                'name' => 'Ontwerptekening van de figuur Faust',
                'room_id' => 2,
                'company_id' => 1, // Hopla
                'type_id' => 3, // Ontwerptekening
                'date' => 'Ca. 1948-1949',
                'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. In de eerste versie kiest Hopla voor handpoppen. Acteurs spreken de stemmen in. Het gladde haar en de gezichten van de poppen doen aan wassen beelden denken.',
            ],
            [
                'object_number' => 'FO-0122-056',
                'language_id' => 'nl',
                'name' => 'Ontwerptekening van een duivel of kwade geest',
                'room_id' => 2,
                'company_id' => 7, // Spelleken van Ulenspiegel
                'type_id' => 3, // Ontwerptekening
                'date' => 'Begin jaren 1940',
                'info' => 'Ontwerp voor een pop uit ‘Mieke Miserie’ van het Spelleken van Ulenspiegel. Mieke Miserie krijgt onverwachts bezoek van de Dood. Omdat ze nog niet wil sterven, besluit ze de Dood in de val te lokken. Hij wordt gevangen in haar betoverde perenboom en kan alleen op haar voorwaarden vrijkomen. Zo blijft Mieke leven, maar samen met haar ook alle miserie in de wereld. Het stuk wordt opgevoerd met marionetten aan draden die tot twee meter lang zijn.',
            ],
            [
                'object_number' => 'FO-0122-062',
                'language_id' => 'nl',
                'name' => 'Ontwerptekening van de Dood en Vrouw Deugd',
                'room_id' => 2,
                'company_id' => 1, // Hopla
                'type_id' => 3, // Ontwerptekening
                'date' => 'Begin jaren 1960',
                'info' => 'Ontwerpen voor staafpoppen uit ‘Het esbatement van de appelboom’. Dit stuk is gebaseerd op een tekst van Herman Teirlinck (1879-1967). In dit verhaal komt de Dood Boer Goedrond vroegtijdig halen, maar Goedrond lokt hem in de val. Ook de Duivel is hij te slim af. De kleurrijke ontwerpen voor de staafpoppen en decors zijn van de hand van politiek-karikaturist Pil (1915-2007). De Duitse poppenmaker Till De Kock (1915-2010) voert ze uit.',
            ],
            [
                'object_number' => 'FO-0122-081',
                'language_id' => 'nl',
                'name' => 'Decorontwerp voor het esbatement van de appelboom',
                'room_id' => 2,
                'company_id' => 1, // Hopla
                'type_id' => 3, // Decorontwerp
                'date' => 'Begin jaren 1960',
                'info' => 'Decorontwerp voor ‘Het esbatement van de appelboom’. Dit stuk is gebaseerd op een tekst van Herman Teirlinck (1879-1967). In dit verhaal komt de Dood Boer Goedrond vroegtijdig halen, maar Goedrond lokt hem in de val. Ook de Duivel is hij te slim af. De kleurrijke ontwerpen voor de staafpoppen en decors zijn van de hand van politiek-karikaturist Pil (1915-2007). De Duitse poppenmaker Till De Kock (1915-2010) voert ze uit.',
            ],
            [
                'object_number' => 'ontwerp-003',
                'language_id' => 'nl',
                'name' => 'Ontwerpen van Stefan Vermeersch',
                'room_id' => 2,
                'company_id' => 6, // Spelleke van Folklore
                'type_id' => 3, // Ontwerp
                'date' => 'Begin jaren 1940',
                'info' => 'Het Spelleke van de Muide (1922-1942) raakt in 1932 verweven met het Folkloremuseum in Gent. In 1942 meent conservator Julien Boes dat dit poppenspel toe is aan vernieuwing. Onder zijn impuls ontstaat het Spelleke van Folklore. Stefaan Vermeersch ontwerpt nieuwe figuren. Ze zijn moderner van uitzicht en dragen zijn uitgesproken stijl. Bernard Van Guyse snijdt de koppen.',
            ],
        ];
        $puppetsRoom3Nl = [
            [
                'object_number' => '2021-029-038',
                'language_id' => 'nl',
                'name' => 'Stokpop van Juffrouw Symforosa, een begijntje',
                'room_id' => 3,
                'company_id' => 1, // Theater Taptoe
                'type_id' => 17, // Stokpop
                'date' => '1984',
                'info' => 'Theater Taptoe maakt ‘De zeer schone miniatuur van Juffrouw Symforosa, begijntje’ in opdracht van het Gentse stadsbestuur dat de Gentse begijnhoven in de kijker wil zetten. Het stuk is gebaseerd op tekst van Felix Timmermans. Stokpopjes bewegen in een maquette, volgens de Dubelovski techniek. Verteller en figuren staan samen op scène.',
            ],
            [
                'object_number' => '2021-029-039',
                'language_id' => 'nl',
                'name' => 'Stokpop van een processiegroep',
                'room_id' => 3,
                'company_id' => 1, // Theater Taptoe
                'type_id' => 17, // Stokpop
                'date' => '1985',
                'info' => 'Theater Taptoe maakt ‘De zeer schone miniatuur van Juffrouw Symforosa, begijntje’ in opdracht van het Gentse stadsbestuur dat de Gentse begijnhoven in de kijker wil zetten. Het stuk is gebaseerd op tekst van Felix Timmermans. Stokpopjes bewegen in een maquette, volgens de Dubelovski techniek. Verteller en figuren staan samen op scène.',
            ],
            [
                'object_number' => '1965-089-058',
                'language_id' => 'nl',
                'name' => 'Stangpop van een pater',
                'room_id' => 3,
                'company_id' => 2, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'Onderpastoor Joris Vandenbroucke richt in 1922 het Spelleke van de Muide op om de vrije tijd van kinderen uit de arbeiderswijk waardevol in te vullen. In het begin reist het Spelleke rond en speelt het onder meer in colleges. De stukjes volgen een vast stramien. Op humoristische wijze brengen ze een opvoedende en katholieke boodschap. Waarschijnlijk is deze stangpop pater Vanderhaegen of de lekenbroeder Willem van Saeftinge.',
            ],
            [
                'object_number' => '2021-028-019',
                'language_id' => 'nl',
                'name' => 'Handpop van de pastoor',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 12, // Handpop
                'date' => 'Eind jaren 1940',
                'info' => 'In deze korte klucht besluit een man zijn onhebbelijke vrouw alleen nog te antwoorden met de woorden \'nu noch\' (toe maar). De pastoor en de buurman moeten de gemoederen bedaren. De personages worden vertolkt door vinnige handpoppen. Uiteindelijk is het de pastoor die met de oplossing komt.',
            ],
            [
                'object_number' => '1965-089-043',
                'language_id' => 'nl',
                'name' => '(stang)pop van een varken',
                'room_id' => 3,
                'company_id' => 2, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'Op humoristische wijze brengt het Spelleke van de Muide vanaf 1922 een opvoedende en katholieke boodschap. Dit houten varken uit hun collectie staat vermoedelijk symbool voor het varken van Sint-Antonius, de eerste christelijke kluizenaar en grondlegger van het kloosterleven. Om de armen en zieken eten te verschaffen, kweekten de Sint-Antoniusbroeders varkens. Op afbeeldingen is Sint-Antonius vaak te zien met een varkentje als metgezel.',
            ],
            [
                'object_number' => '2021-028-071',
                'language_id' => 'nl',
                'name' => 'Bekpop van een leeuw',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 11, // Bekpop
                'date' => 'Ca. 1955',
                'info' => 'De Duitse poppenmaker Till De Kock maakt voor Hopla een hele reeks herkenbare figuren. Vooral pluizige en tekenfilmachtige diertjes zijn erg populair bij kinderen. De poppen passen in een speelse kindercultuur, die steeds minder moraliserend wordt. Deze leeuw kan zelfs roken. Een speler blaast de rook van een sigaret rechtstreeks in een buisje onderaan, waarna de rook er bovenaan via de bek van de leeuw uitkomt.',
            ],
            [
                'object_number' => '2021-028-068',
                'language_id' => 'nl',
                'name' => 'Bek- en stokpop van een koe',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 5, // Bek- en stokpop
                'date' => 'Ca. 1955',
                'info' => 'De Duitse poppenmaker Till De Kock maakt voor Hopla een hele reeks herkenbare figuren. Vooral pluizige en tekenfilmachtige diertjes zijn erg populair bij kinderen. De poppen passen in een speelse kindercultuur, die steeds minder moraliserend wordt. Deze pop wordt met twee handen bespeeld.',
            ],
            [
                'object_number' => '2021-028-086',
                'language_id' => 'nl',
                'name' => 'Bekpop van een hond',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 11, // Bekpop
                'date' => 'Ca. 1955',
                'info' => 'Hopla wil zich graag tot kinderen richten. Hand- en bekpoppen van pluizige en tekenfilmachtige dieren zijn hiervoor ideaal. Deze hond komt uit een reeks poppen die Annie Arndt maakt voor Hopla. Die samenwerking is uniek voor Vlaanderen, aangezien zij ook actief is bij het internationaal befaamde Hohnsteiner Puppenspiele van poppenmaker Max Jacob.',
            ],
            [
                'object_number' => '2021-028-063',
                'language_id' => 'nl',
                'name' => 'Staafpop van een rups',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 15, // Staafpop
                'date' => 'Jaren 1950 - 1960',
                'info' => 'Hopla wil zich graag tot kinderen richten. Hand- en bekpoppen van tekenfilmachtige dieren doen het goed. Dit donzige rupsje is bijna doorzichtig. Deze figuur is door Louis Contryn en zijn echtgenote Jacqueline Boeykens gemaakt. Dat is uitzonderlijk, want zij laten hun poppen op dat moment doorgaans door anderen maken.',
            ],
            [
                'object_number' => '2021-028-077',
                'language_id' => 'nl',
                'name' => 'Spin aan een draadje',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 4,
                'date' => 'Ca. 1955',
                'info' => 'De Duitse poppenmaker Till de Kock is jarenlang hoofdleverancier voor Hopla. Naast poppen voor specifieke producties maakt hij ook een hele reeks herkenbare figuren en dieren in grote oplage, zoals deze spin uit de basisreeks van dieren.',
            ],
            [
                'object_number' => '2021-029-046',
                'language_id' => 'nl',
                'name' => 'Stokpop van een meeuw',
                'room_id' => 3,
                'company_id' => 1, // Theater Taptoe
                'type_id' => 17, // Stokpop
                'date' => '2004',
                'info' => 'Meeuw uit ‘Sjoerd zegt FOERT!’, een woordloze productie voor jonge kinderen. In het stuk experimenteert Theater Taptoe met het zichtbaar maken van techniek en beweging, zonder magie te verliezen. De voorstelling is een groot internationaal succes. Deze stokpop met ingenieuze mechaniek lijkt levensecht in zijn bewegingen.',
            ],
            [
                'object_number' => '2022-007-089',
                'language_id' => 'nl',
                'name' => 'Stangpop van een vermenselijkte vos',
                'room_id' => 3,
                'company_id' => 2, // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 16, // Stangpop
                'date' => '1942 - vandaag',
                'info' => 'Bij het oprichten van het Spelleke van Folklore in 1942 ontwerpt Stefan Vermeersch nieuwe poppen, die gesneden worden door Bernard Van Guyse. De poppen hebben een uitgesproken moderne stijl. Naast menselijke figuren zijn er ook dierenkoppen. Deze vos is de verdierlijkte versie van een sluw personage of de uitkomst van een jammerlijke betovering.',
            ],
            [
                'object_number' => '2021-028-093',
                'language_id' => 'nl',
                'name' => 'Staafpop van God',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 15, // Staafpop
                'date' => '1965',
                'info' => 'Hopla voert de middeleeuwse klucht ‘Het esbatement van de appelboom’ op met staafpoppen, naar tekst van Herman Teirlinck. Boer Goedrond en Vrouw Deugd smeken God om hun mooie appelboom te behoeden voor dieven. Iedereen die een appel steelt of slechte bedoelingen heeft, blijft vastzitten in de boom. Ook de duivel en de Dood komen vast te zitten. God is hier afgebeeld als lieve opa met een baard van watten. Over zijn witte jurk draagt hij een poncho in de kleuren van de regenboog.',
            ],
            [
                'object_number' => '1965-089-016',
                'language_id' => 'nl',
                'name' => 'Stangpop van Filemon de agent',
                'room_id' => 3,
                'company_id' => 2, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'De spelers van het Spelleke van de Muide beschikken over een vaste collectie poppen. Typische, herkenbare figuren zoals een agent, een pastoor of een meid komen voor in meerdere stukjes. De opvoeringen zijn zelden identiek omwille van improvisatie en interactie met het publiek.',
            ],
            [
                'object_number' => '1965-089-047',
                'language_id' => 'nl',
                'name' => 'Stangpop van een soldaat',
                'room_id' => 3,
                'company_id' => 2, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'De spelers van Spelleke van de Muide beschikken over een vaste collectie poppen. Typische, herkenbare figuren zoals een agent, een pastoor of een meid komen voor in meerdere stukjes. De opvoeringen zijn zelden identiek omwille van improvisatie en interactie met het publiek.',
            ],
            [
                'object_number' => '1965-089-070',
                'language_id' => 'nl',
                'name' => 'Stangpop van een edelman',
                'room_id' => 3,
                'company_id' => 2, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'De spelers van Spelleke van de Muide beschikken over een vaste collectie poppen. Typische, herkenbare figuren, zoals een agent, een pastoor of een meid komen voor in meerdere stukjes. Deze pop van een edelman krijgt in de klassieker ‘Reis naar de maan’ de rol van Baron De la Kethulle (of Kathulle). De opvoeringen zijn zelden identiek omwille van improvisatie en interactie met het publiek.',
            ],
            [
                'object_number' => '1965-089-072',
                'language_id' => 'nl',
                'name' => 'Stangpop van een meid (Pelagie of Katrien)',
                'room_id' => 3,
                'company_id' => 2, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'De spelers van Spelleke van de Muide beschikken over een vaste collectie poppen. Herkenbare of klassieke figuren zoals een agent, een pastoor of een meid komen voor in meerdere stukjes. De opvoeringen zijn zelden identiek omwille van improvisatie en interactie met het publiek. Alle spelers zijn mannen. Zij vertolken dus ook alle vrouwenrollen, al zijn dat er niet zo veel.',
            ],
            [
                'object_number' => '2021-028-044',
                'language_id' => 'nl',
                'name' => 'Handpop van een jongen (basisreeks)',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 12, // Handpop
                'date' => 'Ca. 1955',
                'info' => 'De Duitse poppenmaker Till De Kock is jarenlang hoofdleverancier voor Hopla. Naast poppen voor specifieke producties maakt hij ook een hele reeks personages in grote oplage. Typische, herkenbare figuren zoals een prinses, een kok of een ridder zijn inzetbaar in meerdere stukjes. Hopla verkoopt ze ook aan lokale scholen en gezelschappen.',
            ],
            [
                'object_number' => '2021-028-050',
                'language_id' => 'nl',
                'name' => 'Handpop van een meisje (basisreeks)',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 12, // Handpop
                'date' => 'Ca. 1955',
                'info' => 'De Duitse poppenmaker Till De Kock is jarenlang hoofdleverancier voor Hopla. Naast poppen voor specifieke producties maakt hij ook een hele reeks personages in grote oplage. Typische, herkenbare figuren zoals een prinses, een kok of een ridder zijn inzetbaar in meerdere stukjes. Hopla verkoopt ze ook aan lokale scholen en gezelschappen.',
            ],
            [
                'object_number' => '2021-028-058',
                'language_id' => 'nl',
                'name' => 'Handpop van een prinses (basisreeks)',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 12, // Handpop
                'date' => 'Ca. 1955',
                'info' => 'De Duitse poppenmaker Till De Kock is jarenlang hoofdleverancier voor Hopla. Naast poppen voor specifieke producties maakt hij ook een hele reeks personages in grote oplage. Typische, herkenbare figuren zoals een prinses, een kok of een ridder zijn inzetbaar in meerdere stukjes. Hopla verkoopt ze ook aan lokale scholen en gezelschappen.',
            ],
            [
                'object_number' => '2021-028-057',
                'language_id' => 'nl',
                'name' => 'Handpop van een machinist of politieagent (basisreeks)',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 12, // Handpop
                'date' => 'Ca. 1955',
                'info' => 'De Duitse poppenmaker Till De Kock is jarenlang hoofdleverancier voor Hopla. Naast poppen voor specifieke producties maakt hij ook een hele reeks personages in grote oplage. Typische, herkenbare figuren zoals een prinses, een kok of een ridder zijn inzetbaar in meerdere stukjes. Hopla verkoopt ze ook aan lokale scholen en gezelschappen.',
            ],
            [
                'object_number' => '2021-028-053',
                'language_id' => 'nl',
                'name' => 'Handpop van een kok (basisreeks)',
                'room_id' => 3,
                'company_id' => 1, // Hopla
                'type_id' => 12, // Handpop
                'date' => 'Ca. 1955',
                'info' => 'De Duitse poppenmaker Till De Kock is jarenlang hoofdleverancier voor Hopla. Naast poppen voor specifieke producties maakt hij ook een hele reeks personages in grote oplage. Typische, herkenbare figuren zoals een prinses, een kok of een ridder zijn inzetbaar in meerdere stukjes. Hopla verkoopt ze ook aan lokale scholen en gezelschappen.',
            ],
            [
                'object_number' => '2021-029-168',
                'language_id' => 'nl',
                'name' => 'Staafpop van een jongetje',
                'room_id' => 3,
                'company_id' => 1, // Theater Taptoe
                'type_id' => 15, // Staafpop
                'date' => '2008',
                'info' => 'Theater Taptoe werkt voor ‘Doctor Frankenstein’ een tweede keer samen met kunstenaar Luis Zornoza Boy. De dromerige figuren zijn geïnspireerd op de arte povera, waarin rommel functioneel gebruikt wordt.',
            ],
            [
                'object_number' => '2021-029-162',
                'language_id' => 'nl',
                'name' => 'Bekpop van een punker',
                'room_id' => 3,
                'company_id' => 1, // Theater Taptoe
                'type_id' => 11, // Bekpop
                'date' => '1987',
                'info' => 'In de reggaemusical ‘Reggae Peggy’ neemt Theater Taptoe commerciële tv-producties met poppen op de korrel. Ter voorbereiding dompelen de makers en spelers zich helemaal onder in de wereld van the Muppets. Ze gaan zelfs in de leer bij de producenten en poppenmakers van ‘the Muppet Show.',
            ],
        ];
        $puppetsRoom4Nl = [
        [
            'object_number' => '2021-028-039',
            'language_id' => 'nl',
            'name' => 'Handpop van een dierentemmer',
            'room_id' => 4,
            'company_id' => 1, // Hopla
            'type_id' => 12, // Handpop
            'date' => 'Ca. 1955',
            'info' => 'De Duitse poppenmaker Till De Kock is jarenlang hoofdleverancier voor Hopla. Naast poppen voor specifieke producties maakt hij ook een hele reeks herkenbare personages in grote oplage. Typische figuren zoals een prinses, een kok of een ridder zijn inzetbaar in meerdere stukjes. Ook enkele exotische, stereotiepe figuren maken deel uit van de basisreeks. Deze dierentemmer doet denken aan afbeeldingen van het Ottomaanse Rijk die vooral in de 19de eeuw in het Westen circuleerden.',
        ],
        [
            'object_number' => '2022-007-031',
            'language_id' => 'nl',
            'name' => 'Stangpop van Fu Manchu',
            'room_id' => 4,
            'company_id' => 2, // Spelleke van Folklore
            'type_id' => 16, // Stangpop
            'date' => 'Jaren 1980-1990',
            'info' => 'De spelers van het Spelleke van Folklore beschikken over een vaste collectie poppen. Typische, herkenbare figuren zoals een prinses of een soldaat zijn inzetbaar in meerdere stukjes. Ook enkele stereotiepe figuren maken daar deel van uit, zoals deze Chinese knecht, Fu Manchu. Vooral de gele huidskleur en overdreven ‘spleetogen’ maken de Chinese man tot een stereotiepe karikatuur.',
        ],
        [
            'object_number' => '2021-028-036',
            'language_id' => 'nl',
            'name' => 'Handpop van een ‘Eskimo’',
            'room_id' => 4,
            'company_id' => 1, // Hopla
            'type_id' => 12, // Handpop
            'date' => 'Ca. 1955',
            'info' => 'De Duitse poppenmaker Till De Kock is jarenlang hoofdleverancier voor Hopla. Naast poppen voor specifieke producties maakt hij ook een reeks personages in grote oplage. Typische, herkenbare figuren zoals een prinses, een kok of een ridder zijn inzetbaar in meerdere stukjes. Ook enkele stereotiepe figuren maken deel uit van de basisreeks. Vooral de gele huidskleur en overdreven ‘spleetogen’ maken deze ‘eskimo’ tot een stereotiepe karikatuur. De pop wordt benoemd als ‘eskimo’, een benaming die vandaag ter discussie staat, vooral bij de Inuit van Canada en Groenland.',
        ],
        [
            'object_number' => '2021-029-030',
            'language_id' => 'nl',
            'name' => 'Handpop van een Sultan',
            'room_id' => 4,
            'company_id' => 3, // Theater Taptoe
            'type_id' => 12, // Handpop
            'date' => '1981',
            'info' => 'In ‘Thomas zit te dromen in de klas’ spelen acteurs en poppen van Theater Taptoe voor het eerst samen in een theaterdecor. In de dromen van Thomas verschijnen allerlei historische, exotische en magische figuren. Zo ook deze Sultan die doet denken aan de verhalen van Duizend-en-een-nacht. Het is een indrukwekkende handpop op een vliegend tapijt. Het stuk betekent voor Taptoe de internationale doorbraak en het zet de toon voor de daaropvolgende jaren.',
        ],
        [
            'object_number' => '1965-089-007',
            'language_id' => 'nl',
            'name' => 'Stangpop van Afrikaanse koning Boela',
            'room_id' => 4,
            'company_id' => 2, // Spelleke van de Muide
            'type_id' => 16, // Stangpop
            'date' => '1922-1942',
            'info' => 'De spelers van het Spelleke van de Muide beschikken over een vaste collectie poppen. Typische, herkenbare figuren zoals een prinses of een soldaat zijn inzetbaar in meerdere stukjes. Ook enkele stereotiepe figuren maken daar deel van uit. Deze Afrikaanse koning met de naam Boela wordt afgebeeld met kroon en juwelen. In meerdere stukken wordt hij opgevoerd als koning van de Moren, wat lange tijd een synoniem was voor (zwarte) Afrikaan.',
        ],
        [
            'object_number' => '1943-061',
            'language_id' => 'nl',
            'name' => 'Stangpop van een Afrikaanse jongen',
            'room_id' => 4,
            'company_id' => 2, // Spelleke van Folklore
            'type_id' => 16, // Stangpop
            'date' => 'Jaren 1940-1950',
            'info' => 'De spelers van het Spelleke van Folklore beschikken over een vaste collectie poppen. Herkenbare, typische figuren zoals een prinses of een soldaat zijn inzetbaar in meerdere stukjes. Ook enkele stereotiepe figuren maken daar deel van uit. Deze Afrikaanse jongen is zeer karikaturaal afgebeeld. Hij doet denken aan de manier waarop de Congolezen in ‘Kuifje in Congo’ worden afgebeeld. Dat stripverhaal dateert van rond dezelfde periode en is doorspekt van koloniale propaganda en racistische stereotypes.',
        ],
        [
            'object_number' => '2022-007-076',
            'language_id' => 'nl',
            'name' => 'Stangpop van een Afrikaanse jongen',
            'room_id' => 4,
            'company_id' => 2, // Spelleke van Folklore
            'type_id' => 16, // Stangpop
            'date' => 'Onbekend',
            'info' => 'De spelers van het Spelleke van de Muide en Spelleke van Folklore beschikken over een vaste collectie poppen. Typische, herkenbare figuren zoals een prinses of een soldaat zijn inzetbaar in meerdere stukjes. Ook enkele stereotiepe figuren maken daar deel van uit, zoals deze Afrikaanse jongen. Hij doet denken aan typische afbeeldingen van een Afrikaanse ‘boy’, zoals het huispersoneel van rijke kolonialen werd genoemd.',
        ],
        [
            'object_number' => '1965-089-008',
            'language_id' => 'nl',
            'name' => 'Stangpop van Kabouter Bim',
            'room_id' => 4,
            'company_id' => 2, // Spelleke van de Muide
            'type_id' => 16, // Stangpop
            'date' => '1922-1942',
            'info' => 'De spelers van het Spelleke van de Muide beschikken over een vaste collectie poppen. Ook klassieke sprookjesfiguren zoals kabouters, reuzen en heksen maken er deel van uit. Deze kabouter Bim met de groene muts heeft nog twee collega kabouters: Bam met de blauwe en Boum met de rode muts. Ze duiken op in het bos waar Pierke op avontuur is.',
        ],
        [
            'object_number' => '2021-029-032',
            'language_id' => 'nl',
            'name' => 'Marionet van een zeemeermin',
            'room_id' => 4,
            'company_id' => 3, // Theater Taptoe
            'type_id' => 13, // Marionet
            'date' => '1981',
            'info' => 'In ‘Thomas zit te dromen’ in de klas spelen acteurs en poppen van Theater Taptoe voor het eerst samen in een theaterdecor. Personages worden ontdubbeld in acteurs en verschillende soorten poppen. In de dromen van Thomas verschijnen allerlei historische, exotische en magische figuren. Zo ook deze zeemeermin in de vorm van een marionet. Het stuk betekent voor Taptoe de internationale doorbraak en het zet de toon voor de daaropvolgende jaren.',
        ],
        [
            'object_number' => '2021-029-067',
            'language_id' => 'nl',
            'name' => 'Marionet van Neptunus',
            'room_id' => 4,
            'company_id' => 3, // Marionettentheater Taptoe
            'type_id' => 13, // Marionet
            'date' => '1973',
            'info' => 'In de beginjaren van Marionettentheater Taptoe worden vooral sprookjes opgevoerd, zoals ‘Het kleine zeemeerminnetje’, naar Hans Christian Andersen. Deze Neptunus is de god van de zee, gebaseerd op de Romeinse mythologie. In het stuk is hij koning en tevens de vader van het zeemeerminnetje.',
        ],
        [
            'object_number' => '2021-029-059',
            'language_id' => 'nl',
            'name' => 'Marionet van een fee',
            'room_id' => 4,
            'company_id' => 3, // Marionettentheater Taptoe
            'type_id' => 13, // Marionet
            'date' => '1980',
            'info' => 'In de beginjaren van Marionettentheater Taptoe worden vooral sprookjes opgevoerd, zoals ‘Assepoester’, naar de gebroeders Grimm. Deze goede fee gebruikt haar toverkracht om Assepoester te helpen. Zo kan ze eindelijk ontsnappen aan haar verschrikkelijke stiefmoeder.',
        ],
        [
            'object_number' => '2022-007-063',
            'language_id' => 'nl',
            'name' => 'Stangpop van een draak',
            'room_id' => 4,
            'company_id' => 2, // Spelleke van Folklore, Pierke van Alijn
            'type_id' => 16, // Stangpop
            'date' => '1942 - vandaag',
            'info' => 'De spelers van het Spelleke van Folklore en later Pierke van Alijn beschikken over een vaste collectie poppen. Ook klassieke sprookjesfiguren zoals kabouters, reuzen en heksen maken er deel van uit. Af en toe duikt ook dit rode draakje op. Het is een schattige variant van het bekende fabeldier dat kan vliegen en vuurspuwen.',
        ],
        [
            'object_number' => '2021-029-176',
            'language_id' => 'nl',
            'name' => 'Schim van een geest',
            'room_id' => 4,
            'company_id' => 3, // Theater Taptoe
            'type_id' => 14, // Schim
            'date' => '2002',
            'info' => 'Luk De Bruyker van Theater Taptoe bekwaamt zich in de techniek en kunst van het Turks schimmenspel. De hoofdpersonages zijn Karagöz en zijn tegenpool Hacivat. Er zijn ook verschillende bijfiguren, zoals deze geest die over toverkrachten beschikt. De schimmenpoppen zijn gemaakt van buffelhuid.',
        ],
        [
            'object_number' => '2021-029-197',
            'language_id' => 'nl',
            'name' => 'Masker van Nero',
            'room_id' => 4,
            'company_id' => 3, // Theater Taptoe
            'type_id' => 2, // Masker
            'date' => '1988',
            'info' => 'Theater Taptoe brengt in ‘De avonturen van Nero & co’ een ode aan stripfiguur Nero en zijn geestelijke vader Marc Sleen. Acteurs spelen met maskers uit schuimrubber. Die bedekken het hoofd volledig en verbergen de microfoons.',
        ],
            [
                'object_number' => '2021-029-120',
                'language_id' => 'nl',
                'name' => 'Handpop van Gorbatsjov',
                'room_id' => 4,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 12, // Handpop
                'date' => '1992',
                'info' => 'In de ‘figuurrijke reis’ blikt Theater Taptoe terug op haar 25-jarig bestaan. Heel wat bekende en internationale personages passeren in deze productie de revue: Pierke, Karagöz, Keizer Karel, de Muppets,... Deze latex handpop van Michail Gorbatsjov lijkt sprekend op de voormalige Sovjetleider. De enige afwijking zit in de wijnvlek, die hier de vorm heeft van België. De ogen van de pop kunnen van links naar rechts bewegen.',
            ],
            [
                'object_number' => '2021-029-037',
                'language_id' => 'nl',
                'name' => 'Staafpop van Rubens',
                'room_id' => 4,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 15, // Staafpop
                'date' => '1981',
                'info' => 'In ‘Thomas zit te dromen in de klas’ spelen acteurs en poppen van Theater Taptoe voor het eerst samen in een theaterdecor. In de dromen van Thomas verschijnen allerlei historische, exotische en magische figuren. Zo ook de beroemde schilder Peter Paul Rubens (1577-1640), in de vorm van een staafpop. Het stuk betekent voor Taptoe de internationale doorbraak en het zet de toon voor de daaropvolgende jaren.',
            ],
            [
                'object_number' => '2021-029-088',
                'language_id' => 'nl',
                'name' => 'Marionet van Tijl Uilenspiegel',
                'room_id' => 4,
                'company_id' => 11, // Marionettentheater Taptoe
                'type_id' => 13, // Marionet
                'date' => '1979',
                'info' => 'Theater Taptoe maakt in opdracht van het Masereelfonds het maatschappijkritische ‘Tijl, een vuist in het hart’, ter gelegenheid van het Charles De Coster-jaar. Freek Neirynck en Paul Berkenman schrijven de teksten. In een reeks scènes geïnspireerd door de roman van Charles De Coster (1827-1879), wordt Tijl Uilenspiegel opgevoerd als symbool van de strijd voor vrijheid.',
            ],
            [
                'object_number' => '2017-041-001',
                'language_id' => 'nl',
                'name' => 'Marionet van Lène Marechal',
                'room_id' => 4,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 13, // Marionet
                'date' => '1983',
                'info' => 'Met ‘Lène Maréchal, de revue van een proeverigge’ brengt Theater Taptoe een ode aan Hélène Maréchal (1893-1970), een icoon uit het Gentse volkstheater. Ze was zangeres, actrice en cabaretière, maar zette zich tijdens haar carrière ook in voor allerlei goede doelen. De productie is een mix van poppenspel, sketches en zang. Deze marionet is één van de drie poppen die Lène vertolken.',
            ],
            [
                'object_number' => '2022-007-025',
                'language_id' => 'nl',
                'name' => 'Stangpop van Daniël Termont',
                'room_id' => 4,
                'company_id' => 13, // Pierke van Alijn
                'type_id' => 16, // Stangpop
                'date' => '2013',
                'info' => 'De spelers van het Spelleke van Folklore en later Pierke van Alijn beschikken over een vaste collectie poppen. Af en toe komen daar poppen bij die voor speciale gelegenheden zijn gemaakt. Deze stangpop van ex-burgemeester en bekende Gentenaar Daniël Termont is al enkele keren op scène verschenen, o.a. als ‘Daniël Girrebij’ in ‘De toverboom’.',
            ],
            [
                'object_number' => '2021-029-009',
                'language_id' => 'nl',
                'name' => 'Marionet van Herman Teirlinck',
                'room_id' => 4,
                'company_id' => 11, // Marionettentheater Taptoe
                'type_id' => 13, // Marionet
                'date' => '1979',
                'info' => 'Marionettentheater Taptoe laat zich inspireren door het literaire oeuvre van Brusselaar Herman Teirlinck en maakt een productie over zijn leven. Marionetten vertolken de personages, grote namen uit de theaterwereld spreken de stemmen in. De voorstelling wordt opgevoerd in de KVS, met muziek van Jan De Wilde voor orkest.',
            ],
            [
                'object_number' => '2021-029-149',
                'language_id' => 'nl',
                'name' => 'Stokpop van een drol',
                'room_id' => 4,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 17, // Stokpop
                'date' => '2000',
                'info' => '‘UBU KAKA PIPI’ is een woordeloze en absurde kindervoorstelling over de kindertijd van Koning Ubu, die opgroeit tot een wrede tiran. Kleine koning Ubu doet overal zijn gevoeg en deze drol speelt dan ook een belangrijke rol in de voorstelling.',
            ],
            [
                'object_number' => '2021-029-041',
                'language_id' => 'nl',
                'name' => 'Marionet van Vrouwvis',
                'room_id' => 4,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 13, // Marionet
                'date' => '1991',
                'info' => '‘Hemel!’ is een voorstelling geïnspireerd op het werk van René Magritte. In deze surrealistische en woordeloze productie voor jonge kinderen komen objecten en personages uit Magritte’s werk tot leven. Het stuk is een enorm succes in binnen- en buitenland.',
            ],
            [
                'object_number' => '2021-029-193',
                'language_id' => 'nl',
                'name' => 'Lingeriepop',
                'room_id' => 4,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 7, // Lingeriepop
                'date' => '2006',
                'info' => 'Met ‘Don G.’ brengt Theater Taptoe muziek- en figurentheater op de muziek van Mozart (1756-1791). In zwarte kledij gehulde spelers dragen deze lingeriepoppen op de hand, afgewisseld met maskers. De voorstelling is de eerste in een reeks samenwerkingen met blazersensemble I Solisti del Vento.',
            ],
            [
                'object_number' => '1965-089-042',
                'language_id' => 'nl',
                'name' => 'Stangpop van een paardje',
                'room_id' => 4,
                'company_id' => 6, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'De spelers van het Spelleke van de Muide beschikken over een vaste collectie poppen die in meerdere stukjes inzetbaar zijn. Ook paarden in verschillende maten maken er deel van uit. Op dit houten paardje kan een andere stangpop als ruiter plaatsnemen.',
            ],
        ];
        $puppetsRoom5Nl = [
            [
                'object_number' => '1965-089-017',
                'language_id' => 'nl',
                'name' => 'Stangpop van een duivel',
                'room_id' => 5,
                'company_id' => 6, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'Op humoristische wijze geeft het Spelleke van de Muide vanaf 1922 een opvoedende en katholieke boodschap mee. De duivel, hier met kippenpoten, verbeeldt het kwaad. Vandaag zijn de stukjes meer kindvriendelijk. Religieuze denkbeelden over goed en kwaad zijn niet langer aan de orde.',
            ],
            [
                'object_number' => '2021-028-091',
                'language_id' => 'nl',
                'name' => 'Staafpop van de duivel',
                'room_id' => 5,
                'company_id' => 7, // Hopla
                'type_id' => 15, // Staafpop
                'date' => '1965',
                'info' => 'Hopla voert de middeleeuwse klucht ‘Het esbatement van de appelboom’ op met staafpoppen, naar tekst van Herman Teirlinck (1879- 1967). Wanneer de Dood Boer Goedrond vroegtijdig komt halen, lokt Goedrond hem in een valstrik. Ook de Duivel is hij te slim af. Beiden komen vast te zitten in zijn appelboom. In ruil voor hun vrijheid krijgt Boer Goedrond een lang en gelukkig leven zonder verleiding tot zonden. Politiek karikaturist Pil (1915-2007) ontwerpt kleurrijke staafpoppen en decors.',
            ],
            [
                'object_number' => '1963-007',
                'language_id' => 'nl',
                'name' => 'Kop van een duivel (stangpop)',
                'room_id' => 5,
                'company_id' => 6, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'Deze kop van een duivel is vervaardigd door leerlingen van een Gentse kunstacademie. Het scheve en asymmetrische uiterlijk van deze Duivel sluit aan bij het stereotiepe beeld van een slechterik.',
            ],
            [
                'object_number' => '2021-028-031',
                'language_id' => 'nl',
                'name' => 'Kop van Charon (handpop)',
                'room_id' => 5,
                'company_id' => 7, // Hopla
                'type_id' => 12, // Handpop
                'date' => '1948-1949',
                'info' => 'Kop van Charon, de veerman van de hel uit ‘Faust’. Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. In de eerste versie kiest Hopla voor handpoppen. Acteurs spreken de stemmen in. Het gladde haar en de gezichten van de poppen doen aan wassen beelden denken.',
            ],
            [
                'object_number' => '1965-089-004',
                'language_id' => 'nl',
                'name' => 'Stangpop van een kwade geest',
                'room_id' => 5,
                'company_id' => 6, // Spelleke van de Muide
                'type_id' => 16, // Stangpop
                'date' => '1922-1942',
                'info' => 'Het Spelleke van de Muide wordt opgericht door onderpastoor Joris Vandenbroucke met als doel de vrije tijd van arbeiderskinderen waardevol in te vullen. Op humoristische wijze geven de stukjes een opvoedende en katholieke boodschap mee. Een kwade geest past perfect binnen de katholieke moraal van goed tegen kwaad. Vandaag zijn de stukjes meer kindvriendelijk. Religieuze denkbeelden zijn niet langer aan de orde.',
            ],
            [
                'object_number' => '2021-028-006',
                'language_id' => 'nl',
                'name' => 'Marionet van een kwade geest',
                'room_id' => 5,
                'company_id' => 8, // Spelleken van Ulenspiegel
                'type_id' => 13, // Marionet
                'date' => '1942-1943',
                'info' => 'Het Spelleken van Ulenspiegel, het eerste poppentheater van Jef Contryn, speelt ‘Mieke Miserie’ met marionetten. Mieke krijgt onverwachts bezoek van de Dood. Aangezien ze nog niet wil sterven besluit ze de Dood in de val te lokken. Alleen op haar voorwaarden kan hij loskomen uit haar betoverde perenboom. Ze blijft leven, maar de miserie in de wereld blijft ook. Deze kwade geest is een helper van de Dood. Zijn gelaatsuitdrukking en groene kleur benadrukken zijn slechtheid.',
            ],
            [
                'object_number' => '2021-028-003',
                'language_id' => 'nl',
                'name' => 'Marionet van de Dood',
                'room_id' => 5,
                'company_id' => 8, // Spelleken van Ulenspiegel
                'type_id' => 13, // Marionet
                'date' => '1942-1943',
                'info' => 'Het Spelleken van Ulenspiegel, het eerste poppentheater van Jef Contryn speelt ‘Mieke Miserie’ met marionetten. Mieke krijgt onverwachts bezoek van de Dood, in de vorm van een skelet. Aangezien ze nog niet wil sterven besluit ze de Dood in de val te lokken. Alleen op haar voorwaarden kan hij loskomen uit haar betoverde perenboom. Ze blijft leven, maar de miserie in de wereld blijft ook.',
            ],
            [
                'object_number' => '2022-007-062',
                'language_id' => 'nl',
                'name' => 'Stangpop van Pietje de Dood',
                'room_id' => 5,
                'company_id' => 9, // Spelleke van Folklore
                'type_id' => 16, // Stangpop
                'date' => '1942-2013',
                'info' => 'Net als bij het Spelleke van de Muide geeft ook het Spelleke van Folklore een opvoedende en katholiek geïnspireerde boodschap mee. Verschillende stukjes spelen in op de angst voor de duivel of de dood. Deze Pietje de Dood ziet er griezelig uit met zijn zeis. Vandaag zijn de stukjes meer kindvriendelijk. Pietje de Dood komt er niet meer in voor.',
            ],
            [
                'object_number' => '2021-028-092',
                'language_id' => 'nl',
                'name' => 'Staafpop van de Dood',
                'room_id' => 5,
                'company_id' => 7, // Hopla
                'type_id' => 15, // Staafpop
                'date' => '1965',
                'info' => 'Hopla voert de middeleeuwse klucht ‘Het esbatement van de appelboom’ op met staafpoppen, naar een tekst van Herman Teirlinck (1879-1967). Wanneer de Dood Boer Goedrond vroegtijdig komt halen, lokt Goedrond hem in een valstrik. De Dood komt vast te zitten in zijn appelboom. Politiek-karikaturist Pil (1915-2007) maakt de kleurrijke ontwerpen voor de staafpoppen en decors. De Dood heeft een donkergroene kale kop, open ogen en een gewaad met zwart-witte slierten die de ribben suggereren.',
            ],
            [
                'object_number' => '2021-028-045',
                'language_id' => 'nl',
                'name' => 'Handpop van de Dood',
                'room_id' => 5,
                'company_id' => 7, // Hopla
                'type_id' => 12, // Handpop
                'date' => 'Ca.1955',
                'info' => 'De Duitse poppenmaker Till De Kock is jarenlang hoofdleverancier voor Hopla. Naast poppen voor specifieke producties maakt hij ook een hele reeks herkenbare personages in grote oplage. Klassieke, typische figuren zoals een prinses of een kok zijn inzetbaar in meerdere stukjes. De Dood krijgt regelmatig de rol van slechterik.',
            ],
            [
                'object_number' => '2021-029-146',
                'language_id' => 'nl',
                'name' => 'Bekpop van een wolf',
                'room_id' => 5,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 11, // Bekpop
                'date' => '1999',
                'info' => 'Freek Neirynck, Danilo Conti en Antonella Piroli bewerken het sprookje over de wolf en de drie biggetjes voor de kindervoorstelling ‘OINK!’. De boze wolf is een bekende slechterik, sluw en gulzig. Deze wolf ziet er enerzijds gevaarlijk uit, maar is anderzijds ook aaibaar. Dat maakt hem minder angstaanjagend voor de jonge kinderen voor wie de voorstelling bedoeld is.',
            ],
            [
                'object_number' => '2021-029-150',
                'language_id' => 'nl',
                'name' => 'Vlakke figuur van een bandiet',
                'room_id' => 5,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 8, // Vlakke figuur
                'date' => '2000',
                'info' => '‘UBU KAKA PIPI’ is een woordeloze en absurde kindervoorstelling over de kindertijd van Koning Ubu, die opgroeit tot een wrede tiran. Herr Seele ontwerpt een reeks vlakke figuren die in de voorstelling een bonte stoet vormen. Ook deze bandiet maakt daar deel van uit. Als een dief in de nacht sluipt hij voorbij. Zijn houding voorspelt niet veel goeds.',
            ],
            [
                'object_number' => '2021-029-196',
                'language_id' => 'nl',
                'name' => 'Masker van een krokodil',
                'room_id' => 5,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 2, // Masker
                'date' => '2006',
                'info' => 'Met ‘Don G.’ brengt Theater Taptoe muziek- en figurentheater op de muziek van Mozart (1756-1791). De spelers zijn in het zwart gehuld en dragen maskers, zoals van deze krokodil. Krokodillen zijn in het traditioneel poppenspel net als slangen klassieke slechteriken. De gifgroene kleur van het gewaad van deze figuur benadrukt dit nog extra.',
            ],
            [
                'object_number' => '2021-029-174',
                'language_id' => 'nl',
                'name' => 'Schimpop van een heks',
                'room_id' => 5,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 14,
                'date' => '2002',
                'info' => 'Luk De Bruyker van Theater Taptoe bekwaamt zich in de techniek en kunst van het Turks schimmenspel met hoofdpersonage Karagöz, zijn tegenpool Hacivat en allerlei bijfiguren zoals deze akelige heks. De heks kan geesten oproepen en draagt hen op haar slechte plannen uit te voeren. De schimmenpoppen zijn gemaakt van buffelhuid.',
            ],
            [
                'object_number' => '2022-007-095',
                'language_id' => 'nl',
                'name' => 'Stangpop van een heks',
                'room_id' => 5,
                'company_id' => 9, // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 16,//stangpop
                'date' => '1980- vandaag',
                'info' => 'De spelers van het Spelleke van Folklore en later Pierke van Alijn beschikken over een vaste collectie poppen die in meerdere stukjes inzetbaar zijn. Ook klassieke sprookjesfiguren met toverkracht en slechte bedoelingen maken daar deel van uit, zoals deze heks. Met haar zwarte gewaad en staf, een hoekig gezicht en een vreemde blauw-groene kleur is ze heel herkenbaar.'
            ],
            [
                'object_number' => '2021-028-018',
                'language_id' => 'nl',
                'name' => 'Handpop van het wijf',
                'room_id' => 5,
                'company_id' => 10, // Hopla (familie Contryn)
                'type_id' => 12,//handpop
                'date' => 'Eind jaren 1940',
                'info' => 'In deze korte klucht besluit een man zijn onhebbelijke vrouw alleen nog te antwoorden met de woorden "nu noch" (toe maar). Hopla speelt het stuk met handpoppen. Het personage van de vrouw, ‘het wijf’, zoekt met iedereen ruzie en behandelt haar man slecht. Het gezicht van deze handpop is afschrikwekkend en de gelijkenis met een heks is treffend.'
            ],
            [
                'object_number' => '2022-007-039',
                'language_id' => 'nl',
                'name' => 'Stangpop van een generaal',
                'room_id' => 5,
                'company_id' => 11, // Marionettentheater Taptoe
                'type_id' => 16,//stangpop
                'date' => 'Eind jaren 1940 - vandaag',
                'info' => 'De spelers van het Spelleke van Folklore en later Pierke van Alijn beschikken over een vaste collectie poppen die in meerdere stukjes inzetbaar zijn. Ook slechteriken maken daar deel van uit. Deze generaal is een typisch voorbeeld van een figuur die belust is op macht, rijkdom en oorlog.'
            ],

        ];
        $puppetsRoom6Nl = [
            [
                'object_number' => '2021-028-033',
                'language_id' => 'nl',
                'name' => 'Stangpop van een raaf',
                'room_id' => 6,
                'company_id' => 10, // Hopla (familie Contryn)
                'type_id' => 16,
                'date' => '1948-1949',
                'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. Deze raaf komt uit de eerste versie met handpoppen. De raaf zelf is geen handpop maar hangt aan een stang. Hopla maakt dit stuk naar de tekst van Michel de Ghelderode (1898-1962).'
            ],
            [
                'object_number' => '2021-028-072',
                'language_id' => 'nl',
                'name' => 'Bekpop van een witte hond',
                'room_id' => 6,
                'company_id' => 10, // Hopla (familie Contryn)
                'type_id' => 11,
                'date' => 'Ca. 1955',
                'info' => 'Duitse poppenmaker Till De Kock maakt voor Hopla een hele reeks herkenbare figuren. Vooral pluizige en tekenfilmachtige diertjes zijn erg populair bij kinderen. De poppen passen in een speelse kindercultuur, die steeds minder moraliserend wordt.'
            ],
            [
                'object_number' => '2021-028-110',
                'language_id' => 'nl',
                'name' => 'Hoofd van Faust (stokpop)',
                'room_id' => 6,
                'company_id' => 2, // Mechels Stadspoppentheater
                'type_id' => 17,
                'date' => '1974',
                'info' => 'Sinds de 16e eeuw vertellen grote namen uit de literatuur en kunsten de legende van Faust die zijn ziel verkoopt aan de duivel. Ook de familie Contryn brengt het in verschillende versies op scène. In 1974 maken leerlingen van de School voor Poppenspel zelf figuren onder leiding van Jef Lettany. De experimentele vormen zijn interessant, maar moeilijker te bespelen. Het hoofd van deze Faust heeft een basis van piepschuim.'
            ],
            [
                'object_number' => '2021-029-044',
                'language_id' => 'nl',
                'name' => 'Pop van Sjoerd',
                'room_id' => 6,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 13, // Marionet
                'date' => '2004',
                'info' => 'In ‘Sjoerd zegt FOERT!’, een woordloze productie voor jonge kinderen, experimenteert Theater Taptoe met het zichtbaar maken van techniek en beweging zonder magie te verliezen. De voorstelling is een groot internationaal succes. Dirk De Strooper staat in voor de ingenieuze spel- en maaktechnieken van de poppen.'
            ],
            [
                'object_number' => '2021-029-137',
                'language_id' => 'nl',
                'name' => 'Handgreeppop van een kat',
                'room_id' => 6,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 9, // Handpop
                'date' => '2001',
                'info' => 'Voor de voorstelling ‘Gepetto’, gebaseerd op het verhaal van Pinokkio, maakt de Bulgaarse ontwerpster Silva Bachvarova levensgrote poppen uit zachte materialen zoals schuimrubber. De poppen komen samen op scène met acteurs zoals dat bij Theater Taptoe vaak voorkomt.'
            ],
            [
                'object_number' => '2021-029-147',
                'language_id' => 'nl',
                'name' => 'Handgreeppop van een baby',
                'room_id' => 6,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 9, // Handpop
                'date' => '1994',
                'info' => 'In de voorstelling ‘Tim of Tiene… en negen maanden’ neemt Theater Taptoe kinderen uit het publiek mee in het ontstaan van een nieuw leven. Ze zien een kindje groeien in de buik. Op het einde van de voorstellingen wordt het kind geboren en krijgen de kinderen zelf de keuze: wordt het Tim of Tiene?'
            ],
            [
                'object_number' => '2021-029-166',
                'language_id' => 'nl',
                'name' => 'Staafpop van een glimworm met twee hoofden',
                'room_id' => 6,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 15, // Staafpop
                'date' => '1999',
                'info' => 'In de voorstelling ‘OMOEstuintje’ spelen dieren uit de moestuin zoals mollen en wormen de hoofdrol. De poppen zijn uitgerust met technische snufjes. Deze glimworm is voorzien van twee elektronische mechanismen om lampjes te doen branden.'
            ],
            [
                'object_number' => '2021-029-142',
                'language_id' => 'nl',
                'name' => 'Bekpop van een biggetje',
                'room_id' => 6,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 11, // Bekpop
                'date' => '1999',
                'info' => 'Freek Neirynck, Danilo Conti en Antonella Piroli bewerken het sprookje over de Wolf en de drie biggetjes voor de kindervoorstelling ‘OINK!’ Het biggetje is gemaakt van zacht materiaal en ziet eruit om te knuffelen.'
            ],
            [
                'object_number' => '2021-029-117',
                'language_id' => 'nl',
                'name' => 'Stok-staafpop van Opa',
                'room_id' => 6,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 6, // Stok-staafpop
                'date' => '1986',
                'info' => '‘De dag dat Karageus… (aankwam)’ is gebaseerd op het stripverhaal ‘De dag na... een eeuw, een jaar en een dag’ van Knut Kersse en Freek Neirynck uit 1984. In het kader van deze productie krijgt Luk De Bruyker een introductie in het Turkse schimmenspel van schimmenspeler Hayali Torun Çelebi. De poppen van de hand van Knut Kersse doen sterk denken aan stripfiguren.'
            ],
            [
                'object_number' => '2021-029-155',
                'language_id' => 'nl',
                'name' => 'Vlakke figuur van de Diva',
                'room_id' => 6,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 8, // Vlakke Figuur
                'date' => '2000',
                'info' => '‘UBU KAKA PIPI’ is een woordeloze en absurde kindervoorstelling over de kindertijd van Koning Ubu die opgroeit tot een wrede tiran. Herr Seele ontwerpt een reeks vlakke figuren die in de voorstelling een bonte stoet vormen. Ook deze diva maakt in de stoet haar opwachting.'
            ],
            [
                'object_number' => '2021-029-172',
                'language_id' => 'nl',
                'name' => 'Stokpop van een man',
                'room_id' => 6,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 17, // Stokpop
                'date' => '1989',
                'info' => '‘Pruuke Dossche’ wordt in openlucht gespeeld als ‘wagenspel’ met vlakke figuren op een stokje. Beide vlakken van dezelfde figuur stellen een ander personage voor. Het stuk gaat over Gentenaar Constant ‘Pruuke’ Dossche en zijn rol in de arbeidersopstand in 1839. Theater Taptoe maakt deze voorstelling in opdracht van het MIAT, het huidige Industriemuseum.'
            ],
            [
                'object_number' => '2021-029-127',
                'language_id' => 'nl',
                'name' => 'Pop van Senta',
                'room_id' => 6,
                'company_id' => 3, // Theater Taptoe
                'type_id' => 1, // Decorstuk
                'date' => '2008',
                'info' => 'Theater Taptoe brengt ‘De Vliegende Hollander’, naar de opera van Richard Wagner (1813- 1883). De woordeloze voorstelling wordt begeleid door muziek van blazersensemble I Solisti del Vento, die de bemanning van het schip voorstellen. De Tsjechische Michaela Bartonova ontwerp figuren, geïnspireerd op de Japanse Bunrakutechniek waarbij meedere spelers een pop in beweging brengen. De Vliegende Hollander zelf is een schim die het publiek nooit te zien krijgt.'
            ],
            [
                'object_number' => 'Blind Dudapaiva Company BozeWolfFestival 2017 (c) Patrick Van Vlerken',
                'language_id' => 'nl',
                'name' => 'Scène uit Blind',
                'room_id' => 6,
                'company_id' => 4, // Dudapaiva Company
                'type_id' => 10, // Scène
                'date' => '2017',
                'info' => 'Voorstelling ‘Blind’ van Dudapaiva company op het figurentheaterfestival Boze Wolf in Aarschot. Internationaal en regionaal theater met figuren in alle soorten en maten komt er aan bod. De voorstelling ‘Blind’ brengt een kleurrijk verhaal met poppen en dans over een zoektocht naar genezing en over anders zijn.'
            ],
            [
                'object_number' => 'de-tuin-van-de-walvis_05_(c)Diego Franssens',
                'language_id' => 'nl',
                'name' => 'Scène uit de Tuin van de Walvis',
                'room_id' => 6,
                'company_id' => 5, // DE MAAN
                'type_id' => 10, // Scène
                'date' => '2018',
                'info' => '‘De Tuin van de walvis’ is een figurenvoorstelling van Beeldsmederij DE MAAN. Het stuk is gebaseerd op het gelijknamige dierenverhaal van Toon Tellegen en gaat over hoe alsmaar meer willen niet per se leidt tot geluk. Paul Contryn maakt de figuren en speelt de voorstelling. Bekende acteurs spreken de stemmen in.'
            ],
            [
                'object_number' => 'planeet-nivanir_42_(c)Diego Franssens',
                'language_id' => 'nl',
                'name' => 'Scène uit Planeet Nivanir',
                'room_id' => 6,
                'company_id' => 5, // DE MAAN
                'type_id' => 10, // Scène
                'date' => '2018',
                'info' => '‘Planeet Nivanir’ is een figurentheatervoorstelling van Beeldsmederij DE MAAN. Greet Jacobs en Femke Stallaert, artistieke kernleden van DE MAAN, kruipen in de huid van twee buitenaardse wezens die de mens vanop een afstand beschouwen.'
            ],
            [
                'object_number' => '2021-028-035',
                'language_id' => 'nl',
                'name' => 'Bekpop van een vis',
                'room_id' => 6,
                'company_id' => 10, // Hopla (familie Contryn)
                'type_id' => 11, // Bekpop
                'date' => '1958',
                'info' => 'Oorspronkelijk voert de familie Contryn ‘Visselke Timpeltee’ op met marionetten, maar Louis Contryn herwerkt het stuk voor handpoppen. In 1958 speelt Hopla ‘Visselke Timpeltee’ op Expo ’58 en de opvoering valt in de prijzen. Het verhaal over een visje dat wensen vervult is geïnspireerd op het sprookje ‘Van de visser en zijn vrouw’ van de gebroeders Grimm.'
            ],
        ];

        $puppetsRoom1Fr = [
            [
                'object_number' => '2021-029-005',
                'language_id' => 'fr',
                'name' => 'Marionnette bâton du Petit Prince',
                'room_id' => 1 + $rooms,
                'company_id' => 3 + $companies,
                'type_id' => 6 + $types,
                'date' => '1978',
                'info' => 'En 1978, le Théâtre Taptoe présente pour la première fois \'Le Petit Prince\', d\'après le conte moderne d\'Antoine de Saint-Exupéry de 1943. Le Petit Prince symbolise l\'émerveillement et l\'imagination enfantine. Dans la pièce, il est incarné par différentes marionnettes. Les acteurs prêtent leur voix. Cette marionnette bâton a une croix de jeu en bas. Les bras bougent via des tiges.',
            ],
            [
                'object_number' => '2021-029-001',
                'language_id' => 'fr',
                'name' => 'Marionnette du Petit Prince',
                'room_id' => 1 + $rooms,
                'company_id' => 3 + $companies,
                'type_id' => 13 + $types,
                'date' => '1978',
                'info' => 'En 1978, le Théâtre Taptoe présente pour la première fois \'Le Petit Prince\', d\'après le conte moderne d\'Antoine de Saint-Exupéry de 1943. Le Petit Prince symbolise l\'émerveillement et l\'imagination enfantine. Dans la pièce, il est incarné par différentes marionnettes. Les acteurs prêtent leur voix. Cette marionnette a une croix de jeu en haut. Les membres de la marionnette bougent via des fils.',
            ],
            [
                'object_number' => '2021-029-008',
                'language_id' => 'fr',
                'name' => 'Élément de décor d\'une planète',
                'room_id' => 1 + $rooms,
                'company_id' => 3 + $companies,
                'type_id' => 1 + $types,
                'date' => '1978',
                'info' => 'En 1978, le Théâtre Taptoe présente pour la première fois \'Le Petit Prince\', d\'après le conte moderne d\'Antoine de Saint-Exupéry de 1943. L\'histoire se déroule dans un univers fictif rempli de planètes.',
            ],
            [
                'object_number' => '2021-028-020',
                'language_id' => 'fr',
                'name' => 'Marionnette à main de Faust',
                'room_id' => 1 + $rooms,
                'company_id' => 10 + $companies,
                'type_id' => 12 + $types,
                'date' => '1948-1949',
                'info' => 'Depuis le XVIe siècle, de grands noms de la littérature et des arts racontent la légende de Faust qui vend son âme au diable. La famille Contryn le présente également dans différentes versions. Hopla s\'inspire du texte de Michel de Ghelderode (1898-1962) et opte pour des marionnettes à main. Les acteurs prêtent leur voix. Les cheveux lisses et les visages des marionnettes rappellent les statues de cire.',
            ],
            [
                'object_number' => '2021-028-024',
                'language_id' => 'fr',
                'name' => 'Marionnette du Diable à main',
                'room_id' => 1 + $rooms,
                'company_id' => 10 + $companies,
                'type_id' => 12 + $types,
                'date' => '1948-1949',
                'info' => 'Depuis le XVIe siècle, de grands noms de la littérature et des arts racontent la légende de Faust qui vend son âme au diable. La famille Contryn le présente également dans différentes versions. Hopla s\'inspire du texte de Michel de Ghelderode (1898-1962) et opte pour des marionnettes à main. Les acteurs prêtent leur voix. Le visage du diable est asymétrique car un œil est fermé. Cela renforce la dynamique de ses traits.',
            ],
            [
                'object_number' => 'P1850111',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige de Faust',
                'room_id' => 1 + $rooms,
                'company_id' => 12 + $companies,
                'type_id' => 15 + $types,
                'date' => 'Fin des années 1960',
                'info' => 'Depuis le XVIe siècle, de grands noms de la littérature et des arts racontent la légende de Faust qui vend son âme au diable. La famille Contryn le présente également dans différentes versions. À la fin des années 1960, le Mechels Stadspoppentheater choisit le texte de Gerard Walschap (1898-1989) et joue avec des marionnettes à tige. Les grandes figurines sont conçues par le caricaturiste politique Pil. Ce Faust semble anguleux et coloré. La tête est fabriquée sur une base en polystyrène.',
            ],
            [
                'object_number' => 'P185112',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige de Méphistophélès',
                'room_id' => 1 + $rooms,
                'company_id' => 12 + $companies,
                'type_id' => 15 + $types,
                'date' => 'Fin des années 1960',
                'info' => 'Depuis le XVIe siècle, de grands noms de la littérature et des arts racontent la légende de Faust qui vend son âme au diable. La famille Contryn le présente également dans différentes versions. À la fin des années 1960, le Mechels Stadspoppentheater choisit le texte de Gerard Walschap (1898-1989) et joue avec des marionnettes à tige. Les grandes figurines sont conçues par le caricaturiste politique Pil, qui s\'inspire pour ce Méphistophélès de l\'apparence du politicien Camille Huysmans.',
            ],
            [
                'object_number' => '2021-028-100',
                'language_id' => 'fr',
                'name' => 'Masque d\'un bon esprit',
                'room_id' => 1 + $rooms,
                'company_id' => 13 + $companies,
                'type_id' => 2 + $types,
                'date' => '1974',
                'info' => 'Depuis le XVIe siècle, de grands noms de la littérature et des arts racontent la légende de Faust qui vend son âme au diable. La famille Contryn le présente également dans différentes versions. En 1974, les élèves de l\'École du jeu de marionnettes dirigée par le professeur Jef Lettany créent des figures expérimentales sous forme de masques pour leur version.',
            ],
            [
                'object_number' => '2021-028-101',
                'language_id' => 'fr',
                'name' => 'Masque d\'un mauvais esprit',
                'room_id' => 1 + $rooms,
                'company_id' => 13 + $companies,
                'type_id' => 2 + $types,
                'date' => '1974',
                'info' => 'Depuis le XVIe siècle, de grands noms de la littérature et des arts racontent la légende de Faust qui vend son âme au diable. La famille Contryn le présente également dans différentes versions. En 1974, les élèves de l\'École du jeu de marionnettes dirigée par le professeur Jef Lettany créent des figures expérimentales sous forme de masques pour leur version.',
            ],
            [
                'object_number' => '1965-089-035',
                'language_id' => 'fr',
                'name' => 'Marionnette à tringle de Pierke',
                'room_id' => 1 + $rooms,
                'company_id' => 6 + $companies,
                'type_id' => 16 + $types,
                'date' => '1922-1942',
                'info' => 'Au Spelleke van de Muide (1922-1942), Pierke, auparavant souvent Pierrot, prend un rôle prépondérant en tant que héros rebelle mais bon enfant. Une pièce classique est « Voyage sur la lune » où Pierke est envoyé sur la lune avec un canon et est accueilli en héros à son retour. Contrairement à son prédécesseur, l\'actuel Pierke n\'a plus de moustache et est un véritable garçon gantois.',
            ],
            [
                'object_number' => '2022-007-230',
                'language_id' => 'fr',
                'name' => 'Décor d\'une lune',
                'room_id' => 1 + $rooms,
                'company_id' => 9 + $companies,
                'type_id' => 1 + $types,
                'date' => 'Inconnue',
                'info' => 'La collection de marionnettes, d\'accessoires et de décors de Pierke van Alijn existe depuis de nombreuses années. Ils ne sont pas liés à un seul morceau, mais apparaissent dans plusieurs représentations, comme ce décor d\'une lune amicale.',
            ],
            [
                'object_number' => '2022-007-105',
                'language_id' => 'fr',
                'name' => 'Marionnette à tringle d\'un petit homme lunaire',
                'room_id' => 1 + $rooms,
                'company_id' => 9 + $companies,
                'type_id' => 16 + $types,
                'date' => '1942-aujourd\'hui',
                'info' => 'À l\'origine, les petits hommes lunaires de « Voyage sur la lune » étaient fabriqués à partir de vrais légumes à chaque représentation. Plus tard, les acteurs décident d\'utiliser des marionnettes. Lorsque les acteurs du Spelleke van Folklore ne jouent plus la pièce, les marionnettes adoptent de nouveaux rôles. Chez Pierke van Alijn, ce sont Frosti et Zero, avec de nouvelles couleurs et une nouvelle tenue.',
            ],
        ];
        $puppetsRoom2Fr = [
            [
                'object_number' => '2022-006-017',
                'language_id' => 'fr',
                'name' => 'Conception pour la scénographie de \'Don G.\'',
                'room_id' => 2 + $rooms,
                'company_id' => 3 + $companies, // Théâtre Taptoe
                'type_id' => 3 + $types, // Conception
                'date' => '2004',
                'info' => 'Avec \'Don G.\', le Théâtre Taptoe propose un théâtre musical et de marionnettes sur la musique de Mozart (1756-1791). Les acteurs, vêtus de noir, portent des personnages et des masques colorés dans cette production. La représentation est la première d\'une série de collaborations avec l\'ensemble de cuivres I Solisti del Vento.',
            ],
            [
                'object_number' => '2022-006-029_004',
                'language_id' => 'fr',
                'name' => 'Croquis de costumes pour \'Don G.\'',
                'room_id' => 2 + $rooms,
                'company_id' => 3 + $companies, // Théâtre Taptoe
                'type_id' => 3 + $types, // Croquis de costumes
                'date' => '2004',
                'info' => 'Avec \'Don G.\', le Théâtre Taptoe propose un théâtre musical et de marionnettes sur la musique de Mozart (1756-1791). Les acteurs, vêtus de noir, portent des personnages et des masques colorés dans cette production. La représentation est la première d\'une série de collaborations avec l\'ensemble de cuivres I Solisti del Vento.',
            ],
            [
                'object_number' => '2022-006-035-003',
                'language_id' => 'fr',
                'name' => 'Conception de la scénographie pour \'Le jour où Karageus... (est arrivé)\'',
                'room_id' => 2 + $rooms,
                'company_id' => 3 + $companies, // Théâtre Taptoe
                'type_id' => 3 + $types, // Conception de la scénographie
                'date' => '1986',
                'info' => '\'Le jour où Karageus... (est arrivé)\' est basé sur une bande dessinée de Knut Kersse et Freek Neirynck. Il raconte l\'histoire d\'un marionnettiste qui souhaite apporter la paix dans un pays en guerre. Pour la pièce, Luk De Bruyker est initié au théâtre d\'ombres turc par Hayali Torun Çelebi. Peu de temps après, De Bruyker obtient lui-même le titre spécial de Hayali, grand maître du théâtre d\'ombres turc.',
            ],
            [
                'object_number' => '2022-006-037-016',
                'language_id' => 'fr',
                'name' => 'Conception de la scénographie pour \'Le jour où Karageus... (est arrivé)\'',
                'room_id' => 2 + $rooms,
                'company_id' => 3 + $companies, // Théâtre Taptoe
                'type_id' => 3 + $types, // Conception de la scénographie
                'date' => '1986',
                'info' => '\'Le jour où Karageus... (est arrivé)\' est basé sur une bande dessinée de Knut Kersse et Freek Neirynck. Il raconte l\'histoire d\'un marionnettiste qui souhaite apporter la paix dans un pays en guerre. Pour la pièce, Luk De Bruyker est initié au théâtre d\'ombres turc par Hayali Torun Çelebi. Peu de temps après, De Bruyker obtient lui-même le titre spécial de Hayali, grand maître du théâtre d\'ombres turc.',
            ],
            [
                'object_number' => '2022-006-065',
                'language_id' => 'fr',
                'name' => 'Conception de décors pour \'Lène Maréchal, la revue d\'une dégustation\'',
                'room_id' => 2 + $rooms,
                'company_id' => 3 + $companies, // Théâtre Taptoe
                'type_id' => 3 + $types, // Conception de décors
                'date' => '1983',
                'info' => 'Avec cette pièce, le Théâtre Taptoe rend hommage à Hélène Maréchal (1893-1970), une icône du théâtre populaire à Gand. Elle était chanteuse, actrice et cabaretière, mais s\'engageait également dans de nombreuses œuvres caritatives au cours de sa carrière. La production est un mélange de marionnettes, de sketches et de chant.',
            ],
            [
                'object_number' => '2022-006-074-002',
                'language_id' => 'fr',
                'name' => 'Conception de décors pour \'La lune peint des étoiles au-dessus de Bursa\'',
                'room_id' => 2 + $rooms,
                'company_id' => 3 + $companies, // Théâtre Taptoe
                'type_id' => 3 + $types, // Conception de décors
                'date' => '2001',
                'info' => '\'La lune peint des étoiles au-dessus de Bursa\' est une représentation socio-artistique du Théâtre Taptoe pour les enfants issus de l\'immigration. Les personnages principaux du théâtre d\'ombres turc, Karagöz et Haçivat, occupent une place importante en tant qu\'acteurs et personnages. Luk De Bruyker porte lui-même le titre spécial de Hayali, grand maître du théâtre d\'ombres turc.',
            ],
            [
                'object_number' => '2022-006-103',
                'language_id' => 'fr',
                'name' => 'Conception de personnages de \'Beerenbodegem\'',
                'room_id' => 2 + $rooms,
                'company_id' => 3 + $companies, // Théâtre Taptoe
                'type_id' => 3 + $types, // Conception
                'date' => '1996/1997',
                'info' => '\'Beerenbodegem\' est un conte de fées contemporain écrit par Freek Neirynck et Paul Berkenmann. La pièce raconte l\'histoire d\'un village d\'ours paisible perturbé par Herman Stressman, un représentant en jouets électroniques et jeux vidéo. Les décors et les costumes sont conçus par la célèbre illustratrice néerlandaise de livres pour enfants Nicole Rutten.',
            ],
            [
                'object_number' => 'FO-0122-047',
                'language_id' => 'fr',
                'name' => 'Croquis de conception du personnage Faust',
                'room_id' => 2 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 3 + $types, // Croquis de conception
                'date' => 'Env. 1948-1949',
                'info' => 'Depuis le 16e siècle, de grands noms de la littérature et des arts racontent la légende de Faust qui vend son âme au diable. La famille Contryn la met également en scène dans différentes versions. Dans la première version, Hopla opte pour des marionnettes à main. Les acteurs prêtent leur voix. Les cheveux lisses et les visages des marionnettes rappellent les statues de cire.',
            ],
            [
                'object_number' => 'FO-0122-056',
                'language_id' => 'fr',
                'name' => 'Croquis de conception d\'un diable ou esprit maléfique',
                'room_id' => 2 + $rooms,
                'company_id' => 7 + $companies, // Spelleken van Ulenspiegel
                'type_id' => 3 + $types, // Croquis de conception
                'date' => 'Début des années 1940',
                'info' => 'Conception d\'une marionnette de \'Mieke Miserie\' du Spelleken van Ulenspiegel. Mieke Miserie reçoit la visite inattendue de la Mort. Parce qu\'elle ne veut pas encore mourir, elle décide de tendre un piège à la Mort. Il est capturé dans son poirier enchanté et ne peut être libéré que selon ses conditions. Ainsi, Mieke reste en vie, mais avec elle, toute la misère dans le monde. La pièce est jouée avec des marionnettes à fils mesurant jusqu\'à deux mètres de long.',
            ],
            [
                'object_number' => 'FO-0122-062',
                'language_id' => 'fr',
                'name' => 'Croquis de conception de la Mort et de la Vertu féminine',
                'room_id' => 2 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 3 + $types, // Croquis de conception
                'date' => 'Début des années 1960',
                'info' => 'Conceptions pour des marionnettes à tige de \'L\'esbatement de l\'appelboom\'. Cette pièce est basée sur un texte d\'Herman Teirlinck (1879-1967). Dans cette histoire, la Mort Boer Goedrond vient chercher prématurément, mais Goedrond le piège. Il trompe également le Diable. Les conceptions colorées pour les marionnettes à tige et les décors sont l\'œuvre du caricaturiste politique Pil (1915-2007). Le marionnettiste allemand Till De Kock (1915-2010) les réalise.',
            ],
            [
                'object_number' => 'FO-0122-081',
                'language_id' => 'fr',
                'name' => 'Conception de décors pour l\'esbatement de l\'appelboom',
                'room_id' => 2 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 3 + $types, // Conception de décors
                'date' => 'Début des années 1960',
                'info' => 'Conception de décors pour \'L\'esbatement de l\'appelboom\'. Cette pièce est basée sur un texte d\'Herman Teirlinck (1879-1967). Dans cette histoire, la Mort Boer Goedrond vient chercher prématurément, mais Goedrond le piège. Il trompe également le Diable. Les conceptions colorées pour les marionnettes à tige et les décors sont l\'œuvre du caricaturiste politique Pil (1915-2007). Le marionnettiste allemand Till De Kock (1915-2010) les réalise.',
            ],
            [
                'object_number' => 'ontwerp-003',
                'language_id' => 'fr',
                'name' => 'Conceptions de Stefan Vermeersch',
                'room_id' => 2 + $rooms,
                'company_id' => 6 + $companies, // Spelleke van Folklore
                'type_id' => 3 + $types, // Conception
                'date' => 'Début des années 1940',
                'info' => 'Le Spelleke van de Muide (1922-1942) fusionne en 1932 avec le Folkloremuseum de Gand. En 1942, le conservateur Julien Boes estime que ce spectacle de marionnettes a besoin de renouveau. Sous son impulsion, le Spelleke van Folklore voit le jour. Stefaan Vermeersch conçoit de nouveaux personnages. Ils ont un aspect plus moderne et portent sa style prononcé. Bernard Van Guyse sculpte les têtes.',
            ],
        ];
        $puppetsRoom3Fr = [
            [
                'object_number' => '2021-029-038',
                'language_id' => 'fr',
                'name' => 'Marionnette de Madame Symforosa, une béguine',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Théâtre Taptoe
                'type_id' => 17 + $types, // Marionnette à tige
                'date' => '1984',
                'info' => 'Le Théâtre Taptoe crée "La très belle miniature de Madame Symforosa, la béguine" sur commande de la ville de Gand, qui souhaite mettre en avant les béguinages gantois. La pièce est basée sur un texte de Felix Timmermans. Les marionnettes à tige se déplacent dans une maquette, selon la technique de Dubelovski. Le narrateur et les personnages sont sur scène ensemble.',
            ],
            [
                'object_number' => '2021-029-039',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un groupe de procession',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Théâtre Taptoe
                'type_id' => 17 + $types, // Marionnette à tige
                'date' => '1985',
                'info' => 'Le Théâtre Taptoe crée "La très belle miniature de Madame Symforosa, la béguine" sur commande de la ville de Gand, qui souhaite mettre en avant les béguinages gantois. La pièce est basée sur un texte de Felix Timmermans. Les marionnettes à tige se déplacent dans une maquette, selon la technique de Dubelovski. Le narrateur et les personnages sont sur scène ensemble.',
            ],
            [
                'object_number' => '1965-089-058',
                'language_id' => 'fr',
                'name' => 'Marionnette à perche d\'un père',
                'room_id' => 3 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette à perche
                'date' => '1922-1942',
                'info' => 'Le sous-pasteur Joris Vandenbroucke fonde en 1922 le Spelleke van de Muide pour occuper utilement le temps libre des enfants du quartier ouvrier. Au début, le Spelleke se déplace et se produit notamment dans les collèges. Les pièces suivent un schéma fixe. De manière humoristique, elles transmettent un message éducatif et catholique. Cette marionnette à perche représente probablement le père Vanderhaegen ou le frère laïc Willem van Saeftinge.',
            ],
            [
                'object_number' => '2021-028-019',
                'language_id' => 'fr',
                'name' => 'Marionnette à main du curé',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 12 + $types, // Marionnette à main
                'date' => 'Fin des années 1940',
                'info' => 'Dans cette courte farce, un homme décide de ne répondre à sa femme désagréable qu\'avec les mots "maintenant ou jamais" (vas-y). Le curé et le voisin doivent calmer les esprits. Les personnages sont interprétés par des marionnettes à main vives. Finalement, c\'est le curé qui propose la solution.',
            ],
            [
                'object_number' => '1965-089-043',
                'language_id' => 'fr',
                'name' => 'Marionnette à (perche) d\'un cochon',
                'room_id' => 3 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette à perche
                'date' => '1922-1942',
                'info' => 'De manière humoristique, le Spelleke van de Muide transmet, à partir de 1922, un message éducatif et catholique. Ce cochon en bois de leur collection symbolise probablement le cochon de Saint-Antoine, le premier ermite chrétien et fondateur de la vie monastique. Pour fournir de la nourriture aux pauvres et aux malades, les frères de Saint-Antoine élevaient des cochons. Sur les images, on voit souvent Saint-Antoine avec un petit cochon comme compagnon.',
            ],
            [
                'object_number' => '2021-028-071',
                'language_id' => 'fr',
                'name' => 'Marionnette à bec d\'un lion',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 11 + $types, // Marionnette à bec
                'date' => 'Env. 1955',
                'info' => 'Le fabricant de marionnettes allemand Till De Kock crée une série complète de personnages reconnaissables pour Hopla. Les animaux pelucheux et caricaturaux sont particulièrement populaires auprès des enfants. Les marionnettes s\'inscrivent dans une culture enfantine ludique, de moins en moins moralisatrice. Ce lion peut même fumer. Un joueur souffle la fumée d\'une cigarette directement dans un tube en bas, après quoi la fumée sort par la bouche du lion en haut.',
            ],
            [
                'object_number' => '2021-028-068',
                'language_id' => 'fr',
                'name' => 'Marionnette à bec et à perche d\'une vache',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 5 + $types, // Marionnette à bec et à perche
                'date' => 'Env. 1955',
                'info' => 'Le fabricant de marionnettes allemand Till De Kock crée une série complète de personnages reconnaissables pour Hopla. Les animaux pelucheux et caricaturaux sont particulièrement populaires auprès des enfants. Cette marionnette est manipulée à deux mains.',
            ],
            [
                'object_number' => '2021-028-086',
                'language_id' => 'fr',
                'name' => 'Marionnette à bec d\'un chien',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 11 + $types, // Marionnette à bec
                'date' => 'Env. 1955',
                'info' => 'Hopla souhaite s\'adresser aux enfants. Les marionnettes à main et à bec d\'animaux pelucheux et caricaturaux sont idéales à cet effet. Ce chien fait partie d\'une série de marionnettes réalisées par Annie Arndt pour Hopla. Cette collaboration est unique en Flandre, car elle est également active auprès du célèbre Hohnsteiner Puppenspiele du fabricant de marionnettes Max Jacob, réputé internationalement.',
            ],
            [
                'object_number' => '2021-028-063',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'une chenille',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 15 + $types, // Marionnette à tige
                'date' => 'Années 1950 - 1960',
                'info' => 'Hopla souhaite s\'adresser aux enfants. Les marionnettes à main et à bec d\'animaux de dessins animés ont du succès. Cette chenille duveteuse est presque transparente. Cette figure est réalisée par Louis Contryn et son épouse Jacqueline Boeykens. C\'est exceptionnel, car à ce moment-là, ils font habituellement réaliser leurs marionnettes par d\'autres.',
            ],
            [
                'object_number' => '2021-028-077',
                'language_id' => 'fr',
                'name' => 'Araignée suspendue à un fil',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 4 + $types,
                'date' => 'Env. 1955',
                'info' => 'Le fabricant de marionnettes allemand Till de Kock est pendant longtemps le principal fournisseur de Hopla. En plus des marionnettes pour des productions spécifiques, il réalise également toute une série de personnages et d\'animaux reconnaissables en grande quantité, comme cette araignée de la série de base d\'animaux.',
            ],
            [
                'object_number' => '2021-029-046',
                'language_id' => 'fr',
                'name' => 'Marionnette à perche d\'une mouette',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Theater Taptoe
                'type_id' => 17 + $types, // Marionnette à perche
                'date' => '2004',
                'info' => 'Mouette de "Sjoerd zegt FOERT!", une production sans paroles pour les jeunes enfants. Dans la pièce, Theater Taptoe expérimente la mise en valeur de la technique et du mouvement, sans perdre la magie. La représentation est un grand succès international. Cette marionnette à perche avec un mécanisme ingénieux semble vivante dans ses mouvements.',
            ],
            [
                'object_number' => '2022-007-089',
                'language_id' => 'fr',
                'name' => 'Marionnette à perche d\'un renard humanisé',
                'room_id' => 3 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 16 + $types, // Marionnette à perche
                'date' => '1942 - aujourd\'hui',
                'info' => 'Lors de la création de Spelleke van Folklore en 1942, Stefan Vermeersch conçoit de nouvelles marionnettes, sculptées par Bernard Van Guyse. Les marionnettes ont un style moderne prononcé. En plus des personnages humains, il existe aussi des têtes d\'animaux. Ce renard est la version animalisée d\'un personnage rusé ou le résultat d\'un enchantement malheureux.',
            ],
            [
                'object_number' => '2021-028-093',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige de Dieu',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 15 + $types, // Marionnette à tige
                'date' => '1965',
                'info' => 'Hopla présente la farce médiévale "Het esbatement van de appelboom" avec des marionnettes à tige, d\'après le texte d\'Herman Teirlinck. Le fermier Goedrond et la vertueuse Dame prient Dieu de protéger leur bel arbre à pommes contre les voleurs. Toute personne qui vole une pomme ou a de mauvaises intentions reste coincée dans l\'arbre. Même le diable et la Mort restent coincés. Dieu est représenté ici comme un grand-père gentil avec une barbe en coton. Il porte une poncho aux couleurs de l\'arc-en-ciel par-dessus sa robe blanche.',
            ],
            [
                'object_number' => '1965-089-016',
                'language_id' => 'fr',
                'name' => 'Marionnette à perche de Filemon l\'agent',
                'room_id' => 3 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette à perche
                'date' => '1922-1942',
                'info' => 'Les acteurs du Spelleke van de Muide disposent d\'une collection fixe de marionnettes. Des personnages typiques et reconnaissables tels qu\'un agent, un pasteur ou une servante apparaissent dans plusieurs pièces. Les représentations sont rarement identiques en raison de l\'improvisation et de l\'interaction avec le public.',
            ],
            [
                'object_number' => '1965-089-047',
                'language_id' => 'fr',
                'name' => 'Marionnette à perche d\'un soldat',
                'room_id' => 3 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette à perche
                'date' => '1922-1942',
                'info' => 'Les acteurs du Spelleke van de Muide disposent d\'une collection fixe de marionnettes. Des personnages typiques et reconnaissables tels qu\'un agent, un pasteur ou une servante apparaissent dans plusieurs pièces. Les représentations sont rarement identiques en raison de l\'improvisation et de l\'interaction avec le public.',
            ],
            [
                'object_number' => '1965-089-070',
                'language_id' => 'fr',
                'name' => 'Marionnette à perche d\'un noble',
                'room_id' => 3 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette à perche
                'date' => '1922-1942',
                'info' => 'Les acteurs du Spelleke van de Muide disposent d\'une collection fixe de marionnettes. Des personnages typiques et reconnaissables, tels qu\'un agent, un pasteur ou une servante, apparaissent dans plusieurs pièces. Cette marionnette d\'un noble joue le rôle du baron De la Kethulle (ou Kathulle) dans le classique "Reis naar de maan". Les représentations sont rarement identiques en raison de l\'improvisation et de l\'interaction avec le public.',
            ],
            [
                'object_number' => '1965-089-072',
                'language_id' => 'fr',
                'name' => 'Marionnette à perche d\'une servante (Pelagie ou Katrien)',
                'room_id' => 3 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette à perche
                'date' => '1922-1942',
                'info' => 'Les acteurs du Spelleke van de Muide disposent d\'une collection fixe de marionnettes. Des personnages typiques ou classiques tels qu\'un agent, un pasteur ou une servante apparaissent dans plusieurs pièces. Les représentations sont rarement identiques en raison de l\'improvisation et de l\'interaction avec le public. Tous les acteurs sont des hommes. Ils jouent donc aussi tous les rôles féminins, même s\'il n\'y en a pas beaucoup.',
            ],
            [
                'object_number' => '2021-028-044',
                'language_id' => 'fr',
                'name' => 'Marionnette à main d\'un garçon (série de base)',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 12 + $types, // Marionnette à main
                'date' => 'Ca. 1955',
                'info' => 'Le fabricant allemand de marionnettes Till De Kock est pendant de nombreuses années le principal fournisseur de Hopla. En plus des marionnettes pour des productions spécifiques, il crée également toute une série de personnages en grande quantité. Des figures typiques et reconnaissables, comme une princesse, un cuisinier ou un chevalier, peuvent être utilisées dans plusieurs pièces. Hopla les vend également à des écoles locales et à des compagnies.',
            ],
            [
                'object_number' => '2021-028-050',
                'language_id' => 'fr',
                'name' => 'Marionnette à main d\'une fille (série de base)',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 12 + $types, // Marionnette à main
                'date' => 'Ca. 1955',
                'info' => 'Le fabricant allemand de marionnettes Till De Kock est pendant de nombreuses années le principal fournisseur de Hopla. En plus des marionnettes pour des productions spécifiques, il crée également toute une série de personnages en grande quantité. Des figures typiques et reconnaissables, comme une princesse, un cuisinier ou un chevalier, peuvent être utilisées dans plusieurs pièces. Hopla les vend également à des écoles locales et à des compagnies.',
            ],
            [
                'object_number' => '2021-028-058',
                'language_id' => 'fr',
                'name' => 'Marionnette à main d\'une princesse (série de base)',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 12 + $types, // Marionnette à main
                'date' => 'Ca. 1955',
                'info' => 'Le fabricant allemand de marionnettes Till De Kock est pendant de nombreuses années le principal fournisseur de Hopla. En plus des marionnettes pour des productions spécifiques, il crée également toute une série de personnages en grande quantité. Des figures typiques et reconnaissables, comme une princesse, un cuisinier ou un chevalier, peuvent être utilisées dans plusieurs pièces. Hopla les vend également à des écoles locales et à des compagnies.',
            ],
            [
                'object_number' => '2021-028-057',
                'language_id' => 'fr',
                'name' => 'Marionnette à main d\'un machiniste ou policier (série de base)',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 12 + $types, // Marionnette à main
                'date' => 'Ca. 1955',
                'info' => 'Le fabricant allemand de marionnettes Till De Kock est pendant de nombreuses années le principal fournisseur de Hopla. En plus des marionnettes pour des productions spécifiques, il crée également toute une série de personnages en grande quantité. Des figures typiques et reconnaissables, comme une princesse, un cuisinier ou un chevalier, peuvent être utilisées dans plusieurs pièces. Hopla les vend également à des écoles locales et à des compagnies.',
            ],
            [
                'object_number' => '2021-028-053',
                'language_id' => 'fr',
                'name' => 'Marionnette d\'un chef cuisinier (série de base)',
                'room_id' => 3+ $rooms,
                'company_id' => 1+ $companies, // Hopla
                'type_id' => 12+ $types, // Marionnette
                'date' => 'Vers 1955',
                'info' => 'Le fabricant de marionnettes allemand Till De Kock est le principal fournisseur de Hopla depuis de nombreuses années. En plus des marionnettes pour des productions spécifiques, il crée également toute une série de personnages en grande quantité. Des figures typiques et reconnaissables telles qu\'une princesse, un chef cuisinier ou un chevalier peuvent être utilisées dans plusieurs pièces. Hopla les vend également aux écoles locales et aux compagnies théâtrales.',
            ],
            [
                'object_number' => '2021-029-168',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un petit garçon',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Theater Taptoe
                'type_id' => 15 + $types, // Marionnette à tige
                'date' => '2008',
                'info' => 'Le Theater Taptoe collabore une deuxième fois avec l\'artiste Luis Zornoza Boy pour "Doctor Frankenstein". Les personnages rêveurs sont inspirés de l\'arte povera, où les déchets sont utilisés de manière fonctionnelle.',
            ],
            [
                'object_number' => '2021-029-162',
                'language_id' => 'fr',
                'name' => 'Marionnette à bec d\'un punk',
                'room_id' => 3 + $rooms,
                'company_id' => 1 + $companies, // Theater Taptoe
                'type_id' => 11 + $types, // Marionnette à bec
                'date' => '1987',
                'info' => 'Dans la comédie musicale reggae "Reggae Peggy", le Theater Taptoe se moque des productions télévisuelles commerciales avec des marionnettes. Pour se préparer, les créateurs et les acteurs se plongent complètement dans l\'univers des Muppets. Ils vont même en apprentissage chez les producteurs et fabricants de marionnettes de "the Muppet Show".',
            ],
        ];
        $puppetsRoom4Fr = [
            [
                'object_number' => '2021-028-039',
                'language_id' => 'fr',
                'name' => 'Marionnette à main d\'un dresseur d\'animaux',
                'room_id' => 4 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 12 + $types, // Marionnette à main
                'date' => 'Ca. 1955',
                'info' => 'Le fabricant allemand de marionnettes Till De Kock est pendant de nombreuses années le principal fournisseur de Hopla. En plus des marionnettes pour des productions spécifiques, il crée également toute une série de personnages en grande quantité. Des figures typiques et reconnaissables, comme une princesse, un cuisinier ou un chevalier, peuvent être utilisées dans plusieurs pièces. Certains personnages exotiques et stéréotypés font également partie de la série de base. Ce dresseur d\'animaux rappelle les images de l\'Empire ottoman qui circulaient surtout au XIXe siècle en Occident.',
            ],
            [
                'object_number' => '2022-007-031',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige de Fu Manchu',
                'room_id' => 4 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van Folklore
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => 'Années 1980-1990',
                'info' => 'Les acteurs du Spelleke van Folklore disposent d\'une collection fixe de marionnettes. Des personnages typiques et reconnaissables tels qu\'une princesse ou un soldat sont utilisables dans plusieurs pièces. Certains personnages stéréotypés font également partie de la collection, comme ce serviteur chinois, Fu Manchu. La couleur de peau jaune et les yeux bridés exagérés font de l\'homme chinois une caricature stéréotypée.',
            ],
            [
                'object_number' => '2021-028-036',
                'language_id' => 'fr',
                'name' => 'Marionnette à main d\'un "Eskimo"',
                'room_id' => 4 + $rooms,
                'company_id' => 1 + $companies, // Hopla
                'type_id' => 12 + $types, // Marionnette à main
                'date' => 'Ca. 1955',
                'info' => 'Le fabricant allemand de marionnettes Till De Kock est pendant de nombreuses années le principal fournisseur de Hopla. En plus des marionnettes pour des productions spécifiques, il crée également une série de personnages en grande quantité. Des figures typiques et reconnaissables, comme une princesse, un cuisinier ou un chevalier, peuvent être utilisées dans plusieurs pièces. Certains personnages stéréotypés font également partie de la série de base. La couleur de peau jaune et les yeux bridés exagérés font de cet "Eskimo" une caricature stéréotypée. Le terme "Eskimo", remis en question aujourd\'hui, était couramment utilisé pour désigner les Inuits du Canada et du Groenland.',
            ],
            [
                'object_number' => '2021-029-030',
                'language_id' => 'fr',
                'name' => 'Marionnette à main d\'un sultan',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 12 + $types, // Marionnette à main
                'date' => '1981',
                'info' => 'Dans "Thomas rêve en classe", les acteurs et les marionnettes de Theater Taptoe jouent ensemble pour la première fois dans un décor de théâtre. Dans les rêves de Thomas apparaissent divers personnages historiques, exotiques et magiques. Ainsi, ce sultan rappelle les histoires des Mille et Une Nuits. Il s\'agit d\'une marionnette impressionnante sur un tapis volant. La pièce marque la percée internationale de Taptoe et donne le ton pour les années suivantes.',
            ],
            [
                'object_number' => '1965-089-007',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige du roi africain Boela',
                'room_id' => 4 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => '1922-1942',
                'info' => 'Les acteurs du Spelleke van de Muide disposent d\'une collection fixe de marionnettes. Des personnages typiques et reconnaissables tels qu\'une princesse ou un soldat sont utilisables dans plusieurs pièces. Certains personnages stéréotypés font également partie de la collection. Ce roi africain du nom de Boela est représenté avec une couronne et des bijoux. Dans plusieurs pièces, il est présenté comme le roi des Maures, ce qui était longtemps un synonyme d\'Africain (noir).',
            ],
            [
                'object_number' => '1943-061',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un jeune Africain',
                'room_id' => 4 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van Folklore
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => 'Années 1940-1950',
                'info' => 'Les acteurs du Spelleke van Folklore disposent d\'une collection fixe de marionnettes. Des personnages typiques et reconnaissables tels qu\'une princesse ou un soldat sont utilisables dans plusieurs pièces. Certains personnages stéréotypés font également partie de la collection. Ce jeune Africain est représenté de manière très caricaturale. Il rappelle la manière dont les Congolais sont représentés dans "Tintin au Congo". Cette bande dessinée date de la même période et est imprégnée de propagande coloniale et de stéréotypes racistes.',
            ],
            [
                'object_number' => '2022-007-076',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un jeune Africain',
                'room_id' => 4 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van Folklore
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => 'Inconnue',
                'info' => 'Les acteurs du Spelleke van de Muide et du Spelleke van Folklore disposent d\'une collection fixe de marionnettes. Des personnages typiques et reconnaissables tels qu\'une princesse ou un soldat sont utilisables dans plusieurs pièces. Certains personnages stéréotypés font également partie de la collection, comme ce jeune Africain. Il rappelle les images typiques d\'un "boy" africain, le personnel domestique des riches colons.',
            ],
            [
                'object_number' => '1965-089-008',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige du lutin Bim',
                'room_id' => 4 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => '1922-1942',
                'info' => 'Les acteurs du Spelleke van de Muide disposent d\'une collection fixe de marionnettes. Des personnages classiques de contes de fées tels que les lutins, les géants et les sorcières en font partie. Ce lutin Bim avec son bonnet vert a encore deux collègues lutins : Bam avec le bonnet bleu et Boum avec le bonnet rouge. Ils apparaissent dans la forêt où Pierke part à l\'aventure.',
            ],
            [
                'object_number' => '2021-029-032',
                'language_id' => 'fr',
                'name' => 'Marionnette à fils d\'une sirène',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Marionettentheater Taptoe
                'type_id' => 13 + $types, // Marionnette à fils
                'date' => '1981',
                'info' => 'Dans "Thomas rêve en classe", les acteurs et les marionnettes de Theater Taptoe jouent ensemble pour la première fois dans un décor de théâtre. Les personnages sont dédoublés en acteurs et en différentes marionnettes. Dans les rêves de Thomas apparaissent divers personnages historiques, exotiques et magiques. Ainsi, cette sirène sous la forme d\'une marionnette à fils. La pièce marque la percée internationale de Taptoe et donne le ton pour les années suivantes.',
            ],
            [
                'object_number' => '2021-029-067',
                'language_id' => 'fr',
                'name' => 'Marionnette à fils de Neptune',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Marionettentheater Taptoe
                'type_id' => 13 + $types, // Marionnette à fils
                'date' => '1973',
                'info' => 'Dans les premières années du Marionettentheater Taptoe, on met principalement en scène des contes de fées, comme "La petite sirène" d\'après Hans Christian Andersen. Neptune est le dieu de la mer, basé sur la mythologie romaine. Dans la pièce, il est roi et également le père de la petite sirène.',
            ],
            [
                'object_number' => '2021-029-059',
                'language_id' => 'fr',
                'name' => 'Marionnette à fils d\'une fée',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Marionettentheater Taptoe
                'type_id' => 13 + $types, // Marionnette à fils
                'date' => '1980',
                'info' => 'Dans les premières années du Marionettentheater Taptoe, on met principalement en scène des contes de fées, comme "Cendrillon" des frères Grimm. Cette gentille fée utilise sa magie pour aider Cendrillon. Ainsi, elle peut enfin échapper à sa belle-mère terrible.',
            ],
            [
                'object_number' => '2022-007-063',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un dragon',
                'room_id' => 4 + $rooms,
                'company_id' => 2 + $companies, // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => '1942 - aujourd\'hui',
                'info' => 'Les acteurs du Spelleke van Folklore et plus tard Pierke van Alijn disposent d\'une collection fixe de marionnettes. Des personnages classiques de contes de fées tels que les lutins, les géants et les sorcières en font partie. De temps en temps, ce petit dragon rouge apparaît également. C\'est une version adorable du célèbre animal fabuleux capable de voler et de cracher du feu.',
            ],
            [
                'object_number' => '2021-029-176',
                'language_id' => 'fr',
                'name' => 'Ombre d\'un esprit',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 14 + $types, // Ombre
                'date' => '2002',
                'info' => 'Luk De Bruyker du Theater Taptoe se perfectionne dans la technique et l\'art du théâtre d\'ombres turc. Les personnages principaux sont Karagöz et son opposé Hacivat. Il y a aussi plusieurs personnages secondaires, comme cet esprit qui possède des pouvoirs magiques. Les marionnettes d\'ombres sont fabriquées en peau de buffle.',
            ],
            [
                'object_number' => '2021-029-197',
                'language_id' => 'fr',
                'name' => 'Masque de Nero',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 2 + $types, // Masque
                'date' => '1988',
                'info' => 'Le Theater Taptoe rend hommage à la bande dessinée "Nero" et à son créateur Marc Sleen dans "Les aventures de Nero & co". Les acteurs jouent avec des masques en mousse qui couvrent complètement la tête et cachent les microphones.',
            ],
            [
                'object_number' => '2021-029-120',
                'language_id' => 'fr',
                'name' => 'Marionnette à main de Gorbatsjov',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 12 + $types, // Marionnette à main
                'date' => '1992',
                'info' => 'Dans le "voyage coloré", le Theater Taptoe revient sur ses 25 ans d\'existence. De nombreux personnages célèbres et internationaux défilent dans cette production : Pierke, Karagöz, l\'empereur Charles, les Muppets,... Cette marionnette en latex de Mikhaïl Gorbatchev ressemble trait pour trait à l\'ancien leader soviétique. La seule différence réside dans la tache de vin, qui prend ici la forme de la Belgique. Les yeux de la marionnette peuvent se déplacer de gauche à droite.',
            ],
            [
                'object_number' => '2021-029-037',
                'language_id' => 'fr',
                'name' => 'Marionnette à barre de Rubens',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 15 + $types, // Marionnette à barre
                'date' => '1981',
                'info' => 'Dans "Thomas rêve en classe", acteurs et marionnettes du Theater Taptoe jouent ensemble pour la première fois dans un décor de théâtre. Dans les rêves de Thomas apparaissent des personnages historiques, exotiques et magiques. C\'est le cas du célèbre peintre Pierre Paul Rubens (1577-1640), sous la forme d\'une marionnette à barre. La pièce marque la percée internationale de Taptoe et donne le ton pour les années suivantes.',
            ],
            [
                'object_number' => '2021-029-088',
                'language_id' => 'fr',
                'name' => 'Marionnette à fils de Tijl Uilenspiegel',
                'room_id' => 4 + $rooms,
                'company_id' => 11 + $companies, // Marionettentheater Taptoe
                'type_id' => 13 + $types, // Marionnette à fils
                'date' => '1979',
                'info' => 'Le Theater Taptoe crée, sur commande du Masereelfonds, la pièce "Tijl, un poing dans le cœur", à l\'occasion de l\'année Charles De Coster. Les textes sont écrits par Freek Neirynck et Paul Berkenman. Dans une série de scènes inspirées du roman de Charles De Coster (1827-1879), Tijl Uilenspiegel est mis en scène comme un symbole de la lutte pour la liberté.',
            ],
            [
                'object_number' => '2017-041-001',
                'language_id' => 'fr',
                'name' => 'Marionnette de Lène Maréchal',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 13 + $types, // Marionnette à fils
                'date' => '1983',
                'info' => 'Avec "Lène Maréchal, la revue d\'une gouailleuse", le Theater Taptoe rend hommage à Hélène Maréchal (1893-1970), une icône du théâtre populaire gantois. Chanteuse, actrice et cabaretière, elle s\'est également engagée tout au long de sa carrière pour diverses œuvres caritatives. La production est un mélange de marionnettes, de sketches et de chants. Cette marionnette est l\'une des trois marionnettes qui représentent Lène.',
            ],
            [
                'object_number' => '2022-007-025',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige de Daniël Termont',
                'room_id' => 4 + $rooms,
                'company_id' => 13 + $companies, // Pierke van Alijn
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => '2013',
                'info' => 'Les acteurs du Spelleke van Folklore et plus tard Pierke van Alijn disposent d\'une collection fixe de marionnettes. De temps en temps, de nouvelles marionnettes sont créées pour des occasions spéciales. Cette marionnette à tige de l\'ancien maire et personnalité bien connue de Gand, Daniël Termont, est apparue plusieurs fois sur scène, notamment en tant que "Daniël Girrebij" dans "L\'arbre magique".',
            ],
            [
                'object_number' => '2021-029-009',
                'language_id' => 'fr',
                'name' => 'Marionnette à fils d\'Herman Teirlinck',
                'room_id' => 4 + $rooms,
                'company_id' => 11 + $companies, // Marionettentheater Taptoe
                'type_id' => 13 + $types, // Marionnette à fils
                'date' => '1979',
                'info' => 'Le Marionettentheater Taptoe s\'inspire de l\'œuvre littéraire du Bruxellois Herman Teirlinck et crée une pièce sur sa vie. Les marionnettes représentent les personnages, avec des voix assurées par des personnalités renommées du monde théâtral. La représentation est jouée à la KVS, avec une musique de Jan De Wilde pour orchestre.',
            ],
            [
                'object_number' => '2021-029-149',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un crottin',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 17 + $types, // Marionnette à tige
                'date' => '2000',
                'info' => '"UBU KAKA PIPI" est une pièce pour enfants muette et absurde sur l\'enfance. Cette pièce est jouée par Els Peeters, Sarah Bourgeois et Luk De Bruyker. Les marionnettes sont de Michaël Borremans. La réalisation est de Taptoe. Cette pièce est jouée au moins 200 fois en Belgique Jusqu\'en 2010. Avec une affiche, c\'est comme ça que tout a commencé. L\'image de l\'affiche. Un crottillonsations / créations associées.',
            ],
            [
                'object_number' => '2021-029-041',
                'language_id' => 'fr',
                'name' => 'Marionnette de Femme-Poisson',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Théâtre Taptoe
                'type_id' => 13 + $types, // Marionnette
                'date' => '1991',
                'info' => '‘Ciel!’ est un spectacle inspiré du travail de René Magritte. Dans cette production surréaliste et sans parole destinée aux jeunes enfants, des objets et des personnages de l\'œuvre de Magritte prennent vie. Le spectacle est un énorme succès en Belgique et à l\'étranger.',
            ],
            [
                'object_number' => '2021-029-193',
                'language_id' => 'fr',
                'name' => 'Poupée Lingerie',
                'room_id' => 4 + $rooms,
                'company_id' => 3 + $companies, // Théâtre Taptoe
                'type_id' => 7 + $types, // Poupée Lingerie
                'date' => '2006',
                'info' => 'Avec ‘Don G.’, le Théâtre Taptoe présente un spectacle de musique et de marionnettes sur la musique de Mozart (1756-1791). Des acteurs vêtus de noir portent ces poupées lingerie à la main, alternant avec des masques. La production marque le début d\'une série de collaborations avec l\'ensemble de cuivres I Solisti del Vento.',
            ],
            [
                'object_number' => '1965-089-042',
                'language_id' => 'fr',
                'name' => 'Marionnette d\'un petit cheval',
                'room_id' => 4 + $rooms,
                'company_id' => 6 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette
                'date' => '1922-1942',
                'info' => 'Les acteurs du Spelleke van de Muide disposent d\'une collection fixe de marionnettes pouvant être utilisées dans plusieurs pièces. Des chevaux de différentes tailles en font également partie. Une autre marionnette peut prendre place comme cavalier sur ce petit cheval en bois.',
            ],
        ];
        $puppetsRoom5Fr = [
            [
                'object_number' => '1965-089-017',
                'language_id' => 'fr',
                'name' => 'Marionnette d\'un diable',
                'room_id' => 5 + $rooms,
                'company_id' => 6 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette
                'date' => '1922-1942',
                'info' => 'De manière humoristique, le Spelleke van de Muide transmet un message éducatif et catholique depuis 1922. Le diable, ici avec des pattes de poulet, représente le mal. Aujourd\'hui, les morceaux sont plus adaptés aux enfants. Les idées religieuses sur le bien et le mal ne sont plus d\'actualité.',
            ],
            [
                'object_number' => '2021-028-091',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige du diable',
                'room_id' => 5 + $rooms,
                'company_id' => 7 + $companies, // Hopla
                'type_id' => 15 + $types, // Marionnette à tige
                'date' => '1965',
                'info' => 'Hopla présente la farce médiévale ‘Het esbatement van de appelboom’ avec des marionnettes à tige, sur un texte de Herman Teirlinck (1879-1967). Lorsque la Mort vient chercher le fermier Goedrond prématurément, Goedrond le piège. Il trompe également le Diable. Les deux restent coincés dans son pommier. En échange de leur liberté, Goedrond obtient une vie longue et heureuse sans tentation de péché. Le caricaturiste politique Pil (1915-2007) conçoit des marionnettes à tige et des décors colorés.',
            ],
            [
                'object_number' => '1963-007',
                'language_id' => 'fr',
                'name' => 'Tête d\'un diable (marionnette à tige)',
                'room_id' => 5 + $rooms,
                'company_id' => 6 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => '1922-1942',
                'info' => 'Cette tête de diable a été réalisée par des élèves d\'une académie des beaux-arts de Gand. L\'aspect tordu et asymétrique de ce Diable correspond à l\'image stéréotypée d\'un méchant.',
            ],
            [
                'object_number' => '2021-028-031',
                'language_id' => 'fr',
                'name' => 'Tête de Charon (marionnette à main)',
                'room_id' => 5 + $rooms,
                'company_id' => 7 + $companies, // Hopla
                'type_id' => 12 + $types, // Marionnette à main
                'date' => '1948-1949',
                'info' => 'Tête de Charon, le passeur des enfers dans ‘Faust’. Depuis le 16e siècle, de grands noms de la littérature et des arts racontent la légende de Faust, qui vend son âme au diable. La famille Contryn le présente également dans différentes versions. Dans la première version, Hopla opte pour des marionnettes à main. Les acteurs prêtent leur voix aux personnages. Les cheveux lisses et les visages des marionnettes rappellent les statues de cire.',
            ],
            [
                'object_number' => '1965-089-004',
                'language_id' => 'fr',
                'name' => 'Marionnette d\'un esprit maléfique',
                'room_id' => 5 + $rooms,
                'company_id' => 6 + $companies, // Spelleke van de Muide
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => '1922-1942',
                'info' => 'Le Spelleke van de Muide est fondé par le sous-pasteur Joris Vandenbroucke dans le but de rendre les loisirs des enfants ouvriers précieux. De manière humoristique, les pièces transmettent un message éducatif et catholique. Un esprit maléfique correspond parfaitement à la morale catholique du bien contre le mal. Aujourd\'hui, les pièces sont plus adaptées aux enfants, et les idées religieuses ne sont plus d\'actualité.',
            ],
            [
                'object_number' => '2021-028-006',
                'language_id' => 'fr',
                'name' => 'Marionnette d\'un esprit maléfique',
                'room_id' => 5 + $rooms,
                'company_id' => 8 + $companies, // Spelleken van Ulenspiegel
                'type_id' => 13 + $types, // Marionnette
                'date' => '1942-1943',
                'info' => 'Le Spelleken van Ulenspiegel, le premier théâtre de marionnettes de Jef Contryn, joue ‘Mieke Miserie’ avec des marionnettes. Mieke reçoit la visite inattendue de la Mort. Comme elle ne veut pas encore mourir, elle décide de piéger la Mort. Seulement selon ses conditions, il peut se libérer de son poirier ensorcelé. Elle reste en vie, mais les malheurs dans le monde persistent. Cet esprit maléfique est un assistant de la Mort. Son expression faciale et sa couleur verte soulignent sa méchanceté.',
            ],
            [
                'object_number' => '2021-028-003',
                'language_id' => 'fr',
                'name' => 'Marionnette de la Mort',
                'room_id' => 5 + $rooms,
                'company_id' => 8 + $companies, // Spelleken van Ulenspiegel
                'type_id' => 13 + $types, // Marionnette
                'date' => '1942-1943',
                'info' => 'Le Spelleken van Ulenspiegel, le premier théâtre de marionnettes de Jef Contryn, joue ‘Mieke Miserie’ avec des marionnettes. Mieke reçoit la visite inattendue de la Mort, sous la forme d\'un squelette. Comme elle ne veut pas encore mourir, elle décide de piéger la Mort. Seulement selon ses conditions, il peut se libérer de son poirier ensorcelé. Elle reste en vie, mais les malheurs dans le monde persistent.',
            ],
            [
                'object_number' => '2022-007-062',
                'language_id' => 'fr',
                'name' => 'Marionnette de Pietje la Mort',
                'room_id' => 5 + $rooms,
                'company_id' => 9 + $companies, // Spelleke van Folklore
                'type_id' => 13 + $types, // Marionnette
                'date' => '1942-2013',
                'info' => 'Tout comme le Spelleke van de Muide, le Spelleke van Folklore transmet également un message éducatif et catholique. Plusieurs pièces abordent la peur du diable ou de la mort. Cette Pietje la Mort a l\'air effrayante avec sa faux. Aujourd\'hui, les pièces sont plus adaptées aux enfants. Pietje la Mort n\'apparaît plus.',
            ],
            [
                'object_number' => '2021-028-092',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige de la Mort',
                'room_id' => 5 + $rooms,
                'company_id' => 7 + $companies, // Hopla
                'type_id' => 15 + $types, // Marionnette à tige

                'date' => '1965',
                'info' => 'Hopla présente la farce médiévale ‘Het esbatement van de appelboom’ avec des marionnettes à tige, sur un texte d\'Herman Teirlinck (1879-1967). Lorsque la Mort vient chercher le fermier Goedrond prématurément, Goedrond le piège dans un piège. La Mort se retrouve coincée dans son pommier. Le caricaturiste politique Pil (1915-2007) conçoit des marionnettes à tige colorées et des décors. La Mort a une tête chauve vert foncé, des yeux ouverts et une robe avec des mèches noires et blanches suggérant les côtes.',
            ],
            [
                'object_number' => '2021-028-045',
                'language_id' => 'fr',
                'name' => 'Marionnette à main de la Mort',
                'room_id' => 5 + $rooms,
                'company_id' => 7 + $companies, // Hopla
                'type_id' => 12 + $types, // Marionnette à main
                'date' => 'Ca.1955',
                'info' => 'Le fabricant de marionnettes allemand Till De Kock est pendant de nombreuses années le principal fournisseur de Hopla. Outre les marionnettes pour des productions spécifiques, il crée également une série de personnages reconnaissables en grande quantité. Des figures classiques et typiques comme une princesse ou un chef sont utilisables dans plusieurs pièces. La Mort obtient régulièrement le rôle du méchant.',
            ],
            [
                'object_number' => '2021-029-146',
                'language_id' => 'fr',
                'name' => 'Marionnette à bec d\'un loup',
                'room_id' => 5 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 11 + $types, // Marionnette à bec
                'date' => '1999',
                'info' => 'Freek Neirynck, Danilo Conti et Antonella Piroli adaptent le conte du loup et des trois petits cochons pour la pièce pour enfants ‘OINK!’. Le grand méchant loup est un méchant bien connu, rusé et glouton. Ce loup a l\'air dangereux d\'une part, mais il est aussi câlin d\'autre part. Cela le rend moins effrayant pour les jeunes enfants pour qui la pièce est destinée.',
            ],
            [
                'object_number' => '2021-029-150',
                'language_id' => 'fr',
                'name' => 'Figure plate d\'un bandit',
                'room_id' => 5 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 8 + $types, // Figure plate
                'date' => '2000',
                'info' => '‘UBU KAKA PIPI’ est une pièce pour enfants muette et absurde sur l\'enfance du Roi Ubu, qui grandit pour devenir un tyran cruel. Herr Seele conçoit une série de figures plates qui forment un cortège coloré dans la pièce. Ce bandit en fait partie. Comme un voleur dans la nuit, il passe. Sa posture ne présage rien de bon.',
            ],
            [
                'object_number' => '2021-029-196',
                'language_id' => 'fr',
                'name' => 'Masque d\'un crocodile',
                'room_id' => 5 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 2 + $types, // Masque
                'date' => '2006',
                'info' => 'Avec ‘Don G.’, Theater Taptoe présente un théâtre musical et de marionnettes sur la musique de Mozart (1756-1791). Les acteurs sont vêtus de noir et portent des masques, comme ce crocodile. Les crocodiles, tout comme les serpents, sont des méchants classiques dans le théâtre de marionnettes traditionnel. La couleur vert vif de la tenue de cette figure le souligne encore davantage.',
            ],
            [
                'object_number' => '2021-029-174',
                'language_id' => 'fr',
                'name' => 'Marionnette de sorcière',
                'room_id' => 5 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 14 + $types, // Marionnette de sorcière
                'date' => '2002',
                'info' => 'Luk De Bruyker du Theater Taptoe se spécialise dans la technique et l\'art du théâtre d\'ombres turc avec le personnage principal Karagöz, son opposé Hacivat et divers personnages secondaires comme cette sorcière effrayante. La sorcière peut invoquer des esprits et leur ordonner de mettre en œuvre ses mauvais plans. Les marionnettes d\'ombre sont fabriquées en peau de buffle.',
            ],
            [
                'object_number' => '2022-007-095',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige de sorcière',
                'room_id' => 5 + $rooms,
                'company_id' => 9 + $companies, // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => '1980- aujourd\'hui',
                'info' => 'Les acteurs du Spelleke van Folklore et plus tard Pierke van Alijn disposent d\'une collection fixe de marionnettes utilisables dans plusieurs pièces. Des personnages de contes de fées classiques avec des pouvoirs magiques et de mauvaises intentions en font partie, comme cette sorcière. Avec sa tenue noire et sa baguette, un visage anguleux et une étrange couleur bleu-vert, elle est très reconnaissable.'
            ],
            [
                'object_number' => '2021-028-018',
                'language_id' => 'fr',
                'name' => 'Marionnette à main de la femme',
                'room_id' => 5 + $rooms,
                'company_id' => 10 + $companies, // Hopla (famille Contryn)
                'type_id' => 12 + $types, // Marionnette à main
                'date' => 'Fin des années 1940',
                'info' => 'Dans cette courte farce, un homme décide de ne répondre à sa femme insupportable qu\'avec les mots "maintenant ou jamais" (vas-y). Hopla joue la pièce avec des marionnettes à main. Le personnage de la femme, ‘het wijf’, cherche querelle avec tout le monde et traite mal son homme. Le visage de cette marionnette à main est effrayant et la ressemblance avec une sorcière est frappante.'
            ],
            [
                'object_number' => '2022-007-039',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un général',
                'room_id' => 5 + $rooms,
                'company_id' => 11 + $companies, // Marionettentheater Taptoe
                'type_id' => 16 + $types, // Marionnette à tige
                'date' => 'Fin des années 1940 - aujourd\'hui',
                'info' => 'Les acteurs du Spelleke van Folklore et plus tard Pierke van Alijn disposent d\'une collection fixe de marionnettes utilisables dans plusieurs pièces. Les méchants en font également partie. Ce général est un exemple typique d\'un personnage avide de pouvoir, de richesse et de guerre.'
            ],
        ];
        $puppetsRoom6Fr = [
            [
                'object_number' => '2021-028-033',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un corbeau',
                'room_id' => 6 + $rooms,
                'company_id' => 10 + $companies, // Hopla (famille Contryn)
                'type_id' => 16 + $types,
                'date' => '1948-1949',
                'info' => 'Depuis le 16e siècle, de grands noms de la littérature et des arts racontent la légende de Faust qui vend son âme au diable. La famille Contryn le met également en scène dans différentes versions. Ce corbeau provient de la première version avec des marionnettes à main. Le corbeau lui-même n\'est pas une marionnette à main mais est suspendu à une tige. Hopla réalise cette pièce d\'après le texte de Michel de Ghelderode (1898-1962).',
            ],
            [
                'object_number' => '2021-028-072',
                'language_id' => 'fr',
                'name' => 'Marionnette à bec d\'un chien blanc',
                'room_id' => 6 + $rooms,
                'company_id' => 10 + $companies, // Hopla (famille Contryn)
                'type_id' => 11 + $types,
                'date' => 'Ca. 1955',
                'info' => 'Le marionnettiste allemand Till De Kock crée une série de personnages reconnaissables pour Hopla. Les animaux moelleux et dessinés animés sont particulièrement populaires auprès des enfants. Les marionnettes s\'inscrivent dans une culture enfantine ludique, de moins en moins moralisatrice.',
            ],
            [
                'object_number' => '2021-028-110',
                'language_id' => 'fr',
                'name' => 'Tête de Faust (marionnette à tige)',
                'room_id' => 6 + $rooms,
                'company_id' => 2 + $companies, // Mechels Stadspoppentheater
                'type_id' => 17 + $types,
                'date' => '1974',
                'info' => 'Depuis le 16e siècle, de grands noms de la littérature et des arts racontent la légende de Faust qui vend son âme au diable. La famille Contryn le met également en scène dans différentes versions. En 1974, des élèves de l\'École du théâtre de marionnettes fabriquent eux-mêmes des marionnettes sous la direction de Jef Lettany. Les formes expérimentales sont intéressantes mais plus difficiles à manipuler. La tête de ce Faust a une base en polystyrène.',
            ],
            [
                'object_number' => '2021-029-044',
                'language_id' => 'fr',
                'name' => 'Marionnette de Sjoerd',
                'room_id' => 6 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 13 + $types, // Marionnette
                'date' => '2004',
                'info' => 'Dans \'Sjoerd zegt FOERT!\', une production sans paroles pour les jeunes enfants, Theater Taptoe expérimente la visualisation de la technique et du mouvement sans perdre la magie. La pièce est un grand succès international. Dirk De Strooper est responsable des techniques ingénieuses de jeu et de fabrication des marionnettes.',
            ],
            [
                'object_number' => '2021-029-137',
                'language_id' => 'fr',
                'name' => 'Marionnette à poignée d\'un chat',
                'room_id' => 6 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 9 + $types, // Marionnette à main
                'date' => '2001',
                'info' => 'Pour la représentation \'Gepetto\', basée sur l\'histoire de Pinocchio, la conceptrice bulgare Silva Bachvarova crée des marionnettes grandeur nature en matériaux doux tels que la mousse. Les marionnettes partagent la scène avec des acteurs, comme c\'est souvent le cas au Theater Taptoe.',
            ],
            [
                'object_number' => '2021-029-147',
                'language_id' => 'fr',
                'name' => 'Marionnette à poignée d\'un bébé',
                'room_id' => 6 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 9 + $types, // Marionnette à main
                'date' => '1994',
                'info' => 'Dans la représentation \'Tim of Tiene... et neuf mois\', Theater Taptoe emmène les enfants du public dans la création d\'une nouvelle vie. Ils voient un enfant grandir dans le ventre. À la fin des représentations, les enfants ont eux-mêmes le choix : est-ce Tim ou Tiene ?',
            ],
            [
                'object_number' => '2021-029-166',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un ver luisant à deux têtes',
                'room_id' => 6 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 15 + $types, // Marionnette à tige
                'date' => '1999',
                'info' => 'Dans la représentation \'OMOEstuintje\', des animaux du potager tels que des taupes et des vers de terre jouent les premiers rôles. Les marionnettes sont équipées de gadgets techniques. Ce ver luisant est équipé de deux mécanismes électroniques pour allumer des lumières.',
            ],
            [
                'object_number' => '2021-029-142',
                'language_id' => 'fr',
                'name' => 'Marionnette à poignée d\'un petit cochon',
                'room_id' => 6 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 11 + $types, // Marionnette à bec
                'date' => '1999',
                'info' => 'Freek Neirynck, Danilo Conti et Antonella Piroli adaptent le conte du Loup et des trois petits cochons pour le spectacle pour enfants \'OINK!\'. Le petit cochon est fabriqué à partir de matériaux doux et semble être fait pour être câliné.',
            ],
            [
                'object_number' => '2021-029-117',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un grand-père',
                'room_id' => 6 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 6 + $types, // Marionnette à tige
                'date' => '1986',
                'info' => '\'Le jour où Karageus... (arriva)\' est basé sur la bande dessinée \'Le lendemain... un siècle, une année et un jour\' de Knut Kersse et Freek Neirynck datant de 1984. Dans le cadre de cette production, Luk De Bruyker reçoit une introduction au théâtre d\'ombres turc du marionnettiste Hayali Torun Çelebi. Les marionnettes créées par Knut Kersse ressemblent fortement à des personnages de bande dessinée.',
            ],
            [
                'object_number' => '2021-029-155',
                'language_id' => 'fr',
                'name' => 'Figure plate de la Diva',
                'room_id' => 6 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 8 + $types, // Figure plate
                'date' => '2000',
                'info' => '\'UBU KAKA PIPI\' est un spectacle pour enfants sans paroles et absurde sur l\'enfance du Roi Ubu qui grandit pour devenir un tyran cruel. Herr Seele crée une série de figures plates qui forment un cortège coloré dans le spectacle. Cette diva fait également son entrée dans le cortège.',
            ],
            [
                'object_number' => '2021-029-172',
                'language_id' => 'fr',
                'name' => 'Marionnette à tige d\'un homme',
                'room_id' => 6 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 17 + $types, // Marionnette à tige
                'date' => '1989',
                'info' => '\'Pruuke Dossche\' est joué en plein air comme un \'wagenspel\' avec des figures plates sur une tige. Les deux côtés de la même figure représentent un personnage différent. La pièce traite de Constant \'Pruuke\' Dossche, un Gantois, et de son rôle dans la révolte ouvrière de 1839. Theater Taptoe crée cette pièce sur commande du MIAT, l\'actuel Musée de l\'Industrie.',
            ],
            [
                'object_number' => '2021-029-127',
                'language_id' => 'fr',
                'name' => 'Marionnette de Senta',
                'room_id' => 6 + $rooms,
                'company_id' => 3 + $companies, // Theater Taptoe
                'type_id' => 1 + $types, // Accessoire de scène
                'date' => '2008',
                'info' => 'Theater Taptoe présente \'Le Hollandais volant\', d\'après l\'opéra de Richard Wagner (1813-1883). Le spectacle muet est accompagné de la musique de l\'ensemble de cuivres I Solisti del Vento, qui représente l\'équipage du navire. La Tchèque Michaela Bartonova conçoit des figurines inspirées de la technique japonaise du Bunraku, où plusieurs acteurs font bouger une marionnette. Le Hollandais volant lui-même est une ombre que le public ne voit jamais.',
            ],
            [
                'object_number' => 'Blind Dudapaiva Company BozeWolfFestival 2017 (c) Patrick Van Vlerken',
                'language_id' => 'fr',
                'name' => 'Scène de Blind',
                'room_id' => 6 + $rooms,
                'company_id' => 4 + $companies, // Dudapaiva Company
                'type_id' => 10 + $types, // Scène
                'date' => '2017',
                'info' => 'Représentation de \'Blind\' de la compagnie Dudapaiva au festival de théâtre de marionnettes Boze Wolf à Aarschot. Le théâtre avec des marionnettes de toutes sortes et tailles, tant au niveau national qu\'international, y est présenté. La pièce \'Blind\' raconte une histoire colorée avec des marionnettes et de la danse sur la quête de guérison et la différence.',
            ],
            [
                'object_number' => 'de-tuin-van-de-walvis_05_(c)Diego Franssens',
                'language_id' => 'fr',
                'name' => 'Scène du Jardin de la Baleine',
                'room_id' => 6 + $rooms,
                'company_id' => 5 + $companies, // DE MAAN
                'type_id' => 10 + $types, // Scène
                'date' => '2018',
                'info' => '\'Le Jardin de la baleine\' est une représentation de marionnettes de la Forge d\'Images DE MAAN. La pièce est basée sur l\'histoire animalière du même nom de Toon Tellegen et traite du fait que vouloir toujours plus ne conduit pas nécessairement au bonheur. Paul Contryn crée les figurines et joue la pièce. Des acteurs célèbres prêtent leur voix.',
            ],
            [
                'object_number' => 'planeet-nivanir_42_(c)Diego Franssens',
                'language_id' => 'fr',
                'name' => 'Scène de la Planète Nivanir',
                'room_id' => 6 + $rooms,
                'company_id' => 5 + $companies, // DE MAAN
                'type_id' => 10 + $types, // Scène
                'date' => '2018',
                'info' => '\'Planète Nivanir\' est une représentation de marionnettes de la Forge d\'Images DE MAAN. Greet Jacobs et Femke Stallaert, membres du noyau artistique de DE MAAN, se glissent dans la peau de deux êtres extraterrestres observant les humains de loin.',
            ],
            [
                'object_number' => '2021-028-035',
                'language_id' => 'fr',
                'name' => 'Marionnette à bec d\'un poisson',
                'room_id' => 6 + $rooms,
                'company_id' => 10 + $companies, // Hopla (famille Contryn)
                'type_id' => 11 + $types, // Marionnette à bec
                'date' => '1958',
                'info' => 'À l\'origine, la famille Contryn présente \'Visselke Timpeltee\' avec des marionnettes, mais Louis Contryn retravaille la pièce pour des marionnettes à main. En 1958, Hopla joue \'Visselke Timpeltee\' à l\'Expo \'58 et la représentation remporte des prix. L\'histoire d\'un petit poisson qui exauce des vœux est inspirée du conte des frères Grimm \'Du pêcheur et de sa femme\'.',
            ],
        ];

        $puppetsRoom1En = [
            [
                'object_number' => '2021-029-005',
                'language_id' => 'en',
                'name' => 'Stick-rod puppet of the Little Prince',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 6 + ($types * 2), // Stick-rod puppet
                'date' => '1978',
                'info' => 'In 1978, Theater Taptoe performs "The Little Prince" for the first time, based on the modern fairy tale by Antoine de Saint-Exupéry from 1943. The little prince symbolizes childlike wonder and imagination. In the play, he is portrayed by various types of puppets. Actors provide the voices. This stick-rod puppet has the control cross at the bottom. The arms move via rods.',
            ],
            [
                'object_number' => '2021-029-001',
                'language_id' => 'en',
                'name' => 'Marionette of the Little Prince',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 13 + ($types * 2), // Marionette
                'date' => '1978',
                'info' => 'In 1978, Theater Taptoe performs "The Little Prince" for the first time, based on the modern fairy tale by Antoine de Saint-Exupéry from 1943. The little prince symbolizes childlike wonder and imagination. In the play, he is portrayed by various types of puppets. Actors provide the voices. This marionette has the control cross at the top. The limbs of the puppet move via strings.',
            ],
            [
                'object_number' => '2021-029-008',
                'language_id' => 'en',
                'name' => 'Set piece of a planet',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 1 + ($types * 2), // Set piece
                'date' => '1978',
                'info' => 'In 1978, Theater Taptoe performs "The Little Prince" for the first time, based on the modern fairy tale by Antoine de Saint-Exupéry from 1943. It takes place in an imaginary universe full of planets.',
            ],
            [
                'object_number' => '2021-028-020',
                'language_id' => 'en',
                'name' => 'Hand puppet of Faust',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 10 + ($companies * 2), // Hopla (Family Contryn)
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => '1948-1949',
                'info' => 'Since the 16th century, prominent figures in literature and the arts have told the legend of Faust, who sells his soul to the devil. The Contryn family also brings it to the stage in various versions. Hopla is based on the text by Michel de Ghelderode (1898-1962) and opts for hand puppets. Actors provide the voices. The smooth hair and faces of the puppets resemble wax figures.',
            ],
            [
                'object_number' => '2021-028-024',
                'language_id' => 'en',
                'name' => 'Hand puppet of the Devil',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 10 + ($companies * 2), // Hopla (Family Contryn)
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => '1948-1949',
                'info' => 'Since the 16th century, prominent figures in literature and the arts have told the legend of Faust, who sells his soul to the devil. The Contryn family also brings it to the stage in various versions. Hopla is based on the text by Michel de Ghelderode (1898-1962) and opts for hand puppets. Actors provide the voices. The devil\'s face is asymmetric because one eye is closed, enhancing the dynamism in his facial features.',
            ],
            [
                'object_number' => 'P1850111',
                'language_id' => 'en',
                'name' => 'Stick-rod puppet of Faust',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 12 + ($companies * 2), // Mechels Stadspoppentheater (Family Contryn)
                'type_id' => 15 + ($types * 2), // Stick-rod puppet
                'date' => 'Late 1960s',
                'info' => 'Since the 16th century, prominent figures in literature and the arts have told the legend of Faust, who sells his soul to the devil. The Contryn family also brings it to the stage in various versions. In the late 1960s, Mechels Stadspoppentheater chooses the text by Gerard Walschap (1898-1989) and uses stick-rod puppets. The large figures are designed by political caricaturist Pil. This Faust looks angular and colorful. The head is made on a base of styrofoam.',
            ],
            [
                'object_number' => 'P185112',
                'language_id' => 'en',
                'name' => 'Stick-rod puppet of Mephistopheles',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 12 + ($companies * 2), // Mechels Stadspoppentheater (Family Contryn)
                'type_id' => 15 + ($types * 2), // Stick-rod puppet
                'date' => 'Late 1960s',
                'info' => 'Since the 16th century, prominent figures in literature and the arts have told the legend of Faust, who sells his soul to the devil. The Contryn family also brings it to the stage in various versions. In the late 1960s, Mechels Stadspoppentheater chooses the text by Gerard Walschap (1898-1989) and uses stick-rod puppets. The large figures look angular and colorful. They are designed by political caricaturist Pil, who, for this Mephistopheles, is inspired by the appearance of politician Camille Huysmans.',
            ],
            [
                'object_number' => '2021-028-100',
                'language_id' => 'en',
                'name' => 'Mask of a good spirit',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 13 + ($companies * 2), // School for Puppetry (Family Contryn)
                'type_id' => 2 + ($types * 2), // Mask
                'date' => '1974',
                'info' => 'Since the 16th century, prominent figures in literature and the arts have told the legend of Faust, who sells his soul to the devil. The Contryn family also brings it to the stage in various versions. In 1974, students from the School for Puppetry under the guidance of teacher Jef Lettany create experimental figures in the form of masks for their version.',
            ],
            [
                'object_number' => '2021-028-101',
                'language_id' => 'en',
                'name' => 'Mask of an evil spirit',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 13 + ($companies * 2), // School for Puppetry (Family Contryn)
                'type_id' => 2 + ($types * 2), // Mask
                'date' => '1974',
                'info' => 'Since the 16th century, prominent figures in literature and the arts have told the legend of Faust, who sells his soul to the devil. The Contryn family also brings it to the stage in various versions. In 1974, students from the School for Puppetry under the guidance of teacher Jef Lettany create experimental figures in the form of masks for their version.',
            ],
            [
                'object_number' => '1965-089-035',
                'language_id' => 'en',
                'name' => 'Control-rod puppet of Pierke',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 6 + ($companies * 2), // Spelleke van de Muide
                'type_id' => 16 + ($types * 2), // Control-rod puppet
                'date' => '1922-1942',
                'info' => 'In the Spelleke van de Muide (1922-1942), Pierke, previously often Pierrot, takes on a prominent role as a rebellious but kind-hearted hero. A classic play is "Journey to the Moon" in which Pierke is sent to the moon with a cannon and upon his return is hailed as a hero. Unlike his predecessor, the current Pierke no longer has a mustache and is a true boy from Ghent.',
            ],
            [
                'object_number' => '2022-007-230',
                'language_id' => 'en',
                'name' => 'Set piece of a moon',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 9 + ($companies * 2), // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 1 + ($types * 2), // Set piece
                'date' => 'Unknown',
                'info' => 'The collection of puppets, props, and set pieces of Pierke van Alijn has been around for many years. They are not linked to one play but appear in multiple performances, like this set piece of a friendly moon.',
            ],
            [
                'object_number' => '2022-007-105',
                'language_id' => 'en',
                'name' => 'Control-rod puppet of a moon creature',
                'room_id' => 1 + ($rooms * 2),
                'company_id' => 9 + ($companies * 2), // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 16 + ($types * 2), // Control-rod puppet
                'date' => '1942-present',
                'info' => 'Originally, the moon creatures from "Journey to the Moon" are made from real vegetables for each performance. Later, the players decide to use puppets. When the players of Spelleke van Folklore no longer perform the play, the puppets take on new roles. At Pierke van Alijn, they are Frosti and Zero, with new colors and clothing.',
            ],
        ];
        $puppetsRoom2En = [
            [
                'object_number' => '2022-006-017',
                'language_id' => 'en',
                'name' => 'Design for scenography of \'Don G.\'',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 3 + ($types * 2), // Design
                'date' => '2004',
                'info' => 'With \'Don G.\', Theater Taptoe brings music and figure theater to the music of Mozart (1756-1791). Players dressed in black carry colorful figures and masks in this production. The show is the first in a series of collaborations with the wind ensemble I Solisti del Vento.',
            ],
            [
                'object_number' => '2022-006-029_004',
                'language_id' => 'en',
                'name' => 'Costume designs for \'Don G.\'',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 3 + ($types * 2), // Costume designs
                'date' => '2004',
                'info' => 'With \'Don G.\', Theater Taptoe brings music and figure theater to the music of Mozart (1756-1791). Players dressed in black carry colorful figures and masks in this production. The show is the first in a series of collaborations with the wind ensemble I Solisti del Vento.',
            ],
            [
                'object_number' => '2022-006-035-003',
                'language_id' => 'en',
                'name' => 'Scenography design for \'The day Karageus... (arrived)\'',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 3 + ($types * 2), // Scenography design
                'date' => '1986',
                'info' => '\'The day Karageus... (arrived)\' is based on a comic strip by Knut Kersse and Freek Neirynck. It\'s about a puppeteer who wants to bring peace to a war-torn country. Luk De Bruyker is initiated into Turkish shadow play by Hayali Torun Çelebi for this play. Not long after, De Bruyker himself is given the special title of Hayali, grandmaster in Turkish shadow play.',
            ],
            [
                'object_number' => '2022-006-037-016',
                'language_id' => 'en',
                'name' => 'Scenography design for \'The day Karageus... (arrived)\'',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 3 + ($types * 2), // Scenography design
                'date' => '1986',
                'info' => '\'The day Karageus... (arrived)\' is based on a comic strip by Knut Kersse and Freek Neirynck. It\'s about a puppeteer who wants to bring peace to a war-torn country. Luk De Bruyker is initiated into Turkish shadow play by Hayali Torun Çelebi for this play. Not long after, De Bruyker himself is given the special title of Hayali, grandmaster in Turkish shadow play.',
            ],
            [
                'object_number' => '2022-006-065',
                'language_id' => 'en',
                'name' => 'Set design for \'Lène Maréchal, the revue of a tasty lady\'',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 3 + ($types * 2), // Set design
                'date' => '1983',
                'info' => 'With this play, Theater Taptoe pays tribute to Hélène Maréchal (1893-1970), an icon of Ghent popular theater. She was a singer, actress, and cabaret artist, but also dedicated herself to various charitable causes during her career. The production is a mix of puppetry, sketches, and singing.',
            ],
            [
                'object_number' => '2022-006-074-002',
                'language_id' => 'en',
                'name' => 'Set design for \'The moon paints stars above Bursa\'',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 3 + ($types * 2), // Set design
                'date' => '2001',
                'info' => '\'The moon paints stars above Bursa\' is a socio-artistic performance by Theater Taptoe for children with a migration background. The main characters from the Turkish shadow play, Karagöz and Hacivat, play a prominent role as actors and figures. Luk De Bruyker himself holds the special title of Hayali, grandmaster in Turkish shadow play.',
            ],
            [
                'object_number' => '2022-006-103',
                'language_id' => 'en',
                'name' => 'Design of figures from \'Beerenbodegem\'',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 3 + ($types * 2), // Design
                'date' => '1996/1997',
                'info' => '\'Beerenbodegem\' is a contemporary fairy tale written by Freek Neirynck and Paul Berkenmann. The play disrupts a peaceful bear village with the arrival of Herman Stressman, a salesman of electronic toys and video games. The sets and costumes are designed by the well-known Dutch children\'s book illustrator Nicole Rutten.',
            ],
            [
                'object_number' => 'FO-0122-047',
                'language_id' => 'en',
                'name' => 'Design drawing of the figure Faust',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 3 + ($types * 2), // Design drawing
                'date' => 'Ca. 1948-1949',
                'info' => 'Since the 16th century, prominent figures in literature and the arts have told the legend of Faust, who sells his soul to the devil. The Contryn family also brings it to the stage in various versions. In the first version, Hopla chooses hand puppets. Actors provide the voices. The smooth hair and faces of the puppets resemble wax figures.',
            ],
            [
                'object_number' => 'FO-0122-056',
                'language_id' => 'en',
                'name' => 'Design drawing of a devil or evil spirit',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 7 + ($companies * 2), // Spelleken van Ulenspiegel
                'type_id' => 3 + ($types * 2), // Design drawing
                'date' => 'Early 1940s',
                'info' => 'Design for a puppet from \'Mieke Miserie\' by Spelleken van Ulenspiegel. Mieke Miserie unexpectedly receives a visit from Death. Because she does not want to die yet, she decides to trap Death. He is captured in her enchanted pear tree and can only be released on her terms. This play is performed with marionettes on strings up to two meters long.',
            ],
            [
                'object_number' => 'FO-0122-062',
                'language_id' => 'en',
                'name' => 'Design drawing of Death and Lady Virtue',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 3 + ($types * 2), // Design drawing
                'date' => 'Early 1960s',
                'info' => 'Designs for rod puppets from \'The esbatement of the apple tree\'. This play is based on a text by Herman Teirlinck (1879-1967). In this story, Death Farmer Goodround comes to take him prematurely, but Goodround lures him into a trap. He also outsmarts the Devil. The colorful designs for the rod puppets and sets are by political caricaturist Pil (1915-2007). German puppet maker Till De Kock (1915-2010) executes them.',
            ],
            [
                'object_number' => 'FO-0122-081',
                'language_id' => 'en',
                'name' => 'Set design for The esbatement of the apple tree',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 3 + ($types * 2), // Set design
                'date' => 'Early 1960s',
                'info' => 'Set design for \'The esbatement of the apple tree\'. This play is based on a text by Herman Teirlinck (1879-1967). In this story, Death Farmer Goodround comes to take him prematurely, but Goodround lures him into a trap. He also outsmarts the Devil. The colorful designs for the rod puppets and sets are by political caricaturist Pil (1915-2007). German puppet maker Till De Kock (1915-2010) executes them.',
            ],
            [
                'object_number' => 'ontwerp-003',
                'language_id' => 'en',
                'name' => 'Designs by Stefan Vermeersch',
                'room_id' => 2 + ($rooms * 2),
                'company_id' => 6 + ($companies * 2), // Spelleke van Folklore
                'type_id' => 3 + ($types * 2), // Design
                'date' => 'Early 1940s',
                'info' => 'The Spelleke van de Muide (1922-1942) becomes intertwined with the Folklore Museum in Ghent in 1932. In 1942, curator Julien Boes believes that this puppet play is in need of innovation. Under his influence, the Spelleke van Folklore is born. Stefaan Vermeersch designs new figures. They have a more modern appearance and carry his distinct style. Bernard Van Guyse carves the heads.',
            ],
        ];
        $puppetsRoom3En = [
            [
                'object_number' => '2021-029-038',
                'language_id' => 'en',
                'name' => 'Puppet of Miss Symforosa, a beguine',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Theater Taptoe
                'type_id' => 17 + ($types * 2), // Stick puppet
                'date' => '1984',
                'info' => 'Theater Taptoe creates "The very beautiful miniature of Miss Symforosa, the beguine" commissioned by the Ghent city council...'
            ],
            [
                'object_number' => '2021-029-039',
                'language_id' => 'en',
                'name' => 'Stick puppet of a procession group',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Theater Taptoe
                'type_id' => 17 + ($types * 2), // Stick puppet
                'date' => '1985',
                'info' => 'Theater Taptoe creates "The very beautiful miniature of Miss Symforosa, the beguine" commissioned by the Ghent city council...'
            ],
            [
                'object_number' => '1965-089-058',
                'language_id' => 'en',
                'name' => 'Rod puppet of a friar',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van de Muide
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1922-1942',
                'info' => 'Pastor Joris Vandenbroucke founds Spelleke van de Muide in 1922 to enrich the free time of children in the working-class neighborhood...'
            ],
            [
                'object_number' => '2021-028-019',
                'language_id' => 'en',
                'name' => 'Hand puppet of the priest',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => 'Late 1940s',
                'info' => 'In this short farce, a man decides to respond to his unpleasant wife only with the words \'now or never\' (go ahead). The priest and the neighbor must calm things down. The characters are portrayed by lively hand puppets. In the end, it is the priest who comes up with the solution.'
            ],
            [
                'object_number' => '1965-089-043',
                'language_id' => 'en',
                'name' => '(Rod) puppet of a pig',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van de Muide
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1922-1942',
                'info' => 'In a humorous way, Spelleke van de Muide conveys an educational and Catholic message from 1922 onwards. This wooden pig from their collection likely symbolizes the pig of Saint Anthony...'
            ],
            [
                'object_number' => '2021-028-071',
                'language_id' => 'en',
                'name' => 'Mouth puppet of a lion',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 11 + ($types * 2), // Mouth puppet
                'date' => 'Approx. 1955',
                'info' => 'German puppet maker Till De Kock creates a whole series of recognizable characters for Hopla. Particularly fluffy and cartoonish animals are very popular with children. The puppets fit into a playful children\'s culture, which becomes less moralistic over time. This lion can even smoke...'
            ],
            [
                'object_number' => '2021-028-068',
                'language_id' => 'en',
                'name' => 'Mouth and rod puppet of a cow',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 5 + ($types * 2), // Mouth and rod puppet
                'date' => 'Approx. 1955',
                'info' => 'German puppet maker Till De Kock creates a whole series of recognizable characters for Hopla. Particularly fluffy and cartoonish animals are very popular with children. The puppets fit into a playful children\'s culture, which becomes less moralistic over time. This puppet is operated with two hands.'
            ],
            [
                'object_number' => '2021-028-086',
                'language_id' => 'en',
                'name' => 'Mouth puppet of a dog',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 11 + ($types * 2), // Mouth puppet
                'date' => 'Approx. 1955',
                'info' => 'Hopla wants to appeal to children. Hand and mouth puppets of fluffy and cartoonish animals are ideal for this. This dog is part of a series of puppets created by Annie Arndt for Hopla. This collaboration is unique for Flanders, as she is also active with the internationally renowned Hohnsteiner Puppenspiele of puppet maker Max Jacob.'
            ],
            [
                'object_number' => '2021-028-063',
                'language_id' => 'en',
                'name' => 'Rod puppet of a caterpillar',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 15 + ($types * 2), // Rod puppet
                'date' => '1950s - 1960s',
                'info' => 'Hopla wants to appeal to children. Hand and mouth puppets of cartoonish animals do well. This fuzzy caterpillar is almost transparent. This figure is created by Louis Contryn and his wife Jacqueline Boeykens. This is exceptional, as they usually have their puppets made by others at that time.'
            ],
            [
                'object_number' => '2021-028-077',
                'language_id' => 'en',
                'name' => 'Spider on a thread',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 4 + ($types * 2),
                'date' => 'Approx. 1955',
                'info' => 'German puppet maker Till de Kock is the main supplier for Hopla for many years. In addition to puppets for specific productions, he also creates a whole series of recognizable figures and animals in large quantities, such as this spider from the basic series of animals.'
            ],
            [
                'object_number' => '2021-029-046',
                'language_id' => 'en',
                'name' => 'Stick puppet of a seagull',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Theater Taptoe
                'type_id' => 17 + ($types * 2), // Stick puppet
                'date' => '2004',
                'info' => 'Seagull from "Sjoerd says FOERT!", a wordless production for young children. In the play, Theater Taptoe experiments with making technology and movement visible without losing magic. The performance is a great international success. This stick puppet with ingenious mechanics seems lifelike in its movements.'
            ],
            [
                'object_number' => '2022-007-089',
                'language_id' => 'en',
                'name' => 'Rod puppet of a humanized fox',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1942 - today',
                'info' => 'When founding Spelleke van Folklore in 1942, Stefan Vermeersch designs new puppets, carved by Bernard Van Guyse. The puppets have a distinct modern style. In addition to human figures, there are also animal heads. This fox is the animalized version of a cunning character or the result of a unfortunate enchantment.'
            ],
            [
                'object_number' => '2021-028-093',
                'language_id' => 'en',
                'name' => 'Rod puppet of God',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 15 + ($types * 2), // Rod puppet
                'date' => '1965',
                'info' => 'Hopla performs the medieval farce "Het esbatement van de appelboom" with rod puppets, based on the text by Herman Teirlinck. Farmer Goedrond and Woman Deugd implore God to protect their beautiful apple tree from thieves. Anyone who steals an apple or has malicious intentions gets stuck in the tree. Even the devil and Death get stuck. God is depicted here as a kind grandpa with a cotton beard. Over his white dress, he wears a poncho in the colors of the rainbow.'
            ],
            [
                'object_number' => '1965-089-016',
                'language_id' => 'en',
                'name' => 'Rod puppet of Filemon the police officer',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van de Muide
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1922-1942',
                'info' => 'The players of Spelleke van de Muide have a fixed collection of puppets. Typical, recognizable characters like a police officer, a priest, or a maid appear in multiple pieces. The performances are rarely identical due to improvisation and interaction with the audience.'
            ],
            [
                'object_number' => '1965-089-047',
                'language_id' => 'en',
                'name' => 'Rod puppet of a soldier',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van de Muide
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1922-1942',
                'info' => 'The players of Spelleke van de Muide have a fixed collection of puppets. Typical, recognizable characters like a police officer, a priest, or a maid appear in multiple pieces. The performances are rarely identical due to improvisation and interaction with the audience.'
            ],
            [
                'object_number' => '1965-089-070',
                'language_id' => 'en',
                'name' => 'Rod puppet of a nobleman',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van de Muide
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1922-1942',
                'info' => 'The players of Spelleke van de Muide have a fixed collection of puppets. Typical, recognizable characters, like a police officer, a priest, or a maid, appear in multiple pieces. This puppet of a nobleman plays the role of Baron De la Kethulle (or Kathulle) in the classic "Reis naar de maan" (Journey to the Moon). The performances are rarely identical due to improvisation and interaction with the audience.'
            ],
            [
                'object_number' => '1965-089-072',
                'language_id' => 'en',
                'name' => 'Rod puppet of a maid (Pelagie or Katrien)',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van de Muide
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1922-1942',
                'info' => 'The players of Spelleke van de Muide have a fixed collection of puppets. Recognizable or classic characters, like a police officer, a priest, or a maid, appear in multiple pieces. The performances are rarely identical due to improvisation and interaction with the audience. All players are men, so they also portray all female roles, although there aren\'t many.'
            ],
            [
                'object_number' => '2021-028-044',
                'language_id' => 'en',
                'name' => 'Hand puppet of a boy (basic series)',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => 'Approx. 1955',
                'info' => 'German puppet maker Till De Kock is the main supplier for Hopla for many years. In addition to puppets for specific productions, he also creates a whole series of characters in large quantities. Typical, recognizable figures like a princess, a cook, or a knight are usable in multiple pieces. Hopla also sells them to local schools and groups.'
            ],
            [
                'object_number' => '2021-028-050',
                'language_id' => 'en',
                'name' => 'Hand puppet of a girl (basic series)',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => 'Approx. 1955',
                'info' => 'German puppet maker Till De Kock is the main supplier for Hopla for many years. In addition to puppets for specific productions, he also creates a whole series of characters in large quantities. Typical, recognizable figures like a princess, a cook, or a knight are usable in multiple pieces. Hopla also sells them to local schools and groups.'
            ],
            [
                'object_number' => '2021-028-058',
                'language_id' => 'en',
                'name' => 'Hand puppet of a princess (basic series)',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => 'Approx. 1955',
                'info' => 'German puppet maker Till De Kock is the main supplier for Hopla for many years. In addition to puppets for specific productions, he also creates a whole series of characters in large quantities. Typical, recognizable figures like a princess, a cook, or a knight are usable in multiple pieces. Hopla also sells them to local schools and groups.'
            ],
            [
                'object_number' => '2021-028-057',
                'language_id' => 'en',
                'name' => 'Hand puppet of an engineer or police officer (basic series)',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => 'Approx. 1955',
                'info' => 'German puppet maker Till De Kock is the main supplier for Hopla for many years. In addition to puppets for specific productions, he also creates a whole series of characters in large quantities. Typical, recognizable figures like a princess, a cook, or a knight are usable in multiple pieces. Hopla also sells them to local schools and groups.'
            ],
            [
                'object_number' => '2021-028-053',
                'language_id' => 'en',
                'name' => 'Hand puppet of a cook (basic series)',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => 'Approx. 1955',
                'info' => 'German puppet maker Till De Kock is the main supplier for Hopla for many years. In addition to puppets for specific productions, he also creates a whole series of characters in large quantities. Typical, recognizable figures like a princess, a cook, or a knight are usable in multiple pieces. Hopla also sells them to local schools and groups.'
            ],
            [
                'object_number' => '2021-029-168',
                'language_id' => 'en',
                'name' => 'Rod puppet of a boy',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Theater Taptoe
                'type_id' => 15 + ($types * 2), // Rod puppet
                'date' => '2008',
                'info' => 'Theater Taptoe collaborates with artist Luis Zornoza Boy for the second time for "Doctor Frankenstein." The dreamy figures are inspired by arte povera, where junk is used functionally.'
            ],
            [
                'object_number' => '2021-029-162',
                'language_id' => 'en',
                'name' => 'Bekpop of a punk',
                'room_id' => 3 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Theater Taptoe
                'type_id' => 11 + ($types * 2), // Bekpop
                'date' => '1987',
                'info' => 'In the reggae musical "Reggae Peggy," Theater Taptoe takes aim at commercial TV productions with puppets. To prepare, the creators and actors fully immerse themselves in the world of The Muppets. They even apprentice with the producers and puppet makers of "The Muppet Show."'
            ],
        ];
        $puppetsRoom4En = [
            [
                'object_number' => '2021-028-039',
                'language_id' => 'en',
                'name' => 'Hand puppet of an animal tamer',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => 'Approx. 1955',
                'info' => 'German puppet maker Till De Kock is the main supplier for Hopla for many years. In addition to puppets for specific productions, he also creates a whole series of characters in large quantities. Typical, recognizable figures like a princess, a cook, or a knight are usable in multiple pieces. Some exotic, stereotypical figures are also part of the basic series. This animal tamer resembles images of the Ottoman Empire that circulated in the West, especially in the 19th century.'
            ],
            [
                'object_number' => '2022-007-031',
                'language_id' => 'en',
                'name' => 'Rod puppet of Fu Manchu',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Folklore Game
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1980s-1990s',
                'info' => 'The performers of Folklore Game have a fixed collection of puppets. Typical, recognizable figures like a princess or a soldier are usable in multiple pieces. Some stereotypical figures are also part of it, such as this Chinese servant, Fu Manchu. The yellow skin color and exaggerated "slit eyes" especially make the Chinese man a stereotypical caricature.'
            ],
            [
                'object_number' => '2021-028-036',
                'language_id' => 'en',
                'name' => 'Hand puppet of an Eskimo',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 1 + ($companies * 2), // Hopla
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => 'Ca. 1955',
                'info' => 'The German puppet maker Till De Kock is the main supplier for Hopla for many years. In addition to puppets for specific productions, he also creates a series of characters in large quantities. Typical, recognizable figures such as a princess, a chef, or a knight are usable in multiple pieces. Some stereotypical characters are also part of the basic series. The exaggerated "slit eyes" and yellow skin color make this "Eskimo" a stereotypical caricature. The term "Eskimo" is now under discussion, especially among the Inuit of Canada and Greenland.',
            ],
            [
                'object_number' => '2021-029-030',
                'language_id' => 'en',
                'name' => 'Hand puppet of a Sultan',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => '1981',
                'info' => 'In "Thomas is Dreaming in Class," actors and puppets from Theater Taptoe play together in a theater set for the first time. Various historical, exotic, and magical characters appear in Thomas\' dreams, including this Sultan reminiscent of the tales of One Thousand and One Nights. An impressive hand puppet on a flying carpet, this piece marks Taptoe\'s international breakthrough and sets the tone for the subsequent years.',
            ],
            [
                'object_number' => '1965-089-007',
                'language_id' => 'en',
                'name' => 'Rod puppet of African king Boela',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van de Muide
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1922-1942',
                'info' => 'The players of Spelleke van de Muide have a fixed collection of puppets. Typical, recognizable figures like a princess or a soldier are usable in multiple plays. Some stereotypical characters are also part of it. This African king named Boela is depicted with a crown and jewels. In several plays, he is portrayed as the king of the Moors, which was long a synonym for (black) African.',
            ],
            [
                'object_number' => '1943-061',
                'language_id' => 'en',
                'name' => 'Rod puppet of an African boy',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van Folklore
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1940s-1950s',
                'info' => 'The players of Spelleke van Folklore have a fixed collection of puppets. Recognizable, typical figures like a princess or a soldier are usable in multiple plays. Some stereotypical characters are also part of it. This African boy is depicted in a highly caricatural manner, reminiscent of the way Congolese people are portrayed in "Tintin in the Congo." This comic dates from around the same period and is filled with colonial propaganda and racist stereotypes.',
            ],
            [
                'object_number' => '2022-007-076',
                'language_id' => 'en',
                'name' => 'Rod puppet of an African boy',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van Folklore
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => 'Unknown',
                'info' => 'The players of Spelleke van de Muide and Spelleke van Folklore have a fixed collection of puppets. Typical, recognizable figures like a princess or a soldier are usable in multiple plays. Some stereotypical characters are also part of it, like this African boy. It evokes typical images of an African "boy," as referred to as the household staff of wealthy colonials.',
            ],
            [
                'object_number' => '1965-089-008',
                'language_id' => 'en',
                'name' => 'Rod puppet of Kabouter Bim',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van de Muide
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1922-1942',
                'info' => 'The players of Spelleke van de Muide have a fixed collection of puppets. Classic fairy-tale characters like gnomes, giants, and witches are also part of it. This gnome Bim with the green hat has two colleagues, Bam with the blue hat, and Boum with the red hat. They appear in the forest where Pierke is on an adventure.',
            ],
            [
                'object_number' => '2021-029-032',
                'language_id' => 'en',
                'name' => 'Marionette of a mermaid',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 13 + ($types * 2), // Marionette
                'date' => '1981',
                'info' => 'In "Thomas is Dreaming in Class," actors and puppets from Theater Taptoe play together in a theater set for the first time. Characters are doubled with actors and different types of puppets. Various historical, exotic, and magical characters appear in Thomas\' dreams, including this mermaid in the form of a marionette. The piece marks Taptoe\'s international breakthrough and sets the tone for the following years.',
            ],
            [
                'object_number' => '2021-029-067',
                'language_id' => 'en',
                'name' => 'Marionette of Neptune',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Marionette Theater Taptoe
                'type_id' => 13 + ($types * 2), // Marionette
                'date' => '1973',
                'info' => 'In the early years of Marionette Theater Taptoe, mainly fairy tales are performed, such as "The Little Mermaid" by Hans Christian Andersen. This Neptune is the god of the sea based on Roman mythology. In the play, he is the king and also the father of the little mermaid.',
            ],
            [
                'object_number' => '2021-029-059',
                'language_id' => 'en',
                'name' => 'Marionette of a fairy',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Marionette Theater Taptoe
                'type_id' => 13 + ($types * 2), // Marionette
                'date' => '1980',
                'info' => 'In the early years of Marionette Theater Taptoe, mainly fairy tales are performed, such as "Cinderella" by the Brothers Grimm. This good fairy uses her magic to help Cinderella escape from her terrible stepmother. ',
            ],
            [
                'object_number' => '2022-007-063',
                'language_id' => 'en',
                'name' => 'Rod puppet of a dragon',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Spelleke van Folklore, Pierke van Alijn
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1942 - present',
                'info' => 'The players of Spelleke van Folklore and later Pierke van Alijn have a fixed collection of puppets. Classic fairy-tale characters like gnomes, giants, and witches are also part of it. This red dragon occasionally makes an appearance. It is a cute variant of the well-known mythical creature that can fly and breathe fire.',
            ],
            [
                'object_number' => '2021-029-176',
                'language_id' => 'en',
                'name' => 'Shadow of a ghost',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 14 + ($types * 2), // Shadow
                'date' => '2002',
                'info' => 'Luk De Bruyker of Theater Taptoe specializes in the technique and art of Turkish shadow play. The main characters are Karagöz and his counterpart Hacivat. Various supporting characters, such as this ghost with magical powers, are part of it. The shadow puppets are made of buffalo hide.',
            ],
            [
                'object_number' => '2021-029-197',
                'language_id' => 'en',
                'name' => 'Mask of Nero',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 2 + ($types * 2), // Mask
                'date' => '1988',
                'info' => 'Theater Taptoe pays tribute to the comic character Nero and his creator Marc Sleen in "The Adventures of Nero & Co." Actors perform with masks made of foam rubber, covering the head completely and hiding the microphones.',
            ],
            [
                'object_number' => '2021-029-120',
                'language_id' => 'en',
                'name' => 'Hand puppet of Gorbachev',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 12 + ($types * 2), // Hand puppet
                'date' => '1992',
                'info' => 'In the "Figurative Journey," Theater Taptoe looks back on its 25-year history. Many well-known and international characters appear in this production: Pierke, Karagöz, Emperor Charles, the Muppets, etc. This latex hand puppet of Mikhail Gorbachev closely resembles the former Soviet leader. The only deviation is the wine stain, which here has the shape of Belgium. The eyes of the puppet can move from left to right.',
            ],
            [
                'object_number' => '2021-029-037',
                'language_id' => 'en',
                'name' => 'Rod puppet of Rubens',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 15 + ($types * 2), // Rod puppet
                'date' => '1981',
                'info' => 'In "Thomas is Dreaming in Class," actors and puppets from Theater Taptoe play together in a theater set for the first time. In the dreams of Thomas, various historical, exotic, and magical figures appear. One of them is the famous painter Peter Paul Rubens (1577-1640), portrayed in the form of a rod puppet. The piece marks Taptoe\'s international breakthrough and sets the tone for the following years.',
            ],
            [
                'object_number' => '2021-029-088',
                'language_id' => 'en',
                'name' => 'Marionette of Tijl Uilenspiegel',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 11 + ($companies * 2), // Marionette Theater Taptoe
                'type_id' => 13 + ($types * 2), // Marionette
                'date' => '1979',
                'info' => 'Theater Taptoe, commissioned by the Masereel Fund, creates the socio-critical "Tijl, a Fist in the Heart," on the occasion of the Charles De Coster year. Freek Neirynck and Paul Berkenman write the texts. In a series of scenes inspired by Charles De Coster\'s novel, Tijl Uilenspiegel is portrayed as a symbol of the struggle for freedom.',
            ],

            [
                'object_number' => '2017-041-001',
                'language_id' => 'en',
                'name' => 'Marionette of Lène Marechal',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 13 + ($types * 2), // Marionette
                'date' => '1983',
                'info' => 'With "Lène Maréchal, the Revue of a Taster," Theater Taptoe pays tribute to Hélène Maréchal (1893-1970), an icon of Ghent folk theater. She was a singer, actress, and cabaret performer, but also dedicated herself to various charitable causes during her career. The production is a mix of puppetry, sketches, and singing. This marionette is one of the three puppets portraying Lène.',
            ],

            [
                'object_number' => '2022-007-025',
                'language_id' => 'en',
                'name' => 'Rod puppet of Daniël Termont',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 13 + ($companies * 2), // Pierke van Alijn
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '2013',
                'info' => 'The players of Spelleke van Folklore and later Pierke van Alijn have a fixed collection of puppets. Occasionally, new puppets are created for special occasions. This rod puppet of former mayor and well-known Ghent resident Daniël Termont has appeared on stage several times, including as "Daniël Girrebij" in "The Magic Tree."',
            ],

            [
                'object_number' => '2021-029-009',
                'language_id' => 'en',
                'name' => 'Marionette of Herman Teirlinck',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 11 + ($companies * 2), // Marionette Theater Taptoe
                'type_id' => 13 + ($types * 2), // Marionette
                'date' => '1979',
                'info' => 'Marionette Theater Taptoe draws inspiration from the literary work of Brussels-born Herman Teirlinck and creates a production about his life. Marionettes portray the characters, with prominent figures from the theater world providing the voices. The performance takes place at the KVS, with music by Jan De Wilde for the orchestra.',
            ],
            [
                'object_number' => '2021-029-149',
                'language_id' => 'en',
                'name' => 'Stick puppet of a poop',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 17 + ($types * 2), // Stick puppet
                'date' => '2000',
                'info' => '"UBU KAKA PIPI" is a wordless and absurd children\'s play about the childhood of King Ubu, who grows up to become a cruel tyrant. Little King Ubu does his business everywhere, and this poop plays a significant role in the performance.',
            ],

            [
                'object_number' => '2021-029-041',
                'language_id' => 'en',
                'name' => 'Marionette of Woman Fish',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 13 + ($types * 2), // Marionette
                'date' => '1991',
                'info' => '"Heaven!" is a production inspired by the work of René Magritte. In this surreal and wordless production for young children, objects and characters from Magritte\'s work come to life. The play is a huge success both domestically and internationally.',
            ],

            [
                'object_number' => '2021-029-193',
                'language_id' => 'en',
                'name' => 'Lingerie puppet',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 7 + ($types * 2), // Lingerie puppet
                'date' => '2006',
                'info' => 'With "Don G.," Theater Taptoe brings music and figure theater set to the music of Mozart (1756-1791). Players dressed in black carry these lingerie puppets on their hands, alternating with masks. The performance is the first in a series of collaborations with the wind ensemble I Solisti del Vento.',
            ],

            [
                'object_number' => '1965-089-042',
                'language_id' => 'en',
                'name' => 'Rod puppet of a horse',
                'room_id' => 4 + ($rooms * 2),
                'company_id' => 6 + ($companies * 2), // Spelleke van de Muide
                'type_id' => 16 + ($types * 2), // Rod puppet
                'date' => '1922-1942',
                'info' => 'The players of Spelleke van de Muide have a fixed collection of puppets that are usable in multiple plays. Horses in various sizes are also part of it. Another rod puppet can take a rider on this wooden horse.',
            ],
        ];
        $puppetsRoom5En = [
            [
                'object_number' => '1965-089-017',
                'language_id' => 'en',
                'name' => 'Devil Rod Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 6 + ($companies * 2), // Muide Play
                'type_id' => 16 + $types * 2,
                'date' => '1922-1942',
                'info' => 'Humorously, Muide Play conveys an educational and Catholic message since 1922. The devil, depicted with chicken legs, symbolizes evil. Today, the performances are more child-friendly, and religious ideas about good and evil are no longer relevant.',
            ],
            [
                'object_number' => '2021-028-091',
                'language_id' => 'en',
                'name' => 'Devil Rod Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 7 + ($companies * 2), // Hopla
                'type_id' => 15 + $types * 2,
                'date' => '1965',
                'info' => 'Hopla performs the medieval farce "The Esbatement of the Apple Tree" with rod puppets, based on Herman Teirlinck\'s (1879-1967) text. When Death comes prematurely for Farmer Goedrond, Goedrond lures him into a trap, outsmarting both Death and the Devil. They get stuck in his apple tree. In exchange for their freedom, Farmer Goedrond is granted a long and happy life without temptation to sin. Political cartoonist Pil (1915-2007) designs colorful rod puppets and sets.',
            ],

            [
                'object_number' => '1963-007',
                'language_id' => 'en',
                'name' => 'Devil Head (Rod Puppet)',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 6 + ($companies * 2), // Muide Play
                'type_id' => 16 + $types * 2,
                'date' => '1922-1942',
                'info' => 'This devil head is crafted by students from a Ghent art academy. The crooked and asymmetrical appearance aligns with the stereotypical image of a villain.',
            ],
            [
                'object_number' => '2021-028-031',
                'language_id' => 'en',
                'name' => 'Charon Head (Hand Puppet)',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 7 + ($companies * 2), // Hopla
                'type_id' => 12 + $types * 2,
                'date' => '1948-1949',
                'info' => 'Charon Head, the ferryman of hell from \'Faust\'. Since the 16th century, prominent figures in literature and the arts have told the legend of Faust, who sells his soul to the devil. The Contryn family also brings it to the stage in various versions. In the first version, Hopla opts for hand puppets. Actors provide the voices. The smooth hair and faces of the puppets resemble wax figures.',
            ],

            [
                'object_number' => '1965-089-004',
                'language_id' => 'en',
                'name' => 'Devil Rod Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 6 + ($companies * 2), // Muide Play
                'type_id' => 16 + $types * 2,
                'date' => '1922-1942',
                'info' => 'Muide Play is founded by assistant pastor Joris Vandenbroucke with the aim of filling the leisure time of working-class children with value. Humorously, the performances convey an educational and Catholic message. An evil spirit fits perfectly within the Catholic morality of good versus evil. Today, the performances are more child-friendly, and religious ideas are no longer relevant.',
            ],

            [
                'object_number' => '2021-028-006',
                'language_id' => 'en',
                'name' => 'Devil Marionette',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 8 + ($companies * 2), // Ulenspiegel Play
                'type_id' => 13 + $types * 2,
                'date' => '1942-1943',
                'info' => 'Ulenspiegel Play, Jef Contryn\'s first puppet theater, performs \'Mieke Miserie\' with marionettes. Mieke unexpectedly receives a visit from Death. Since she does not want to die yet, she decides to trap Death. Only on her terms can he free himself from her enchanted pear tree. She stays alive, but the misery in the world persists. This evil spirit is a helper of Death. His facial expression and green color emphasize his malevolence.',
            ],
            [
                'object_number' => '2021-028-003',
                'language_id' => 'en',
                'name' => 'Death Marionette',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 8 + ($companies * 2), // Ulenspiegel Play
                'type_id' => 13 + $types * 2,
                'date' => '1942-1943',
                'info' => 'Ulenspiegel Play, Jef Contryn\'s first puppet theater, performs \'Mieke Miserie\' with marionettes. Mieke unexpectedly receives a visit from Death, in the form of a skeleton. Since she does not want to die yet, she decides to trap Death. Only on her terms can he free himself from her enchanted pear tree. She stays alive, but the misery in the world persists.',
            ],
            [
                'object_number' => '2022-007-062',
                'language_id' => 'en',
                'name' => 'Pietje the Death Rod Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 9 + ($companies * 2), // Folklore Play
                'type_id' => 16 + $types * 2,
                'date' => '1942-2013',
                'info' => 'Similar to Muide Play, Folklore Play also conveys an educational and Catholic-inspired message. Various performances play on the fear of the devil or death. This Pietje the Death looks creepy with his scythe. Today, the performances are more child-friendly, and Pietje the Death no longer appears.',
            ],
            [
                'object_number' => '2021-028-092',
                'language_id' => 'en',
                'name' => 'Death Rod Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 7 + ($companies * 2), // Hopla
                'type_id' => 15 + $types * 2,
                'date' => '1965',
                'info' => 'Hopla performs the medieval farce "The Esbatement of the Apple Tree" with rod puppets, based on a text by Herman Teirlinck (1879-1967). When Death comes prematurely for Farmer Goedrond, Goedrond lures him into a trap. Death gets stuck in his apple tree. Political cartoonist Pil (1915-2007) creates colorful designs for the rod puppets and sets. Death has a dark green bald head, open eyes, and a gown with black-and-white strands suggesting ribs.',
            ],
            [
                'object_number' => '2021-028-045',
                'language_id' => 'en',
                'name' => 'Death Hand Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 7 + ($companies * 2), // Hopla
                'type_id' => 12 + $types * 2,
                'date' => 'Approximately 1955',
                'info' => 'German puppet maker Till De Kock serves as the main supplier for Hopla for many years. In addition to puppets for specific productions, he also creates a series of recognizable characters in large quantities. Classic, typical figures like a princess or a chef can be used in multiple pieces. Death often takes on the role of the villain.',
            ],
            [
                'object_number' => '2021-029-146',
                'language_id' => 'en',
                'name' => 'Wolf Mouth Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 11 + $types * 2,
                'date' => '1999',
                'info' => 'Freek Neirynck, Danilo Conti, and Antonella Piroli adapt the fairy tale of the wolf and the three little pigs for the children\'s performance \'OINK!\'. The evil wolf is a well-known villain, cunning and greedy. This wolf looks dangerous on one hand but is also cuddly on the other. That makes him less frightening for the young children the performance is intended for.',
            ],
            [
                'object_number' => '2021-029-150',
                'language_id' => 'en',
                'name' => 'Flat Figure of a Bandit',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 8 + $types * 2,
                'date' => '2000',
                'info' => '\'UBU KAKA PIPI\' is a wordless and absurd children\'s performance about the childhood of King Ubu, who grows up to be a cruel tyrant. Herr Seele designs a series of flat figures that form a colorful procession in the performance. This bandit is also part of it. Like a thief in the night, he sneaks by. His posture does not bode well.',
            ],
            [
                'object_number' => '2021-029-196',
                'language_id' => 'en',
                'name' => 'Crocodile Mask',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 2 + $types * 2,
                'date' => '2006',
                'info' => 'With \'Don G.\', Theater Taptoe brings music and figure theater to the music of Mozart (1756-1791). The players are dressed in black and wear masks, like this crocodile. Crocodiles, like snakes, are classic villains in traditional puppetry. The bright green color of this figure\'s attire emphasizes this even more.',
            ],
            [
                'object_number' => '2021-029-174',
                'language_id' => 'en',
                'name' => 'Witch Shadow Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 14 + $types * 2,
                'date' => '2002',
                'info' => 'Luk De Bruyker of Theater Taptoe excels in the technique and art of Turkish shadow play with the main characters Karagöz, his counterpart Hacivat, and various supporting characters like this eerie witch. The witch can summon spirits and instructs them to carry out her evil plans. The shadow puppets are made of buffalo hide.',
            ],
            [
                'object_number' => '2022-007-095',
                'language_id' => 'en',
                'name' => 'Witch Rod Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 9 + ($companies * 2), // Folklore Play, Pierke van Alijn
                'type_id' => 16 + $types * 2,
                'date' => '1980 - today',
                'info' => 'The players of Folklore Play and later Pierke van Alijn have a fixed collection of puppets that can be used in multiple pieces. Classic fairy tale characters with magical powers and evil intentions, like this witch, are also part of it. With her black attire and staff, angular face, and a strange blue-green color, she is very recognizable.',
            ],
            [
                'object_number' => '2021-028-018',
                'language_id' => 'en',
                'name' => 'Wife Hand Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 10 + ($companies * 2), // Hopla (Contryn family)
                'type_id' => 12 + $types * 2,
                'date' => 'Late 1940s',
                'info' => 'In this short farce, a man decides to respond to his unpleasant wife only with the words "now or never" (go ahead). Hopla performs the piece with hand puppets. The character of the wife, \'het wijf\', picks fights with everyone and mistreats her husband. The face of this hand puppet is frightening, and the resemblance to a witch is striking.',
            ],
            [
                'object_number' => '2022-007-039',
                'language_id' => 'en',
                'name' => 'General Rod Puppet',
                'room_id' => 5 + ($rooms * 2),
                'company_id' => 11 + ($companies * 2), // Marionette Theater Taptoe
                'type_id' => 16 + $types * 2,
                'date' => 'Late 1940s - today',
                'info' => 'The players of Folklore Play and later Pierke van Alijn have a fixed collection of puppets that can be used in multiple pieces. Villains, like this general lusting for power, wealth, and war, are part of it.',
            ],
        ];
        $puppetsRoom6En = [
            [
                'object_number' => '2021-028-033',
                'language_id' => 'en',
                'name' => 'Raven Rod Puppet',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 10 + ($companies * 2), // Hopla (Contryn family)
                'type_id' => 16 + $types * 2,
                'date' => '1948-1949',
                'info' => 'Since the 16th century, prominent figures in literature and the arts have told the legend of Faust, who sells his soul to the devil. The Contryn family also brings it to the stage in various versions. This raven comes from the first version with rod puppets. The raven itself is not a rod puppet but hangs from a rod. Hopla creates this piece based on the text by Michel de Ghelderode (1898-1962).',
            ],
            [
                'object_number' => '2021-028-072',
                'language_id' => 'en',
                'name' => 'Mouth Puppet of a White Dog',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 10 + ($companies * 2), // Hopla (Contryn family)
                'type_id' => 11 + $types * 2,
                'date' => 'Approximately 1955',
                'info' => 'German puppet maker Till De Kock creates a whole series of recognizable figures for Hopla. Especially fluffy and cartoonish animals are very popular with children. The puppets fit into a playful child culture, which becomes less moralizing over time.',
            ],
            [
                'object_number' => '2021-028-110',
                'language_id' => 'en',
                'name' => 'Head of Faust (Rod Puppet)',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 2 + ($companies * 2), // Mechelen City Puppet Theater
                'type_id' => 17 + $types * 2,
                'date' => '1974',
                'info' => 'Since the 16th century, prominent figures in literature and the arts have told the legend of Faust, who sells his soul to the devil. The Contryn family also brings it to the stage in various versions. In 1974, students of the School for Puppetry create figures under the guidance of Jef Lettany. The experimental forms are interesting but more challenging to operate. The head of this Faust is made of styrofoam.',
            ],
            [
                'object_number' => '2021-029-044',
                'language_id' => 'en',
                'name' => 'Sjoerd Puppet',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 13 + $types * 2,
                'date' => '2004',
                'info' => 'In \'Sjoerd says FOERT!\', a wordless production for young children, Theater Taptoe experiments with making technique and movement visible without losing magic. The show is a great international success. Dirk De Strooper is responsible for the ingenious play and construction techniques of the puppets.',
            ],
            [
                'object_number' => '2021-029-137',
                'language_id' => 'en',
                'name' => 'Handheld Puppet of a Cat',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 9 + $types * 2,
                'date' => '2001',
                'info' => 'For the performance \'Gepetto\', based on the story of Pinocchio, Bulgarian designer Silva Bachvarova creates life-sized puppets from soft materials such as foam rubber. The puppets appear on stage together with actors, as often happens at Theater Taptoe.',
            ],
            [
                'object_number' => '2021-029-147',
                'language_id' => 'en',
                'name' => 'Handheld Puppet of a Baby',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 9 + $types * 2,
                'date' => '1994',
                'info' => 'In the performance \'Tim or Tiene... and nine months\', Theater Taptoe takes children from the audience on a journey through the creation of new life. They see a child grow in the belly. At the end of the performances, the child is born, and the children themselves get to choose: is it Tim or Tiene?',
            ],
            [
                'object_number' => '2021-029-166',
                'language_id' => 'en',
                'name' => 'Rod Puppet of a Glowworm with Two Heads',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 15 + $types * 2,
                'date' => '1999',
                'info' => 'In the performance \'OMOEstuintje\', animals from the vegetable garden, such as moles and worms, take center stage. The puppets are equipped with technical gadgets. This glowworm is equipped with two electronic mechanisms to light up.',
            ],
            [
                'object_number' => '2021-029-142',
                'language_id' => 'en',
                'name' => 'Mouth Puppet of a Piglet',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 11 + $types * 2,
                'date' => '1999',
                'info' => 'Freek Neirynck, Danilo Conti, and Antonella Piroli adapt the fairy tale of the Wolf and the three little pigs for the children\'s performance \'OINK!\'. The piglet is made of soft material and looks cuddly.',
            ],
            [
                'object_number' => '2021-029-117',
                'language_id' => 'en',
                'name' => 'Rod-Rod Puppet of Grandpa',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 6 + $types * 2,
                'date' => '1986',
                'info' => '\'The day Karageus... (arrived)\' is based on the comic strip \'The day after... a century, a year, and a day\' by Knut Kersse and Freek Neirynck from 1984. As part of this production, Luk De Bruyker receives an introduction to Turkish shadow play from puppeteer Hayali Torun Çelebi. The puppets by Knut Kersse strongly resemble comic book characters.',
            ],
            [
                'object_number' => '2021-029-155',
                'language_id' => 'en',
                'name' => 'Flat Figure of the Diva',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 8 + $types * 2,
                'date' => '2000',
                'info' => '\'UBU KAKA PIPI\' is a wordless and absurd children\'s performance about the childhood of King Ubu, who grows up to be a cruel tyrant. Herr Seele designs a series of flat figures that form a colorful procession in the performance. This diva also makes her appearance in the procession.',
            ],
            [
                'object_number' => '2021-029-172',
                'language_id' => 'en',
                'name' => 'Rod Puppet of a Man',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 17 + $types * 2,
                'date' => '1989',
                'info' => '\'Pruuke Dossche\' is performed outdoors as a \'wagon play\' with flat figures on a stick. Both sides of the same figure represent a different character. The play is about Ghent resident Constant \'Pruuke\' Dossche and his role in the workers\' uprising in 1839. Theater Taptoe creates this performance on commission from MIAT, the current Industry Museum.',
            ],
            [
                'object_number' => '2021-029-127',
                'language_id' => 'en',
                'name' => 'Senta Puppet',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 3 + ($companies * 2), // Theater Taptoe
                'type_id' => 1 + $types * 2,
                'date' => '2008',
                'info' => 'Theater Taptoe brings \'The Flying Dutchman\', based on the opera by Richard Wagner (1813-1883). The wordless performance is accompanied by music from the wind ensemble I Solisti del Vento, representing the crew of the ship. Czech artist Michaela Bartonova designs figures inspired by the Japanese Bunraku technique, where multiple players set a puppet in motion. The Flying Dutchman himself is a shadow who is never seen by the audience.',
            ],
            [
                'object_number' => 'Blind Dudapaiva Company BozeWolfFestival 2017 (c) Patrick Van Vlerken',
                'language_id' => 'en',
                'name' => 'Scene from Blind',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 4 + ($companies * 2), // Dudapaiva Company
                'type_id' => 10 + $types * 2,
                'date' => '2017',
                'info' => 'Performance \'Blind\' by Dudapaiva Company at the Boze Wolf puppet theater festival in Aarschot. International and regional theater with puppets of all kinds and sizes is featured. The performance \'Blind\' tells a colorful story with puppets and dance about a quest for healing and being different.',
            ],
            [
                'object_number' => 'de-tuin-van-de-walvis_05_(c)Diego Franssens',
                'language_id' => 'en',
                'name' => 'Scene from The Garden of the Whale',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 5 + ($companies * 2), // DE MAAN
                'type_id' => 10 + $types * 2,
                'date' => '2018',
                'info' => '\'The Garden of the Whale\' is a puppet performance by Beeldsmederij DE MAAN. The play is based on the animal story of the same name by Toon Tellegen and is about how wanting more and more does not necessarily lead to happiness. Paul Contryn creates the figures and performs the show. Well-known actors provide the voices.',
            ],
            [
                'object_number' => 'planeet-nivanir_42_(c)Diego Franssens',
                'language_id' => 'en',
                'name' => 'Scene from Planet Nivanir',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 5 + ($companies * 2), // DE MAAN
                'type_id' => 10 + $types * 2,
                'date' => '2018',
                'info' => '\'Planet Nivanir\' is a puppet theater performance by Beeldsmederij DE MAAN. Greet Jacobs and Femke Stallaert, artistic core members of DE MAAN, embody two extraterrestrial beings observing humans from a distance.',
            ],
            [
                'object_number' => '2021-028-035',
                'language_id' => 'en',
                'name' => 'Mouth Puppet of a Fish',
                'room_id' => 6 + ($rooms * 2),
                'company_id' => 10 + ($companies * 2), // Hopla (Contryn family)
                'type_id' => 11 + $types * 2,
                'date' => '1958',
                'info' => 'Originally, the Contryn family performs \'Visselke Timpeltee\' with marionettes, but Louis Contryn reworks the play for hand puppets. In 1958, Hopla performs \'Visselke Timpeltee\' at Expo \'58, and the performance wins awards. The story about a fish fulfilling wishes is inspired by the fairy tale \'The Fisherman and His Wife\' by the Brothers Grimm.',
            ],
        ];

        $allPuppetsNl = array_merge($puppetsRoom1Nl, $puppetsRoom2Nl, $puppetsRoom3Nl, $puppetsRoom4Nl, $puppetsRoom5Nl, $puppetsRoom6Nl);
        $allPuppetsFr = array_merge($puppetsRoom1Fr, $puppetsRoom2Fr, $puppetsRoom3Fr, $puppetsRoom4Fr, $puppetsRoom5Fr, $puppetsRoom6Fr);
        $allPuppetsEn = array_merge($puppetsRoom1En, $puppetsRoom2En, $puppetsRoom3En, $puppetsRoom4En, $puppetsRoom5En, $puppetsRoom6En);
        foreach ($allPuppetsNl as $puppet){
            Puppet::create($puppet);
        }
        foreach ($allPuppetsFr as $puppet){
            Puppet::create($puppet);
        }
        foreach ($allPuppetsEn as $puppet){
            Puppet::create($puppet);
        }


    }
}
