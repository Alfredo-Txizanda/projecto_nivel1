<div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUtilizadorModal">
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
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Utilizador</th>
                        <th scope="col">Nível de Acesso</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acção</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de linha de dados -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Cliente Exemplo</td>
                        <td>cliente_exemplo</td>
                        <td><span class="badge bg-info">Cliente</span></td>
                        <td><span class="badge bg-success">Ativo</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editUtilizadorModal" data-id="1">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUtilizadorModal" data-id="1">
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

<!-- Modal Adicionar Utilizador -->
<div class="modal fade" id="addUtilizadorModal" tabindex="-1" aria-labelledby="addUtilizadorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUtilizadorModalLabel">Adicionar Novo Utilizador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addUtilizadorForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nomeCompletoUtilizador" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nomeCompletoUtilizador" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="utilizador" class="form-label">Utilizador</label>
                            <input type="text" class="form-control" id="utilizador" required>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nivelAcesso" class="form-label">Nível de Acesso</label>
                            <select class="form-select" id="nivelAcesso" required>
                                <option value="Cliente">Cliente</option>
                                <option value="Recepcionista">Recepcionista</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="estadoUtilizador" class="form-label">Estado</label>
                            <select class="form-select" id="estadoUtilizador" required>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Palavra-passe</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="confirmPassword" class="form-label">Confirmar Palavra-passe</label>
                            <input type="password" class="form-control" id="confirmPassword" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addUtilizadorForm" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Outros modais para editar e apagar -->
