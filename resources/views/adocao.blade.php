@extends('_partials/body')

@section('conteudo')

<div class="container mt-5">
    <h1 class="text-center page-title">Adote um Amigo</h1>
    
    <div class="row">
        <!-- Animal 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1586671267731-da2cf3ceeb80?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Cachorro">
                <div class="card-body">
                    <h5 class="card-title">Rex</h5>
                    <p class="card-text">
                        <strong>Espécie:</strong> Cachorro<br>
                        <strong>Idade:</strong> 2 anos<br>
                        <strong>Porte:</strong> Médio<br>
                        Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e outros animais.
                    </p>
                    <a href="#" class="btn btn-adotar w-100">Quero Adotar</a>
                </div>
            </div>
        </div>
        
        <!-- Animal 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Gato">
                <div class="card-body">
                    <h5 class="card-title">Mimi</h5>
                    <p class="card-text">
                        <strong>Espécie:</strong> Gato<br>
                        <strong>Idade:</strong> 1 ano<br>
                        <strong>Porte:</strong> Pequeno<br>
                        Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo e um lugar quentinho para dormir.
                    </p>
                    <a href="#" class="btn btn-adotar w-100">Quero Adotar</a>
                </div>
            </div>
        </div>
        
        <!-- Animal 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1556838803-cc94986cb631?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Coelho">
                <div class="card-body">
                    <h5 class="card-title">Bolinha</h5>
                    <p class="card-text">
                        <strong>Espécie:</strong> Coelho<br>
                        <strong>Idade:</strong> 6 meses<br>
                        <strong>Porte:</strong> Pequeno<br>
                        Bolinha é um coelho muito dócil e brincalhão. Ele adora cenouras e correr pelo jardim.
                    </p>
                    <a href="#" class="btn btn-adotar w-100">Quero Adotar</a>
                </div>
            </div>
        </div>
        
        <!-- Animal 4 -->
        <div class="col-md-4 mt-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1546521343-4eb2c01aa44b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Cachorro">
                <div class="card-body">
                    <h5 class="card-title">Thor</h5>
                    <p class="card-text">
                        <strong>Espécie:</strong> Cachorro<br>
                        <strong>Idade:</strong> 4 anos<br>
                        <strong>Porte:</strong> Grande<br>
                        Thor é um cachorro muito protetor e leal. Ideal para quem busca um companheiro fiel.
                    </p>
                    <a href="#" class="btn btn-adotar w-100">Quero Adotar</a>
                </div>
            </div>
        </div>
        
        <!-- Animal 5 -->
        <div class="col-md-4 mt-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1533738363-b7f9aef128ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Gato">
                <div class="card-body">
                    <h5 class="card-title">Luna</h5>
                    <p class="card-text">
                        <strong>Espécie:</strong> Gato<br>
                        <strong>Idade:</strong> 3 anos<br>
                        <strong>Porte:</strong> Médio<br>
                        Luna é uma gata independente mas que adora carinho nos seus próprios termos.
                    </p>
                    <a href="#" class="btn btn-adotar w-100">Quero Adotar</a>
                </div>
            </div>
        </div>
        
        <!-- Animal 6 -->
        <div class="col-md-4 mt-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1585110396000-c9ffd4e4b308?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Cachorro">
                <div class="card-body">
                    <h5 class="card-title">Mel</h5>
                    <p class="card-text">
                        <strong>Espécie:</strong> Cachorro<br>
                        <strong>Idade:</strong> 5 meses<br>
                        <strong>Porte:</strong> Pequeno<br>
                        Mel é uma filhote super brincalhona e carinhosa. Adora atenção e fazer novos amigos.
                    </p>
                    <a href="#" class="btn btn-adotar w-100">Quero Adotar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection