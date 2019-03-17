@extends('layouts.app')


@section('navigation')
    <!-- Navigation -->
    @include('parts.nav')
@endsection

@section('header')
    <!-- Header -->
    @include('parts.header')
@endsection

@section('content')
    <!-- Portfolio Grid Section -->
    <section class="portfolio bg-white" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                @foreach ($projects as $key => $project)
                    <div class="col-md-6 col-lg-4 project">
                        <a class="portfolio-item d-block mx-auto" href="{{ route('projectModal', [ $project->id ]) }}">
                            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                    <i class="far fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ $project->tumbnail_image }}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-primary" href="{{ route('projects') }}">
                    <i class="far fa-list mr-2"></i>
                    See All Projects!
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">About</h2>
            <hr class="star-light mb-5">
            <div class="row about">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">
                        {{ $headerData->description1 }}
                    </p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">
                        {{ $headerData->description2 }}
                    </p>
                </div>
            </div>
            <div class="text-center mt-4">
              <a class="btn btn-xl btn-outline-light" href="{{ asset('cv.pdf') }}" target="_blank">
                <i class="far fa-download mr-2"></i>
                Download Resume!
              </a>
            </div>
        </div>
    </section>

    <!-- Tags Section -->
    <section id="tags" class="bg-white">
        <div class="container">
            @include('parts.tags')
        </div>
    </section>

    <!-- Numbers Section -->
    <section class="bg-primary text-white mb-0" id="numbers">
        <div class="container">
            <h2 class="text-center text-uppercase text-white mb-0">Numbers</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-3 col-md-12 mb-4">
                    @if ($whatpulse !== '')
                        <div class="card bg-primary border-primary">
                            <div class="card-body">
                                <h2 class="text-center"><i class="far fa-align-justify"></i></h2>
                                <h3 class="text-center">
                                    @if (array_key_exists('Keys', $whatpulse))
                                        {{ number_format($whatpulse->Keys) }}
                                    @else
                                        0
                                    @endif
                                </h3>
                                <p class="text-center">characters typed</p>
                            </div>
                        </div>
                    @endif
                </div>
                {{-- TODO: Get data from GIT --}}
                <div class="col-lg-3 col-md-12 mb-4">
                    <div class="card bg-primary border-primary">
                        <div class="card-body">
                            <h2 class="text-center"><i class="far fa-folder-open"></i></h2>
                            <h3 class="text-center">{{ number_format($projectCount) }}</h3>
                            <p class="text-center">projects</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center"><i class="far fa-arrow-up"></i></h2>
                            <h3 class="text-center">{{ number_format(650) }}</h3>
                            <p class="text-center">commits pushed</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-12 mb-4">
                    @if ($whatpulse !== '')
                        <div class="card bg-primary border-primary">
                            <div class="card-body">
                                <h2 class="text-center"><i class="far fa-mouse-pointer"></i></h2>
                                <h3 class="text-center">
                                    @if (array_key_exists('Clicks', $whatpulse))
                                        {{ number_format($whatpulse->Clicks) }}
                                    @else
                                        0
                                    @endif
                                </h3></h3>
                                <p class="text-center">mouse clicks</p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-3 col-md-12 mb-4">
                    @if ($km !== '')
                        <div class="card bg-primary border-primary">
                            <div class="card-body">
                                <h2 class="text-center"><i class="far fa-car"></i></h2>
                                <h3 class="text-center">
                                    @if ($km->data && $km->data->m)
                                        {{ number_format($km->data->m / 1000) }}
                                    @else
                                        0 km
                                    @endif
                                </h3></h3>
                                <p class="text-center">km traffic jam</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

{{--
@section('scripts')
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
--}}

@section('footer')
    <!-- Header -->
    @include('parts.footer')
@endsection
