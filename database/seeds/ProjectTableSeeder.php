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
            "description" => "",
            "tumbnail_image" => "images/projects/tm_projectphpmysql.png",
            "image" => "images/projects/tm_projectphpmysql.png",
        ]);

        $project
           ->setTranslation('description', 'en', "In the 2nd year of my bachelor education I had to make this website for the course PHP - MYSQL. We had to make a website so that the staff of the restaurant could log in to make adjustments to the menu and dishes. Customers could login to make reservations and select a table. In this project I used PHP, HTML, CSS and JS/JQuery. It's linked to a MYSQL database and was focused on object oriented PHP and safely processing data.")
           ->setTranslation('description', 'nl', "In het 2de jaar van mijn bacheloropleiding maakte ik deze website. Voor het vak PHP - MySQL moest ik een webpagina schrijven voor een restaurant. Personeel kan hier inloggen om menu's en gerechten aan te passen. Klanten kunnen inloggen om de tafelverdeling te bekijken en een plaatsje te reserveren. In het project is gebruik gemaakt van PHP, HTML, CSS en JS/JQuery, is gekoppeld aan een MySQL database en was gericht op object oriented PHP en het veilig verwerken van data.").

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'MySQL', 'Ajax', 'Thomas More', 'Finished']);


        $project = App\Project::create([
            "title" => "TM: Project 2",
            "description" => "",
            "tumbnail_image" => "images/projects/tm_project2.png",
            "image" => "images/projects/tm_project2.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Samen met Marlon Stoops heb ik dit project gemaakt als eindproject voor de tweede periode van onze bacheloropleiding. Het is een webpagina waarop studenten kunnen inloggen om hun uurrooster te bekijken. Het uurrooster wordt opgehaald via de API van KU Leuven. Dan wordt er via de API van google berekend wanneer de student moet vertrekken om tijdig in de les aan te komen. Als de student kiest voor het openbaar vervoer zullen de trein/bus uren mee verschijnen in de routeomschrijving samen met eventuele overstappen en vertragingen.").

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'MySQL', 'KU Leuven API', 'Google API', 'API', 'Thomas More', 'Finished']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/tm_project2',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "Total: Receptie",
            "description" => "",
            "tumbnail_image" => "images/projects/total_receptie.png",
            "image" => "images/projects/total_receptie.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Dit is een applicatie geschreven voor het loggen van bezoekers in de Total plant in Schoten. De bezoeker kan met zijn gegevens inloggen om zo veilig toegang te verkrijgen tot de plant. Hier werd voornamelijk HTML en PHP gebruikt. Ook heb ik een script ontwikkeld, waarmee data weggeschreven wordt naar een Bartender print-server. Zo wordt dan een etiket afgedrukt met de nodige informatie om terug uit te checken.").

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Javascript', 'JQuery', 'JQuery UI', 'MySQL', 'Total', 'Finished']);


        $project = App\Project::create([
            "title" => "Huiskamer Optredens",
            "description" => "",
            "tumbnail_image" => "images/projects/hko.png",
            "image" => "images/projects/hko.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Huiskamer Optredens is een Joomla! website gemaakt voor het boeken van kleine optredens in uw huiskamer. Hiervoor heb ik zelf de Joomla template geschreven. Er werd gekozen voor Joomla zodat de eigenaar eenvoudig zelf artikelen en artiesten kon aanpassen en toevoegen.").

        $project->attachTags(['HTML', 'CSS', 'Joomla!', 'CMS', 'Finished']);


        $project = App\Project::create([
            "title" => "TM: Web Engineering 1",
            "description" => "",
            "tumbnail_image" => "images/projects/tm_projectwebengineering1.png",
            "image" => "images/projects/tm_projectwebengineering1.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Deze website is geschreven in het eerste jaar van mijn bacheloropleiding voor het vak Web Engineering 1. De website bevat alle info over mijn eindproject van de eerste fase van de bacheloropleiding. De website bestaat uit PHP, HTML, CSS en JS.").

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
            "description" => "",
            "tumbnail_image" => "images/projects/total_hazards.png",
            "image" => "images/projects/total_hazards.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Dit is een applicatie geschreven voor de Total plant in Schoten. Met deze web applicatie worden fiches aangemaakt die de gevaren van een product aanduiden. Voor elke grondstof in het bedrijf wordt een fiche aangemaakt zodat het personeel weet wat er bij onregelmatigheden moet gebeuren (bv: spill, brand). De applicatie is geschreven in PHP met achterliggend een MySQL database.").

        $project->attachTags(['HTML', 'PHP', 'CSS', 'MySQL', 'Total']);


        $project = App\Project::create([
            "title" => "Total: Dafi",
            "description" => "",
            "tumbnail_image" => "images/projects/total_dafi.png",
            "image" => "images/projects/total_dafi.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Om draaitijden te berekenen voor de Total plant in Schoten is deze Excel macro geschreven. De macro, geschreven in VB, verwerkt productie data uit een MS SQL database en genereert grafieken voor een duidelijk visuele vertoning van draaitijden en stilstanden. Via de UI kan men instellen hoe de data moet weergegeven worden.").

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
            "description" => "",
            "tumbnail_image" => "images/projects/tm_bandencentrale.png",
            "image" => "images/projects/tm_bandencentrale.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Dit is een command-line applicatie geschreven voor het vak Object Oriented Programming in de 2de fase van mijn bacheloropleiding. Het is volledig geschreven in C en is (uiteraard) gericht op het object georienteerd programmeren. De applicatie simuleert een bandencentrale waar personeel en eigenaar kunnen inloggen om artikelen en klanten toe te voegen, verwijderen en aan te passen.").

        $project->attachTags(['C++', 'Object Oriented', 'Thomas More', 'Finished']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_ObjectOrientedProgramming',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "TM: Databanken",
            "description" => "",
            "tumbnail_image" => "images/projects/tm_projectdatabanken.png",
            "image" => "images/projects/tm_projectdatabanken.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Deze web applicatie werd geschreven voor het vak Databanken in de eerste fase van mijn bacheloropleiding. Het project dat ik samen met Marlon Stoops heb gedaan is vooral gericht op de achterliggende MySQL database, tabellen en relaties.").

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
            "description" =>"",
            "tumbnail_image" => "images/projects/total_lab3.png",
            "image" => "images/projects/total_lab3.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Deze web applicatie voor de Total plant in Schoten werd in C# geschreven met behulp van het ASP.NET MVC framework. De applicatie is gemaakt om een template, hoeveelheid en printer in te stellen en zo hele series etiketten af te drukken om later in de productie te gebruiken.").

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
            "description" => "",
            "tumbnail_image" => "images/projects/tm_projectphpmysql.png",
            "image" => "images/projects/tm_projectphpmysql.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Dit is een plug-in voor de mobiele app: Happening. Happening is een app waar vrienden in groep kunnen chatten, rekeningen delen en spellen spelen. Een daarvan is Ranked Game, een spel waar je kan stemmen wie uit je vriendengroep het meest past bij de opgegeven vraag. In deze aangepaste versie van Ranked Game is er een knop om je eigen vragen toe te voegen aan het spel. De plug-in is geschreven in JS/CoffeeScript.").

        $project->attachTags(['Javascript', 'CoffeeScript', 'Finished', 'Abandoned']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Happening_RankedGame',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "Portfolio",
            "tumbnail_image" => "images/projects/happening.png",
            "image" => "images/projects/happening.png",
        ]);

        $project->attachTags(['HTML', 'CSS', 'Javascript', 'JQuery', 'Laravel', 'Work in Progress']);

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
            "description" => "",
            "tumbnail_image" => "images/projects/solartracker.png",
            "image" => "images/projects/solartracker.png",
            "weight" => 4,
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Voor mijn geintegreerde proef als laatste jaar student in Don Bosco Hoboken werd deze website gemaakt. Op de website was te zien in welke positie het zonnepaneel stond en hoeveel het opbracht. Meer info hierover is te vinden op de GitLab pagina. De website is ontwikkeld in ASP.NET.").

        $project->attachTags(['ASP.NET MVC', 'C#', 'Finished']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/DBH_SolarTracker',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "TM: Project 1",
            "description" => "",
            "tumbnail_image" => "images/projects/tm_project1.png",
            "image" => "images/projects/tm_project1.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Als eindproject voor het eerste jaar van mijn bacheloropleiding heb ik samen met Marlon Stoops een website geschreven. Hierop kunnen gebruikers het bekende spel zeeslag spelen. De schoten werden dan weergegeven op een LED array aangestuurd door een arduino. De website zelf is geschreven in PHP met een achterliggende MySQL database.").

        $project->attachTags(['HTML', 'PHP', 'MySQL', 'Thomas More', 'Finished']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_Project1',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "TM: Python",
            "description" => "",
            "tumbnail_image" => "images/projects/discord.png",
            "image" => "images/projects/discord.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Discord is een All-in-one voice and text chat voor gamers. Voor het vak Python in de tweede fase van mijn bacheloropleiding hebben Marlon Stoops en ik een bot geschreven. De bot kan aan een kanaal toegevoegd worden met een commando en speelt daar dan muziek af.").

        $project->attachTags(['Python', 'Discord.PY', 'Thomas More','Discord', 'Finished']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/TM_Python',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "S&amp;S Productions",
            "description" => "",
            "tumbnail_image" => "images/projects/sns.png",
            "image" => "images/projects/sns.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "s&amp;s productions is een vereniging die zich bezighoudt met het opstarten van kleine producties. Welke vervolgens op YouTube te zien zijn.").

        $project->attachTags(['HTML', 'CSS', 'Javascript', 'JQuery', 'PHP', 'Finished']);

        $link = App\Link::create([
            'title' => 'Live Link',
            'icon' => 'fa-heartbeat',
            'href' => 'http://sns-productions.be',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "FoM: Facebook chatbot",
            "description" => "",
            "tumbnail_image" => "images/projects/fom.png",
            "image" => "images/projects/fom.png",
            "weight" => 3,
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Een POC voor het aanspreken van deelnemers op het Frag-o-Matic evenement via facebook. Deze bot wordt aan een pagina gelinkt, zodat deelnemers via een facebook chat FOM data kunnen uitlezen en updates kunnen krijgen over compos.").

        $project->attachTags(['PHP', 'MySQL', 'Bot', 'Frag-O-Matic', 'Facebook API', 'Facebook', 'API', 'Finished', 'POC']);

        $project = App\Project::create([
            "title" => "CodinGame Hackaton",
            "description" => "",
            "tumbnail_image" => "images/projects/codingame.png",
            "image" => "images/projects/codingame.png",
            "weight" => 5,
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Mijn oplossing voor de Codeingame hackaton: The Accountant waarin ik 5de van de 73 belgen eindigde.").

        $project->attachTags(['C++', 'Hackaton', 'CodinGame', 'Finished']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/CodinGame_hackathon_The_Accountant',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "Discord Log Bot",
            "description" => "",
            "tumbnail_image" => "images/projects/discord.png",
            "image" => "images/projects/discord.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Een bot die in Discord servers kan gestoken worden voor het loggen van bijna alle data. Hij schrijft alle data naar een MySQL database. De bot is geschreven bovenop de Discord.PY laag, die het aanspreken van de API eenvoudiger maakt.").

        $project->attachTags(['Python', 'Discord.PY', 'Bot', 'Finished', 'Abandoned']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Discord_Bot',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);


        $project = App\Project::create([
            "title" => "FOM: API Wrapper",
            "description" => "",
            "tumbnail_image" => "images/projects/fom.png",
            "image" => "images/projects/fom.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Een PHP wrapper voor de Frag-o-Matic API. Vergemakkelijkt het aanspreken van de API.").

        $project->attachTags(['Frag-o-Matic API', 'Frag-o-Matic', 'API']);

        $project = App\Project::create([
            "title" => "Total: Who Is Who",
            "description" => "",
            "tumbnail_image" => "images/projects/whoiswho.png",
            "image" => "images/projects/whoiswho.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Eenvoudig personen vinden in andere Arteco plants.").

        $project->attachTags(['Total', 'HTML']);

        $project = App\Project::create([
            "title" => "Total: SAPReader",
            "description" => "",
            "tumbnail_image" => "images/projects/total_sap.png",
            "image" => "images/projects/total_sap.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Deze webapp leest data uit uit de SAP systemen.").

        $project->attachTags(['Total', 'HTML', 'SAP']);

        $project = App\Project::create([
            "title" => "Discord Log Bot: Web",
            "description" => "",
            "tumbnail_image" => "images/projects/discord.png",
            "image" => "images/projects/discord.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "Een web interface voor de log bot. De interface geeft alle data weer die in de database zit. Hier kan je bekijken in welke servers de bot zit, welke gebruikers er in zitten, wie er geband is, enz...").

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Javascript', 'MySQL', 'Object Oriented', 'Laravel']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/Discord_Log_Bot_Web',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $project = App\Project::create([
            "title" => "Atom: Language OpenEdge ABL",
            "description" => "",
            "tumbnail_image" => "images/projects/discord.png",
            "image" => "images/projects/discord.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "").

        $project->attachTags(['Progress', 'OpenEdge', 'ABL', 'Atom', 'Package']);

        $link = App\Link::create([
            'title' => 'Source Code',
            'icon' => 'fa-code',
            'href' => 'https://github.com/RoobieBoobieee/language-openedge-abl',
            'target' => '_blank',
        ]);

        $link = App\Link::create([
            'title' => 'Atom Package',
            'icon' => 'fa-archive',
            'href' => 'https://atom.io/packages/language-openedge-abl',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $project = App\Project::create([
            "title" => "Push to screen",
            "description" => "",
            "tumbnail_image" => "images/projects/discord.png",
            "image" => "images/projects/discord.png",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "").

        $project->attachTags(['HTML', 'PHP', 'CSS']);

        $link = App\Link::create([
            'title' => 'Source Code (node)',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/PushToScreen_node',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $link = App\Link::create([
            'title' => 'Source Code (master)',
            'icon' => 'fa-code',
            'href' => 'https://gitlab.com/RoobieBoobieee/PushToScreen_master',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $project = App\Project::create([
            "title" => "Citypolis",
            "description" => "",
            "tumbnail_image" => "images/projects/citypolis_tumb.png",
            "image" => "images/projects/citypolis.png",
            "weight" => 2,
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "").

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Laravel']);

        $project = App\Project::create([
            "title" => "Snowsports",
            "description" => "",
            "tumbnail_image" => "images/projects/snowsports_tumb.png",
            "image" => "images/projects/snowsports.png",
            "weight" => 1,
        ]);

        $project
           ->setTranslation('description', 'en', "The snowsports application is a website I wrote for a skiclub. It's made to make it easier for monitors and members to connect. Monitors can easily add lessons. The members can indicate whether the will be present. Everyone has a profile where they can add familiy members who are to young to create an account themselves. The website is written on top of the Laravel framework and is completely mobile friendly.")
           ->setTranslation('description', 'nl', "").

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Laravel']);

        $link = App\Link::create([
            'title' => 'Demo (nl)',
            'icon' => 'fa-globe',
            'href' => 'https://snowsports.robvankeilegom.be',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $project = App\Project::create([
            "title" => "Gemaco Connect",
            "description" => "",
            "tumbnail_image" => "images/projects/connect_tumb.png",
            "image" => "images/projects/connect.png",
            "weight" => 6,
        ]);

        $project
           ->setTranslation('description', 'en', "This project is the final work I had to do before graduating college. I did my internship at Uni-t which is part of the Gemaco group. Because of the fast growing staff number Uni-t decided a who is who application would be a great idea to reconnect the people at Gemaco. This application would make is easier to find out personal and useful information about the company and the staff. This would make it easier for existing and new staff members to fit in. This is how Gemaco Connect was born a online Laravel application with an API behind it. The API, which is also a Laravel application and uses the passport package for authentication, is used to store all data and as a single sign-on provider. This way the API can be easily integrated in other (existing) application.")
           ->setTranslation('description', 'nl', "Door het snel groeiende personeelsaantal zou Uni-t graag een who is who/intranet app hebben. Deze app kan gebruikt worden voor het terug vinden van gegevens over personeel in het bedrijf en belangrijke/nuttige info voor nieuw personeel. Hierdoor kan iemand gemakkelijk gecontacteerd of terug gevonden worden. Als antwoord op dat probleem is Uni-t met Gemaco Connect gekomen. Een online tool waarbij personeel kan inloggen om professionele info, alsook persoonlijke info over collega’s, belangrijke en handige weetjes terug te vinden. Ook zal de Gemaco Connect app als centrale login dienen. Zo kunnen gebruikers bij de verschillende andere applicaties in één klik inloggen.").

        $project->attachTags(['HTML', 'PHP', 'CSS', 'Laravel', 'Laravel Passport', 'Single Sign-On', 'API', 'Thomas More']);

        $link = App\Link::create([
            'title' => 'Gemaco',
            'icon' => 'fa-globe',
            'href' => 'https://www.gemacoglobal.com/',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);
        
        
        $link = App\Link::create([
            'title' => 'Uni-t',
            'icon' => 'fa-globe',
            'href' => 'https://uni-t.be/',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $link = App\Link::create([
            'title' => 'Full Thesis',
            'icon' => 'fa-book',
            'href' => 'https://roobieboobieee.gitlab.io/thesis/',
            'target' => '_blank',
        ]);

        $project->links()->attach($link);

        $project = App\Project::create([
            "title" => "FoM: Compo TV",
            "description" => "",
            "tumbnail_image" => "//placehold.it/600x400/E76430/000000",
            "image" => "//placehold.it/1920x1080/E76430/000000",
        ]);

        $project
           ->setTranslation('description', 'en', "")
           ->setTranslation('description', 'nl', "").

        $project->attachTags(['HTML', 'PHP', 'CSS', 'React.js', 'Frag-o-Matic API', 'Frag-o-Matic', 'API']);
    }
}
