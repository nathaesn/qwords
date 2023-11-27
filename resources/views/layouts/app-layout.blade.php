<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- Styles --}}
  @stack('prepend-styles')
  <x-app-styles />
  @stack('addon-styles')

  <title>Qwords.com: Cloud Web Hosting Indonesia Akses Cepat Aman</title>
</head>

<body>
  {{ $slot }}

  <x-app-customer-button />

  {{-- Scripts --}}
  @stack('prepend-scripts')
  <x-app-scripts />
  @stack('addon-scripts')
</body>

</html>
