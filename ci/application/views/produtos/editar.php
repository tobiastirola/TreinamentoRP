<?php
?>

<div class="container">
    <form action="salvar/<?=$produto['id']?>" method="post">
        <input type="text" class="hidden" value="<?= $produto['id']?>"
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?= $produto['nome'] ?>">
        <label for="nome">Preco</label>
        <input type="text" name="nome" class="form-control" value="<?= $produto['preco'] ?>">
        <label for="nome">Descricão</label>
        <textarea type="text" name="descricao" cols="30" rows="10"class="form-control"><?= $produto['descricao']?></textarea>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
        
            <?= anchor($uri = "produtos/index", $title ="Voltar", array ('class' => 'btn btn-primary')); ?>
    </form>
</div>