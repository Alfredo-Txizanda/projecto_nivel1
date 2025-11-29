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
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Nº do Bilhete</th>
                        <th scope="col">Acção</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de linha de dados -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Adminstrador Principal</td>
                        <td>Gerente</td>
                        <td>admin@kenyel.com</td>
                        <td>+244 999 888 777</td>
                        <td>001234567LA001</td>
                        <td>
                            <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewFuncionarioModal" data-id="1">
                                <i class="fa-solid fa-eye"></i>
                            </button>
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
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nomeCompleto" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nomeCompleto" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cargo" class="form-label">Cargo</label>
                            <select class="form-select" id="cargo" required>
                                <option value="">Selecione o cargo</option>
                                <option value="Gerente">Gerente</option>
                                <option value="Recepcionista">Recepcionista</option>
                                <option value="Limpeza">Limpeza</option>
                                <option value="Manutenção">Manutenção</option>
                                <option value="Cozinheiro">Cozinheiro</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="emailFuncionario" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailFuncionario" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="telefoneFuncionario" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefoneFuncionario" required>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6 mb-3">
                            <label for="genero" class="form-label">Género</label>
                            <select class="form-select" id="genero" required>
                                <option value="">Selecione o género</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="bilhete" class="form-label">Nº do Bilhete</label>
                            <input type="text" class="form-control" id="bilhete" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="enderecoFuncionario" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="enderecoFuncionario" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addFuncionarioForm" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Outros modais (view, edit, delete) aqui -->
