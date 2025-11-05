<style type="text/css" href="<?= DIRCSS . 'estilo.css'; ?>"></style>

<section class="bg-primary fundo-reserva">
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="width: 80%; max-width: 800px;">
            <div class="card-body">
                <h2 class="mb-4">Faça a sua reserva</h2>
                <p class="text-muted mb-4">O nosso hotel é certificado por seguir as precauções e medidas de segurança para deixar a sua estadia segura e única.</p>

                <form id="reservationForm">

                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="#reserva">Reservar</button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--
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
                            <option value="individual">Quarto Individual</option>
                            <option value="duplo">Quarto Duplo</option>
                            <option value="twin">Quarto Twin</option>
                            <option value="triplo">Quarto Triplo</option>
                            <option value="executiva">Suite Executiva</option>
                            <option value="presidencial">Suite Presidencial</option>
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
                    <button type="submit" class="btn btn-primary w-100">Efectuar Pagamento</button>
                    -->
                </form>
            </div>

            <div class="card-footer text-center">
                <a href="#" class="text-decoration-none text-primary">Tens questão? Contacte-nos</a>
            </div>
        </div>
    </div>
</section>

<script src="<?= DIRJS . 'projecto.js'; ?>"></script>

