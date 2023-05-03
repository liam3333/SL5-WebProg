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
    <nav class="navbar navbar-expand-lg fixed-top text-uppercase" data-aos="fade-down">
        <div class="container">
            <a href="/" class="navbar-brand font-weight-bold">William.Profile</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="margin-left: auto !important;">
                    <a href="/" class="nav-link px-lg-4 rounded">Home</a>
                    <a href="/about-me" class="nav-link px-lg-4 rounded">About Me</a>
                    <a href="/skill-experience" class="nav-link px-lg-4 rounded">Skills & Experience</a>
                    {{-- <a href="/experience" class="nav-link px-lg-4 rounded">Experiences</a> --}}
                    <a href="/education" class="nav-link px-lg-4 rounded">Education</a>
                    <a href="/favorite" class="nav-link px-lg-4 rounded">Favorite MLBB Heroes</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- <h1 class="text-center">Tes</h1> --}}
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>