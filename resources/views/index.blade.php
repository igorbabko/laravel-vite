<!doctype html>
<html lang="en">
    <head>
        <title>Laravel / Vite</title>

        @vite('resources/js/app.js')
    </head>
    <body>
        <h1>Posts</h1>
        <ul>
            @foreach(json_decode(File::get(base_path() . '/data/posts.json')) as $post)
                <li>{{ $post->title }}</li>
            @endforeach
        </ul>
    </body>
</html>
