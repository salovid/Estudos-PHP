<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>formulario - exemplo</title>
  <meta charset ="UTF-8">
  <link rel="stylesheet"  href="../_css/form.css"


</head>
<body>

<form method="post" id="fContato" action="b02-formulario-recebe-POST.php" oninput="calc_total();">
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


  <input type="image" name="tEnviar" src="../_imagens/botao-enviar.png"/>


</form>

<div>

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

