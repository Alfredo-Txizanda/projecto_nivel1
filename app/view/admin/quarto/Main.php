<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Quartos</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-house"></i> / Dashboard Kenyel / Quartos</p>
    </div>

    <div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addQuartoModal">
            <i class="fa-solid fa-plus"></i> Adicionar Quarto
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="tabela-dados">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Número</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Preço (AKZ)</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Exemplo de linha de dados -->
                        <tr>
                            <th scope="row">1</th>
                            <td>101</td>
                            <td>Single</td>
                            <td>25.000,00</td>
                            <td><span class="badge bg-success">Disponível</span></td>
                            <td>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editQuartoModal" data-id="1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteQuartoModal" data-id="1">
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

<!-- Modal Adicionar Quarto -->
<div class="modal fade" id="addQuartoModal" tabindex="-1" aria-labelledby="addQuartoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addQuartoModalLabel">Adicionar Novo Quarto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addQuartoForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="numero" class="form-label">Número do Quarto</label>
                            <input type="text" class="form-control" id="numero" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tipo" class="form-label">Tipo de Quarto</label>
                            <select class="form-select" id="tipo" required>
                                <option value="">Selecione o tipo</option>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Suite">Suite</option>
                                <option value="Suite Presidencial">Suite Presidencial</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="preco" class="form-label">Preço (AKZ)</label>
                            <input type="number" class="form-control" id="preco" step="0.01" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="estadoQuarto" class="form-label">Estado</label>
                            <select class="form-select" id="estadoQuarto" required>
                                <option value="Disponível">Disponível</option>
                                <option value="Ocupado">Ocupado</option>
                                <option value="Em Manutenção">Em Manutenção</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addQuartoForm" class="btn btn-primary">Guardar Quarto</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Quarto -->
<div class="modal fade" id="editQuartoModal" tabindex="-1" aria-labelledby="editQuartoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editQuartoModalLabel">Editar Quarto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editQuartoForm">
                    <input type="hidden" id="editQuartoId" name="id">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editNumero" class="form-label">Número do Quarto</label>
                            <input type="text" class="form-control" id="editNumero" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editTipo" class="form-label">Tipo de Quarto</label>
                            <select class="form-select" id="editTipo" required>
                                <option value="">Selecione o tipo</option>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Suite">Suite</option>
                                <option value="Suite Presidencial">Suite Presidencial</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editDescricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="editDescricao" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editPreco" class="form-label">Preço (AKZ)</label>
                            <input type="number" class="form-control" id="editPreco" step="0.01" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editEstadoQuarto" class="form-label">Estado</label>
                            <select class="form-select" id="editEstadoQuarto" required>
                                <option value="Disponível">Disponível</option>
                                <option value="Ocupado">Ocupado</option>
                                <option value="Em Manutenção">Em Manutenção</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="editQuartoForm" class="btn btn-primary">Guardar Alterações</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Apagar Quarto -->
<div class="modal fade" id="deleteQuartoModal" tabindex="-1" aria-labelledby="deleteQuartoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteQuartoModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem a certeza de que deseja apagar este quarto?</p>
                <p><strong>Esta ação não pode ser desfeita.</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deleteQuartoForm" method="POST" action="">
                    <input type="hidden" id="deleteQuartoId" name="id">
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>
