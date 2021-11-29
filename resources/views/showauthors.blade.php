<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auhors</title>
</head>
<body>
    @forelse ($authors as $rawalejandro)
        <p>{{$rawalejandro->name}}</p>
        <p>{{$rawalejandro->email}}</p>
    @empty
        <h1>está vacio!</h1>
    @endforelse
    
</body>
</html>