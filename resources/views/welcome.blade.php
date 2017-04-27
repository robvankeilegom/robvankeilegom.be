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
            </p>
        </div>
    </header>
    <main>
        <a href="#" class='view-more'>See all projects</a>
        <h2>Projecten</h2>

        {{-- Start slider --}}
        <div class='projects-slider'>
            @foreach ($projects as $project)
                <div class='project'>
                    <h3> {{ $project->title }}</h3>
                            {{-- <img src="{{ $project->tumbnail_image }}" /> --}}
                            <img src='//placehold.it/600x400/3548B7/FFFFFF'/>

                        <div class='links'>
                            <a href="" target="_blank"><span class="label label-primary"><i class="fa fa-code"></i> Source</span></a>
                        </div>
                        <div class='tags'>
                            Tags:
                            <span class="label label-info">ipsum</span>
                            <span class="label label-info">exercitation</span>
                            <span class="label label-info">duis</span>
                            <span class="label label-info">consequat</span>
                            <span class="label label-info">psum</span>
                            <span class="label label-info">cupidatat</span>
                        </div>
                      <p class='description'>{{ $project->description }}</p>
              </div>
            @endforeach
        </div>
        {{-- End slider --}}

        <div class='project-content'>

            {{-- Start Links --}}
            <div class='links'>
                <a href="" target="_blank"><span class="label label-primary"><i class="fa fa-code"></i> Source</span></a>
                <a href="" target="_blank"><span class="label label-primary"><i class="fa fa-globe"></i> Live Link</span></a>
                <a href=""><span class="label label-primary"><i class="fa fa-globe"></i> Read More</span></a>
            </div>
            {{-- End Links --}}

            {{-- Start Description Text --}}
            <p class='description'>
                Velit ullamco magna nisi non aliqua sunt cillum id aute sit laborum exercitation voluptate do adipisicing cupidatat enim.
                Dolor Lorem occaecat ex veniam ad tempor Lorem id eiusmod aliquip do sit Lorem ad deserunt veniam.
                Lorem sint aute eiusmod sunt tempor fugiat proident dolor.
            </p>
            {{-- End Description Text --}}

            {{-- Start Tags --}}
            <div class='tags'>
                Tags:
                <span class="label label-info">ipsum</span>
                <span class="label label-info">exercitation</span>
                <span class="label label-info">duis</span>
                <span class="label label-info">consequat</span>
                <span class="label label-info">psum</span>
                <span class="label label-info">cupidatat</span>
            </div>
            {{-- End Tags --}}

        </div>

        <h2>Testimonials</h2>
        <h2>Contact</h2>
        <h2> </h2>
    </main>
</div>

<script>
    $( function() {
        $('.project').matchHeight();
    });
</script>
@endsection

@section('footer')
<footer>&copy; 2016 - Rob Van Keilegom - Vragen of opmerkingen? <a href="mailto:info@robvankeilegom.be"> Mail mij!</a></footer>
@endsection
