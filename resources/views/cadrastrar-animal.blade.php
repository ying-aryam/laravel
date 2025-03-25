@extends('_partials/body')

@section('conteudo')
<div class="container">
    <div class="register-container">
        <h2 class="register-title">Cadastrar Animal para Adoção</h2>
        
        <form>
            <!-- Seção Informações Básicas -->
            <div class="form-section">
                <h4 class="section-title">Informações Básicas</h4>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome" class="form-label">Nome do Animal</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome do animal" required>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="especie" class="form-label">Espécie</label>
                        <select class="form-select" id="especie" required>
                            <option value="" selected disabled>Selecione a espécie</option>
                            <option value="cachorro">Cachorro</option>
                            <option value="gato">Gato</option>
                            <option value="coelho">Coelho</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="idade" class="form-label">Idade (anos)</label>
                        <input type="number" class="form-control" id="idade" min="0" max="30" placeholder="Idade aproximada">
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="porte" class="form-label">Porte</label>
                        <select class="form-select" id="porte" required>
                            <option value="" selected disabled>Selecione o porte</option>
                            <option value="pequeno">Pequeno</option>
                            <option value="medio">Médio</option>
                            <option value="grande">Grande</option>
                        </select>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="sexo" class="form-label">Sexo</label>
                        <select class="form-select" id="sexo" required>
                            <option value="" selected disabled>Selecione o sexo</option>
                            <option value="macho">Macho</option>
                            <option value="femea">Fêmea</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Seção Saúde -->
            <div class="form-section">
                <h4 class="section-title">Informações de Saúde</h4>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="vacinado" class="form-label">Vacinado</label>
                        <select class="form-select" id="vacinado" required>
                            <option value="" selected disabled>Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                            <option value="parcial">Parcialmente</option>
                        </select>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="castrado" class="form-label">Castrado</label>
                        <select class="form-select" id="castrado" required>
                            <option value="" selected disabled>Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="observacoes" class="form-label">Observações de Saúde</label>
                    <textarea class="form-control" id="observacoes" rows="3" placeholder="Alguma condição especial ou observação importante"></textarea>
                </div>
            </div>
            
            <!-- Seção Foto -->
            <div class="form-section">
                <h4 class="section-title">Foto do Animal</h4>
                
                <div class="mb-3">
                    <label for="foto" class="form-label">Enviar Foto</label>
                    <input class="form-control" type="file" id="foto" accept="image/*" required>
                    <div class="form-text">A foto deve mostrar claramente o animal</div>
                </div>
            </div>
            
            <!-- Seção Descrição -->
            <div class="form-section">
                <h4 class="section-title">Descrição do Animal</h4>
                
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descreva o animal</label>
                    <textarea class="form-control" id="descricao" rows="4" required placeholder="Descreva o temperamento, hábitos, preferências e qualquer informação relevante para potenciais adotantes"></textarea>
                </div>
            </div>
            
            <button type="submit" class="btn btn-register mt-3">Cadastrar Animal</button>
        </form>
    </div>
</div>
@endsection