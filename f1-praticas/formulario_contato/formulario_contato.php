<?php

 /*require insere um arquivo, antes do servidor executa-lo. Se não encontrar o arquivo ele da erro e para com erro fatal.
    por exempolo inserir o arquivo que contem footer no arquivo principal.
 ---*/
 #criando variaveis com informação string em branco
;  $erros='';
  $enviado='';
  
  #verficando se formulario foi enviado---*/
 if (isset($_GET['tEnviar'])) {
       #se enviado, mesmo que vazio, sem qualquer dado, criar variaveis novas atraves do array recebido atraves de seus indices indexados por input de form do arquivo html---*/
         $nomed=$_GET['tNome'];
        $email=$_GET['tMail'];
        $mensagem=$_GET['tMsg'];
       #!empty("...")...significa que se tem conteúdo na variavel.. então analisar conteudo das variaveis
        # print_r($_GET);
        if(!empty($nomed))  {
             $nomed = trim($nomed);
             #trim..limpara espaços em branco no inicio e fim
            $nomed = filter_var($nomed, FILTER_SANITIZE_STRING);
             #filter_var ..tirando tags e caracteres especiais html
        }  else {
        #se não escreveu nada..ou seja variável sem , criar variável $erros.
            $erros .= 'Por favor digite o Nome" <br/>';
        /*no html, antes do submit, vai usar o <?php if(condição) : >  codigo htm e finaliza com <?php endif ?> */
            }
    
    #mesmo procedimento para demais variaveis, criadas do array vindo do formulário.
        if(!empty($email)) {
            $email=trim($email);
              #se enviou o nome do email,com informação não vazia
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            # apos limpar tags html, validará se estiver escrito o email de maneira certa; se escrito errado, verificará a condição como sendo verdadeira, se o correio não esta validado, por ser escrito de maneira errada, mostrando a instrução na variável $erros.
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros .= 'Por favor, informe um email válido! <br/>';
            #se enviou a informação mas ainda com a condição do nome do e-mail sem escrever nada
        }       }
        #se enviou o nome do email, mas por outro lado, como condição falsa, pois foi com informação vazia
        else {
            $erros .= 'Por favor digite o nome de seu e-mail <br/>';
        }
    
     if(!empty($mensagem))  {
         $mensagem = trim($mensagem);
         #trim..limpara espaços em branco no inicio e fim
         $mensagem=stripslashes($mensagem);
          $mensagem=htmlspecialchars($mensagem) ;
         $mensagem = filter_var($mensagem, FILTER_SANITIZE_STRING);
         #filter_var ..tirando tags e caracteres especiais html
     }  else {
         #se não escreveu nada..ou seja variável sem , criar variável $erros.
         $erros .= 'Por favor digite uma mensagem" <br/>';
            }
        
     
        #se não houve erros, ou seja a condição da variavel com não erros como verdadeira, preparar envio do formulário criando novas variáveis.
        if(!$erros) {
            $enviar_a =  'joao@salovid.com';
            $assunto = 'email enviado de salovid.com' ;
            $mensagem_prep = "De:  $nomed \n" ;
            $mensagem_prep .= "email: $email \n";
            $mensagem_prep .= "Mensagem: " . $mensagem;
            #para envio usar a função mail do PHP
            mail($enviar_a, $assunto, $mensagem_prep);
            $enviado = 'true';
            
            
            /*ele vai para programa em html c01-html.. e la aplica o seguinte na div de lá:
            <?php elseif ($enviado) : ?>
          <div class="alert success">
            <p>Enviado com Sucesso!</p> */
          
       }
        
    }
 
 
 require 'formulario_contato.view.php';


