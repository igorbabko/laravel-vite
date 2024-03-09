<!doctype html>
<html lang="en">
    <head>
        <title>Laravel / Vite</title>

        {{
            Vite::withEntryPoints(['resources/css/app.css', 'resources/js/app.js'])
                ->useBuildDirectory('dist')
                ->useManifestFilename('frontend.json')
                ->createAssetPathsUsing(fn (string $path) => "http://localhost:8080/{$path}")
        }}
    </head>
    <body></body>
</html>
