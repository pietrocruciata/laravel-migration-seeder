<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container ">
        @foreach ($trains as $train)
        <div class="">
            <div><strong>Agenzia:</strong>{{$train->agency}}</div>
            <div><strong>Stazione di partenza:</strong>{{$train->departure_station}}</div>
            <div><strong>Stazione di arrivo:</strong>{{$train->arrival_station}}</div>
            <div><strong>Stazione di arrivo:</strong>{{$train->departure_time}}</div>
            <div><strong>Stazione di arrivo:</strong>{{$train->arrival_time}}</div>
            <div><strong>Codice del treno:</strong>{{$train->train_code}}</div>
            <div><strong>Numero di carrozze:</strong>{{$train->number_of_carriages}}</div>
        </div>
          
        @endforeach
    </div>
</body>
</html>