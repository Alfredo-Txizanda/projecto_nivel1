<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Utilizadores</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-users"></i> / Dashboard Kenyel / Utilizadores</p>
    </div>

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
                            <td>admin</td>
                            <td>admin@kenyel.com</td>
                            <td><span class="badge bg-danger">Administrador</span></td>
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
                            <label for="utilizador" class="form-label">Utilizador</label>
                            <input type="text" class="form-control" id="utilizador" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
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
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nivelAcesso" class="form-label">Nível de Acesso</label>
                            <select class="form-select" id="nivelAcesso" required>
                                <option value="Utilizador">Utilizador</option>
                                <option value="Administrador">Administrador</option>
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
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addUtilizadorForm" class="btn btn-primary">Guardar Utilizador</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Utilizador -->
<div class="modal fade" id="editUtilizadorModal" tabindex="-1" aria-labelledby="editUtilizadorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUtilizadorModalLabel">Editar Utilizador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editUtilizadorForm">
                    <input type="hidden" id="editUtilizadorId" name="id">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editUtilizador" class="form-label">Utilizador</label>
                            <input type="text" class="form-control" id="editUtilizador" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editNivelAcesso" class="form-label">Nível de Acesso</label>
                            <select class="form-select" id="editNivelAcesso" required>
                                <option value="Utilizador">Utilizador</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editEstadoUtilizador" class="form-label">Estado</label>
                            <select class="form-select" id="editEstadoUtilizador" required>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <p class="text-muted">Deixe os campos de palavra-passe em branco para não a alterar.</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editPassword" class="form-label">Nova Palavra-passe</label>
                            <input type="password" class="form-control" id="editPassword">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editConfirmPassword" class="form-label">Confirmar Nova Palavra-passe</label>
                            <input type="password" class="form-control" id="editConfirmPassword">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="editUtilizadorForm" class="btn btn-primary">Guardar Alterações</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Apagar Utilizador -->
<div class="modal fade" id="deleteUtilizadorModal" tabindex="-1" aria-labelledby="deleteUtilizadorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUtilizadorModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem a certeza de que deseja apagar este utilizador?</p>
                <p><strong>Esta ação não pode ser desfeita.</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deleteUtilizadorForm" method="POST" action="">
                    <input type="hidden" id="deleteUtilizadorId" name="id">
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>
