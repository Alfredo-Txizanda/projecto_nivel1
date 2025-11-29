<div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFuncionarioModal">
        <i class="fa-solid fa-plus"></i> Adicionar Funcionário
    </button>
</div>

<div class="card">
    <div class="card-body">
        <div class="tabela-dados">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Nível de Acesso</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de linha de dados -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Adminstrador Principal</td>
                        <td>admin@kenyel.com</td>
                        <td>Gerente</td>
                        <td><span class="badge bg-danger">Administrador</span></td>
                        <td><span class="badge bg-success">Ativo</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editFuncionarioModal" data-id="1">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteFuncionarioModal" data-id="1">
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

<!-- Modal Adicionar Funcionário -->
<div class="modal fade" id="addFuncionarioModal" tabindex="-1" aria-labelledby="addFuncionarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFuncionarioModalLabel">Adicionar Novo Funcionário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addFuncionarioForm">
                    <!-- Formulário para adicionar funcionário -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addFuncionarioForm" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Outros modais para editar e apagar -->
