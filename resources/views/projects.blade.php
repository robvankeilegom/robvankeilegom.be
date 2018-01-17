@extends('layouts.app')


@section('navigation')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">robvankeilegom.be</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </nav>
@endsection

@section('content')
    <!-- Portfolio Grid Section -->
    <section class="portfolio bg-primary text-white mt-5" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Portfolio</h2>
            <hr class="star-light mb-5">
            @foreach ($projects as $key => $project)
                <div class="row project-list">
                    <div class="col-md-6 col-lg-4">
                        <a class="d-block mx-auto portfolio-item" href="{{ route('projectModal', [ $project->id ]) }}">
                            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset($project->tumbnail_image) }}" alt="{{ $project->title }}">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <h3 class="mb-1">
                            {{ $project->title }}
                        </h3>
                        <p class="description text-justify">
                            @if (strlen($project->description) > 350)
                                {{ substr($project->description, 0,  350) }}...
                            @else
                                {{ $project->description }}
                            @endif
                        </p>
                        <div class="mb-1">
                            @foreach ($project->links as $key => $link)
                                @if ($key == 0)
                                @else
                                    |
                                @endif
                                <a href="{{ $link->href }}" target="{{ $link->target }}" class="text-white ml-1 mr-1">{{ strtolower($link->title) }}</a>
                            @endforeach
                        </div>
                        <div class="mb-5">
                            @foreach ($project->tags as $key => $tag)
                                <span class="badge badge-outline">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 mb-5">
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
