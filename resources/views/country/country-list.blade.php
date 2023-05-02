<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listado... contries</title>
</head>
<body>
  <ul>
  @foreach($countries as $country)
    <p>{{ $country->id }}: {{ $country->name }} - {{ $country->currency }}</p>
  @endforeach
</body>
</html>
