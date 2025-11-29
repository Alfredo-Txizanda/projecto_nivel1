<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Preços</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-dollar-sign"></i> / Dashboard Kenyel / Preços</p>
    </div>

    <div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPrecoModal">
            <i class="fa-solid fa-plus"></i> Adicionar Preço
        </button>
    </div>

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
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPrecoModal" data-id="1">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePrecoModal" data-id="1">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Deluxe</td>
                    <td>Baixa Temporada</td>
                    <td>250,00</td>
                    <td>
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPrecoModal" data-id="2">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePrecoModal" data-id="2">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Suíte</td>
                    <td>Alta Temporada</td>
                    <td>500,00</td>
                    <td>
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPrecoModal" data-id="3">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePrecoModal" data-id="3">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <!-- Fim do exemplo -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Adicionar Preço -->
<div class="modal fade" id="addPrecoModal" tabindex="-1" aria-labelledby="addPrecoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPrecoModalLabel">Adicionar Novo Preço</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPrecoForm">
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
                <button type="submit" form="addPrecoForm" class="btn btn-primary">Guardar Preço</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Preço -->
<div class="modal fade" id="editPrecoModal" tabindex="-1" aria-labelledby="editPrecoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPrecoModalLabel">Editar Preço</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editPrecoForm">
                    <input type="hidden" id="editPrecoId" name="id">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editTipoQuarto" class="form-label">Tipo de Quarto</label>
                            <select class="form-select" id="editTipoQuarto" required>
                                <option value="">Selecione o tipo</option>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Suite">Suite</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editTemporada" class="form-label">Temporada</label>
                            <select class="form-select" id="editTemporada" required>
                                <option value="">Selecione a temporada</option>
                                <option value="Baixa">Baixa Temporada</option>
                                <option value="Alta">Alta Temporada</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editPreco" class="form-label">Preço por Noite (AKZ)</label>
                        <input type="number" class="form-control" id="editPreco" step="0.01" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="editPrecoForm" class="btn btn-primary">Guardar Alterações</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Apagar Preço -->
<div class="modal fade" id="deletePrecoModal" tabindex="-1" aria-labelledby="deletePrecoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePrecoModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem a certeza de que deseja apagar este preço?</p>
                <p><strong>Esta ação não pode ser desfeita.</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deletePrecoForm" method="POST" action="">
                    <input type="hidden" id="deletePrecoId" name="id">
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>
