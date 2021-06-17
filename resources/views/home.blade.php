<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Lista dei nostri pacchetti</h1>

        <div class="row">
            @foreach ($travels as $travel)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $travel->image }}" alt="{{ $travel->destination }}">
                <div class="card-body">
                <h3 class="card-title">{{ $travel->name }}</h3>
                <h5 class="card-title">{{ $travel->destination }}</h5>
                <p class="card-text">{{ $travel->description }}</p>
                <h5 class="card-text">{{ $travel->price }} €</h5>
                
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    
    

        {{-- <div>
            <div><strong>Nome pacchetto: </strong>{{ $travel->name }}</div>
            <div>
                <img src="{{ $travel->image }}" alt="{{ $travel->destination }}">
            </div>
            <div><strong>Destinazione: </strong>{{ $travel->destination }}</div>
            <div><strong>Descrizione del viaggio: </strong>{{ $travel->description }}</div>
            <div><strong>Prezzo: </strong>{{ $travel->price }} €</div>
        </div> --}}
    
</body>
</html>