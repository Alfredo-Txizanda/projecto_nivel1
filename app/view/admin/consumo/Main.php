<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Consumos</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-cart-shopping"></i> / Dashboard Kenyel / Consumos</p>
    </div>

    <div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addConsumoModal">
            <i class="fa-solid fa-plus"></i> Adicionar Consumo
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="tabela-dados">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hóspede/Reserva</th>
                            <th scope="col">Item</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço Unitário (AKZ)</th>
                            <th scope="col">Preço Total (AKZ)</th>
                            <th scope="col">Data</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Exemplo de linha de dados -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Alfredo Txizanda (Reserva #1)</td>
                            <td>Água Mineral</td>
                            <td>2</td>
                            <td>5,00</td>
                            <td>10,00</td>
                            <td>2024-10-27</td>
                            <td>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editConsumoModal" data-id="1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteConsumoModal" data-id="1">
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
</div>

<!-- Modal Adicionar Consumo -->
<div class="modal fade" id="addConsumoModal" tabindex="-1" aria-labelledby="addConsumoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addConsumoModalLabel">Adicionar Novo Consumo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addConsumoForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="reserva" class="form-label">Reserva Associada</label>
                            <select class="form-select" id="reserva" required>
                                <option value="">Selecione a reserva</option>
                                <option value="1">Reserva #1 - Alfredo Txizanda</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="item" class="form-label">Item Consumido</label>
                            <input type="text" class="form-control" id="item" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="quantidade" class="form-label">Quantidade</label>
                            <input type="number" class="form-control" id="quantidade" min="1" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="precoUnitario" class="form-label">Preço Unitário (AKZ)</label>
                            <input type="number" class="form-control" id="precoUnitario" step="0.01" required>
                        </div>
                    </div>
                     <div class="mb-3">
                        <label for="dataConsumo" class="form-label">Data do Consumo</label>
                        <input type="date" class="form-control" id="dataConsumo" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addConsumoForm" class="btn btn-primary">Guardar Consumo</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Consumo -->
<div class="modal fade" id="editConsumoModal" tabindex="-1" aria-labelledby="editConsumoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editConsumoModalLabel">Editar Consumo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editConsumoForm">
                    <input type="hidden" id="editConsumoId" name="id">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editReserva" class="form-label">Reserva Associada</label>
                            <select class="form-select" id="editReserva" required>
                                <option value="">Selecione a reserva</option>
                                <option value="1">Reserva #1 - Alfredo Txizanda</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editItem" class="form-label">Item Consumido</label>
                            <input type="text" class="form-control" id="editItem" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editQuantidade" class="form-label">Quantidade</label>
                            <input type="number" class="form-control" id="editQuantidade" min="1" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editPrecoUnitario" class="form-label">Preço Unitário (AKZ)</label>
                            <input type="number" class="form-control" id="editPrecoUnitario" step="0.01" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editDataConsumo" class="form-label">Data do Consumo</label>
                        <input type="date" class="form-control" id="editDataConsumo" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="editConsumoForm" class="btn btn-primary">Guardar Alterações</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Apagar Consumo -->
<div class="modal fade" id="deleteConsumoModal" tabindex="-1" aria-labelledby="deleteConsumoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConsumoModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem a certeza de que deseja apagar este registo de consumo?</p>
                <p><strong>Esta ação não pode ser desfeita.</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deleteConsumoForm" method="POST" action="">
                    <input type="hidden" id="deleteConsumoId" name="id">
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>
