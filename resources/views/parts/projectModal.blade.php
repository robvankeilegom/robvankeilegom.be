<!-- Portfolio Modal -->
<div class="portfolio-modal-dialog bg-white">
    <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
    </a>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-secondary text-uppercase mb-0 project-name">{{ $project->title }}</h2>
                <hr class="star-dark mb-5">
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <img class="img-fluid mb-5 project-picture" src="{{ $project->image }}" alt="">
                    </div>
                </div>
                <p class="mb-5 project-description">
                    {{ $project->description }}
                </p>
                <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                    <i class="fa fa-close"></i>
                    Close Project
                </a>
            </div>
        </div>
    </div>
</div>
