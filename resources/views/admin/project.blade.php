@extends('layouts.admin')

@section('content')
    <div class="admin wrapper">
        @include('parts.admin_side')
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">{{ $project->title }}</a>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9 project-data">
                            <div class="card">
                                <div class="content">
                                    <input type="hidden" value="{{ $project->id }}" name="id" />
                                    <p>
                                        Title:
                                        <input type="text" value="{{ $project->title }}" name="title" />
                                    </p>
                                    <p>
                                        Description:
                                        <textarea name="description">{{ $project->description }}</textarea>
                                    </p>
                                    <p>
                                        Tumbnail image:
                                        <input type="text" value="{{ $project->tumbnail_image }}" name="tumbnail_image" />
                                    </p>
                                    <p>
                                        Image:
                                        <input type="text" value="{{ $project->image }}" name="image" />
                                    </p>
                                    <p>
                                        Status: {{ $project->status }}
                                    </p>
                                    <?php
                                    $format = 'H:i:s d/m/Y';
                                    ?>
                                    <div class="col-lg-4">
                                        created_at: {{ $project->created_at->format($format) }}
                                    </div>
                                    <div class="col-lg-4">
                                        updated_at: {{ $project->updated_at->format($format) }}
                                    </div>
                                    <div class="col-lg-4">
                                        deleted_at: {{ $project->deleted_at }}
                                    </div>
                                    <div style="clear:both;">
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="header title">
                                    Links:
                                    <span class="right">add new</span>
                                </div>
                                <div class="content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>
                                                    Title
                                                </th>
                                                <th>
                                                    icon
                                                </th>
                                                <th>
                                                    target
                                                </th>
                                                <th>
                                                    href
                                                </th>
                                                <th>
                                                    actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($project->links as $link)
                                                <tr>
                                                    <td>
                                                        {{ $link->title }}
                                                    </td>
                                                    <td>
                                                        <i class="fa {{ $link->icon }}"></i> {{ $link->icon }}
                                                    </td>
                                                    <td>
                                                        {{ $link->target }}
                                                    </td>
                                                    <td>
                                                        {{ $link->href }}
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Tumbnail</h4>
                                </div>
                                <div class="content">
                                    <img src="{{ $project->tumbnail_image }}" />
                                </div>
                            </div>
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Image</h4>
                                </div>
                                <div class="content">
                                    <img src="{{ $project->image }}" />
                                </div>
                            </div>
                            <div class="card">
                                <div class="content">
                                    <button type="submit" class="right">Save</button>
                                    <div style="clear:both;">
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
