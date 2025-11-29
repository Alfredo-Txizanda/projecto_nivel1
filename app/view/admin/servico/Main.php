<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Serviços</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-concierge-bell"></i> / Dashboard Kenyel / Serviços</p>
    </div>

    <div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addServicoModal">
            <i class="fa-solid fa-plus"></i> Adicionar Serviço
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="tabela-dados">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome do Serviço</th>
                            <th scope="col">Preço (AKZ)</th>
                            <th scope="col">Acção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Exemplos de linhas de dados -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Internet</td>
                            <td>10,00</td>
                            <td>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editServicoModal" data-id="1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteServicoModal" data-id="1">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Pequeno Almoço</td>
                            <td>25,00</td>
                            <td>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editServicoModal" data-id="2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteServicoModal" data-id="2">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Fim dos exemplos -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Adicionar Serviço -->
<div class="modal fade" id="addServicoModal" tabindex="-1" aria-labelledby="addServicoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServicoModalLabel">Adicionar Novo Serviço</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addServicoForm">
                    <div class="mb-3">
                        <label for="nomeServico" class="form-label">Nome do Serviço</label>
                        <input type="text" class="form-control" id="nomeServico" required>
                    </div>
                    <div class="mb-3">
                        <label for="precoServico" class="form-label">Preço (AKZ)</label>
                        <input type="number" class="form-control" id="precoServico" step="0.01" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addServicoForm" class="btn btn-primary">Guardar Serviço</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Serviço -->
<div class="modal fade" id="editServicoModal" tabindex="-1" aria-labelledby="editServicoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editServicoModalLabel">Editar Serviço</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editServicoForm">
                    <input type="hidden" id="editServicoId" name="id">
                    <div class="mb-3">
                        <label for="editNomeServico" class="form-label">Nome do Serviço</label>
                        <input type="text" class="form-control" id="editNomeServico" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPrecoServico" class="form-label">Preço (AKZ)</label>
                        <input type="number" class="form-control" id="editPrecoServico" step="0.01" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="editServicoForm" class="btn btn-primary">Guardar Alterações</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Apagar Serviço -->
<div class="modal fade" id="deleteServicoModal" tabindex="-1" aria-labelledby="deleteServicoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteServicoModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem a certeza de que deseja apagar este serviço?</p>
                <p><strong>Esta ação não pode ser desfeita.</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deleteServicoForm" method="POST" action="">
                    <input type="hidden" id="deleteServicoId" name="id">
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>
