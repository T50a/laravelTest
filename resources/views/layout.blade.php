<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark text-white">
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <use xlink:href="#bootstrap"></use>
        </svg>
      </a>

      <ul class="nav">
        <li><a href="/" class="nav-link px-2 link-secondary text-white">Главная</a></li>
        <li><a href="/author" class="nav-link px-2 link-secondary text-white">Авторы</a></li>
        <li><a href="/book" class="nav-link px-2 link-secondary text-white">Книги</a></li>
      </ul>
    </header>
  </div>
  <div class="container">
    @yield('main_content')
  </div>

</body>

</html>

</html>