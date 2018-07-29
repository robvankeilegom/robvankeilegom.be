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
                                                </th>
                                                <th>
                                                    delete?
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
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('delete_link', [$project->id, $link->id]) }}" class="remove"><i class="far fa-remove"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <button type="button" class="btn right" data-toggle="modal" data-target="#addLinkModal">Add Link </button>

                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="content">
                                    <button type="button" class="btn red">Delete</button>
                                    <button type="submit" class="btn right green">Save</button>
                                    <div style="clear:both;"></div>
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

<!-- Add Link Modal -->
<div id="addLinkModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add a link to your project</h4>
      </div>
      <div class="modal-body">

        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" id="title" class="form-control" />
        </div>

        <div class="form-group">
            <label for="icon">Icon: </label>
            <input type="text" id="icon" class="form-control" />
        </div>

        <div class="form-group">
            <label for="target">Target: </label>
            <input type="text" id="target" class="form-control" />
        </div>

        <div class="form-group">
            <label for="href">Href: </label>
              <select class="form-control" id="href">
                <option>_self</option>
                <option>_blank</option>
                <option>_parent</option>
                <option>_top</option>
              </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    @endsection
