<?php
include_once 'Button.php';
include_once 'Form.php';
include_once 'TextInput.php';
include_once 'HtmlElement.php';

$form = new Form();
$form->addElement(new TextInput('comando', 'Insira o comando'));
$form->addElement(new Button("Enviar/Fazer"));

?>


<section class="section-canvas">
    <div class="canvas">


    </div>
    
    <?php
        echo $form->render();
    ?> 

</section>