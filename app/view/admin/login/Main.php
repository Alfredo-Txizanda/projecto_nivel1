<div class="card shadow-lg" style="width: 100%; max-width: 400px;">
    <div class="card-body p-5">
        <h3 class="card-title text-center mb-4">Login Administrativo</h3>
        <form id="loginForm">
            <div class="mb-3">
                <label for="username" class="form-label">Utilizador</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Palavra-passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Previne a submissão padrão do formulário

            // Aqui, você faria a validação do login com AJAX, por exemplo.
            // Por agora, vamos apenas redirecionar para o painel administrativo.
            
            // Redireciona para a página do painel administrativo
            window.location.href = '/projecto_nivel1/admin';
        });
    }
});
</script>
