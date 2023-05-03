<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/style.css">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
        body{
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .fighter{
            border: 5px solid #8B4515;
            color: #8B4515;
            border-radius: 25px;
        }
        .tank{
            border: 5px solid #A9A9A9;
            color: #A9A9A9;
            border-radius: 25px;
        }
        .mage{
            border: 5px solid #800080;
            color: #800080;
            border-radius: 25px;
        }
        .assassin{
            border: 5px solid #8B0000;
            color: #8B0000;
            border-radius: 25px;
        }
        .marksman{
            border: 5px solid #AA6C39;
            color: #AA6C39;
            border-radius: 25px;
        }

        .hero-details{
            display: grid;
            grid-template-columns: 10% 90%;
        }

        .picture{
            height: 80vh;
            width: 25vw;
            overflow: hidden;
            border-radius: 20px
        }
        .wrapper{
            padding: 30px;
            /* height: 90vh; */
        }
        .card{
            display: grid;
            grid-template-columns: 30% 70%;
            padding: 20px;
            margin-top: 20px;
        }
        .width-300{
            width: 300px;
            font-size: 16px
        }
        .button{
            padding: 5px 10px;
            background-color: black;
            border-radius: 10px;
            color: white;
        }
    </style>
    <title>Details</title>
</head>
<body>
    {{-- @extends('extends.navbar') --}}
    <div class="wrapper p-3">
        <a href="/favorite" class="button">Back to Main Page</a>
        <div class="card 
        {{ ($h["role"] === 'Fighter') ? 'fighter' : ''}}
        {{ ($h["role"] === 'Tank') ? 'tank' : '' }}
        {{ ($h["role"] === 'Mage') ? 'mage' : '' }}
        {{ ($h["role"] === 'Assassin') ? 'assassin' : '' }}
        {{ ($h["role"] === 'Marksman') ? 'marksman' : '' }}
        mt-5">
            <div class="col-md-3 picture">
                <img src="{{ asset('assets/mlbb/'.$h["id"].'.jpg') }}" class="img-fluid rounded" alt="..." width="100%">
            </div>
            <div class="col-md-9">
                <h1 class="card-title">{{ $h["name"] }}</h1>
                <div class="hero-details">
                    <div class="title">Role</div>
                    <div class="sub">{{ $h["role"] }}</div>
                    <div class="title">Hero Power</div>
                    <div class="sub">{{ $h["power"] }}</div>
                    <div class="title">Matches</div>
                    <div class="sub">{{ $h["match"] }}</div>
                    <div class="title">Win Rate</div>
                    <div class="sub">{{ $h["winrate"] }}</div>
                </div>
                <h2 class="mt-5">Description</h2>
                <p class="width-300">{{ $h["desc"] }}</p>
            </div>
        </div>
    </div>
      

    {{-- <h1 class="text-center">Tes</h1> --}}
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
</body>
</html>