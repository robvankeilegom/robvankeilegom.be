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
        <a href="#" class='view-more'>See all projects</a>

        {{-- Start slider --}}
        <div class='projects-slider'>
            @foreach ($projects as $project)
                <div class='project'>
                    <h3> {{ $project->title }}</h3>
                        <img src="{{ $project->tumbnail_image }}" />

                        <div class='row links'>
                            <a href="" target="_blank"><span class="label label-primary"><i class="fa fa-code"></i> Source</span></a>
                        </div>
                        <div class='row tags'>
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

        <div class='description'>

            {{-- Start Links --}}
            <div class='row links'>
                <a href="" target="_blank"><span class="label label-primary"><i class="fa fa-code"></i> Source</span></a>
                <a href="" target="_blank"><span class="label label-primary"><i class="fa fa-globe"></i> Live Link</span></a>
                <a href=""><span class="label label-primary"><i class="fa fa-globe"></i> Read More</span></a>
            </div>
            {{-- End Links --}}

            {{-- Start Description Text --}}
            <div class='row'>
                <p class='description'>
                    Velit ullamco magna nisi non aliqua sunt cillum id aute sit laborum exercitation voluptate do adipisicing cupidatat enim.
                    Dolor Lorem occaecat ex veniam ad tempor Lorem id eiusmod aliquip do sit Lorem ad deserunt veniam.
                    Lorem sint aute eiusmod sunt tempor fugiat proident dolor.
                </p>
            </div>
            {{-- End Description Text --}}

            {{-- Start Tags --}}
            <div class='row tags'>
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
h2
