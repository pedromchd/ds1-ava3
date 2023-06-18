<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Bah!Bank</title>
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body>
  @include('includes.header')

  <main>
    @yield('main')
  </main>

  @include('includes.footer')
</body>

</html>