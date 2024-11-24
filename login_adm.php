<?php require_once 'templates/header.php'; 
session_start();
?>
<div class="div-center">
    <h2>Login - Área Administrativa</h2>
</div>
<div class="div-center">

    <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
    <form action="actions/login.php" method="POST">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" class="btn-secondary" style="width: 100%">Entrar</button>
    </form>
</div>
<?php require_once 'templates/footer.php'; ?>