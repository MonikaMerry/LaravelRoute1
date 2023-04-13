<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    @include('Template.link')
    <title>ABOUT</title>
</head>

<body>
    <!-- navbar starts -->
    @include('Template.header')


    <!-- ends -->

    <div class="container px-4 mb-5">
        <h1 class="text-center fw-bold fs-1 text-info mt-5">ABOUT </h1>
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class=" mt-5 text-start">
                    <h6 class="mt-5 fs-5 text-success-emphasis">About us</h6>
                    <h2 class="fs-1 mb-4"><b>We have a creative team
                            built your Business </b> </h2>
                    <p class="mb-4">
                        we are a creative team that helps small and large business tell their story to the world. We aim
                        to create
                        something that is authentic and can be found nowhere else!
                    </p>
                    <p class="mb-4">
                        We can help you: – Design awesome website – Make your Business online and build strong online
                        presence
                    </p>
                    <div class="button-group mt-5">
                        <button type="button" class="btn btn-info shadow  mb-3 rounded"><span
                                class="text-center text-success ">Learn More</span></button>
                        <button type="button" class="btn btn-info  shadow  mb-3  rounded"><span
                                class="text-center text-success">
                                Get a Free Quote </span></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('frontend/images/About-us-page-amico-1-1024x1024.png') }}" alt=""
                    class="d-block mt-3 img-fluid">
            </div>
        </div>
    </div>



    @include('Template.home')

    <!--font awesome link  -->
    {{-- bootstraplink --}}

    @include('Template.script')


</body>

</html>
