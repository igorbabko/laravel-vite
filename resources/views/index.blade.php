<!doctype html>
<html lang="en">
    <head>
        <title>Laravel / Vite</title>
        <style>{{ Vite::style('app.css') }}</style>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="images">
            <img src="{{ Vite::image('1.jpg') }}" alt="Image 1">
            <img src="{{ Vite::image('2.jpg') }}" alt="Image 2">
        </div>
    </body>
</html>
