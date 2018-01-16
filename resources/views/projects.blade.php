@extends('layouts.app')


@section('navigation')
    <!-- Navigation -->
    @include('parts.nav')
@endsection

@section('content')
    <!-- Portfolio Grid Section -->
    <section class="portfolio bg-primary text-white mt-5" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Portfolio</h2>
            <hr class="star-light mb-5">
            @foreach ($projects as $key => $project)
                <div class="row">
                    <div class="col-md-6 col-lg-4 project">
                        <a class="portfolio-item d-block mx-auto" href="{{ route('projectModal', [ $project->id ]) }}">
                            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset($project->tumbnail_image) }}" alt="">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-8 project">
                        <h3 class="mb-2">{{ $project->title }}</h3>
                        {{-- <p>
                            @foreach ($project->links as $key => $link)
                                @if ($key <> 0)
                                     |
                                @endif
                                <a href="{{ $link->href }}" target="{{ $link->target }}" class="text-white">{{ $link->title }}</a>
                            @endforeach
                        </p> --}}
                        <p class="description">
                            @if (strlen($project->description) > 500)
                                {{ substr($project->description, 0,  500) }}...
                            @else
                                {{ $project->description }}
                            @endif
                        </p>
                        <p class="mb-5 project-description text-justify">
                            @foreach ($project->tags as $key => $tag)
                                <span class="badge badge-primary">{{ $tag->name }}</span>
                            @endforeach
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection


@section('footer')
    <!-- Header -->
    @include('parts.footer')
@endsection
