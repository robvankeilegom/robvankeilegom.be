@extends('layouts.template')

@section('content')
<div class="welcome">
    <header>
        <div class='overlay'>
            <div class='welcome-title'>Hallo!</div>
            <p class="intro">Mijn naam is Rob Van Keilegom, ik ben een 3de jaars student aan Thomas More: Campus De Nayer.
                Als student ICT ontwikkel ik software. Verder op de pagina kan u al de projecten bekijken waar ik al aan (mee)gewerkt heb.
            </p>

            <p class="links">
                @foreach ($links as $link)
                    <a href="{{ $link->href }}" @if($link->target_blank) target="_blank" @endif ><i class="fa {{ $link->icon }}"></i> {{ $link->text }} </a>
                @endforeach
            </p>
        </div>
    </header>
    <main>
        <div class="touchscreen"><img src="{{ asset("images/icons/tap.png")}}" alt="tap"/> Tap op een project om extra info te tonen.</div>
        <div class='projects'>
            <h1>Projecten</h1>
            @foreach ($projects as $project)
                <div class='project'>
                    <h2> {{ $project->title }}</h2>
                      <div class="project-header">
                        <div class="img" style="background-image: url('{{ $project->tumbnail_image }}');"></div>
                        <div class="layover">
                            <p>
                                <span class="label label-info"></span>
                            </p>
                        </div>
                      </div>
                      <p>{{ $project->description }}</p>

                      @if (strpos($project->title, 'Finished') !== false)
                          <span class="label label-success">Finished</span>
                      @endif
                      @if (strpos($project->title, 'Discontinued') !== false)
                          <span class="label label-danger">Discontinued</span>
                      @endif
                      @if (strpos($project->title, 'WIP') !== false)
                          <span class="label label-warning">Work in Progress</span>
                      @endif

                      @if ($project->live_link)
                      <a href="{{ $project->live_link }}" target="_blank"><span class="label label-primary"><i class="fa fa-code"></i> Source</span></a>
                      @endif
                      @if ($project->source_link)
                      <a href="{{ $project->source_link }}" target="_blank"><span class="label label-primary"><i class="fa fa-globe"></i> Live Link</span></a>
                      @endif
              </div>
            @endforeach
            <h1> </h1>
        </div>

        <div class="anim-object" id="card-object-hf">
          <div class="front face"><div class="text">A</div></div>
          <div class="back face"><div class="text">B</div></div>
        </div>
    </main>
</div>

<script>
 $( function() {
   $(".project-header").mouseenter( function() {
     $(this).css("animation", "flip-2-hor-top-1 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s 1 normal both");
   }).mouseleave(function() {
     $(this).css("animation", "");
   });
 });
// $( function() {
//   $(".layover").hide();
//   $('.project').hover(function () {
//     $('.layover', this).height($('.img', this).height() + 10);
//     $('.layover', this).fadeIn(300);
//   }, function () {
//     $('.layover', this).fadeOut(300);
//   });
//   $('#touchscreen').fadeOut();
//   $(document).scroll(function() {
//     if ($(this).scrollTop() > 600 && $(window).width() < 800) {
//       $('#touchscreen').fadeIn();
//     } else {
//       $('#touchscreen').fadeOut();
//     }
//   });
// });
</script>
@endsection

@section('footer')
<footer>&copy; 2016 - Rob Van Keilegom - Vragen of opmerkingen? <a href="mailto:info@robvankeilegom.be"> Mail mij!</a></footer>
@endsection
