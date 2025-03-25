@extends('_partials/body')

@section('conteudo')
  <div class="container">
    <div class="register-container">
      <h2>Registrar</h2>
      <form>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirmar-senha" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirmar-senha" placeholder="Confirme sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Registrar</button>
      </form>
      <div class="text-center mt-3">
        <span style="color: #49F273;">Já tem uma conta? </span>
        <a href="#" style="color: #F266B3;">Faça login</a>
      </div>
    </div>
  </div>

  @endsection