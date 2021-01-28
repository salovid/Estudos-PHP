<!DOCTYPE html>
    <html lang="pt-br">
<head>
  <title>formulario - exemplo</title>
  <meta charset ="UTF-8">
  <link rel="stylesheet"  href="../_css/form.css"
  

</head>
<body>

<form  id="fContato" oninput="calc_total();">
  <fieldset id="usuario">
        <legend>Identificação do Usuário</legend>

        <p><label for="cNome">Nome: </label>
            <input type="text" name="tNome" id="cNome" size="30" maxlength="40" placeholder="Nome Completo"/>
        </p>

        <p><label for="cSenha">Senha: </label>
            <input type="password" name="tSenha" id="cSenha" size="3" maxlength="8" placeholder="8dígitos"/>
        </p>

        <p><label for="cmail">E-mail: </label>
           <input type="email" name="tmail" id="cmail" size="30" maxlength="40" placeholder="email"/>
        </p>

    <fieldset id="sexo">
      <legend>Sexo:</legend>
      
      <input type="radio" name="tSexo"  id="cMasc" value="Masculino" checked/>
      <label for="cMasc">  Masculino </label>  <br/>
      <!--os names=".." do objeto type="radio" devem o mesmo name="tSexo" -->
      <input type="radio"  name="tSexo" id="cFem" value="Feminino"/>
      <label for="cFem">  Feminino </label>
    </fieldset>
    <p><label for="cNasc">Data de Nascimento:</label>
       <input type="date" name="tNasc" id="cNasc"</p>
</fieldset>

<fieldset id="endereco">
    <legend>Endereço do Usuário</legend>

    <p><label for="cRua">Logradouro: </label>
        <input type="text" name="tRua" id="cRua" size="26" maxlength="80" placeholder="Rua, Av. Trav..."/> </p>
    <p><label for="cNum">Número:</label>
        <input type="number" name="tNum" id="cNum" min="0" max="9999"/></p>

    <p><label for="cEst">Estado: </label>

      <select name="tEst" id="cEst">
        <optgroup label="Região Sudeste">
            <option value="MG">Minas Gerais</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="SP"  selected >São Paulo</option></optgroup>
        <optgroup label="Região Sul">
            <option value="PR">Paraná</option>
            <option value="SC">Santa Catarina</option>
            <option value="RS">Rio Grande do Sul</option></optgroup>
      </select>
    </p>


  <p><label for="cCid"> Cidade:</label>
     <input type="text" name="tCid" id="cCid" size=20 maxlength="40" placeholder="Sua Cidade" list="cidades"/>
     <datalist id="cidades">
       <option value="Sao Paulo - Capital"></option>
       <option value="São Bernardo do Campo"></option>
       <option value="Santo Andre"></option>
       <option value="Santos"></option>
       <option value="Campinas"></option>
       <option value="Ribeirão Preto"></option>
     </datalist>
  </p>
</fieldset>

<fieldset id="mensagem">
  <legend>Mensagem do Usuário</legend>

 <p> <label for="cUrg">Grau de Urgência:</label>
     Mín<input type="range" name="tUrg" id="cUrg" min="0" max="10" step="3.3"/>Máx
 </p>
 <p> <label for="cMens">Mensagem:</label> <br/>
     <textarea name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea>
 </p>
</fieldset>

<fieldset id="pedido">
  <legend>Quero o produto mostrado</legend>
  <p><input type="checkbox" name="tPed" id="cPed" checked
     <label for="cPed">Gostaria de adquirir esse produto o quanto antes</label>
  </p>
  <p><label for="cCor">Cor:</label>
     <input type="color" name="tCor" id="cCor" value="#ff0f0f"/>
  </p>
  <p><label for="cQtd">Quantidade:</label>
     <input type="number" name="tQtd" id="cQtd" min="0" max="10" value="1"/>
  </p>
  <p><label for="cTot">Preço Total: R$</label>
     <input type="text" name="tTot" id="cTot" placeholder="Total a Pagar" readonly />
  </p>
</fieldset>

   
  <input type="submit" name="tEnviar" src="../_imagens/botao-enviar.png"/>


