@extends('layouts.admin')

@section('content')
    <div class="admin wrapper">
        @include('parts.admin_side')
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($projects as $project)
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <a href="{{ route('admin_project', [$project->id])}}">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">{{ $project->title }}</h4>
                                    </div>
                                    <div class="content">
                                        <img src='//placehold.it/600x400/10A5C6/FFFFFF'/>
                                        {{-- <img src="{{ asset($project->tumbnail_image) }}" /> --}}
                                    </div>
                                </div>
                            </a>
                            </div>
                        @endforeach

                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="card add-new">
                                <div class="header">
                                    <h4 class="title">Add new project</h4>
                                </div>
                                <div class="content">
                                    <i class="fa fa-plus money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy; {{ date('Y') }}. <a href="http://www.robvankeilegom.be">Rob Van Keilegom</a>.
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <script>
    $( function() {
        $('.header').matchHeight();
        $('.content').matchHeight();
    });
    </script>
@endsection
