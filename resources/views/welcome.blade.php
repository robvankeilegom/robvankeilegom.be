@extends('layouts.template')

@section('content')
<div class="welcome">
    <header>
        <div class='overlay'>
            <h1>Hallo!</h1>
            <p class="intro">Mijn naam is Rob Van Keilegom, ik ben een 3de jaars student aan Thomas More: Campus De Nayer.
                Als student ICT ontwikkel ik software. Verder op de pagina kan u al de projecten bekijken waar ik al aan (mee)gewerkt heb.
            </p>

            <p class="links">
                @foreach ($links as $link)
                    <a href="{{ $link->href }}" @if($link->target_blank) target="_blank" @endif ><i class="fa {{ $link->icon }}"></i> {{ $link->title }} </a>
                @endforeach
            </p>
        </div>
    </header>
    <main>
        <h2>Projecten</h2>
        <div class='projects-slider'>
            @foreach ($projects as $project)
                <div class='project'>
                    <h3> {{ $project->title }}</h3>
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
        </div>
        <a href="#" class='view-more'>See more</a>
        <h2>Testimonials</h2>
        <h2>Contact</h2>
        <h2> </h2>
    </main>
</div>

<script>
    $( function() {
        $('.project h2').matchHeight();
    });
</script>
@endsection

@section('footer')
<footer>&copy; 2016 - Rob Van Keilegom - Vragen of opmerkingen? <a href="mailto:info@robvankeilegom.be"> Mail mij!</a></footer>
@endsection
h2
