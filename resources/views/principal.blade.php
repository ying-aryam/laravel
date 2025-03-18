<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adoção de Animais - Carrocelpets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #012619;
      color: #49F273;
    }
    .navbar {
      background-color: #730202;
    }
    .navbar-brand, .nav-link {
      color: #F2F2F2 !important;
    }
    .nav-link:hover {
      color: #BF0404 !important;
    }
    .btn-primary {
      background-color: #49F273;
      border-color: #49F273;
      color: #012619;
    }
    .btn-primary:hover {
      background-color: #BF0404;
      border-color: #BF0404;
    }
    .card {
      background-color: #012619;
      border: 1px solid #49F273;
      margin-bottom: 20px;
    }
    .card-title {
      color: #F266B3;
    }
    .card-text {
      color: #49F273;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Carrocelpets</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('principal')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('registrar')}}">Registrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1 class="text-center mb-4">Adote um Amigo</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Cachorro">
          <div class="card-body">
            <h5 class="card-title">Rex</h5>
            <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e outros animais.</p>
            <a href="#" class="btn btn-primary">Adotar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Gato">
          <div class="card-body">
            <h5 class="card-title">Mimi</h5>
            <p class="card-text">Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo e um lugar quentinho para dormir.</p>
            <a href="#" class="btn btn-primary">Adotar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Coelho">
          <div class="card-body">
            <h5 class="card-title">Bolinha</h5>
            <p class="card-text">Bolinha é um coelho muito dócil e brincalhão. Ele adora cenouras e correr pelo jardim.</p>
            <a href="#" class="btn btn-primary">Adotar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

  </body>
</html>