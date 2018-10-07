
        <div class="container">
            <?php if($this->session->flashdata("sucess")): ?>
            <p class="alert alert-success"><?= $this->session->flashdata("sucess")?></p>
            <?php endif ?>
            
            <?php if($this->session->flashdata("danger")): ?>            
            <p class="alert alert-danger"><?= $this->session->flashdata("danger")?></p>
            <?php endif ?>
            
            
            <h1>Formulario</h1>
            <?php 
            echo form_open($action='produtos/novo');
            
            echo form_label($label_text='Nome', $id= 'nome');
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "maxlength" => "255"
            ));
            echo form_error($field = "nome", $prefix="");
            
            echo form_label($label_text='Preco', $id= 'preco');
            echo form_input(array(
                "name" => "preco",
                "id" => "preco",
                "class" => "form-control",
                "maxlength" => "255"
            ));
            
            echo form_error($field = "preco", $prefix="");
            
            
            echo form_label($label_text='Descricao', $id= 'descricao');
            echo form_textarea(array(
                "name" => "descricao",
                "id" => "descricao",
                "class" => "form-control",
                "maxlength" => "255"
            )); 
            echo form_error($field = "descricao", $prefix="");
            
            echo form_button(array(
               "class" => "btn btn-primary",
                "type" => "submit",
                "content" => "Cadastrar" 
                
            ));
            echo anchor($uri = "produtos/index", $title ="Voltar", array ('class' => 'btn btn-primary'));
            echo form_close();
            ?>
            
       