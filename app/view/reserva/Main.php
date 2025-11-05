<style type="text/css" href="<?= DIRCSS . 'estilo.css'; ?>"></style>

<section class="bg-primary fundo-reserva">
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="modal fade" id="reservaModal" tabindex="-1" aria-labelledby="reservaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="reservaModalLabel">Efectuar Reserva</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="entrada" class="form-label">Entrada</label>
                                <input type="date" class="form-control" id="checkIn" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="saida" class="form-label">Saída</label>
                                <input type="date" class="form-control" id="checkOut" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="room" class="form-label">Quartos</label>
                            <select class="form-select" id="room" required>
                                <option value="">Seleciona o quarto</option>
                                <option value="individual">Single</option>
                                <option value="duplo">Double</option>
                                <option value="twin">Twin</option>
                                <option value="triplo">Familary</option>
                            </select>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="adulto" class="form-label">Adulto</label>
                                <input type="number" class="form-control" id="adulto" min="1" max="10" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="crianca" class="form-label">Criança</label>
                                <input type="number" class="form-control" id="crianca" min="0" max="10" required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>-->
                        <button type="submit" class="btn btn-primary w-100">Efectuar Pagamento</button>
                    </div>

                    <!--
                    <div class="modal-footer">
                        <div class="row w-100">
                            <div class="col-6 text-left">
                                <button type="button" class="btn btn-secondary">Botão Esquerdo</button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-primary">Botão Direito</button>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</section>

