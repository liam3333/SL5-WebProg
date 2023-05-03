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
            <h1 class="text-center pb-5 py-5" data-aos="fade-up">Top Heroes Used.</h1>
            <div class="row pb-3">
                @foreach ($heroes as $h)
                    <div class="col-lg-4 mb-3" data-aos="zoom-in">
                        <div class="card text-center py-3
                        {{ ($h["role"] === 'Fighter') ? 'fighter' : ''}}
                        {{ ($h["role"] === 'Tank') ? 'tank' : '' }}
                        {{ ($h["role"] === 'Mage') ? 'mage' : '' }}
                        {{ ($h["role"] === 'Assassin') ? 'assassin' : '' }}
                        {{ ($h["role"] === 'Marksman') ? 'marksman' : '' }}">
                            <div class="card-body">
                                <div class="image-wrap rounded">
                                    <a href="hero/{{ $h["id"] }}"><img src="assets/mlbb/{{ $h["id"] }}.jpg" alt="" class="card-img-top"></a>
                                </div>
                                <h4 class="font-weight-bold mt-4">{{ $h["name"] }}</h4>
                                <p>Role: {{ $h["role"] }} <br>
                                    Hero Power: {{ $h["power"] }} <br>
                                    Matches: {{ $h["match"] }} <br>
                                    Win Rate: {{ $h["winrate"] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
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