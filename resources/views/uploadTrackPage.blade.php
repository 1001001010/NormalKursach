<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/uploadTrack.css') }}">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
  <title>Страница загрузки трека</title>

</head>

<body>
  <script src="/bootstrap/js/bootstrap.js"></script>

  <header class="p-3">
    <div class="container lol">
      <div class="d-flex flex-wrap align-items-center justify-content-center">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white">Главная страница</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Библиотека</a></li>
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
          </form>
          <li><a href="#" class="nav-link px-2 text-white">Для артиста</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Загрузить трек</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Войти в личный кабинет</a></li>
        </ul>
      </div>
    </div>
  </header>


  <div class="container-lg trackConteiner">
  <h3 class="main_text">Перетащите сюда свои треки</h3>
    <form class="first_form" enctype="multipart/form-data" method="POST" action="{{ route('NewMusic') }}">
      @csrf
      <label class="input-file " for="audioFile">
        <input type="file" id="audioFile" name="music" accept="audio/*" multiple>
        <span>Или выберите файл для загрузки</span>
      </label>

      <div class="input_flex">
        <div class="container_name">
          <h3 class="main_text">Название трека:</h3>
          <input class="input_name" type="text" name="track_name">
        </div>

        <div class="container_name">
          <h3 class="main_text">Жанр:</h3>
          <input class="input_name" type="text" name="genre">
        </div>
      </div>
      <input type="file" name="cover">
      <label class="input-file" for="audioFile">
        <button type="submit">Загрузить</button>
      </label>
    </form>
  </div>

  <footer>

  </footer>
</body>

</html>