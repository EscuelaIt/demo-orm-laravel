<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clientes</title>
</head>
<body>
  <h1>Clientes</h1>
  <ul>
    @foreach ($customers as $customer)
      <li>
        {{ $customer->id }})
        {{ $customer->name }}
        ( {{ $customer->country_id }}: {{ $customer->country->name }}, {{ $customer->country->currency }})
        <a href="/customers-remove/{{ $customer->id }}">[x]</a>
      </li>
    @endforeach
  </ul>
</body>
</html>