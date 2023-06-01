<!doctype html>
<html>

<head>
    <title>Text Processing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="flex flex-col bg-slate-300 items-center min-h-screen text-neutral-800">

    @include('header')

    <div class="grow container relative">
        <div class="absolute block h-full left-6 top-0 w-6 bg-blue-700/60 z-0"></div>
        <div class="absolute block h-full left-14 top-0 w-6 bg-blue-700/60 z-0"></div>

        <livewire:text-processor /> 

    </div>

    @include('footer')
    @livewireScripts
</body>

</html>
