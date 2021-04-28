<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-0 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <ul class="list-inline mb-1">
                    @foreach ($headerData->links as $key => $link)
                    <li class="list-inline-item">
                        <a
                            class="btn btn-outline-light btn-social text-center rounded-circle"
                            rel="noopener"
                            href="{{ $link->href }}"
                            target="{{ $link->target }}"
                            alt="{{ $link->title}}"
                        >
                            <i class="far fa-fw {{ $link->icon }}"></i>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6">
                <h4 class="text-uppercase mb-4">Contact</h4>
                <p class="lead mb-0">
                    <a href="mailto:info@robvankeilegom.be">info@robvankeilegom.be</a>
                    <br>
                    <a href="tel:0032479263923">+324 79 26 39 23</a>
                </p>
            </div>
        </div>
    </div>
</footer>


<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; 2016 - {{ date('Y') }} <b>robvankeilegom.be</b></small>
    </div>
</div>
