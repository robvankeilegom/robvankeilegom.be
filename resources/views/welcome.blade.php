@extends('layouts.template')

@section('content')
<div class="welcome">
  <header>
    <div class='overlay'>
      <div class='welcome'>Hallo!</div>
      <p class="intro">Mijn naam is Rob Van Keilegom, een 3de jaars student aan Thomas More: Campus De Nayer.
        Als student ICT ontwikkel ik software. Verder op de pagina kan u al de projecten bekijken waar ik al aan (mee)gewerkt heb.
      </p>

      <p class="links">
         <a href="CV" target="_blank"><i class="fa fa-file-text-o"></i> CV </a>
         <a href="https://gitlab.com/u/RoobieBoobieee/projects" target="_blank"><i class="fa fa-gitlab"></i>  GitLab </a>
         <a href="https://www.linkedin.com/in/robvankeilegom" target="_blank"><i class="fa fa-linkedin"></i>  LinkedIn </a>
         <a href="mailto:RobVanKeilegom@hotmail.com"><i class="fa fa-envelope-o"></i> E-Mail </a>
       </p>
      </div>
  </header>
  <main>
    <div class="touchscreen"><img src="{{ asset("images/icons/tap.png")}}" alt="tap"/> Tap op een project om extra info te tonen.</div>
    <div class='projects'>
      <h1>Projecten</h1>

      <h1> </h1>
    </div>
  </main>
</div>
@endsection

@section('footer')
<footer>&copy; 2016 - Rob Van Keilegom - Vragen of opmerkingen? <a href="mailto:info@robvankeilegom.be"> Mail mij!</a></footer>
@endsection
