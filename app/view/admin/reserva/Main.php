<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Reservas</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-house"></i> / Dashboard Kenyel / Reservas</p>
    </div>

    <div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
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
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editReservaModal" data-id="1" data-hospede="Alfredo Txizanda" data-quarto="3" data-checkin="2024-10-26" data-checkout="2024-10-28" data-estado="Confirmada">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteReservaModal" data-id="1">
                            <i class="fa-solid fa-trash"></i>
                        </button>
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

<!-- Modal Editar Reserva -->
<div class="modal fade" id="editReservaModal" tabindex="-1" aria-labelledby="editReservaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editReservaModalLabel">Editar Reserva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editReservaForm">
                    <input type="hidden" id="editReservaId" name="id">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editHospede" class="form-label">Nome do Hóspede</label>
                            <input type="text" class="form-control" id="editHospede" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editQuarto" class="form-label">Quarto</label>
                            <select class="form-select" id="editQuarto" required>
                                <option value="">Selecione um quarto</option>
                                <option value="1">Single</option>
                                <option value="2">Double</option>
                                <option value="3">Suite Presidencial</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editCheckin" class="form-label">Data de Check-in</label>
                            <input type="date" class="form-control" id="editCheckin" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editCheckout" class="form-label">Data de Check-out</label>
                            <input type="date" class="form-control" id="editCheckout" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editEstado" class="form-label">Estado da Reserva</label>
                        <select class="form-select" id="editEstado" required>
                            <option value="Confirmada">Confirmada</option>
                            <option value="Pendente">Pendente</option>
                            <option value="Cancelada">Cancelada</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="editReservaForm" class="btn btn-primary">Guardar Alterações</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Apagar Reserva -->
<div class="modal fade" id="deleteReservaModal" tabindex="-1" aria-labelledby="deleteReservaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteReservaModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem a certeza de que deseja apagar esta reserva?</p>
                <p><strong>Esta ação não pode ser desfeita.</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deleteReservaForm" method="POST" action="">
                    <input type="hidden" id="deleteReservaId" name="id">
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /**
     * Configura a validação de data bidirecional para um par de campos.
     * @param {HTMLInputElement} checkinInput O campo de data de check-in.
     * @param {HTMLInputElement} checkoutInput O campo de data de check-out.
     */
    function setupDateValidation(checkinInput, checkoutInput) {
        
        function formatDate(date) {
            const year = date.getFullYear();
            const month = (date.getMonth() + 1).toString().padStart(2, '0');
            const day = date.getDate().toString().padStart(2, '0');
            return `${year}-${month}-${day}`;
        }

        function parseDate(dateString) {
            const parts = dateString.split('-');
            // new Date(year, monthIndex, day)
            return new Date(parts[0], parts[1] - 1, parts[2]);
        }

        function updateCheckoutMin() {
            if (!checkinInput.value) {
                checkoutInput.min = '';
                return;
            }
            const checkinDate = parseDate(checkinInput.value);
            checkinDate.setDate(checkinDate.getDate() + 1);
            const minCheckoutDate = formatDate(checkinDate);
            checkoutInput.min = minCheckoutDate;

            if (checkoutInput.value && checkoutInput.value < minCheckoutDate) {
                checkoutInput.value = minCheckoutDate;
            }
        }

        function updateCheckinMax() {
            if (!checkoutInput.value) {
                checkinInput.max = '';
                return;
            }
            const checkoutDate = parseDate(checkoutInput.value);
            checkoutDate.setDate(checkoutDate.getDate() - 1);
            const maxCheckinDate = formatDate(checkoutDate);
            checkinInput.max = maxCheckinDate;

            if (checkinInput.value && checkinInput.value > maxCheckinDate) {
                checkinInput.value = maxCheckinDate;
            }
        }

        checkinInput.addEventListener('change', updateCheckoutMin);
        checkoutInput.addEventListener('change', updateCheckinMax);

        // Aplica a validação inicial
        updateCheckoutMin();
        updateCheckinMax();
    }

    // --- Modal de Adição ---
    const addReservaModal = document.getElementById('addReservaModal');
    addReservaModal.addEventListener('shown.bs.modal', function () {
        const checkinInput = addReservaModal.querySelector('#checkin');
        const checkoutInput = addReservaModal.querySelector('#checkout');
        setupDateValidation(checkinInput, checkoutInput);
    });


    // --- Modal de Edição ---
    const editModal = document.getElementById('editReservaModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        // Preenchimento dos dados
        const button = event.relatedTarget;
        const id = button.getAttribute('data-id');
        const hospede = button.getAttribute('data-hospede');
        const quarto = button.getAttribute('data-quarto');
        const checkin = button.getAttribute('data-checkin');
        const checkout = button.getAttribute('data-checkout');
        const estado = button.getAttribute('data-estado');

        const modalTitle = editModal.querySelector('.modal-title');
        const idInput = editModal.querySelector('#editReservaId');
        const hospedeInput = editModal.querySelector('#editHospede');
        const quartoInput = editModal.querySelector('#editQuarto');
        const checkinInput = editModal.querySelector('#editCheckin');
        const checkoutInput = editModal.querySelector('#editCheckout');
        const estadoInput = editModal.querySelector('#editEstado');

        modalTitle.textContent = 'Editar Reserva #' + id;
        idInput.value = id;
        hospedeInput.value = hospede;
        quartoInput.value = quarto;
        checkinInput.value = checkin;
        checkoutInput.value = checkout;
        estadoInput.value = estado;

        // Aplica a validação de data após preencher os campos
        setupDateValidation(checkinInput, checkoutInput);
    });

    // --- Modal de Exclusão ---
    const deleteModal = document.getElementById('deleteReservaModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const id = button.getAttribute('data-id');
        const idInput = deleteModal.querySelector('#deleteReservaId');
        idInput.value = id;
    });
});
</script>
