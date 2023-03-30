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
    <section class="main" style="border: 1px solid black" data-aos="fade-up">
        <div class="top150"></div>
        <div class="container flex">
            <div class="row">
                <div class="col-lg-6">
                    <h3> <small>Hello, I'm</small><br> <span class="blue">William Suryadharma</span></h3>
                    <h6 class="pt-3">Binusian 2025</h6>
                    <p>I am a Binus student majoring in computer science. In college I always try to find new things related to majors that interest me. I am currently studying in semester 5 and am currently focusing on several Computer Science projects.</p>
                    <input type="button" value="More >" class="bt1 mt-4 mr-3">
                    {{-- <input type="button" value="Hire Me" class="bt2 mt-5"> --}}
                </div>
            </div>
            <img src="assets/main-profile.png" alt="">
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