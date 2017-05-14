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
            <a href="#" class='view-more'>See all projects</a>

            {{-- Start slider --}}
            <div class='projects-slider'>
                @foreach ($projects as $project)
                    <div class='project'>
                        <h3> {{ $project->title }}</h3>
                        {{-- <img src="{{ $project->tumbnail_image }}" /> --}}
                        <img src='//placehold.it/600x400/3548B7/FFFFFF'/>

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
            <div class="contact">
                <label for="name">Naam:</label>
                <input type="text" />
                <label for="mail">Mail:</label>
                <input type="email" />
                <label for="message">Bericht:</label>
                <textarea></textarea>
                {{-- TODO: Captcha --}}
                <button type="submit">Verzend</button>
            </div>
            <h2> </h2>
        </main>
    </div>

    <script>
    $( function() {
        $('.project').matchHeight();
        $('.overlay .matchHeight').matchHeight({
            target: $('.wrapper')
        });
    });
    </script>
@endsection

@section('footer')
    <footer>&copy; 2016 - <?php echo date("Y"); ?> Rob Van Keilegom - Vragen of opmerkingen? <a href="mailto:info@robvankeilegom.be"> Mail mij!</a></footer>
@endsection
