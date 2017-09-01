<!doctype html>
<html lang = "pt-br">
<head>
	<meta charset = "utf-8" />
	<meta content = "width = device-width, initial-scale = 1, escala máxima = 1" name = "viewport">
	<title>Cadastro Contratante PHP Jobs</title>
	<link href = "css.css" rel = "stylesheet" />
</head>

<body>
    <form action = "contratante.php" id="cadastro" name="cadastro" method="post">
      <table width="625" border="0">
        <tr>
            <td width="69">Nome:</td>
            <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
            <span class="style1"></span></td>

        <tr>
            <td width="69">Descrição:</td>
            <td width="546"><input name="descricao" type="text" id="descricao" size="70" maxlength="500" />
            <span class="style1"></span></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input name="email" type="text" id="email" size="70" maxlength="60" />
            <span class="style1"></span></td>
        </tr>
        <tr>
            <td>Senha:</td>
            <td><input name="senha" type="password" id="senha" maxlength="12" />
            <span class="style1"></span></td>
        </tr>
        <tr>
            <td>Logo:</td>
            <td><input name="logo" type="img" id="logo" maxlength="12" />
            <span class="style1"></span></td>
        </tr>
         
       
        <tr>
            <td colspan="2"><p>
                <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" />
                <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
                <input name="voltar" type="submit" id="voltar" value="Voltar" onClick="window.open('index.html')" target="_self"/>
                
        </tr>

        </tr>
      </table>
    </form>

</body>
</html>



