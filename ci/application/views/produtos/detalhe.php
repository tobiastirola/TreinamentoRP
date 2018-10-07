<html>
    <head>
        
    <body>
        Nome:   <?= $produto ['nome'] ?><br>
        Preco: <?= $produto ['preco'] ?><br>
        Descricao: <?= $produto ['descricao'] ?><br>
        
        <?= anchor($uri = "produtos/index", $title="Voltar", array('class' => 'btn btn-primary')); ?>
        <a href="<?=base_url ('produtos/delete/'.$produto['id']);?>" class="btn btn-danger">Deletar Produto</a>
        <a href="<?=base_url ('produtos/editar?id='.$produto['id']);?>" class="btn btn-primary">Editar</a>
    </body>
    </head>
</html>