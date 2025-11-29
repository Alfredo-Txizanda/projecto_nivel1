<div class="content">
    <div class="titulo-seccao">
        <h2>Central de Relatórios</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-chart-line"></i> / Dashboard Kenyel / Relatórios</p>
    </div>

    <div class="row mt-4 match-height">
        <!-- Card: Relatório de Ocupação -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>Relatório de Ocupação</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <p>Exporte um relatório detalhado sobre a ocupação dos quartos, incluindo taxas de ocupação e períodos de maior movimento.</p>
                    <form id="relatorioOcupacaoForm" class="d-flex flex-column flex-grow-1">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inicioOcupacao" class="form-label">Data de Início</label>
                                <input type="date" class="form-control" id="inicioOcupacao" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fimOcupacao" class="form-label">Data de Fim</label>
                                <input type="date" class="form-control" id="fimOcupacao" required disabled>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start gap-2 mt-3 mt-auto">
                            <button type="submit" name="formato" value="pdf" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i> PDF</button>
                            <button type="submit" name="formato" value="excel" class="btn btn-success"><i class="fa-solid fa-file-excel"></i> Excel</button>
                            <button type="submit" name="formato" value="csv" class="btn btn-secondary"><i class="fa-solid fa-file-csv"></i> CSV</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Card: Relatório Financeiro -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>Relatório Financeiro</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <p>Exporte um relatório de receitas, incluindo pagamentos de reservas, consumos e outras transações financeiras.</p>
                    <form id="relatorioFinanceiroForm" class="d-flex flex-column flex-grow-1">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inicioFinanceiro" class="form-label">Data de Início</label>
                                <input type="date" class="form-control" id="inicioFinanceiro" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fimFinanceiro" class="form-label">Data de Fim</label>
                                <input type="date" class="form-control" id="fimFinanceiro" required disabled>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start gap-2 mt-3 mt-auto">
                            <button type="submit" name="formato" value="pdf" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i> PDF</button>
                            <button type="submit" name="formato" value="excel" class="btn btn-success"><i class="fa-solid fa-file-excel"></i> Excel</button>
                            <button type="submit" name="formato" value="csv" class="btn btn-secondary"><i class="fa-solid fa-file-csv"></i> CSV</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Card: Relatório de Hóspedes -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>Relatório de Hóspedes</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <p>Exporte uma lista de todos os hóspedes que já fizeram check-in, com os seus dados de contacto e histórico de estadias.</p>
                    <form id="relatorioHospedesForm" class="d-flex flex-column flex-grow-1">
                         <div class="d-flex justify-content-start gap-2 mt-3 mt-auto">
                            <button type="submit" name="formato" value="pdf" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i> PDF</button>
                            <button type="submit" name="formato" value="excel" class="btn btn-success"><i class="fa-solid fa-file-excel"></i> Excel</button>
                            <button type="submit" name="formato" value="csv" class="btn btn-secondary"><i class="fa-solid fa-file-csv"></i> CSV</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Card: Relatório de Consumos -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>Relatório de Consumos</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <p>Exporte um relatório detalhado de todos os itens consumidos pelos hóspedes num determinado período.</p>
                    <form id="relatorioConsumosForm" class="d-flex flex-column flex-grow-1">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inicioConsumos" class="form-label">Data de Início</label>
                                <input type="date" class="form-control" id="inicioConsumos" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fimConsumos" class="form-label">Data de Fim</label>
                                <input type="date" class="form-control" id="fimConsumos" required disabled>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start gap-2 mt-3 mt-auto">
                            <button type="submit" name="formato" value="pdf" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i> PDF</button>
                            <button type="submit" name="formato" value="excel" class="btn btn-success"><i class="fa-solid fa-file-excel"></i> Excel</button>
                            <button type="submit" name="formato" value="csv" class="btn btn-secondary"><i class="fa-solid fa-file-csv"></i> CSV</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
