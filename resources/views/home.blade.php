<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Trains - Laravel</title>
</head>

<body>

    <div class="container">

        <div id="departures">
            <h2>Departures</h2>
            @foreach ($trains as $train)
                <div class="card">
                    <div>Train Number: <span>{{ $train['train_code'] }}</span></div>
                    <div>Departure Time: <span>{{ $train['departure_time'] }}</span></div>
                    <div>Departure Station: <span>{{ $train['departure_station'] }}</span></div>
                </div>
            @endforeach
        </div>

        <div id="arrows">
            @foreach ($trains as $train)
                <div>&rAarr;</div>
            @endforeach
        </div>

        <div id="arrivals">
            <h2>Arrivals</h2>
            @foreach ($trains as $train)
                <div class="card">
                    <div>Train Number: <span>{{ $train['train_code'] }}</span></div>
                    <div>Arrival Time: <span>{{ $train['arrival_time'] }}</span></div>
                    <div>Arrival Station: <span>{{ $train['arrival_station'] }}</span></div>
                </div>
            @endforeach
        </div>

    </div>

</body>

</html>
