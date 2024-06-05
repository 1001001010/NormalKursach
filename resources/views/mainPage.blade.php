<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
  <title>Главная страница</title>

</head>

<body>
  <script src="/bootstrap/js/bootstrap.js"></script>

  <header class="p-3">
    <div class="container d-flex justify-content-sm-center lol">
      <div class="d-flex flex-wrap align-items-center justify-content-center">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white">Главная страница</a></li>
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
          </form>
          <li><a href="/upload" class="nav-link px-2 text-white">Загрузить трек</a></li>
          <li><a href="{{ route('login') }}" class="nav-link px-2 text-white">Войти в личный кабинет</a></li>
        </ul>
      </div>
    </div>
  </header>

  <div class="container d-flex">
    <div class="container">
      <div class=" container ml-5 mt-5">
        <h3>Плейлист 1</h3>
        <div class="container mt-5 d-flex gap-5">
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
        </div>
      </div>


      <div class=" container ml-5 mt-5">
        <h3>Плейлист 2</h3>
        <div class="container mt-5 d-flex gap-5">
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
        </div>
      </div>
      
      <br class="w-100">

      <div class=" container ml-5 mt-5">
        <h3>Плейлист 3</h3>
        <div class="container mt-5 d-flex gap-5">
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
          <div class="container d-flex flex-md-column gap-2 links w-auto">
            <a href=""><img src="{{ asset('img/Rectangle.png') }}" alt=""></a>
            <a href="" class="link-primary text-decoration-none fs-3 text-black w-auto" style="--bs-text-opacity: 0.6;">Трек</a>
            <a href="" class="link-primary text-decoration-none fs-5 text-black w-auto" style="--bs-text-opacity: 0.6;">Исполниель</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="container d-flex justify-content-center align-items-center">
        <img src="{{ asset('img/like.svg') }}" alt="">
        <p class="text_like">Понравившиеся треки</p>
        <a href="" class="">Посмотреть все</a>
      </div>
    </div>
  </div>

  <footer>

  </footer>
</body>

</html>

<!-- <style>
  .links a:first-child {
    width: 120px;
    height: 120px;
  }
</style> -->