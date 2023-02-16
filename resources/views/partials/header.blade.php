<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="bg-primary text-white">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-2">
                        DC Power visa
                    </div>
                    <div class="col-2">
                        ADDITIONAL DC SITES
                    </div>
                </div>
            </div>
        </div>
        <nav class="py-4">
            <div class="container">
                <div class="rows d-flex">
                    <div class="col">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" class='logo' alt="">
                    </div>
                    <div class="col">
                        <ul>
                            <li>CHARACTERS</li>
                            <li>COMICS</li>
                            <li>MOVIES</li>
                            <li>TV</li>
                            <li>GAMES</li>
                            <li>COLLECTIBLES</li>
                            <li>VIDEOS</li>
                            <li>FANS</li>
                            <li>NEWS</li>
                            <li>SHOP</li>
                        </ul>
                    </div>
                    <div class="col">
                        <input placeholder='Search' type="text">
                    </div>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>