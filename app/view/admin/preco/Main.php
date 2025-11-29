<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Preços</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-dollar-sign"></i> / Dashboard Kenyel / Preços</p>
    </div>

    <!-- Abas de Navegação -->
    <ul class="nav nav-tabs mt-4" id="precoTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="preco-quarto-tab" data-bs-toggle="tab" data-bs-target="#preco-quarto" type="button" role="tab" aria-controls="preco-quarto" aria-selected="true">Preços dos Quartos</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="preco-consumo-tab" data-bs-toggle="tab" data-bs-target="#preco-consumo" type="button" role="tab" aria-controls="preco-consumo" aria-selected="false">Preços dos Consumos</button>
        </li>
    </ul>

    <!-- Conteúdo das Abas -->
    <div class="tab-content" id="precoTabsContent">
        <div class="tab-pane fade show active" id="preco-quarto" role="tabpanel" aria-labelledby="preco-quarto-tab">
            <?php include 'quarto.php'; ?>
        </div>
        <div class="tab-pane fade" id="preco-consumo" role="tabpanel" aria-labelledby="preco-consumo-tab">
            <?php include 'consumo.php'; ?>
        </div>
    </div>
</div>
