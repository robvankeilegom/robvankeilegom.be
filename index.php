<!doctype html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="includes/font-awesome/css/font-awesome.min.css">
<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="description" content="Mijn naam is Rob Van Keilegom, ik ben een 3de jaars student aan Thomas More: Campus De Nayer. Als student ICT ontwikkel ik software. Vind hier al mijn projecten!" />
<meta name="keywords" content="portfolio, rob van keilegom, projects, development" />
<meta name="author" content="Rob Van Keilegom">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 month">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta property="og:image" content="images/favicon/ms-icon-310x310.png" />
<meta property="og:description" content="Ik ben Rob Van Keilegom, een 3de jaars student aan Thomas More: Campus De Nayer. Als student ICT ontwikkel ik software. Verder op de pagina kan u al de projecten bekijken waar ik al aan (mee)gewerkt heb." />
<meta property="og:url"content="http://robvankeilegom.be/Portfolio/" />
<meta property="og:title" content="Portfolio - Rob Van Keilegom" />
<link rel="stylesheet" type="text/css" href="stylesheets/reset.css"/>
<link rel="stylesheet" type="text/css" href="stylesheets/style.css"/>
<link rel="stylesheet" media="only screen and (max-width: 800px)" href="stylesheets/mobile.css" />
<link href="https://fonts.googleapis.com/css?family=Lalezar%7CRaleway" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<title>Portfolio - Rob Van Keilegom</title>
<script>
$( function() {
  $(".layover").hide();
  $('.project').hover(function () {
    $('.layover', this).height($('img', this).height() + 10);
    $('.layover', this).fadeIn(300);
  }, function () {
    $('.layover', this).fadeOut(300);
  });

  $('#touchscreen').fadeOut();

  $(document).scroll(function() {
    if ($(this).scrollTop() > 600 && $(window).width() < 800) {
      $('#touchscreen').fadeIn();
    } else {
      $('#touchscreen').fadeOut();
    }
  });
});

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-85157477-1', 'auto');
ga('send', 'pageview');


</script>
</head>
<body>
<header>
  <div id='overlay'>
    <div id='welcome'>Hallo!</div>
    <p id="intro">Mijn naam is Rob Van Keilegom, een 3de jaars student aan Thomas More: Campus De Nayer.
      Als student ICT ontwikkel ik software. Verder op de pagina kan u al de projecten bekijken waar ik al aan (mee)gewerkt heb.
    </p>

    <p id="links">
       <a href="CV" target="_blank"><i class="fa fa-file-text-o"></i> CV </a>
       <a href="https://gitlab.com/u/RoobieBoobieee/projects" target="_blank"><i class="fa fa-gitlab"></i>  GitLab </a>
       <a href="https://www.linkedin.com/in/robvankeilegom" target="_blank"><i class="fa fa-linkedin"></i>  LinkedIn </a>
       <a href="mailto:RobVanKeilegom@hotmail.com"><i class="fa fa-envelope-o"></i> E-Mail </a>
     </p>
    </div>
</header>
<main>
  <div id="touchscreen"><img src="images/icons/tap.png" alt="tap"/> Tap op een project om extra info te tonen.</div>
  <div id='projects'>
    <h1>Projecten</h1>

    <?php
      include "includes/connection.php";

      $query = "SELECT * FROM $db.projects ORDER BY `order`;";
      $result = mysqli_query($conn, $query);

      if ($result->num_rows > 0)
        while($row = $result->fetch_assoc()) {
          echo "<div class='project'>";
          echo "<h2>" .$row['title']. "</h2>";
          echo "<img src=\"images/projects/" .$row['img']. "\"  alt=\"TM: PHP MySQL\"/>";
          echo "<div class=\"layover\"><p>";
          if ($row['description'])
            echo $row['layover'];
          echo "</p>";
          if ($row['sourcelink'])
            echo "<p><a href=\"" .$row['sourcelink']. "\" target=\"_blank\"><i class=\"fa fa-code\"></i> Source</a></p>";
          if ($row['livelink'])
            echo "<p><a href=\"" .$row['livelink']. "\" target=\"_blank\">Live Link</a></p>";
          echo "</div>";
          echo "<p>" .$row['description']. "</p>";
          echo "</div>";
        }

    ?>


        <h1> </h1>
  </div>
</main>
<footer>&copy; 2016 - Rob Van Keilegom - Vragen of opmerkingen? <a href="mailto:info@robvankeilegom.be"> Mail mij!</a></footer>
</body>
</html>
