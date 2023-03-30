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

    {{-- About Me --}}
    <section class="about-me py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img src="assets/aboutmepic.jpg" data-aos="fade-right" alt="">
                </div>

                <div class="col-lg-7" data-aos="fade-left">
                    <h1>About Me.</h1>
                    <p style="font-style: italic">Student of Bina Nusantara University</p>
                    <p class="py-3">I am <span style="font-weight: bold">William Suryadharma</span>, student of Bina Nusantara University or Binusian 2025. Currently, I am majoring in School of Computer Science. I can speak local and foreign languages, such as Indonesian, Javanese, Balinese, English, and Chinese. :D
                    </p>
                    
                    <div class="progress">
                        <div class="pro-value1">
                            <p class="text-white margins">Indonesian</p>
                        </div>
                    </div>  
                    <div class="progress my-3">
                        <div class="pro-value2">
                            <p class="text-white margins">Javanese</p>
                        </div>
                    </div>  
                    <div class="progress">
                        <div class="pro-value3">
                            <p class="text-white margins">Balinese</p>
                        </div>
                    </div>  
                    <div class="progress my-3">
                        <div class="pro-value4">
                            <p class="text-white margins">English</p>
                        </div>
                    </div>  
                    <div class="progress my-3">
                        <div class="pro-value5">
                            <p class="text-white margins">Chinese</p>
                        </div>
                    </div>  
{{-- 
                    <input type="button" value="Download" class="btn1">
                    <input type="button" value="Contact Me" class="btn2"> --}}
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
</body>
</html>