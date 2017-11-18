@extends('layouts.template')

@section('content')
    <div class="welcome">
        <header>
            <div class='overlay'>
                <img class="matchHeight profile-picture" src='//placehold.it/250x250/4A55EF/FFFFFF'/>
                <div class="matchHeight wrapper">
                    <h1>{{ $headerData->title }}</h1>
                    <p class="intro">
                        {{ $headerData->description }}
                    </p>
                </div>
                <p class="links">
                    @foreach ($headerData->links as $link)
                        <a href="" target="{{ $link->target }}"><i class="fa {{ $link->icon }}"></i> {{ $link->title }}</a>
                    @endforeach
                </p>
            </div>
        </header>
        <main>
            <h2>Projecten</h2>
<div class="row">

            @foreach ($projects as $project)
                <div class='project col-lg-3'>
                    <a href="">
                    <h3> {{ $project->title }}</h3>
                    {{-- <img src="{{ $project->tumbnail_image }}" /> --}}
                    <img src='//placehold.it/600x400/3548B7/FFFFFF'/>
                    {{--
                    <div class='links'>
                        @foreach ($project->links as $link)
                            <a href="" target="_blank"><i class="fa {{ $link->icon }}"></i> {{ $link->title }}</a>
                        @endforeach
                    </div>

                    <div class='tags'>
                        @if ($project->tags->count())
                            Tags:
                            @foreach ($project->tags as $tag)
                                <span class="label label-info">{{ $tag->getTranslation('name', 'en') }}</span>
                            @endforeach
                        @endif
                    </div>
                    <p class='description'>{{ $project->description }}</p>
                     --}}
                     </a>
                </div>
            @endforeach
        </div>

            <h2> </h2>
        </main>
    </div>

    <script>
    $( function() {
        $('.project h3').matchHeight();
        $('.overlay .matchHeight').matchHeight({
            target: $('.wrapper')
        });
    });
    </script>
@endsection

@section('footer')
    <footer>&copy; 2016 - Rob Van Keilegom - Vragen of opmerkingen? <a href="mailto:info@robvankeilegom.be"> Mail mij!</a></footer>
@endsection
