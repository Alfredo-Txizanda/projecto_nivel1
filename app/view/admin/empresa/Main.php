<div class="content">
    <div class="titulo-seccao">
        <h2>Dados da Empresa</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-building"></i> / Dashboard Kenyel / Empresa</p>
    </div>

    <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Informações da Empresa</h4>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editEmpresaModal">
                <i class="fa-solid fa-pen-to-square"></i> Editar Dados
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nome da Empresa:</strong> <span id="displayNome">Kenyel Hotel</span></p>
                    <p><strong>NIF:</strong> <span id="displayNif">123456789</span></p>
                    <p><strong>Telefone:</strong> <span id="displayTelefone">+244 999 999 999</span></p>
                    <p><strong>Email:</strong> <span id="displayEmail">geral@kenyelhotel.co.ao</span></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Endereço:</strong> <span id="displayEndereco">Luanda, Angola</span></p>
                    <p><strong>Cidade:</strong> <span id="displayCidade">Luanda</span></p>
                    <p><strong>País:</strong> <span id="displayPais">Angola</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Dados da Empresa -->
<div class="modal fade" id="editEmpresaModal" tabindex="-1" aria-labelledby="editEmpresaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEmpresaModalLabel">Editar Dados da Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editEmpresaForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label">Nome da Empresa</label>
                            <input type="text" class="form-control" id="nome" value="Kenyel Hotel" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nif" class="form-label">NIF</label>
                            <input type="text" class="form-control" id="nif" value="123456789" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" value="+244 999 999 999" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="geral@kenyelhotel.co.ao" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" value="Luanda, Angola" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" value="Luanda" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="pais" class="form-label">País</label>
                            <input type="text" class="form-control" id="pais" value="Angola" required>
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
