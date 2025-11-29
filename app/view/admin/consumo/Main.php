<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Itens Consumíveis</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-utensils"></i> / Dashboard Kenyel / Itens Consumíveis</p>
    </div>

    <div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItemConsumivelModal">
            <i class="fa-solid fa-plus"></i> Adicionar Item Consumível
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="tabela-dados">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome do Item</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço (AKZ)</th>
                            <th scope="col">Disponível</th>
                            <th scope="col">Acção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Exemplo de linha de dados -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Água Mineral</td>
                            <td>Garrafa de 1.5L</td>
                            <td>5,00</td>
                            <td><span class="badge bg-success">Sim</span></td>
                            <td>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editItemConsumivelModal" data-id="1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteItemConsumivelModal" data-id="1">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Refrigerante</td>
                            <td>Lata de 330ml</td>
                            <td>8,00</td>
                            <td><span class="badge bg-success">Sim</span></td>
                            <td>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editItemConsumivelModal" data-id="2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteItemConsumivelModal" data-id="2">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Sanduíche</td>
                            <td>Misto quente</td>
                            <td>15,00</td>
                            <td><span class="badge bg-danger">Não</span></td>
                            <td>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editItemConsumivelModal" data-id="3">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteItemConsumivelModal" data-id="3">
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

<!-- Modal Adicionar Item Consumível -->
<div class="modal fade" id="addItemConsumivelModal" tabindex="-1" aria-labelledby="addItemConsumivelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addItemConsumivelModalLabel">Adicionar Novo Item Consumível</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addItemConsumivelForm">
                    <div class="mb-3">
                        <label for="nomeItem" class="form-label">Nome do Item</label>
                        <input type="text" class="form-control" id="nomeItem" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricaoItem" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricaoItem" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="precoItem" class="form-label">Preço (AKZ)</label>
                            <input type="number" class="form-control" id="precoItem" step="0.01" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="disponivelItem" class="form-label">Disponível</label>
                            <select class="form-select" id="disponivelItem" required>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addItemConsumivelForm" class="btn btn-primary">Guardar Item</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Item Consumível -->
<div class="modal fade" id="editItemConsumivelModal" tabindex="-1" aria-labelledby="editItemConsumivelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editItemConsumivelModalLabel">Editar Item Consumível</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editItemConsumivelForm">
                    <input type="hidden" id="editItemConsumivelId" name="id">
                    <div class="mb-3">
                        <label for="editNomeItem" class="form-label">Nome do Item</label>
                        <input type="text" class="form-control" id="editNomeItem" required>
                    </div>
                    <div class="mb-3">
                        <label for="editDescricaoItem" class="form-label">Descrição</label>
                        <textarea class="form-control" id="editDescricaoItem" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editPrecoItem" class="form-label">Preço (AKZ)</label>
                            <input type="number" class="form-control" id="editPrecoItem" step="0.01" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editDisponivelItem" class="form-label">Disponível</label>
                            <select class="form-select" id="editDisponivelItem" required>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="editItemConsumivelForm" class="btn btn-primary">Guardar Alterações</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Apagar Item Consumível -->
<div class="modal fade" id="deleteItemConsumivelModal" tabindex="-1" aria-labelledby="deleteItemConsumivelModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteItemConsumivelModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem a certeza de que deseja apagar este item consumível?</p>
                <p><strong>Esta ação não pode ser desfeita.</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deleteItemConsumivelForm" method="POST" action="">
                    <input type="hidden" id="deleteItemConsumivelId" name="id">
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>
