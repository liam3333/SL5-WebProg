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
            <h1 class="text-center pb-5 py-5" data-aos="fade-up">My Skills.</h1>
            <div class="row pb-3">
                <div class="col-lg-4 mb-3" data-aos="zoom-in">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-pen-nib">
                                    
                                </i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">Prototyping Skill</h4>
                            <p>I love to layouting on any design, mainly on Web Designing or Mobile Designing. It is an ability to create effective website design by layouting them into a good layout design. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3" data-aos="zoom-in">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-terminal"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">Development Skill</h4>
                            <p>Beside on web prototyping, I can do an implementation based on prototype I made. Usually, I'm slicing the prototype from Figma into HTML/CSS form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3" data-aos="zoom-in">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-user-plus"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">Teamwork Skill</h4>
                            <p>As a Computer Science student of Bina Nusantara University, I must have a good communication between my teams, so that teamwork is the key of success</p>
                        </div>
                    </div>
                </div>

            <h1 class="text-center pb-5 py-5" data-aos="fade-up">My Experience.</h1>
                <div class="col-lg-4 mb-3" data-aos="zoom-in">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-money-bill"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">Class Treasurer</h4>
                            <p>Once, I was a treasurer team in my class. They trusted me to manage our money in my management model. As a good treasurer, I will make sure that the income and outcome money will be noted properly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3" data-aos="zoom-in">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-camera"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">Documentation & Publication</h4>
                            <p>Besides, right now I'm doing my job as a Documentation & Publication in my class. Its job is about doing some good design poster and video for our Instagram posts and recap posts</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3" data-aos="zoom-in">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fas fa-leaf"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">Class Leader</h4>
                            <p>A long time ago, once I was being trusted to be a leader of my class by my friends. Being a good leader is not a easy job to do. I have to make sure that everything is being done properly in my class.</p>
                        </div>
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