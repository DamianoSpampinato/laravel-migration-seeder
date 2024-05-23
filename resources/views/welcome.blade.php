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
    <div class="container">
        @foreach ($trains as $train)
        @if (str_contains($train['Orario_di_partenza'], '05-22' ))
            
        <div>
            Azienda: {{$train['Azienda']}}
        </div>
        <div>
            Partenza {{$train['Orario_di_partenza']}}
        </div>
        <div>
            Arrivo {{$train['Orario_di_arrivo']}}
        </div>
        <div>
            Numero treno {{$train['codice_treno']}}
        </div>
        
        @endif
        @endforeach
    </div>
    

</body>

</html>