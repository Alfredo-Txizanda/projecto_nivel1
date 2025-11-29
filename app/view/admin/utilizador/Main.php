<div class="content">
    <div class="titulo-seccao">
        <h2>Gestão de Acessos</h2>
        <br>
        <div class="separador"></div>
        <br>
        <p><i class="fa-solid fa-users-cog"></i> / Dashboard Kenyel / Acessos</p>
    </div>

    <!-- Abas de Navegação -->
    <ul class="nav nav-tabs mt-4" id="acessoTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="utilizadores-tab" data-bs-toggle="tab" data-bs-target="#utilizadores" type="button" role="tab" aria-controls="utilizadores" aria-selected="true">Utilizadores</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="funcionarios-tab" data-bs-toggle="tab" data-bs-target="#funcionarios" type="button" role="tab" aria-controls="funcionarios" aria-selected="false">Funcionários</button>
        </li>
    </ul>

    <!-- Conteúdo das Abas -->
    <div class="tab-content" id="acessoTabsContent">
        <div class="tab-pane fade show active" id="utilizadores" role="tabpanel" aria-labelledby="utilizadores-tab">
            <?php include 'utilizador.php'; ?>
        </div>
        <div class="tab-pane fade" id="funcionarios" role="tabpanel" aria-labelledby="funcionarios-tab">
            <?php include 'funcionario.php'; ?>
        </div>
    </div>
</div>
