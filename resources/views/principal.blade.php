@extends('_partials/body')

@section('conteudo')

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

  @endsection