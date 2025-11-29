<div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPrecoConsumoModal">
        <i class="fa-solid fa-plus"></i> Adicionar Preço de Consumo
    </button>
</div>

<div class="card">
    <div class="card-body">
        <div class="tabela-dados">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item</th>
                        <th scope="col">Preço (AKZ)</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de linha de dados -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Água Mineral</td>
                        <td>5,00</td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPrecoConsumoModal" data-id="1">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePrecoConsumoModal" data-id="1">
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

<!-- Modal Adicionar Preço de Consumo -->
<div class="modal fade" id="addPrecoConsumoModal" tabindex="-1" aria-labelledby="addPrecoConsumoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPrecoConsumoModalLabel">Adicionar Novo Preço de Consumo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPrecoConsumoForm">
                    <div class="mb-3">
                        <label for="item" class="form-label">Nome do Item</label>
                        <input type="text" class="form-control" id="item" required>
                    </div>
                    <div class="mb-3">
                        <label for="precoConsumo" class="form-label">Preço (AKZ)</label>
                        <input type="number" class="form-control" id="precoConsumo" step="0.01" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addPrecoConsumoForm" class="btn btn-primary">Guardar Preço</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editPrecoConsumoModal" tabindex="-1" aria-labelledby="editPrecoConsumoModalLabel" aria-hidden="true">
    <!-- Conteúdo do modal de editar preço de consumo -->
</div>
<div class="modal fade" id="deletePrecoConsumoModal" tabindex="-1" aria-labelledby="deletePrecoConsumoModalLabel" aria-hidden="true">
    <!-- Conteúdo do modal de apagar preço de consumo -->
</div>
