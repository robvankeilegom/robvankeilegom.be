@extends('layouts.template')

@section('content')
    <div class="welcome">
        <header>
            <div class='overlay'>
                <img class="matchHeight profile-picture" src='{{ asset('images/profile_picture.jpg') }}'/>
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
            <a href="#" class='view-more'>See all projects</a>
            <h2>Projects <span class="count">({{ $projects->count() }})</span></h2>
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
                @foreach ($projects[0]->links as $link)
                    <a href="" target="_blank"><i class="fa {{ $link->icon }}"></i> {{ $link->title }}</a>
                @endforeach
                {{-- End Links --}}

                {{-- Start Description Text --}}
                <p class='description'>
                    {{ $projects[0]->description }}
                </p>
                {{-- End Description Text --}}

                {{-- Start Tags --}}
                <div class='tags'>
                    @if ($projects[0]->tags->count())
                        @foreach ($projects[0]->tags as $tag)
                            <span class="label label-info">{{ $tag->getTranslation('name', 'en') }}</span>
                        @endforeach
                    @endif
                </div>
                {{-- End Tags --}}

            </div>

            {{-- <h2>Testimonials</h2> --}}
            <h2 id="contact">Contact</h2>
            <div class="contact">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                {{ Form::open([
                    'route' => 'contact',
                    'id' => 'contactForm',
                    'name' => 'contactForm',
                    ]) }}
                <label for="name">Full name:</label>
                {{ Form::text('name', old('name'), ['maxlength' => '255']) }}
                <label for="mail">E-mail:</label>
                {{ Form::email('email', old('email'), ['maxlength' => '255']) }}
                <label for="message">Message:</label>
                {{ Form::textarea ('message', old('message'), ['maxlength' => '500']) }}
                <button
                class="g-recaptcha send-contact"
                data-sitekey="{{ ENV('G_SITE_KEY') }}"
                data-callback="onSubmit">
                Send
                </button>
                <div class="clear"></div>
                {{ Form::close() }}
            </div>
            <h2> </h2>
        </main>
    </div>

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
    $( function() {
        $('h3').matchHeight();
        $('.project').matchHeight();
        $('.overlay .matchHeight').matchHeight({
            target: $('.wrapper')
        });
    });

    function onSubmit(token) {
        $('#contactForm').submit();
    }
    </script>
@endsection

@section('footer')
    <footer class="center">&copy; 2016 - <?php echo date("Y"); ?> Rob Van Keilegom - Questions or Suggestions? <a href="mailto:info@robvankeilegom.be"> Send me a mail!</a></footer>
@endsection
