<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>
        <div class="content_div">
            <div class="jumbo_container">
            </div>
            <div class="currentseries_container">
                <div class="series_container">
                    <div>
                        <h2 class="series_header">CURRENT SERIES</h2>
                    </div>
                    <div class="series_cards_container">

                    </div>
                </div>
                <div class="load_more_button">
                    <button>LOAD MORE</button>
                </div>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>

</html>