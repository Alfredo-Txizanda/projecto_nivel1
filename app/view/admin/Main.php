<section class="main">
    
    <aside class="sidebar">
        <div class="sidebar-header">
            <h3>Home</h3>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li><a href="#" data-tab="dashboard" class="active">Dashboard</a></li>
                <!--<li><a href="#" data-tab="reserva">Reservas</a></li>-->
                <li><a href="<?= DIRPAGE . 'admin/reserva'; ?>">Reservas</a></li>
                <li><a href="#" data-tab="quarto">Quartos</a></li>
                <li><a href="#" data-tab="preco">Preços</a></li>
                <li><a href="#" data-tab="consumo">Consumos</a></li>
                <li><a href="#" data-tab="empresa">Empresa</a></li>
                <li><a href="#" data-tab="utilizador">Utilizadores</a></li>
                <li><a href="#" data-tab="servico">Serviços</a></li>
                <li><a href="#" data-tab="relatorio">Relatórios</a></li>

            </ul>
        </nav>
        <div class="sidebar-footer">
            <a href="#">Sair</a>
        </div>
    </aside>

    <div class="content">
        <div class="titulo-seccao">

            <h2>Dashboard Administrativa</h2>
            <br>
            <div class="separador"></div>
            <br>
            <p><i class="fa-solid fa-house"></i> / Dashboard Kenyel </p>
        </div>

        <div class="box-info">
            <div style="background: linear-gradient(45deg, #ff5370, #ff869a);" class="box-info-single">
                <div class="info-text">
                    <h3>Reservas</h3>
                    <p>Número</p>
                </div>
                <i class="fa-solid fa-house"></i>
            </div>

            <div style="background: linear-gradient(45deg, #4099ff, #73b4ff);" class="box-info-single">
                <div class="info-text">
                    <h3>Quartos</h3>
                    <p>Número</p>
                </div>
                <i class="fa-solid fa-house"></i>
            </div>

            <div style="background: linear-gradient(45deg, #ffb64d, #ffcb80);" class="box-info-single">
                <div class="info-text">
                    <h3>Check-In</h3>
                    <p>Número</p>
                </div>
                <i class="fa-solid fa-house"></i>
            </div>

            <div style="background: linear-gradient(45deg, #2ed8b6, #59e0c5);" class="box-info-single">
                <div class="info-text">
                    <h3>Check-out</h3>
                    <p>Número</p>
                </div>
                <i class="fa-solid fa-house"></i>
            </div>
        </div>

        <div class="feed">
            <div class="feed-single">
                <div class="feed-text">
                    <div class="circle-icon"><i class="fa-solid fa-bell"></i></div>
                    <span>Tutorial Novo</span>
                </div>
                <div class="feed-time">
                    <h3>30 minutos atrás</h3>
                </div>
            </div>
        </div>
    </div>
</section><!-- MAIN -->