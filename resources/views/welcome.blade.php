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
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                @foreach ($projects as $key => $project)
                    <div class="col-md-6 col-lg-4">
                        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ $project->tumbnail_image }}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-primary" href="#">
                    <i class="fa fa-list mr-2"></i>
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
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">
                        A tree cannot be straight if it has a crooked trunk. Anytime you learn something your time and energy are not wasted. Just make a decision and let it go. In nature, dead trees are just as normal as live trees. The only thing worse than yellow snow is green snow.
                    </p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">
                        You can do anything here - the only pre-requisite is that it makes you happy. Just relax and let it flow. That easy. We'll put all the little clouds in and let them dance around and have fun. There are no mistakes.
                    </p>
                </div>
            </div>
            <div class="text-center mt-4">
              <a class="btn btn-xl btn-outline-light" href="#">
                <i class="fa fa-download mr-2"></i>
                Download Resume!
              </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Name</label>
                                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Email Address</label>
                                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Phone Number</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modal -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <div class="row">
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-8 col-lg-offset-2">
                                <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
                            </div>
                        </div>
                        <p class="mb-5">
                            Take your time. Speed will come later. Nice little fluffy clouds laying around in the sky being lazy. You could sit here for weeks with your one hair brush trying to do that - or you could do it with one stroke with an almighty brush. These trees are so much fun. I get started on them and I have a hard time stopping. With practice comes confidence. We don't have to be concerned about it. We just have to let it fall where it will.
                        </p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <!-- Header -->
    @include('parts.footer')
@endsection
