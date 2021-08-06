<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Received Mail Car</title>
</head>
<body>
    <h1>Info ricevute:</h1>
    <ul>
        <li>Marca: {{$car->brand}}</li>
        <li>Modello: {{$car->model}}</li>
        <li>Immagine: {{$car->img}}</li>
        <li>Prezzo: {{$car->price}}</li>
        <li>Anno: {{$car->year}}</li>
    </ul>
</body>
</html>
