<?php
$pasta = 'assets/galeria/';

if (is_dir($pasta)) {
    $arquivos = scandir($pasta);

    foreach ($arquivos as $arquivo) {
        $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
        if (in_array($extensao, ['jpg', 'jpeg', 'png', 'gif'])) {
            echo '<div class="page">';
            echo '<img src="' . $pasta . '/' . $arquivo . '" alt="Abbia Duha Bailarina de Dança do Ventre de São José dos Campos"/>';
            echo '</div>';    
        } elseif ($extensao === 'mp4') {
            echo '<div class="page">';
            echo '<video controls>
                    <source src="' . $pasta . '/' . $arquivo . '" type="video/mp4">
                  </video>';
            echo '</div>';
        }
    }
} else {
    echo 'Pasta não encontrada!';
}