<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
    @extends('extends.navbar');

    {{-- Skills --}}
    <section class="services">
        <div class="container">
            <h1 class="text-center pb-5 py-5" data-aos="fade-up">Education History.</h1>
            <div class="col-lg-13 mb-3" data-aos="zoom-in-left">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-school"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Elementary School</h4>
                        <p>My elementary school was in Bali, Indonesia. I studied in a national plus school. <br>I graduated after the 6 years studying process on the year 2012. Its name was Universal Elementary School.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-13 mb-3" data-aos="zoom-in-right">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-school"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Junior High School</h4>
                        <p>My junior high school was in Bali, Indonesia. I studied in a national plus school. <br>I graduated after the 3 years studying process on the year 2018. Its name was Universal Junior High School.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-13 mb-3" data-aos="zoom-in-left">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-school"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Senior High School</h4>
                        <p>My senior high school was in Bali, Indonesia. I studied in a local school. <br>I graduated after the 3 years studying process on the year 2021. Its name was Swastiastu Senior High School.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <h1 class="text-center">Tes</h1> --}}
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
</body>
</html>