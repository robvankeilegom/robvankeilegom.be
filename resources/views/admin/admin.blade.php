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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title"></h4>
                                </div>
                                <div class="content">

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
@endsection
