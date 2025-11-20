<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Reservas</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-house"></i> / Dashboard Kenyel / Reservas</p>
    </div>

    <div class="cabecalho-pagina">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReservaModal">
            <i class="fa-solid fa-plus"></i> Adicionar Reserva
        </button>
    </div>

    <div class="tabela-dados">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hóspede</th>
                    <th scope="col">Quarto</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemplo de linha de dados -->
                <tr>
                    <th scope="row">1</th>
                    <td>Alfredo Txizanda</td>
                    <td>Suite Presidencial</td>
                    <td>2024-10-26</td>
                    <td>2024-10-28</td>
                    <td><span class="badge bg-success">Confirmada</span></td>
                    <td>
                        <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <!-- Fim do exemplo -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Adicionar Reserva -->
<div class="modal fade" id="addReservaModal" tabindex="-1" aria-labelledby="addReservaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addReservaModalLabel">Adicionar Nova Reserva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addReservaForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="hospede" class="form-label">Nome do Hóspede</label>
                            <input type="text" class="form-control" id="hospede" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="quarto" class="form-label">Quarto</label>
                            <select class="form-select" id="quarto" required>
                                <option value="">Selecione um quarto</option>
                                <option value="1">Single</option>
                                <option value="2">Double</option>
                                <option value="3">Suite Presidencial</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="checkin" class="form-label">Data de Check-in</label>
                            <input type="date" class="form-control" id="checkin" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="checkout" class="form-label">Data de Check-out</label>
                            <input type="date" class="form-control" id="checkout" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado da Reserva</label>
                        <select class="form-select" id="estado" required>
                            <option value="Confirmada">Confirmada</option>
                            <option value="Pendente">Pendente</option>
                            <option value="Cancelada">Cancelada</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="addReservaForm" class="btn btn-primary">Guardar Reserva</button>
            </div>
        </div>
    </div>
</div>
