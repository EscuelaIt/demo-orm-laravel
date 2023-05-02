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
    <li>
      {{ $country->id }}: {{ $country->name }} - {{ $country->currency }}
      <br>
      @foreach($country->customers as $customer)
        <span style="font-size: 0.8rem; opacity: 0.5">
          {{ $customer->name }}{{ $loop->last ? '' : ', ' }}
        </span>
      @endforeach
    </li>
  @endforeach
</body>
</html>
