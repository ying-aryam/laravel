<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Carrocelpets</title>
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
      color: #F266B3 !important;
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
    .login-container {
      background-color: #012619;
      border: 2px solid #49F273;
      border-radius: 10px;
      padding: 20px;
      margin-top: 100px;
      max-width: 400px;
      margin-left: auto;
      margin-right: auto;
    }
    .login-container h2 {
      color: #F266B3;
      text-align: center;
      margin-bottom: 20px;
    }
    .form-control {
      background-color: #012619;
      border: 1px solid #49F273;
      color: #49F273;
    }
    .form-control:focus {
      background-color: #012619;
      border-color: #BF0404;
      color: #49F273;
    }
    .form-label {
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
            <a class="nav-link" href="{{route('principal')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('registrar')}}">Registrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="login-container">
      <h2>Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
      <div class="text-center mt-3">
        <a href="#" style="color: #F266B3;">Esqueceu a senha?</a>
      </div>
      <div class="text-center mt-3">
        <span style="color: #49F273;">Não tem uma conta? </span>
        <a href="#" style="color: #F266B3;">Registre-se</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>