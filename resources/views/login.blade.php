@extends('_partials/body')

@section('conteudo')
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

  @endsection