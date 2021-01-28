<?php
 

 

 
     /*   para abrir no console cmd: c:\wamp64\bin\mysql\mysql5.7.19\bin
        ...mysql.exe...  mysql -u -p ....root...-u significa agregar usuário, nesse caso root.
     
     Em php normalmente as palavras chave  sql em letra maiuscula, para identificar dos comandos de php, que são em letra minuscula. Em sql pode ser tanto em maiúscula quanto em minúscula. limite pare o nome de banco dados = 64 caracteres.
      se, porventura, esqueceu de por ';' no final do comando sql, haverá em repetição o simbolo ->, toda vez que dar enter, mas, se digitar ';' isso para.
     os nomes dos campos seriam em camelCase começando por minusculas.
     os nomes das tabelas são em minusculas tendo sublinhado como separador.
     SGBD sistema de gerenciamento de banco de dados..mysql, acces, orcle, postgresql, sqlite.. microsoft sql..
     para ir ao proximo passo e criar as tabelas no banco de dados criado dever usar comando USE para poder estar dentro dele.
     Comandos mais usados em..   mysql>..
      SHOW DATABASES; mostra os banco de dados criados.
      CREATE livros_arquivo;  cria banco de dados com esse nome
      USE livros_arquivo; ...para poder ter liberação para uso do banco de dados criado.
      DROP DATABASE livros_arquivo; deleta banco de dados criado.
      CREATE TABLE `video_cursos`.`video_cursos_PHP_MySQL` ( `id` INT NOT NULL AUTO_INCREMENT , `nome_curso` VARCHAR(40) NOT NULL , `autor` VARCHAR(30) NULL , `editor` VARCHAR(25) NULL , PRIMARY KEY (`id`)); cria uma tabela a partir do banco de dados criado e a partir do comando USE.
      SHOW TABLES ;  mostra as tabelas do banco livros
      #...DESCRIBE livros_php_mysql; mostra a tabela com seu campos e propriedades;
     #...SHOW COLUMNS from livros_php_mysql; idem a DESCRIBE livros_php_mysql;
     ALTER TABLE livros_php_mysql ADD estante varchar(20) after editora; ...adicionar coluna..
     ALTER TABLE livros_php_mysql DROP editora;....deletar o campo.
     ALTER TABLE livros_php_mysql MODIFY editora varchar(15); modifica o valor de um tipo de dado do campo.
      
       ALTER TABLE `livros_php_mysql` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, CHANGE `nome_autor` `nome_autor` VARCHAR(25) NOT NULL, CHANGE `editora` `editora` VARCHAR(15) NULL DEFAULT NULL, CHANGE `estante` `estante` VARCHAR(20) NULL DEFAULT NULL, primary key(id); troca o tipo de dado e o valor em cada coluna
    
     INSERT INTO livros_php_mysql values(null, 'soares', 'editora sossego', 'politica');..inserir registros na tabela, na ordem dos campos correspondentes.
       INSERT INTO livros_php_mysql (id, nome_autor) values(null, 'pedro' );...inserir somente os campos específicos, com strings entre aspas simples;
     UPDATE livros_php_mysql set editora = 'mercadão' where id=4;  altera o registro de id=4 do campo editora para o nome que era mercado acima para o nome mercadão (entre aspas simples)
     UPDATE livros_php_mysql SET nome_autor = 'pedrosa' WHERE nome_autor='pedro'; alterar o registro do campo nome_autor para pedrosa onde nome do autor atual é pedro.
     DELETE
     SELECT * FROM `livros_php_mysql` WHERE 1;  mostrar todos campos com seus registros da tabela;
     SELECT id, nome_autor from livros_php_mysql; mostra somente o campo de id e o campo do nome_autor com todos os seus registros.
     SELECT * from livros_php_mysql where id=2;   traz os registros da linha com id=2;
     SELECT * from livros_php_mysql where nome_autor = 'dantas'; , idem com nome_autor= 'dantas'
     SELECT * from livros_php_mysql where nome_autor like 's%'; mostra os registro cujo nome_autor
        seja qual que comece coma a letra 's';
     SELECT * from livros_php_mysql where nome_autor like '%s'; idem, que termine com a letra 's'
     SELECT * from livros_php_mysql ORDER BY nome_autor ASC; seleciona o campo nome_autor,    mostrando em ordem ascendente toda a tabela por ele.  DESC..seria descendente.
     SELECT * from livros_php_mysql LIMIT 2;.......traz somente 2 linhas de registros;  ou LIMIT 0,2, isto dois registros a partir do registro 0. LIMIT 2,2 vem a linha 3 e a linha 4.
     
     DELETE FROM livros_php_mysql WHERE id=3; elimina a linha 3 da tabela livros_php_mysql
     */

  
  
 #conexão com PDO (PHP Data Objects)
         #   $id = $_GET['id'];
      try {
         $conexao = new PDO('mysql:host=localhost;dbname=livros_arquivo', 'root', '');
         echo "Conexão OK <br/>";
         #se utilizar o codigo aqui pode se ver os erros, mas pode usra o codio fora dessas chaves
        
         #$resultados = $conexao -> query('insert into livros_php_mysql values(null,"maria", "erica", null)');  #adicionar  linha com registros.
                #MÉTODO QUERY:
           # $resultados = $conexao -> query("select *from livros_php_mysql where id = $id");
          $resultados = $conexao -> query("select *from livros_php_mysql");
            #usando query, o hacker pode injetar código no navegador ?id=2 or 4, por exemplo..
            
         #$resultados = $conexao -> query('select *from livros_php_mysql');
         foreach ($resultados as $fila) {
           #echo '<pre>';
           #print_r($fila).'<br/>';
            # echo '</pre>';
            echo $fila['nome_autor'].'<br/>';
         }
         
      } catch(PDOException $e) {
           echo "Error: " . $e -> getMessage();
       }

?>
