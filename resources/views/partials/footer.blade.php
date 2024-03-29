<!-- Start Footer Area -->
<div class="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single_footer1">
                    <div class="footer_logo">
                        <h2>
                            <a href="/home">Job
                                <span>Panel</span></a>
                        </h2>
                    </div>
                    <p>Sed consequat sapien faus quam bibendum convallis quis in nulla. Pellentesque volutpat odio eget diam cursus semper.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single_footer2">
                    <h5>
                        Quick Links
                    </h5>
                    <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    @guest
                    <li><a href="{{ url('seeker/resume/create') }}">Job<span>Seeker</span></a></li>
                    <li><a href="{{ url('employer/company/create') }}">Employer</a></li>

                    @endguest
                </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single_footer3">
                    <h5>
                        Subscribe Now
                    </h5>
                    <p>Sed consequat sapien faus quam bibendum convallis.</p>
                    <div class="footer_input">
                        <input type="text">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->
