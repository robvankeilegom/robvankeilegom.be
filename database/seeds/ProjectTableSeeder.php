<?php

use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    public function addProject($data)
    {
        $id      = Arr::get($data, 'id');
        $project = App\Models\Project::find($id);

        if (! $project) {
            $project     = new App\Models\Project();
            $project->id = $id;
        }

        $project->title           = Arr::get($data, 'title');
        $project->highlight       = Arr::get($data, 'highlight');
        $project->thumbnail_image = Arr::get($data, 'thumbnail_image');
        $project->image           = Arr::get($data, 'image');
        $project->weight          = Arr::get($data, 'weight', 1000);
        $project->visible         = Arr::get($data, 'visible', true);

        $project
            ->setTranslation('description', 'en', Arr::get($data, 'description.en'))
            ->setTranslation('description', 'nl', Arr::get($data, 'description.nl'));

        $project->save();

        $project->attachTags(Arr::get($data, 'tags'));

        $project->links()->detach();
        foreach (Arr::get($data, 'links', []) as $key => $link) {
            $link = App\Models\Link::firstOrCreate([
                'title'  => Arr::get($link, 'title'),
                'icon'   => Arr::get($link, 'icon'),
                'href'   => Arr::get($link, 'href'),
                'target' => Arr::get($link, 'target'),
            ]);

            $project->links()->attach($link);
        }
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            'id'              => 1,
            'title'           => 'TM: PHP MySQL',
            'thumbnail_image' => 'images/projects/tm_projectphpmysql.png',
            'image'           => 'images/projects/tm_projectphpmysql.png',
            'visible'         => false,
            'description'     => [
                'en' => "In the 2nd year of my bachelor education I had to make this website for the course PHP - MYSQL. We had to make a website so that the staff of the restaurant could log in to make adjustments to the menu and dishes. Customers could login to make reservations and select a table. In this project I used PHP, HTML, CSS and JS/JQuery. It's linked to a MYSQL database and was focused on object oriented PHP and safely processing data.",
                'nl' => "In het 2de jaar van mijn bacheloropleiding maakte ik deze website. Voor het vak PHP - MySQL moest ik een webpagina schrijven voor een restaurant. Personeel kan hier inloggen om menu's en gerechten aan te passen. Klanten kunnen inloggen om de tafelverdeling te bekijken en een plaatsje te reserveren. In het project is gebruik gemaakt van PHP, HTML, CSS en JS/JQuery, is gekoppeld aan een MySQL database en was gericht op object oriented PHP en het veilig verwerken van data.",
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'MySQL', 'Ajax', 'Thomas More', 'Finished'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/TM_ProjectPHPMySQL',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 2,
            'title'           => 'TM: Project 2',
            'thumbnail_image' => 'images/projects/tm_project2.png',
            'image'           => 'images/projects/tm_project2.png',
            'visible'         => false,

            'description' => [
                'en' => 'Together with Marlon Stoops we made this project as a final project for the second period of our education. It’s a webpage where students could login to see their schedule. This was pulled through the API of KU Leuven. Then a google API calculates when the student should leave to be on time for his/her class. If the student travels by public transport, the schedule of the bus/train appear in the directions.',
                'nl' => 'Samen met Marlon Stoops heb ik dit project gemaakt als eindproject voor de tweede periode van onze bacheloropleiding. Het is een webpagina waarop studenten kunnen inloggen om hun uurrooster te bekijken. Het uurrooster wordt opgehaald via de API van KU Leuven. Dan wordt er via de API van google berekend wanneer de student moet vertrekken om tijdig in de les aan te komen. Als de student kiest voor het openbaar vervoer zullen de trein/bus uren mee verschijnen in de routeomschrijving samen met eventuele overstappen en vertragingen.',
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'MySQL', 'KU Leuven API', 'Google API', 'API', 'Thomas More', 'Finished'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/tm_project2',
                    'target' => '_blank',
                ],

                [
                    'title'  => 'Marlon Stoops',
                    'icon'   => 'fa-linkedin',
                    'href'   => 'https://www.linkedin.com/in/marlonstoops/',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 3,
            'title'           => 'Total: Receptie',
            'thumbnail_image' => 'images/projects/total_receptie.png',
            'image'           => 'images/projects/total_receptie.png',

            'description' => [
                'en' => 'This application is written to log all the visitors of the Total Plant in Schoten. The visitors can use their credentials to login and gain safe access to the plant. I mostly used HTML and PHP for this. I also developed a script, which wrote data off to a Bartender print server. This prints a label with the visitors credentials so they can easily checkout.',
                'nl' => 'Dit is een applicatie geschreven voor het loggen van bezoekers in de Total plant in Schoten. De bezoeker kan met zijn gegevens inloggen om zo veilig toegang te verkrijgen tot de plant. Hier werd voornamelijk HTML en PHP gebruikt. Ook heb ik een script ontwikkeld, waarmee data weggeschreven wordt naar een Bartender print-server. Zo wordt dan een etiket afgedrukt met de nodige informatie om terug uit te checken.',
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'JQuery UI', 'MySQL', 'Total', 'Finished'],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 4,
            'title'           => 'Huiskamer Optredens',
            'thumbnail_image' => 'images/projects/hko.png',
            'image'           => 'images/projects/hko.png',

            'description' => [
                'en' => "'Huiskamer Optredens' (performances in your living room) is a Joomla! website build to book small performances in your living room. I wrote my own Joomla template for this website. We used Joomla so that the owner could easily made changes, such as changing artists.",
                'nl' => 'Huiskamer Optredens is een Joomla! website gemaakt voor het boeken van kleine optredens in uw huiskamer. Hiervoor heb ik zelf de Joomla template geschreven. Er werd gekozen voor Joomla zodat de eigenaar eenvoudig zelf artikelen en artiesten kon aanpassen en toevoegen.',
            ],

            'tags' => ['HTML', 'CSS', 'Joomla!', 'CMS', 'Finished'],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 5,
            'title'           => 'TM: Web Engineering 1',
            'thumbnail_image' => 'images/projects/tm_projectwebengineering1.png',
            'image'           => 'images/projects/tm_projectwebengineering1.png',
            'visible'         => false,

            'description' => [
                'en' => 'This website was written in the first year of my education for the course Web Engineering 1. This website contains all the information about my final project of my first year. The website is build with PHP, HTML, CSS and JS.',
                'nl' => 'Deze website is geschreven in het eerste jaar van mijn bacheloropleiding voor het vak Web Engineering 1. De website bevat alle info over mijn eindproject van de eerste fase van de bacheloropleiding. De website bestaat uit PHP, HTML, CSS en JS.',
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'Thomas More'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/TM_ProjectWebEngineering1',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 6,
            'title'           => 'Total: Hazards',
            'thumbnail_image' => 'images/projects/total_hazards.png',
            'image'           => 'images/projects/total_hazards.png',
            'visible'         => false,

            'description' => [
                'en' => 'This is also an application written for the Total Plant in Schoten. This web application makes labels to show the dangers of products. Each base material has to have a label so that the staff knows what to do when something happens, such as a fire or a leakage. The application is written in PHP with a MySQL database.',
                'nl' => 'Dit is een applicatie geschreven voor de Total plant in Schoten. Met deze web applicatie worden fiches aangemaakt die de gevaren van een product aanduiden. Voor elke grondstof in het bedrijf wordt een fiche aangemaakt zodat het personeel weet wat er bij onregelmatigheden moet gebeuren (bv: spill, brand). De applicatie is geschreven in PHP met achterliggend een MySQL database.',
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'MySQL', 'Total'],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 7,
            'title'           => 'Total: Dafi',
            'thumbnail_image' => 'images/projects/total_dafi.png',
            'image'           => 'images/projects/total_dafi.png',
            'visible'         => false,

            'description' => [
                'en' => 'To calculate running times of the products at the Total Plant I wrote this Excel Macro. It’s written in VB and it processes data from a MS SQL database. It then generates charts for a clear visual representation of running times or pauses. Through the UI they can make changes to how the data has to be visualized.',
                'nl' => 'Om draaitijden te berekenen voor de Total plant in Schoten is deze Excel macro geschreven. De macro, geschreven in VB, verwerkt productie data uit een MS SQL database en genereert grafieken voor een duidelijk visuele vertoning van draaitijden en stilstanden. Via de UI kan men instellen hoe de data moet weergegeven worden.',
            ],

            'tags' => ['MS-SQL', 'Excel', 'Visual Basic', 'Total'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/Total_Dafi',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 8,
            'title'           => 'TM: OOP',
            'thumbnail_image' => 'images/projects/tm_bandencentrale.png',
            'image'           => 'images/projects/tm_bandencentrale.png',
            'visible'         => false,

            'description' => [
                'en' => 'This is a command line application written for the course Object Oriented Programming in the 2nd year of my bachelor education. It’s completely written in C and is (obviously) focused on the object oriented programming. The application simulates a tire center where staff and owner can login to add, delete or adjust clients and articles.',
                'nl' => 'Dit is een command-line applicatie geschreven voor het vak Object Oriented Programming in de 2de fase van mijn bacheloropleiding. Het is volledig geschreven in C en is (uiteraard) gericht op het object georienteerd programmeren. De applicatie simuleert een bandencentrale waar personeel en eigenaar kunnen inloggen om artikelen en klanten toe te voegen, verwijderen en aan te passen.',
            ],

            'tags' => ['C++', 'Object Oriented', 'Thomas More', 'Finished'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/TM_ObjectOrientedProgramming',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 9,
            'title'           => 'TM: Databanken',
            'thumbnail_image' => 'images/projects/tm_projectdatabanken.png',
            'image'           => 'images/projects/tm_projectdatabanken.png',
            'visible'         => false,

            'description' => [
                'en' => "This web application was written for the course Databanken in the first fase of my education. I made this project together with Marlon Stoops and it's mainly focusd on the underlying MySQL database, tabels and relations.",
                'nl' => 'Deze web applicatie werd geschreven voor het vak Databanken in de eerste fase van mijn bacheloropleiding. Het project dat ik samen met Marlon Stoops heb gedaan is vooral gericht op de achterliggende MySQL database, tabellen en relaties.',
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'JQuery UI', 'Thomas More'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/TM_ProjectDatabanken',
                    'target' => '_blank',
                ], [
                    'title'  => 'Marlon Stoops',
                    'icon'   => 'fa-linkedin',
                    'href'   => 'https://www.linkedin.com/in/marlonstoops/',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 10,
            'title'           => 'Total: LAB3',
            'thumbnail_image' => 'images/projects/total_lab3.png',
            'image'           => 'images/projects/total_lab3.png',
            'visible'         => false,

            'description' => [
                'en' => 'This web application for the Total Plant in Schoten was written in C# with help from ASP.NET MVC framework. This application was made to adjust a template, quantity and printer, so they could print a whole series of labels, to later use in production. ',
                'nl' => 'Deze web applicatie voor de Total plant in Schoten werd in C# geschreven met behulp van het ASP.NET MVC framework. De applicatie is gemaakt om een template, hoeveelheid en printer in te stellen en zo hele series etiketten af te drukken om later in de productie te gebruiken.',
            ],

            'tags' => ['ASP.NET MVC', 'C#', 'Ajax', 'Total'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/total_lab3',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 11,
            'title'           => 'Happening: Ranked Game',
            'thumbnail_image' => 'images/projects/happening.png',
            'image'           => 'images/projects/happening.png',

            'description' => [
                'en' => 'This is a plugin for a mobile app: Happening. This is an app where friends can chat, split bills and play games together in group. One of these games is Ranked game. You can vote on which friend is more compatible with the question. I wrote this plugin so we could add our own questions to the game. I wrote this in JS/CoffeeScript.',
                'nl' => 'Dit is een plug-in voor de mobiele app: Happening. Happening is een app waar vrienden in groep kunnen chatten, rekeningen delen en spellen spelen. Een daarvan is Ranked Game, een spel waar je kan stemmen wie uit je vriendengroep het meest past bij de opgegeven vraag. In deze aangepaste versie van Ranked Game is er een knop om je eigen vragen toe te voegen aan het spel. De plug-in is geschreven in JS/CoffeeScript.',
            ],

            'tags' => ['Javascript', 'CoffeeScript', 'Finished', 'Abandoned'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/Happening_RankedGame',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 12,
            'title'           => 'robvankeilegom.be',
            'thumbnail_image' => 'images/projects/portfolio_thumb.png',
            'image'           => 'images/projects/portfolio_new.png',
            'tags'            => ['HTML', 'CSS', 'Javascript', 'JQuery', 'Laravel', 'Work in Progress'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/Portfolio',
                    'target' => '_blank',
                ], [
                    'title'  => 'Source Code (legacy)',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/Portfolio/tree/legacy_code',
                    'target' => '_blank',
                ], [
                    'title'  => 'Live Link',
                    'icon'   => 'fa-heartbeat',
                    'href'   => 'http://portfolio.robvankeilegom.be',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 13,
            'title'           => 'DBH: Solar Tracker',
            'thumbnail_image' => 'images/projects/solartracker.png',
            'image'           => 'images/projects/solartracker.png',

            'description' => [
                'en' => 'For my integrated test as a student in the last year of Don Bosco Hoboken I made this website. On this website you could see in with position the solar panel was standing and how much it was generating. You can find more information about this on my GitLab page. This website was developed in ASP.NET.',
                'nl' => 'Voor mijn geintegreerde proef als laatste jaar student in Don Bosco Hoboken werd deze website gemaakt. Op de website was te zien in welke positie het zonnepaneel stond en hoeveel het opbracht. Meer info hierover is te vinden op de GitLab pagina. De website is ontwikkeld in ASP.NET.',
            ],

            'tags' => ['ASP.NET MVC', 'C#', 'Finished'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/DBH_SolarTracker',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 14,
            'title'           => 'TM: Project 1',
            'thumbnail_image' => 'images/projects/tm_project1.png',
            'image'           => 'images/projects/tm_project1.png',
            'visible'         => false,

            'description' => [
                'en' => 'As final project in my first year I wrote this website together with Marlon Stoops. Users could play the famous game Battleship. The shots where shown on a LED array powered through an Arduino. The website itself is written in PHP with an underlying MySQL database.',
                'nl' => 'Als eindproject voor het eerste jaar van mijn bacheloropleiding heb ik samen met Marlon Stoops een website geschreven. Hierop kunnen gebruikers het bekende spel zeeslag spelen. De schoten werden dan weergegeven op een LED array aangestuurd door een arduino. De website zelf is geschreven in PHP met een achterliggende MySQL database.',
            ],

            'tags' => ['HTML', 'PHP', 'MySQL', 'Thomas More', 'Finished'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/TM_Project1',
                    'target' => '_blank',
                ], [
                    'title'  => 'Marlon Stoops',
                    'icon'   => 'fa-linkedin',
                    'href'   => 'https://www.linkedin.com/in/marlonstoops/',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 15,
            'title'           => 'TM: Python',
            'thumbnail_image' => 'images/projects/discord.png',
            'image'           => 'images/projects/discord.png',
            'visible'         => false,

            'description' => [
                'en' => 'Discord is an all-in-one voice and text chat for gamers. For the course Python in the 2nd fase of my bachelor education we (Marlon Stoops and I) wrote a bot for Discord. You can add the bot to one of you channels with a command. The bot then plays music of your choosing in the channel.',
                'nl' => 'Discord is een All-in-one voice and text chat voor gamers. Voor het vak Python in de tweede fase van mijn bacheloropleiding hebben Marlon Stoops en ik een bot geschreven. De bot kan aan een kanaal toegevoegd worden met een commando en speelt daar dan muziek af.',
            ],

            'tags' => ['Python', 'Discord.PY', 'Thomas More', 'Discord', 'Finished'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/TM_Python',
                    'target' => '_blank',
                ], [
                    'title'  => 'Marlon Stoops',
                    'icon'   => 'fa-linkedin',
                    'href'   => 'https://www.linkedin.com/in/marlonstoops/',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 16,
            'title'           => 'S&S Productions',
            'thumbnail_image' => 'images/projects/sns.png',
            'image'           => 'images/projects/sns.png',
            'visible'         => false,

            'description' => [
                'en' => "s&amp;s productions is an association who make small productions and post these on YouTube. This simple site is written in plain PHP and addresses Facebook's, Youtube's and Flickr's API to keep itself up-to-date.",
                'nl' => 's&amp;s productions is een vereniging die zich bezighoudt met het opstarten van kleine producties. Welke vervolgens op YouTube te zien zijn.',
            ],

            'tags' => ['HTML', 'CSS', 'Javascript', 'JQuery', 'PHP', 'Facebook API', 'Youtube API', 'Flickr API', 'Finished'],

            'links' => [
                [
                    'title'  => 'Live Link',
                    'icon'   => 'fa-heartbeat',
                    'href'   => 'http://sns-productions.be',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 17,
            'title'           => 'FoM: Facebook chatbot',
            'thumbnail_image' => 'images/projects/fom.png',
            'image'           => 'images/projects/fom.png',
            'weight'          => 3,

            'description' => [
                'en' => 'This is a POC to reach out to contestants of the Frag-o-Matic event via Facebook. This bot is linked to a Facebook page, so contestants could receive information about the ongoing tournaments in messenger. After linking your Frag-o-Matic profile to your Facebook profile, the bot would pull data from the Frag-o-Matic API and send it to the user.',
                'nl' => 'Een POC voor het aanspreken van deelnemers op het Frag-o-Matic evenement via facebook. Deze bot wordt aan een pagina gelinkt, zodat deelnemers via een facebook chat FOM data kunnen uitlezen en updates kunnen krijgen over compos.',
            ],

            'tags' => ['PHP', 'MySQL', 'Bot', 'Frag-O-Matic', 'Frag-O-Matic API', 'Facebook API', 'Facebook', 'API', 'Finished', 'POC'],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 18,
            'title'           => 'CodinGame Hackaton',
            'thumbnail_image' => 'images/projects/codingame.png',
            'image'           => 'images/projects/codingame.png',
            'weight'          => 5,

            'description' => [
                'en' => 'This is the solution I came up with for the Codingame hackaton: The Accountant. Codingame is a creat way to combine programming and gaming. I ended 5th of the 73 belgian people. Hackaton description: For this mission, you take the role of Christian Wolff, an unconventional accountant who has lived as a double agent for years. He has gathered highly sensitive data while working for the most dangerous criminal organizations of the world. As things are starting to unravel, it is expected that Wolff’s enemies will attempt to get their hands on these files. As Wolff cannot risk to blow his cover up, we need you to make sure the data is secure.',
                'nl' => 'Mijn oplossing voor de Codingame hackaton: The Accountant waarin ik 5de van de 73 belgen eindigde.',
            ],

            'tags' => ['C++', 'Hackaton', 'CodinGame', 'Finished'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/CodinGame_hackathon_The_Accountant',
                    'target' => '_blank',
                ], [
                    'title'  => 'Codingame hackaton: The Accountant',
                    'icon'   => 'fa-globe',
                    'href'   => 'https://www.codingame.com/blog/launch-of-accountant-hackathon/',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 19,
            'title'           => 'Discord Log Bot',
            'thumbnail_image' => 'images/projects/discord.png',
            'image'           => 'images/projects/discord.png',

            'description' => [
                'en' => 'This bot can be included in a Discord server and log almost all data. It writes off all data to a MySQL database. The bot is written on top of a Discord.PY layer, which makes it simpler to address the API. There is a seperate Laravel project to display all data in a webpage. I stopped supporting this project since Discord implemented its own audit log.',
                'nl' => 'Een bot die in Discord servers kan gestoken worden voor het loggen van bijna alle data. Hij schrijft alle data naar een MySQL database. De bot is geschreven bovenop de Discord.PY laag, die het aanspreken van de API eenvoudiger maakt.',
            ],

            'tags' => ['Python', 'Discord.PY', 'Bot', 'Finished', 'Abandoned'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/Discord_Bot',
                    'target' => '_blank',
                ],  [
                    'title'  => 'Source Code (Web interface)',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/Discord_Log_Bot_Web',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 20,
            'title'           => 'FOM: API Wrapper',
            'thumbnail_image' => 'images/projects/fom.png',
            'image'           => 'images/projects/fom.png',

            'description' => [
                'en' => 'A PHP wrapper for the Frag-O-Matic API, which makes it easier to address the API.',
                'nl' => 'Een PHP wrapper voor de Frag-o-Matic API. Vergemakkelijkt het aanspreken van de API.',
            ],

            'tags' => ['Frag-o-Matic API', 'Frag-o-Matic', 'API'],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 21,
            'title'           => 'Total: Who Is Who',
            'thumbnail_image' => 'images/projects/whoiswho.png',
            'image'           => 'images/projects/whoiswho.png',
            'visible'         => false,

            'description' => [
                'en' => 'Written to easily find a person in the other Arteco Plants.',
                'nl' => 'Eenvoudig personen vinden in andere Arteco plants.',
            ],

            'tags' => ['Total', 'HTML'],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 22,
            'title'           => 'Total: SAPReader',
            'thumbnail_image' => 'images/projects/total_sap.png',
            'image'           => 'images/projects/total_sap.png',
            'visible'         => false,

            'description' => [
                'en' => 'This web application reads data from the SAP systems.',
                'nl' => 'Deze webapp leest data uit uit de SAP systemen.',
            ],

            'tags' => ['Total', 'HTML', 'SAP'],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 23,
            'title'           => 'Discord Log Bot: Web',
            'thumbnail_image' => 'images/projects/discord_log_bot_web_thumb.png',
            'image'           => 'images/projects/discord_log_bot_web.png',

            'description' => [
                'en' => 'A web interface for the log bot. The interface shows all data the bot logged to the database. You can see in which servers the bot is added, what users are in the channels, who was banned, etc... ',
                'nl' => 'Een web interface voor de log bot. De interface geeft alle data weer die in de database zit. Hier kan je bekijken in welke servers de bot zit, welke gebruikers er in zitten, wie er geband is, enz...',
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'Javascript', 'MySQL', 'Object Oriented', 'Laravel'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/Discord_Log_Bot_Web',
                    'target' => '_blank',
                ], [
                    'title'  => 'Source Code (bot)',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/Discord_Bot',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 24,
            'title'           => 'Atom: Language OpenEdge ABL',
            'thumbnail_image' => 'images/projects/atom_thumb.png',
            'image'           => 'images/projects/atom.png',
            'visible'         => false,

            'description' => [
                'en' => 'A package I wrote to support the OpenEdge ABL language in Atom.',
                'nl' => '',
            ],

            'tags' => ['Progress', 'OpenEdge', 'ABL', 'Atom', 'Package'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://github.com/RoobieBoobieee/language-openedge-abl',
                    'target' => '_blank',
                ], [
                    'title'  => 'Atom Package',
                    'icon'   => 'fa-archive',
                    'href'   => 'https://atom.io/packages/language-openedge-abl',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 25,
            'title'           => 'Push to screen',
            'thumbnail_image' => 'images/projects/pushtoscreen_thumb.png',
            'image'           => 'images/projects/pushtoscreen.png',
            'visible'         => false,

            'description' => [
                'en' => "This originally writen to use in escape rooms. The node-code is a Python script running on Raspberry Pi's in de boxes. The master is used from the outside to push to the different nodes. The text pushed by the master will be captured by the node's web server and put in a file. The Python script will pick up this file and use the Raspberry Pi's Python module to display it fullscreen.",
                'nl' => '',
            ],

            'tags' => ['HTML', 'PHP', 'CSS'],

            'links' => [
                [
                    'title'  => 'Source Code (node)',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/PushToScreen_node',
                    'target' => '_blank',
                ],  [
                    'title'  => 'Source Code (master)',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/PushToScreen_master',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 26,
            'title'           => 'Citypolis',
            'thumbnail_image' => 'images/projects/citypolis_thumb.png',
            'image'           => 'images/projects/citypolis.png',
            'weight'          => 2,

            'description' => [
                'en' => 'A web application I wrote for a teambuilding event in Antwerp. It is the interface for a real-life interactive group game. Citypolis description: Citypolis takes place in a 300m² space which is arranged into a large imaginary city and which is filled with interactive tasks. The participants will be divided into sub-teams which shall compete with each other in “the city”. This is a unique indoor team game filled with action and strategy, innovation and technology.',
                'nl' => 'Citypolis vindt plaats in een ruimte van 300m² die gelijkt op een echte stad met daarin interactieve opdrachten. De deelnemers zullen het tegen elkaar opnemen in dit uniek indoor team-spel. Het is gevuld met actie, strategie, innovatie en technologie.',
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'Laravel', 'Vue.JS'],

            'links' => [
                [
                    'title'  => 'Citypolis',
                    'icon'   => 'fa-globe',
                    'href'   => 'https://www.citypolis.be/',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 27,
            'title'           => 'Snowsports',
            'thumbnail_image' => 'images/projects/snowsports_thumb.png',
            'image'           => 'images/projects/snowsports.png',
            'weight'          => 1,

            'description' => [
                'en' => "The snowsports application is a website I wrote for a skiclub. It's made so that monitors and members can easily connect. Monitors can easily add lessons. The members can indicate whether they will be present. Everyone has a profile where they can add familiy members who are too young to create an account themselves. The website is written on top of the Laravel framework and is completely mobile friendly.",
                'nl' => 'De Snowsports applicatie is een website die ik geschreven heb voor een skiclub. Hierop kunnen monitoren en gebruikers heel gemakkelijk connecteren. Monitoren kunnen lessen toevoegen en deelnemers kunnen meteen zeggen of ze aanwezig kunnen zijn of niet. Iedereen heeft een profiel waar ze ook familieleden kunnen toevoegen, denk maar aan kinderen die te jong zijn voor hun eigen account. De website is geschreven op een Laravel Framework en is helemaal mobiel vriendelijk.',
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'Laravel'],

            'links' => [
                [
                    'title'  => 'Demo (nl)',
                    'icon'   => 'fa-globe',
                    'href'   => 'https://snowsports.robvankeilegom.be',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 28,
            'title'           => 'Gemaco Connect (Thesis)',
            'thumbnail_image' => 'images/projects/connect_thumb.png',
            'image'           => 'images/projects/connect.png',
            'weight'          => 4,

            'description' => [
                'en' => "This project is the final work I had to do before graduating college. I did my internship at Uni-t which is part of the Gemaco group. Because of the fast growing staff number Uni-t decided a 'who is who application' would be a great idea to reconnect the people at Gemaco. This application would make it easier to find out personal and useful information about the company and the staff. This would make it easier for existing and new staff members to fit in. This is how Gemaco Connect was born: an online Laravel application with an API behind it. The API, which is also a Laravel application and uses the passport package for authentication, is used to store all data as a single sign-on provider. This way the API can be easily integrated in other (existing) applications.",
                'nl' => 'Door het snel groeiende personeelsaantal zou Uni-t graag een who is who/intranet app hebben. Deze app kan gebruikt worden voor het terug vinden van gegevens over personeel in het bedrijf en belangrijke/nuttige info voor nieuw personeel. Hierdoor kan iemand gemakkelijk gecontacteerd of terug gevonden worden. Als antwoord op dat probleem is Uni-t met Gemaco Connect gekomen. Een online tool waarbij personeel kan inloggen om professionele info, alsook persoonlijke info over collega’s, belangrijke en handige weetjes terug te vinden. Ook zal de Gemaco Connect app als centrale login dienen. Zo kunnen gebruikers bij de verschillende andere applicaties in één klik inloggen.',
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'Laravel', 'Laravel Passport', 'Single Sign-On', 'API', 'Thomas More'],

            'links' => [
                [
                    'title'  => 'Gemaco',
                    'icon'   => 'fa-globe',
                    'href'   => 'https://www.gemacoglobal.com/',
                    'target' => '_blank',
                ], [
                    'title'  => 'Uni-t',
                    'icon'   => 'fa-globe',
                    'href'   => 'https://uni-t.be/',
                    'target' => '_blank',
                ], [
                    'title'  => 'Full Thesis',
                    'icon'   => 'fa-book',
                    'href'   => 'https://roobieboobieee.gitlab.io/thesis/',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 29,
            'title'           => 'FoM: Compo TV',
            'thumbnail_image' => 'images/projects/compo_tv_thumb.png',
            'image'           => 'images/projects/compo_tv.png',

            'description' => [
                'en' => 'A React web application which displays ongoing tournaments on Frag-o-Matic. All data is retrieved from the Frag-o-Matic API. Styling done by Elke Moras.',
                'nl' => '',
            ],

            'tags' => ['HTML', 'PHP', 'CSS', 'React.js', 'Frag-o-Matic API', 'Frag-o-Matic', 'API'],

            'links' => [
                [
                    'title'  => 'Elke Moras',
                    'icon'   => 'fa-globe',
                    'href'   => 'http://elkemoras.be/',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 30,
            'title'           => 'EID Reader',
            'thumbnail_image' => 'images/projects/eid_thumb.png',
            'image'           => 'images/projects/eid_thumb.png',
            'visible'         => false,

            'description' => [
                'en' => 'A very small Java application I wrote to read data from a Belgian electronic passport.',
                'nl' => '',
            ],

            'tags' => ['Java', 'eID'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/eID_Reader',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 31,
            'title'           => 'Discord Daily Dose Bot',
            'thumbnail_image' => 'images/projects/discord.png',
            'image'           => 'images/projects/discord.png',
            'visible'         => false,

            'description' => [
                'en' => 'Another Discord bot. This bot pulls data from social platform Reddit. Every day another link is used from the config. The bot waits x time, then reaches out to reddit to get a random post and posts it in Discord. I made this in co-operation with Marlon Stoops.',
                'nl' => '',
            ],

            'tags' => ['Python', 'Discord.PY', 'Bot', 'Finished', 'Reddit API', 'API'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/Daily_Dose',
                    'target' => '_blank',
                ], [
                    'title'  => 'Marlon Stoops',
                    'icon'   => 'fa-linkedin',
                    'href'   => 'https://www.linkedin.com/in/marlonstoops/',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 32,
            'title'           => 'bes.robvankeilegom.be',
            'thumbnail_image' => 'images/projects/bes.robvankeilegom.be_thumb.png',
            'image'           => 'images/projects/bes.robvankeilegom.be.png',

            'description' => [
                'en' => 'Another project I did to get familiar with the Angular framework. Without getting in to much detail. You can enter data about your cars gearbox and the application will calculate the cars max speed at a certain rPM.',
                'nl' => 'Nog een project dat ik heb gedaan om gewoon te worden aan het Angular framework. Zonder in te veel detail te gaan. Op de website kan je data ingeven over de versnellingsbak van je auto. De applicatie berekend dan de maximum snelheid die je zal halen voor een bepaald toerental.',
            ],

            'tags' => ['Angular', 'HTML', 'SASS', 'Javascript', 'JQuery', 'Typescript', 'Finished'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/bes.robvankeilegom.be',
                    'target' => '_blank',
                ], [
                    'title'  => 'Live Link',
                    'icon'   => 'fa-heartbeat',
                    'href'   => 'https://bes.robvankeilegom.be',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 33,
            'title'           => 'hoeveelfilestaater.be',
            'thumbnail_image' => 'images/projects/hoeveelfilestaater.be_thumb.png',
            'image'           => 'images/projects/hoeveelfilestaater.be.png',

            'description' => [
                'en' => 'A project I did to get comfortable with the Angular framework. It displays live data of traffic jams in Belgium and a graph to check out data in the past. This is just a front-end shell that pulls data from an API via AJAX calls. ',
                'nl' => 'Een project dat ik gedaan heb om gewoon te worden met het Angular framework. De website geeft live data weer over de files in Belgie. Ook is er een grafiek waar je data uit het verleden op kan weergeven. Dit is enkel een front-end schil. De data wordt uit een API getrokken via AJAX calls.',
            ],

            'tags' => ['Angular', 'HTML', 'SASS', 'Javascript', 'JQuery', 'Typescript', 'RXJS', 'API', 'Finished'],

            'links' => [
                [
                    'title'  => 'Source Code (frontend)',
                    'icon'   => 'far fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/hoeveelfilestaater.be',
                    'target' => '_blank',
                ], [
                    'title'  => 'Live Link',
                    'icon'   => 'far fa-heartbeat',
                    'href'   => 'https://hoeveelfilestaater.be',
                    'target' => '_blank',
                ], [
                    'title'  => 'Source Code (api)',
                    'icon'   => 'far fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/api.hoeveelfilestaater.be',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 34,
            'title'           => 'api.hoeveelfilestaater.be',
            'thumbnail_image' => 'images/projects/hoeveelfilestaater.be_thumb.png',
            'image'           => 'images/projects/hoeveelfilestaater.be.png',
            'visible'         => false,

            'description' => [
                'en' => 'The API for hoeveelfilestaater.be is build on top of the Laravel framework. Every 5 minutes it pulls data from touringmobilis.be. The data is then stored in a database and every night the data from the past day is processed. Averages, minimums and maximums are calculated and stored in another table. This data is made public through 2 endpoints which are consumed by the Angular application.',
                'nl' => 'De API voor hoeveelfilestaater.be is gebouwd bovenop het Laravel framework. Elke 5 minuten wordt er data getrokken van touringmobilis.be. Deze data wordt opgeslagen in een database. Elke nacht wordt de data van de afgelopen dag verwerkt. Gemiddeldes, minima en maxima worden berekend en opgeslagen in een andere tabel. Deze data wordt beschikbaar gesteld door 2 endpoints die aangesproken worden door de Angular applicatie.',
            ],

            'tags' => ['PHP', 'Laravel', 'API', 'Finished'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'far fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/api.hoeveelfilestaater.be',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 35,
            'title'           => 'apache-conf-generator.robvankeilegom.be',
            'thumbnail_image' => 'images/projects/apache-conf-generator.robvankeilegom.be_thumb.png',
            'image'           => 'images/projects/apache-conf-generator.robvankeilegom.be.png',

            'description' => [
                'en' => 'Another project I did to get comfortable with the Angular framework. This is a tool I use frequently to generate the necessary configuration to set up a new virtual host on Apache.',
                'nl' => 'Nog een project dat ik gedaan heb om gewoon te worden met het Angular framework. Dit is een tool die ik vaak gebruik om de nodige config te genereren om nieuwe virtual hosts op te zetten in apache.',
            ],

            'tags' => ['Angular', 'HTML', 'SASS', 'Javascript', 'Typescript', 'Finished', 'Apache'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'far fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/apache-conf-generator',
                    'target' => '_blank',
                ], [
                    'title'  => 'Live Link',
                    'icon'   => 'far fa-heartbeat',
                    'href'   => 'https://apache-conf-generator.robvankeilegom.be',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 36,
            'title'           => 'roobieboobieee/laravel-notifications-microsoft-teams',
            'thumbnail_image' => 'images/projects/laravel-notifications-microsoft-teams_thumb.png',
            'image'           => 'images/projects/laravel-notifications-microsoft-teams.png',
            'visible'         => false,

            'description' => [
                'en' => 'A laravel/php package that makes it easy to send notifications to Microsoft Teams',
                'nl' => '',
            ],

            'tags' => ['PHP', 'Package', 'Composer', 'Laravel', 'Microsoft Teams'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'far fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/laravel-notifications-microsoft-teams',
                    'target' => '_blank',
                ], [
                    'title'  => 'Packagist',
                    'icon'   => 'fal box-open',
                    'href'   => 'https://packagist.org/packages/RoobieBoobieee/laravel-notifications-microsoft-teams',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 37,
            'title'           => 'roobieboobieee/bitbucket',
            'thumbnail_image' => 'images/projects/bitbucket_thumb.png',
            'image'           => 'images/projects/bitbucket.png',
            'visible'         => false,

            'description' => [
                'en' => '',
                'nl' => '',
            ],

            'tags' => ['PHP', 'Package', 'Composer'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'far fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/bitbucket',
                    'target' => '_blank',
                ], [
                    'title'  => 'Packagist',
                    'icon'   => 'fal box-open',
                    'href'   => 'https://packagist.org/packages/roobieboobieee/bitbucket',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 38,
            'title'           => 'roobieboobieee/gitlab',
            'thumbnail_image' => 'images/projects/gitlab_thumb.png',
            'image'           => 'images/projects/gitlab.png',
            'visible'         => false,

            'description' => [
                'en' => '',
                'nl' => '',
            ],

            'tags' => ['PHP', 'Package', 'Composer'],

            'links' => [
                [
                    'title'  => 'Source Code',
                    'icon'   => 'far fa-code',
                    'href'   => 'https://gitlab.com/RoobieBoobieee/gitlab',
                    'target' => '_blank',
                ], [
                    'title'  => 'Packagist',
                    'icon'   => 'fal box-open',
                    'href'   => 'https://packagist.org/packages/roobieboobieee/Gitlab',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);

        $data = [
            'id'              => 39,
            'highlight'       => 'newest',
            'title'           => 'liezele.be',
            'thumbnail_image' => 'images/projects/liezele.be_thumb.png',
            'image'           => 'images/projects/liezele.be.png',
            'weight'          => 6,

            'description' => [
                'en' => 'A site for Liezele, the village I was born and raised. Statically build with Hugo',
                'nl' => '',
            ],

            'tags' => ['Hugo'],

            'links' => [
                [
                    'title'  => 'Live Link',
                    'icon'   => 'fa-heartbeat',
                    'href'   => 'https://liezele.be',
                    'target' => '_blank',
                ],
            ],
        ];

        $this->addProject($data);
    }
}
