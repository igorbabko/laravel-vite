<!doctype html>
<html lang="en">
    <head>
        <title>Laravel / Vite</title>

        @vite('resources/js/app.js')
    </head>
    <body class="bg-[#14111b] flex flex-col justify-center items-center">
        <div class="images">
            <img src="{{ Vite::asset('resources/img/1.jpg') }}" alt="Image 1">
            <img src="{{ Vite::asset('resources/img/2.jpg') }}" alt="Image 2">
        </div>
    </body>
</html>
