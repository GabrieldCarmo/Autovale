<?php
    include "dados.php";
    $categoriaSelecionada = $_POST['categoria'] ?? "" ;
    $subcategoriaSelecionada = $_POST['subcategoria'] ?? "";
    $modeloSelecionado = $_POST['modelo'] ?? "";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>AutoVale Poços - Seleção de Veículos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<header>
    <h1>AutoVale Poços</h1>
    <p>Qualidade e confiança em Poços de Caldas</p>
</header>

<div class="container">
    <div class="box">
        <h2>Escolha seu veículo</h2>

        <form method="post">

            <!-- SELECT 1 - Categoria -->
            <label for="categoria">Categoria:</label>
            <select id="categoria" name="categoria"  onchange="this.form.submit()">
                <option value="">Selecione...</option>
                <?php foreach ($categorias as $key => $value): ?>
                    <option value="<?= $key ?>" <?= ($categoriaSelecionada === $key) ? "selected" : "" ?>><?= $value ?> </option>
                <?php endforeach; ?>
            </select>

            <!-- SELECT 2 - Subcategoria (estático por enquanto) -->
            
            <?php if ($categoriaSelecionada && isset($subcategorias[$categoriaSelecionada]) || $subcategoriaSelecionada && isset($modelos[$subcategoriaSelecionada])): ?>
            <label for="subcategoria">Marca:</label>
            <select name="subcategoria" id="subcategoria" onchange="this.form.submit()">
                <option value="">Selecione...</option>
                    <?php foreach ($subcategorias [$categoriaSelecionada] as $marcas): ?>
                        <option value="<?= $marcas?>" <?= ($subcategoriaSelecionada === $marcas) ? "selected " : "" ?>> <?= $marcas?></option>
                    <?php endforeach; ?> 
            </select>
            <?php endif; ?>

            <!-- SELECT 3 - Modelos (estático por enquanto) -->
            
            <?php if ($subcategoriaSelecionada && isset($modelos[$subcategoriaSelecionada])): ?>
                <label for="modelos">Modelos:</label>
                <select name="modelos" id="modelos">
                    <option value="">Selecione...</option>
                    <?php foreach ($modelos [$subcategoriaSelecionada] as $modelo): ?>
                        <option value="<?= $modelo ?>"><?= $modelo ?></option>
                    <?php endforeach; ?>
               </select>
            <?php endif; ?>
        </form>

        <?php 
        if($modeloSelecionado && isset($veiculos[$subcategoriaSelecionada])){
            foreach ($veiculos[$subcategoriaSelecionada] as $carro){
                if ($carro["modelo"] === $modeloSelecionado){
                    ?>
                        <div class="info-veiculo">
                            <h3>Infomações do Veículo</h3>
                            <p><strong>Categoria:</strong> <?=$categorias[$carro["categoria"]]?> </p>
                            <p><strong>Marca:</strong> <?=$subcategoriaSelecionada?> </p>
                            <p><strong>Modelo:</strong> <?=[$carro["modelo"]]?> </p>
                            <p><strong>Ano:</strong> <?= [$carro["ano"]]?> </p>
                            <p><strong>Preço:</strong> R$ <?= number_format($carro["preco"], 2, ",",".") ?> </p>
                            <p><strong>Cor:</strong> <?=[$carro["cor"]]?> </p>
                        </div>
                        <?php
                }
            }
        }
        ?>

    </div>
</div>

</body>
</html>