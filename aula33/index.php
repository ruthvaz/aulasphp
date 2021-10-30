<html>
    <body>

    <?php 
    if(isset($_POST['enviar-formulario'])):
        $erros = array();

        /*if(!$nome = filter_input(INPUT_POST, 'nome')):
            $erros[] = "Nome precisa ser uma string!";  
        endif;*/

        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um número inteiro!";  
        endif;

        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "E-mail inválido!";  
        endif;

        if(!$altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT)):
            $erros[] = "Altura precisa ser float!";  
        endif;

        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
            $erros[] = "IP inválido!";  
        endif;

        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
            $erros[] = "URL inválida!";  
        endif;

        if(!empty($erros)):
            foreach($erros as $erros):
                echo "<li> $erros </li>";
            endforeach;
        else :
            echo "Dados corretos! ^_^ <hr>";
        endif;
    endif;
    ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Idade : <input type="text" name="idade"><br><br>
            Email : <input type="text" name="email"><br><br>
            Altura : <input type="text" name="altura"><br><br>
            IP : <input type="text" name="ip"><br><br>
            URL : <input type="text" name="url"><br><br>
            <button type="submit" name="enviar-formulario"> Enviar </button>
        </form>
        
    </body>
</html>