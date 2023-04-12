<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="main">
        <div class="container p-5">

            <h1 class="text-center text-white fs-1">
                Mi piacciono i treni
            </h1>
    
            <ul class="grid-dis mt-3">
        
                @foreach ($trains as $train)
            
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"> {{ $train->company }} </h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">  </h6>
                            <p class="card-text mt-auto">  </p>
                            <div class="info-wrapper">
                                <div class="card-info"> Dep: {{ $train->departure_time }} </div>
                                <div class="card-info vote"> Arr: {{ $train->arrival_time }} </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
        
            </ul>

        </div>
    </main>

</body>

</html>