</form>

 <div>

  <!--
 /*  Objetos de Formulários:
      Todos os objetos devem ter id="..", para facilitar programa e formatações dos mesmos. (#)
      O conjunto de objetos devem ter a mesma class=".." para que tenham as mesmas propriedades e comportamentos. (.)

 1) - form...
        define um formulário .......
          <form
                 ..atributos são em 5 tipos:...
            action= "/action_page.php"  autocomplet=".."  [novalidate]
            method =
                "post" ..informação segura e confidencial, não aparece no endereço da página ...senha..usa post que envia dados por pacote em nivel na rede de computadores.
                "get" ...fica visível no endereço da página, buscas simples..pesquisa  o google usa get..q é acaixa de texto de queri="nom digitado busca google tipo texto com soma das strings"
            target="_blank" (melhor)  "_self"..(default)
            nome=" ...."
            id="form1"
            class="..."
            >....
          </form>
 
 2) - fieldset...
        <fieldset>
            ..conjunto de campos...agrupa os campos do formulário num bloco com legend sendo o título do bloco.
                cada fieldset terá uma identificação id
            <legend> no titulo do fieldset   </legend>
              ...
              ...
             <input..../>
        </fieldset>

 3) -  legend...
          <legend> define uma legenda de cabeçalho principal para cada fieldset
          </legend>

 4) - label
         usado para referênciar o objeto ao id
         tem função semântica de indentificar objeto relativo a ele . o uso dele é importante, para os mecanismos de busca e para objetos para ajudar deficientes visuais.
        define um rótulo para um elemento <input> ao clicar sobre ele, como uma seleção de entrada tipo radio, sendo que o input tera um id="mesmo valor informado no label" por for.
          <label for= "male">Masculino</label>
            os inputs devem ter a mesma informação para o name=" " para que na escolha tipo radio não admita dois valores simultâneos.

 5) - input...
            vão formar as caixa de texto onde o usuário vai digitar os campos dos objetos
            tem muitos objetos  ...define as entradas para o formulário em que serão inseridos os registros de cada campo do objeto.........
            para o campo name..colocamos em sequencia o espaço reservado..placeholder="...." , que seria uma dica ao usuário do conteúdo a ser inserido por ele.
            os atributos que forem do objeto de campo name="..." e da mesma forma do value="...", serão enviados por PHP.
            objeto type tem atibuto text por default
            para o id o atributo seria bom se começar por c de campo e ser tudo em camelcase
            para o nome, o atibuto começando por t e em camelcase
        <input
          type = "text"   name="fname...lname"   placeholder="..."  [required]   value=".."   size=".."      maxlength=".. "  form="form1" pattern="[A-Za-z]{3} title=".." [readonly]  [disabled]  [autofocus]
          size é um parametro da quantidade de caracteres simultâneos que aparecem na caixa de type="text"
          maxlength limita o comprimento máximo de caracteres digitados aceitos na caixa definida em size. com maxlenth maior que size haverá uma rolagem lateral.
          value=".." indica um valor padrão.

          type =  "radio"   name=".."  value=".."   id=".."  [checked]
          type =  "checkbox" name=".." value=".."   id=".."  [checked]
                  e uma caixa onde permite clicar sobre ela para seleção. neste caso o label vai depois do input
          type =  "button" onclick=".."  value=".."
          type =  "image" src= "img_..." alt="Submit.." width="..."  height="48.."
          type =  "file"  name= "img" [multiple]
          type = "password"  name= ".."   id=".."  size=".." maxlength=".."  placeholder=".."

          type = "submit"   formmethod="post" value="Submit " "submit as ../formdata"  formaction="../.."  formenctype="../formdata.."  formnovalidate value= "submit without validation" formtarget="_blank"

          type = "reset"
          type= "color"  name=".."  vai aparecer uma caixa mostrando a cor escolhida por default cor preta, a menos       que use um valuedefindo a cor
          type= "date"  name=".."   max=".."   min=".."  step=".."
          type= "datetime-local"  name=".."  step=".."
          type= "e-mail"  name="user_email"  autocomplet="off / on"
          type= "month" name=".."  step=".."
          type= "number" name=".." min=".." max=".." step=".." value=".." step="3"
          type= "range"  name=".." min=".." max=".." step=" salto no deslizamento do dial)
                objeto que permite arrastar uma dial numa escala da esquerda para direita e vice-versa
          type= "search" name=".."
          type= "tel" name=".."
          type= "time" name=".."  step=".."
          type= "url" name=".."
          type= "week" name=".."  step=".."

 6) - fieldset
          usado para agrupara dados no formulário.
       <fieldset>
          <legend>....</legend>
          <input......./>
                .
                .
       </fieldset>

 7)  - legend
          usado para definir legendas no fieldset
       <legend>Informações e Dados:...</legend>

 8) - select..        (por exemplo usado para escolher estados com as regiões deles.
          define uma lista drop-down, por checkbox, para as opções de escolha, via option.
          tem função siimilar ao input, mas com opção de multiescolha das opções para entrada de dados previamente estabelecidos.
        <select name="..."...size="..." multiple>    multiple..para selecionar mais que um valor
          <optgoup label=".."
            <option>...</option>
          </optgroup>
      </select>

 9) - optgroup..
          seleciona uma área de opçoes, para escolha de uma delas com seu respectivo label
          para cada optgrou, vem um conjunto de <options> para escolha de uma opção
          <optgroup label="...">
            <option>...</option>
                  .
           </optgroup>       .


 9) -    option..
          definine opção que poderá ser selecionada, a qual sera vista em checkbox
      <option value="..." selected>...opção....</option>

 10)- textarea
          define uma área de entrada de texto multi-linha.
          enquanto o text do input permitia apenas uma linha o textarea permite varias linhas.
      <textarea name=".." rows=".."  cols="..">
            ...texto...
      </textarea>

 11)- button
         define um botão a clicar
      <button ...type="button" onclick="..função javascript..">....
        ...click no botão!
      </button>

 12)- datalist...     (por exemplo usado para cidades)
           diferene de select que força um escolha fixa, o data list fornece apenas alternativas de escolha, se não tiver na lista ela permite digitar, onde com select isso não acontece, pois ele não permite a digitação para escolha de um item que não está na lista.
           especifica lista de opçoes para o <input list="com mesmo id do datalist..>
             quando se vai digitar uma cidade, se ela existir na lista de opçoes ela apaarece para facilitar escolha.
            <datalist id="..">.....
          <option value="...">
              .
              .
        </datalist>

 13) - output
           executa uma saida de processamento de informação
        <output...... name=".." for="...">
        </output>


 --- */

  -->
    
 </div>
<script>
  function calc_total() {
      var qtd = parseInt(document.getElementById('cQtd').value)  ;
      tot = qtd * 1200;
      document.getElementById('cTot').value = tot
  }
</script>
</body>
    </html>

