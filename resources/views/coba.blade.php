<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello wolrd</title>
</head>
<body>
  <h1>Hello wolrd</h1>

  
@php
    $n = 1;
@endphp

@foreach ($users as $user)
<h3>Ini data ke{{ $n++ }}</h3>
<p>{{ $user->name }}</p>
<p>{{ $user->email }}</p>
<p>{{ $user->created_at }}</p>
<p>{{ $user->updated_at }}</p>
@endforeach
  
</body>

</html>