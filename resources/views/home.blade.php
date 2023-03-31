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

    {{-- Main --}}
    <section class="main">
        <div class="top150"></div>
        <div class="container flex">
            <div class="row" data-aos="fade-right">
                <div class="col-lg-6">
                    <h3 class="animated-text">Hello, I'm</h3>
                    <h3><span class="blue">{{ $name }}</span></h3>
                    <h6 class="pt-3">{{ $college }}</h6>
                    <p> {{ $description }} </p>
                    <a href="/about-me"><input type="button" value="More >" class="bt1 mt-4 mr-3"></a>
                    {{-- <input type="button" value="Hire Me" class="bt2 mt-5"> --}}
                </div>
            </div>
            <img data-aos="fade-left" src="assets/main-profile.jpg" alt="">
        </div>
    </section>

    {{-- <h1 class="text-center">Tes</h1> --}}
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>