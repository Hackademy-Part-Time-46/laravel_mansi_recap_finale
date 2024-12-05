<!doctype html>
<html class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Blog Template · Bootstrap v5.3</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column h-100">

    <body class="d-flex flex-column h-100">
        <x-navbar />
        <main>
            {{ $slot }}
        </main>
        <footer class="py-5 mt-auto text-center footer text-body-secondary bg-body-tertiary">
            <p>Copyright</p>
        </footer>
    </body>

</html>
