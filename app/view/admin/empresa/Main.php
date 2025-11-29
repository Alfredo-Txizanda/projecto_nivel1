<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Empresas</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-building"></i> / Dashboard Kenyel / Empresas</p>
    </div>

    <div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmpresaModal">
            <i class="fa-solid fa-plus"></i> Adicionar Empresa
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="tabela-dados">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome da Empresa</th>
                            <th scope="col">NIF</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Exemplo de linha de dados -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Kenyel Hotel</td>
                            <td>123456789</td>
                            <td>+244 999 999 999</td>
                            <td>geral@kenyelhotel.co.ao</td>
                            <td>Luanda, Angola</td>
                            <td>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editEmpresaModal" data-id="1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteEmpresaModal" data-id="1">
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

<!-- Modal Adicionar Empresa -->
<div class="modal fade" id="addEmpresaModal" tabindex="-1" aria-labelledby="addEmpresaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmpresaModalLabel">Adicionar Nova Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addEmpresaForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label">Nome da Empresa</label>
                            <input type="text" class="form-control" id="nome" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nif" class="form-label">NIF</label>
                            <input type="text" class="form-control" id="nif" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="pais" class="form-label">País</label>
                            <input type="text" class="form-control" id="pais" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addEmpresaForm" class="btn btn-primary">Guardar Empresa</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Empresa -->
<div class="modal fade" id="editEmpresaModal" tabindex="-1" aria-labelledby="editEmpresaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEmpresaModalLabel">Editar Dados da Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editEmpresaForm">
                    <input type="hidden" id="editEmpresaId" name="id">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editNome" class="form-label">Nome da Empresa</label>
                            <input type="text" class="form-control" id="editNome" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editNif" class="form-label">NIF</label>
                            <input type="text" class="form-control" id="editNif" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editTelefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="editTelefone" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editEndereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="editEndereco" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editCidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="editCidade" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editPais" class="form-label">País</label>
                            <input type="text" class="form-control" id="editPais" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="editEmpresaForm" class="btn btn-primary">Guardar Alterações</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Apagar Empresa -->
<div class="modal fade" id="deleteEmpresaModal" tabindex="-1" aria-labelledby="deleteEmpresaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteEmpresaModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem a certeza de que deseja apagar esta empresa?</p>
                <p><strong>Esta ação não pode ser desfeita.</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deleteEmpresaForm" method="POST" action="">
                    <input type="hidden" id="deleteEmpresaId" name="id">
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>
