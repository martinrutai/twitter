<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    
     @foreach ($users as $user)
     @if ($user["age"] < 18)
        <p>{{ $user["name"]}} má pod 18 rokov Čiže nemôže piť alkohol</p>
     @else ($user["age"] > 18)
        <p>{{$user["name"]}} má nad 18 rokov takže môže piť alkohol</p>
     @endif
     
    
    @endforeach
</body>
</html>