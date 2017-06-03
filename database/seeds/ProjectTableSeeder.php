<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class ProjectTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $project = App\Project::create([
            "title" => "TM: PHP MySQL",
            "description" => "In het 2de jaar van mijn bacheloropleiding maakte ik deze website. Voor het vak PHP - MySQL moest ik een webpagina schrijven voor een restaurant. Personeel kan hier inloggen om menu's en gerechten aan te passen. Klanten kunnen inloggen om de tafelverdeling te bekijken en een plaatsje te reserveren. In het project is gebruik gemaakt van PHP, HTML, CSS en JS/JQuery, is gekoppeld aan een MySQL database en was gericht op object oriented PHP en het veilig verwerken van data.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'MySQL', 'Ajax', 'Thomas More']);


        $project = App\Project::create([
            "title" => "TM: Project 2",
            "description" => "Samen met Marlon Stoops heb ik dit project gemaakt als eindproject voor de tweede periode van onze bacheloropleiding. Het is een webpagina waarop studenten kunnen inloggen om hun uurrooster te bekijken. Het uurrooster wordt opgehaald via de API van KU Leuven. Dan wordt er via de API van google berekend wanneer de student moet vertrekken om tijdig in de les aan te komen. Als de student kiest voor het openbaar vervoer zullen de trein/bus uren mee verschijnen in de routeomschrijving samen met eventuele overstappen en vertragingen.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'MySQL', 'KU Leuven API', 'Google API', 'API', 'Thomas More']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/tm_project2',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "Total: Receptie",
            "description" => "Dit is een applicatie geschreven voor het loggen van bezoekers in de Total plant in Schoten. De bezoeker kan met zijn gegevens inloggen om zo veilig toegang te verkrijgen tot de plant. Hier werd voornamelijk HTML en PHP gebruikt. Ook heb ik een script ontwikkeld, waarmee data weggeschreven wordt naar een Bartender print-server. Zo wordt dan een etiket afgedrukt met de nodige informatie om terug uit te checken.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'JQuery UI', 'MySQL', 'Total']);


        $project = App\Project::create([
            "title" => "Huiskamer Optredens",
            "description" => "Huiskamer Optredens is een Joomla! website gemaakt voor het boeken van kleine optredens in uw huiskamer. Hiervoor heb ik zelf de Joomla template geschreven. Er werd gekozen voor Joomla zodat de eigenaar eenvoudig zelf artikelen en artiesten kon aanpassen en toevoegen.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'CSS', 'Joomla!', 'CMS']);


        $project = App\Project::create([
            "title" => "TM: Web Engineering 1",
            "description" => "Deze website is geschreven in het eerste jaar van mijn bacheloropleiding voor het vak Web Engineering 1. De website bevat alle info over mijn eindproject van de eerste fase van de bacheloropleiding. De website bestaat uit PHP, HTML, CSS en JS.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'Thomas More']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_ProjectWebEngineering1',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "Total: Hazards",
            "description" => "Dit is een applicatie geschreven voor de Total plant in Schoten. Met deze web applicatie worden fiches aangemaakt die de gevaren van een product aanduiden. Voor elke grondstof in het bedrijf wordt een fiche aangemaakt zodat het personeel weet wat er bij onregelmatigheden moet gebeuren (bv: spill, brand). De applicatie is geschreven in PHP met achterliggend een MySQL database.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'PHP', 'CSS', 'MySQL', 'Total']);


        $project = App\Project::create([
            "title" => "Total: Dafi",
            "description" => "Om draaitijden te berekenen voor de Total plant in Schoten is deze Excel macro geschreven. De macro, geschreven in VB, verwerkt productie data uit een MS SQL database en genereert grafieken voor een duidelijk visuele vertoning van draaitijden en stilstanden. Via de UI kan men instellen hoe de data moet weergegeven worden.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['MS-SQL', 'Excel', 'Visual Basic', 'Total']);

        $link = App\Link::create([
                    'title' => 'Source Code',
                    'icon' => 'fa-code',
                    'href' => 'https://gitlab.com/RoobieBoobieee/Total_Dafi',
                    'target' => '_blank',
                ]);

        $project->links()->attach($link);

        $project = App\Project::create([
            "title" => "TM: OOP",
            "description" => "Dit is een command-line applicatie geschreven voor het vak Object Oriented Programming in de 2de fase van mijn bacheloropleiding. Het is volledig geschreven in C en is (uiteraard) gericht op het object georienteerd programmeren. De applicatie simuleert een bandencentrale waar personeel en eigenaar kunnen inloggen om artikelen en klanten toe te voegen, verwijderen en aan te passen.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['C++', 'Object Oriented', 'Thomas More']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_ObjectOrientedProgramming',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "TM: Databanken",
            "description" => "Deze web applicatie werd geschreven voor het vak Databanken in de eerste fase van mijn bacheloropleiding. Het project dat ik samen met Marlon Stoops heb gedaan is vooral gericht op de achterliggende MySQL database, tabellen en relaties.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'JQuery UI', 'Thomas More']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_ProjectDatabanken',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" =>"Total: LAB3",
            "description" =>"Deze web applicatie voor de Total plant in Schoten werd in C# geschreven met behulp van het ASP.NET MVC framework. De applicatie is gemaakt om een template, hoeveelheid en printer in te stellen en zo hele series etiketten af te drukken om later in de productie te gebruiken. ",
            "tumbnail_image" =>"t//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['ASP.NET MVC', 'C#', 'Ajax', 'Total']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/total_lab3',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "Happening: Ranked Game",
            "description" => "Dit is een plug-in voor de mobiele app: Happening. Happening is een app waar vrienden in groep kunnen chatten, rekeningen delen en spellen spelen. Een daarvan is Ranked Game, een spel waar je kan stemmen wie uit je vriendengroep het meest past bij de opgegeven vraag. In deze aangepaste versie van Ranked Game is er een knop om je eigen vragen toe te voegen aan het spel. De plug-in is geschreven in JS/CoffeeScript.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['Javascript', 'CoffeeScript']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Happening_RankedGame',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "Portfolio",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'CSS', 'Javascript', 'JQuery', 'Laravel']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Portfolio',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $link = App\Link::create([
            'title' => 'Live Link',
            'icon' => 'fa-heartbeat',
            'href' => 'http://portfolio.robvankeilegom.be',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "DBH: Solar Tracker",
            "description" => "Voor mijn geintegreerde proef als laatste jaar student in Don Bosco Hoboken werd deze website gemaakt. Op de website was te zien in welke positie het zonnepaneel stond en hoeveel het opbracht. Meer info hierover is te vinden op de GitLab pagina. De website is ontwikkeld in ASP.NET.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['ASP.NET', 'C#']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/DBH_SolarTracker',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "TM: Project 1",
            "description" => "Als eindproject voor het eerste jaar van mijn bacheloropleiding heb ik samen met Marlon Stoops een website geschreven. Hierop kunnen gebruikers het bekende spel zeeslag spelen. De schoten werden dan weergegeven op een LED array aangestuurd door een arduino. De website zelf is geschreven in PHP met een achterliggende MySQL database.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'PHP', 'MySQL', 'Thomas More']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_Project1',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "TM: Python",
            "description" => "Discord is een All-in-one voice and text chat voor gamers. Voor het vak Python in de tweede fase van mijn bacheloropleiding hebben Marlon Stoops en ik een bot geschreven. De bot kan aan een kanaal toegevoegd worden met een commando en speelt daar dan muziek af.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['Python', 'Discord.PY', 'Thomas More']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_Python',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "S&amp;S Productions",
            "description" => "s&amp;s productions is een vereniging die zich bezighoudt met het opstarten van kleine producties. Welke vervolgens op YouTube te zien zijn.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'CSS', 'Javascript', 'JQuery', 'PHP']);

        $link = App\Link::create([
            'title' => 'Live Link',
            'icon' => 'fa-heartbeat',
            'href' => 'http://sns-productions.be',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "FOM: Bot",
            "description" => "Een POC voor het aanspreken van deelnemers op het Frag-o-Matic evenement via facebook. Deze bot wordt aan een pagina gelinkt, zodat deelnemers via een facebook chat FOM data kunnen uitlezen en updates kunnen krijgen over compos.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['PHP', 'MySQL', 'Bot', 'Frag-O-Matic', 'Facebook API', 'Facebook', 'API']);

        $project = App\Project::create([
            "title" => "CodinGame Hackaton",
            "description" => "Mijn oplossing voor de Codeingame hackaton: The Accountant waarin ik 5de van de 73 belgen eindigde.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['C++', 'Hackaton', 'CodinGame']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/CodinGame_hackathon_The_Accountant',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "Discord Log Bot",
            "description" => "Een bot die in Discord servers kan gestoken worden voor het loggen van bijna alle data. Hij schrijft alle data naar een MySQL database. De bot is geschreven bovenop de Discord.PY laag, die het aanspreken van de API eenvoudiger maakt. ",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['Python', 'Discord.PY', 'Bot']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Discord_Bot',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "FOM: API Wrapper",
            "description" => "Een PHP wrapper voor de Frag-o-Matic API. Vergemakkelijkt het aanspreken van de API.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['Frag-o-Matic API', 'Frag-o-Matic', 'API']);

        $project = App\Project::create([
            "title" => "Total: Who Is Who",
            "description" => "Eenvoudig personen vinden in andere Arteco plants.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['Total', 'HTML']);

        $project = App\Project::create([
            "title" => "Total: SAPReader",
            "description" => "Deze webapp leest data uit uit de SAP systemen.",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['Total', 'HTML', 'SAP']);

        $project = App\Project::create([
            "title" => "Discord Log Bot: Web",
            "description" => "Een web interface voor de log bot. De interface geeft alle data weer die in de database zit. Hier kan je bekijken in welke servers de bot zit, welke gebruikers er in zitten, wie er geband is, enz...",
            "tumbnail_image" => "//placehold.it/300x200/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Javascript', 'MySQL', 'Object Oriented', 'Laravel']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Discord_Log_Bot_Web',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);
    }
}
