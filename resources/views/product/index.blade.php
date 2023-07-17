<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body> 
    @include('layout.header')

    @yield('content')
    
    @foreach ($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <span>Posté le {{ $product->created_at->format('d/m/Y') }}</span>
        </div>
    @endforeach
    
    @include('layout.footer')
</body>
</html>


