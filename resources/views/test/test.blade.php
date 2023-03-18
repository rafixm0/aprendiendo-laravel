<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include("fragment.subview")
    
    <p>
    Hola: {{ $name }}
    <br>
    @if ( $ages[0] >=40 )
        Tienes 40 o más años!!
    @else
        Tienes menos de 40 años!!!
    @endif
    </p>
    @isset($pais)
        está definido el parse_ini_string
    @endisset
    @for ($i = 0; $i < 5; $i++)
        valor {{ $i }}
    @endfor
    <br>
    @foreach ($ages as $age)
        year: {{ $age }}
    @endforeach
    
</body>
</html>