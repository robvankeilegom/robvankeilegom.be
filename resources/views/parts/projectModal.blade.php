<!-- Portfolio Modal -->
<div class="portfolio-modal-dialog bg-white">
    <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
    </a>
    <div class="row">
        <div class="col-lg-5">
            <div class="mx-auto text-center">
                <h2 class="text-secondary text-uppercase mb-0 project-name">{{ $project->title }}</h2>
                <p>
                    @foreach ($project->links as $key => $link)
                        @if ($key <> 0)
                            |
                        @endif
                        <a href="{{ $link->href }}" target="{{ $link->target }}">{{ $link->title }}</a>
                    @endforeach
                </p>
                {{-- <hr class="star-dark mb-5"> --}}
            </div>
            <p class="mb-5 project-description text-justify">
                {{ $project->description }}
            </p>
            <p class="mb-5 project-description text-justify">
                @foreach ($project->tags as $key => $tag)
                    <span class="badge badge-primary">{{ $tag->name }}</span>
                @endforeach
            </p>
            {{--
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
            <i class="fa fa-close"></i>
            Close Project
            </a>
             --}}
        </div>
        <div class="col-lg-7">
            <img class="img-fluid mb-5 project-picture" src="{{ asset($project->image) }}" alt="">
        </div>
    </div>
</div>
