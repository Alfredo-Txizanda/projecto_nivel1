<div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUtilizadorClienteModal">
        <i class="fa-solid fa-plus"></i> Adicionar Utilizador
    </button>
</div>

<div class="card">
    <div class="card-body">
        <div class="tabela-dados">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Utilizador</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nível de Acesso</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de linha de dados -->
                    <tr>
                        <th scope="row">1</th>
                        <td>cliente_exemplo</td>
                        <td>cliente@exemplo.com</td>
                        <td><span class="badge bg-info">Cliente</span></td>
                        <td><span class="badge bg-success">Ativo</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editUtilizadorClienteModal" data-id="1">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUtilizadorClienteModal" data-id="1">
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

<!-- Modal Adicionar Utilizador (Cliente) -->
<div class="modal fade" id="addUtilizadorClienteModal" tabindex="-1" aria-labelledby="addUtilizadorClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUtilizadorClienteModalLabel">Adicionar Novo Utilizador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addUtilizadorClienteForm">
                    <!-- Formulário para adicionar utilizador cliente -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addUtilizadorClienteForm" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Outros modais para editar e apagar -->
