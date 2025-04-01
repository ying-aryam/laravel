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
                        Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo e um lugar quentinho.
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
                <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Cachorro">
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