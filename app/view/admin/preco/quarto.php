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

<!-- Modal Adicionar Preço de Quarto -->
<div class="modal fade" id="addPrecoQuartoModal" tabindex="-1" aria-labelledby="addPrecoQuartoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPrecoQuartoModalLabel">Adicionar Novo Preço de Quarto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPrecoQuartoForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="tipoQuarto" class="form-label">Tipo de Quarto</label>
                            <select class="form-select" id="tipoQuarto" required>
                                <option value="">Selecione o tipo</option>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Suite">Suite</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="temporada" class="form-label">Temporada</label>
                            <select class="form-select" id="temporada" required>
                                <option value="">Selecione a temporada</option>
                                <option value="Baixa">Baixa Temporada</option>
                                <option value="Alta">Alta Temporada</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço por Noite (AKZ)</label>
                        <input type="number" class="form-control" id="preco" step="0.01" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addPrecoQuartoForm" class="btn btn-primary">Guardar Preço</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editPrecoQuartoModal" tabindex="-1" aria-labelledby="editPrecoQuartoModalLabel" aria-hidden="true">
    <!-- Conteúdo do modal de editar preço de quarto -->
</div>
<div class="modal fade" id="deletePrecoQuartoModal" tabindex="-1" aria-labelledby="deletePrecoQuartoModalLabel" aria-hidden="true">
    <!-- Conteúdo do modal de apagar preço de quarto -->
</div>
