<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    @include('Template.link')
    <title>DS Tech</title>
</head>

<body>
    <!-- navbar starts -->
    @include('Template.header')

    <!-- navbar ends -->
    <!-- ends... -->
    <div class="container mt-5 mb-5">

        <div class="row justify-content-center">
            <div class="col-md-5">
                <h5 class="text-success-emphasis ms-5">Our Portfolio</h5>
                <h6 class="fs-1 ms-5"><b> Our Latest Portfolio</b></h6>
            </div>
            <div class="col-md-4 ">
                <button type="button" class="btn btn-info shadow ms-5 p-2 rounded shadow-lg mt-4 ms-5"><span
                        class="text-center text-success">Learn More</span></button>
            </div>
        </div>
        <h1 class="fs-1 text-center mt-4 mb-5"><b>Contact us</b></h1>
        <div class="card shadow-lg border-0 rounded-4 mx-auto mt-5 col-lg-5">
            <div class="card-body">
                <h2 class="card-title ps-3">Droup us a line!</h2>
                <h5 class="card-subtitle ps-3 mb-2 text-muted">Let's talk about you</h5>
                <label for="exampleFormControlInput1" class="form-label mt-3"><b> Name</b><i class="text-danger"><small>
                            (Required)</small></i></label>
                <input type="text" class="form-control mb-3  border-dark rounded-1" aria-label="First name">
                <label id="phone_label" for="phone"><b> Phone</b><i class="text-danger"><small>
                            (Required)</small></i></label>
                <input id="phone" name="phone" type="tel"
                    class="form-control mb-3 border-dark rounded-1 mt-1" />
                <label for="exampleFormControlInput1" class="form-label"><b>Email</b><i class="text-danger"><small>
                            (Required)</small></i></label>
                <input type="email" class="form-control mb-3 border-dark rounded-1" id="exampleFormControlInput1">
                <label for="inputState" class="form-label"><b>What Services You Need?</b><i class="text-danger"><small>
                            (Required)</small></i></label>
                <select class="form-select border-dark rounded-1 mb-3" aria-label="Default select example">
                    <option selected>Website Design</option>
                    <option value="1">Wen Developement</option>
                    <option value="2">Graphics Design</option>
                    <option value="3">SEO</option>
                    <option value="2">SMO</option>
                    <option value="3">PHS</option>
                </select>
                <label for="exampleFormControlTextarea1" class="form-label"><b>Message</b><i class="text-danger"><small>
                            (Required)</small></i></label>
                <textarea class="form-control border-dark rounded-1 mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button type="button" class="btn btn-success mt-3 rounded-1 px-4 mb-4"><span
                        class="text-dark">Submit</span>
                </button>
            </div>
        </div>
    </div>



    @include('Template.home')



    <!--font awesome link  -->
    {{-- bootstraplink --}}

    @include('Template.script')


</body>

</html>
