<div class="cabecalho-pagina d-flex justify-content-end mt-4 mb-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPrecoConsumoModal">
        <i class="fa-solid fa-plus"></i> Adicionar Preço de Consumo
    </button>
</div>

<div class="card">
    <div class="card-body">
        <div class="tabela-dados">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item</th>
                        <th scope="col">Preço (AKZ)</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de linha de dados -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Água Mineral</td>
                        <td>5,00</td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPrecoConsumoModal" data-id="1">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePrecoConsumoModal" data-id="1">
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

<!-- Modais para Preços de Consumo -->
<div class="modal fade" id="addPrecoConsumoModal" tabindex="-1" aria-labelledby="addPrecoConsumoModalLabel" aria-hidden="true">
    <!-- Conteúdo do modal de adicionar preço de consumo -->
</div>
<div class="modal fade" id="editPrecoConsumoModal" tabindex="-1" aria-labelledby="editPrecoConsumoModalLabel" aria-hidden="true">
    <!-- Conteúdo do modal de editar preço de consumo -->
</div>
<div class="modal fade" id="deletePrecoConsumoModal" tabindex="-1" aria-labelledby="deletePrecoConsumoModalLabel" aria-hidden="true">
    <!-- Conteúdo do modal de apagar preço de consumo -->
</div>
