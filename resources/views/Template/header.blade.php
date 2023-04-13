<nav class="navbar navbar-expand-lg bg-info bg-gradient  text-dark">
    <div class="container">
        <a class="navbar-brand ms-5" href="#">
            <img src="https://www.dstechsales.com/wp-content/uploads/2021/09/Final-black-logo-2.png" alt=""
                width="230px" height="100px" class="d-block img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto  mb-lg-0">
                <li class="nav-item p-3">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item p-3">
                    <a class="nav-link active" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item p-3">
                    <a class="nav-link active" href="{{ url('features') }}">Features</a>
                </li>
                <li class="nav-item p-3">
                    <a class="nav-link active" href="{{ url('courses') }}">Courses</a>
                </li>
                <li class="nav-item p-3">
                    <a class="nav-link active" href="{{ url('contact') }}">Contact Us</a>
                </li>
                <li class="nav-item p-3">
                    <button type="button" class="btn btn-outline-success border-2"><span class="h6">Get A
                            Quote</span></button>
                </li>
            </ul>

        </div>
    </div>
</nav>
