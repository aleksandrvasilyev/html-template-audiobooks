<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Книги 📚</title>
</head>

<body>

  <div class="container">

    <div class="bs-component mb-3">
      <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><i class="fa-solid fa-headphones"></i> Аудиокниги</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto mb-3 mb-sm-0">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-layer-group"></i> Жанры</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-user-pen"></i> Авторы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-list"></i> Серии</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-microphone"></i> Исполнители</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-users"></i> Пользователи</a>
              </li>


            </ul>


            <form class="d-flex mb-3 mb-sm-0">
              <div class="input-group w-auto">
                <input type="text" class="form-control" placeholder="Поиск..." aria-label="Example input" aria-describedby="button-addon1" />
                <button class="btn btn-outline-light me-4" type="button" id="button-addon1" data-mdb-ripple-color="dark"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
            </form>

            <div class="d-flex text-end mb-3 mb-sm-0">
              <button type="button" class="btn btn-outline-light me-2"><i class="fa-solid fa-arrow-right-to-bracket"></i> Вход</button>
              <button type="button" class="btn btn-warning me-2"><i class="fa-solid fa-user-plus"></i> Регистрация</button>
            </div>


            <div class="d-flex dropdown text-end">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="40" height="40" class="rounded-circle"></a>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Мой профиль</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i> Настройки</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right-to-bracket fa-rotate-180"></i> Выйти</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>