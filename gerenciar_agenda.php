<?php
include('source/agenda.php');

if (isset($_POST['add_evento'])) {
    $new_data = $_POST['data_evento'];
    $new_evento = $_POST['evento'];
    $eventos[] = ['data' => $new_data, 'evento' => $new_evento];
    file_put_contents('source/agenda.php', '<?php $eventos = ' . var_export($eventos, true) . '; ?>');

header("Location: gerenciar_agenda.php?success=added");
exit();
}

if (isset($_GET['excluir'])) {
$evento_index = $_GET['excluir'];
if (isset($eventos[$evento_index])) {
unset($eventos[$evento_index]);
$eventos = array_values($eventos);
file_put_contents('source/agenda.php', '<?php $eventos = ' . var_export($eventos, true) . '; ?>');

header("Location: gerenciar_agenda.php?success=deleted");
exit();
}
}
?>

<?php require_once 'templates/header.php'; ?>

<section id="agenda">
    <h2>Agenda de Apresentações</h2>
    <p>Confira abaixo as datas das próximas apresentações de Abbia Duha em eventos e festivais ao redor do mundo:</p>

    <?php if (isset($_GET['success'])): ?>
    <div class="message" style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px;">
        <?php
            if ($_GET['success'] == 'added') {
                echo 'Evento adicionado com sucesso!';
            } elseif ($_GET['success'] == 'deleted') {
                echo 'Evento excluído com sucesso!';
            }
            ?>
    </div>
    <?php endif; ?>

    <h3>Adicionar Evento</h3>
    <form method="POST">
        <input type="text" name="data_evento" placeholder="Data do evento" required>
        <input type="text" name="evento" placeholder="Nome do evento" required>
        <button type="submit" name="add_evento">Adicionar</button>
    </form>

    <h3>Eventos Futuros</h3>
    <ul>
        <?php foreach ($eventos as $indice => $evento): ?>
        <li>
            <strong><?php echo $evento['data']; ?>:</strong> <?php echo $evento['evento']; ?>
            <a onclick="return confirm('Tem certeza que deseja excluir este evento?')"
                href="?excluir=<?php echo $indice; ?>" class="edit-btn">Excluir</a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require_once 'templates/footer.php'; ?>