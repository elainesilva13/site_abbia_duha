<?php
include('source/videos.php');

if (isset($_POST['add_video'])) {
    $new_video_embed_code = $_POST['embed_code'];
    

    if (strpos($new_video_embed_code, '<iframe') !== false) {
        $videos[] = $new_video_embed_code;
        file_put_contents('source/videos.php', '<?php $videos = ' . var_export($videos, true) . '; ?>');

header("Location: gerenciar_videos.php?success=added");
exit();
} else {
$erro = "O código de embed inserido não é válido. Por favor, insira um código de embed válido.";
}
}

if (isset($_GET['excluir'])) {
$video_index = $_GET['excluir'];
if (isset($videos[$video_index])) {
unset($videos[$video_index]);
$videos = array_values($videos);
file_put_contents('source/videos.php', '<?php $videos = ' . var_export($videos, true) . '; ?>');

header("Location: gerenciar_videos.php?success=deleted");
exit();
}
}
?>

<?php require_once 'templates/header.php'; ?>

<style>
.video-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.video-item {
    width: 560px;
    margin-bottom: 10px;
}

iframe {
    width: 100%;
    height: 315px;
}

.delete-btn,
.edit-btn {
    display: inline-block;
    margin-top: 10px;
    padding: 5px;
    background-color: red;
    color: white;
    text-decoration: none;
    cursor: pointer;
}

.edit-btn {
    background-color: orange;
}

.message {
    padding: 10px;
    margin: 10px 0;
    border: 1px solid green;
    background-color: #e7ffe7;
    color: green;
}

.error {
    padding: 10px;
    margin: 10px 0;
    border: 1px solid red;
    background-color: #ffe7e7;
    color: red;
}
</style>

<h1>Gerenciar Vídeos</h1>

<?php if (isset($_GET['success'])): ?>
<?php if ($_GET['success'] == 'added'): ?>
<div class="message">Vídeo adicionado com sucesso! Por favor, recarregue esta página.</div>
<?php elseif ($_GET['success'] == 'deleted'): ?>
<div class="message">Vídeo excluído com sucesso! Por favor, recarregue esta página.</div>
<?php endif; ?>
<?php endif; ?>
<br>
<br>
<h2>Adicionar Vídeo</h2>
<br>

<form method="POST">
    <textarea name="embed_code" placeholder="Cole o código embed do vídeo (YouTube)" rows="4" cols="150"
        required></textarea>
    <br>

    <button style='width:500px' class='btn-secondary' type="submit" name="add_video">Adicionar</button>
</form>

<?php if (isset($erro)) { echo "<p class='error'>$erro</p>"; } ?>
<br>
<br>

<h2>Vídeos Embutidos</h2>
<br>

<div class="video-grid">
    <?php foreach ($videos as $indice => $video): ?>
    <div class="video-item">
        <?php echo $video; ?>
        <a onclick="return confirm('Tem certeza que deseja excluir este vídeo?')" href="?excluir=<?php echo $indice; ?>"
            class="edit-btn">Excluir</a>
    </div>
    <?php endforeach; ?>
</div>

<?php require_once 'templates/footer.php'; ?>