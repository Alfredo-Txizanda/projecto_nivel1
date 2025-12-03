<div class="card shadow-lg" style="width: 100%; max-width: 400px;">
    <div class="card-body p-5">
        <h3 class="card-title text-center mb-4">Login Administrativo</h3>
        <form id="loginForm" action="<? echo DIRPAGE . '../Main.php' ?>" method="post">
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

