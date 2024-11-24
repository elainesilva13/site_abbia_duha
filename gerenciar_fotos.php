<?php 
require_once 'templates/header.php';  

session_start();
$diretorio_imagens = 'assets/galeria/';

// Verifica se o diretório existe, caso contrário, cria-o
if (!is_dir($diretorio_imagens)) {
    mkdir($diretorio_imagens, 0777, true);  
}

if (isset($_POST['upload'])) {
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        // Obtém a extensão e o nome do arquivo
        $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);  
        $nome_arquivo = uniqid() . '.' . $extensao;  
        $caminho_arquivo = $diretorio_imagens . $nome_arquivo;  
        
        // Extensões permitidas para upload
        $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];  

        // Verifica se a extensão do arquivo é permitida
        if (in_array(strtolower($extensao), $extensoes_permitidas)) {
            // Move o arquivo para o diretório desejado
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_arquivo)) {
                echo "Imagem enviada com sucesso!";
            } else {
                echo "Erro ao enviar a imagem.";
            }
        } else {
            echo "Formato de arquivo não permitido.";
        }
    } else {
        echo "Erro ao fazer upload da imagem.";
    }
}

$imagens = array_diff(scandir($diretorio_imagens), array('.', '..'));  

if (isset($_GET['excluir'])) {
    $imagem_excluir = $_GET['excluir'];
    if (in_array($imagem_excluir, $imagens)) {
        unlink($diretorio_imagens . $imagem_excluir);
        header("Location: alterar_fotos.php");
        exit();
    }
}
?>

<h1>Galeria de Imagens</h1>

<div class="grid">
    <?php foreach ($imagens as $imagem): ?>
    <div class="image-container">
        <img src="<?php echo $diretorio_imagens . $imagem; ?>" alt="<?php echo $imagem; ?>" width="150">
        <a href="?excluir=<?php echo $imagem; ?>" class="delete-btn"
            onclick="return confirm('Tem certeza que deseja excluir esta imagem?')">Excluir</a>
    </div>
    <?php endforeach; ?>
</div>

<br><br>

<form class="upload-form" action="alterar_fotos.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="imagem" required>
    <button type="submit" name="upload">Adicionar foto</button>
</form>

<?php require_once 'templates/footer.php'; ?>