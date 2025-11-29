<div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPrecoQuartoModal">
        <i class="fa-solid fa-plus"></i> Adicionar Preço de Quarto
    </button>
</div>

<div class="card">
    <div class="card-body">
        <div class="tabela-dados">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo de Quarto</th>
                        <th scope="col">Temporada</th>
                        <th scope="col">Preço por Noite (AKZ)</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de linha de dados -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Standard</td>
                        <td>Baixa Temporada</td>
                        <td>150,00</td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPrecoQuartoModal" data-id="1">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePrecoQuartoModal" data-id="1">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Fim do exemplo -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modais para Preços de Quarto -->
<div class="modal fade" id="addPrecoQuartoModal" tabindex="-1" aria-labelledby="addPrecoQuartoModalLabel" aria-hidden="true">
    <!-- Conteúdo do modal de adicionar preço de quarto -->
</div>
<div class="modal fade" id="editPrecoQuartoModal" tabindex="-1" aria-labelledby="editPrecoQuartoModalLabel" aria-hidden="true">
    <!-- Conteúdo do modal de editar preço de quarto -->
</div>
<div class="modal fade" id="deletePrecoQuartoModal" tabindex="-1" aria-labelledby="deletePrecoQuartoModalLabel" aria-hidden="true">
    <!-- Conteúdo do modal de apagar preço de quarto -->
</div>
