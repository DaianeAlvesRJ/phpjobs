<!doctype html>
<html lang = "pt-br">
<head>
	<meta charset = "utf-8" />
	<meta content = "width = device-width, initial-scale = 1, escala máxima = 1" name = "viewport">
	<title>Cadastrar Jobs</title>
	<link href = "css.css" rel = "stylesheet" />
	<script src="MEU SCRIPT"></script>
</head>
<body>
    <form id="cadastro" name="cadastro" method="post">
      <table width="625" border="0">
        <tr>
            <td width="69">Título:</td>
            <td width="546"><input name="titulo" type="text" id="titulo" size="70" maxlength="60" />
            <span class="style1"></span></td>

        <tr>
            <td width="69">Descrição:</td>
            <td width="800"><input name="descricao" type="text" id="descricao" size="70" maxlength="1000" />
            <span class="style1"></span></td>
		</tr>
		<tr>
            <td width="69">Requisitos:</td>
            <td width="546"><input name="requisito" type="text" id="requisito" size="70" maxlength="1000" />
            <span class="style1"></span></td>
		</tr>

		<tr>
            <td width="69">Tipo:</td>
            <td width="546"><form name=tipo>
				<input type="radio" name=myradio value="CLT">CLT
				<input type="radio" name=myradio value="PJ">PJ
				<input type="radio" name=myradio value="Freelancer">Freelancer
				</form>
			<span class="style1"></span></td>
		</tr>
		<tr>
            <td width="69">Salário:</td>
            <td width="546"><form name=tipo>
				<input type="radio" name=myradio value="tres">até R$3.000,00<br>
				<input type="radio" name=myradio value="seis">R$3.000,00 a R$6.000,00<br>
				<input type="radio" name=myradio value="maisdeseis">R$6.000 a R$9.000,00<br>
				<input type="radio" name=myradio value="maisdenove">acima de R$9.000,00<br>
				<input type="radio" name=myradio value="porhora">Valor por hora a combinar<br>
				
			</form>
            <span class="style1"></span></td>
		</tr>
			
        <tr>
            <td>E-mail:</td>
            <td><input name="email" type="text" id="email" size="70" maxlength="60" />
            <span class="style1"></span></td>
        </tr>
             
       
        <tr>
            <td colspan="2"><p>
                <input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar Jobs" />
                <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
                <input name="voltar" type="submit" id="voltar" value="Voltar" onClick="window.open('index.html')" target="_self"/>
                
        </tr>

        </tr>
      </table>
    </form>
</body>
</html>


