<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('includes.head')
</head>
<body>
  <header>
    @include('includes.header')
  </header>
  <main class="d-flex flex-column container-fluid px-4">
    @yield('content')
  </main>
  <footer>
    @include('includes.footer')
  </footer>
</body>
</html>