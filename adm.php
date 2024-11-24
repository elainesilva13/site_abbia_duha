<?php require_once 'templates/header.php'; 

session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login_adm.php');
    exit;
}
?>

<div class="div-center">
    <div style="width: 500px;">
        <a href="gerenciar_fotos.php"><button class="btn-secondary">GERENCIAR FOTOS</button></a>
        <a href="gerenciar_videos.php"><button class="btn-secondary">GERENCIAR VÍDEOS</button></a>
        <a href="gerenciar_agenda.php"><button class="btn-secondary">GERENCIAR AGENDA</button></a>
    </div>
</div>

<?php require_once 'templates/footer.php'; ?>