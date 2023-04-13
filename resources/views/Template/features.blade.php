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
    <div class="container mt-5">
        <h1 class="text-center text-dark">
            <b> Our best Features</b>
        </h1>
    </div><br>
    <div class="container mt-2 mb-2">
        <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0 ">
                <div class="card p-3 shadow-lg mb-5 bg-body-tertiary rounded-5 border-0">
                    <div class="card-body">
                        <i class="fa-solid fa-wallet text-info fs-1 mb-3 "></i>
                        <h4 class="card-title mb-3"><b> Your Growth, Our Priority</b></h4>
                        <p class="card-text fs-6 text-secondary">We make everything user friendly so you can focus on
                            growing your
                            skill to growing your business..</p>

                    </div>
                </div>
            </div>
            <div class="col-sm-4  mb-5 ">
                <div class="card shadow-lg p-3 bg-body-tertiary rounded-5 border-0">
                    <div class="card-body">
                        <i class="fa-solid fa-wallet text-info fs-1 mb-3 "></i>
                        <h4 class="card-title mb-3"><b>Transparent Workflow</b></h4>
                        <p class="card-text fs-6 text-secondary">We make everything user friendly so you can focus on
                            growing your
                            skill to growing your business..</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded-5 border-0">
                    <div class="card-body">
                        <i class="fa-solid fa-wallet text-info fs-1 mb-3 "></i>
                        <h4 class="card-title mb-3"><b>24 X 7 Support</b></h4>
                        <p class="card-text fs-6 text-secondary">We make everything user friendly so you can focus on
                            growing your
                            skill to growing your business..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Template.home')

    <!--font awesome link  -->
    {{-- bootstraplink --}}

    @include('Template.script')


</body>

</html>
