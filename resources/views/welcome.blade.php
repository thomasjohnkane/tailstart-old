<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body>
        <div class="container mx-auto px-4 py-5">
            <h1 class="text-center">Type your name to see it console logged via Stimulus JS</h1>
            <div class="flex bg-grey-lighter">
                <div class="flex-1 text-grey-darker text-center bg-grey-light px-4 py-2 m-2">
                    <a href="https://laravel.com">Laravel 5.5</a>
                </div>
                <div class="flex-1 text-grey-darker text-center bg-grey-light px-4 py-2 m-2">
                    <a href="https://tailwindcss.com">Tailwind.css</a>
                </div>
                <div class="flex-1 text-grey-darker text-center bg-grey-light px-4 py-2 m-2">
                    <a href="https://stimulusjs.org">Stimulus.js</a>
                </div>
                <div class="flex-1 text-grey-darker text-center bg-grey-light px-4 py-2 m-2">
                    <a href="https://github.com/turbolinks/turbolinks">Turbolinks (via Stimulus)</a>
                </div>
                <div class="flex-1 text-grey-darker text-center bg-grey-light px-4 py-2 m-2">
                    <div data-controller="hello">
                        <input data-target="hello.name" type="text">
                        <button data-action="click->hello#greet">Greet</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
