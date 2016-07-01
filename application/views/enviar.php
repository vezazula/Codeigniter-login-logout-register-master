<div id="container">
	<h1>Enviar e-mail com CodeIgniter</h1>
 
	<div id="body"> 
 
		<form method="POST" action="user/enviar">
 
			<span id="from">E-mail Remetente (Deve ser @seudominio.com.br):</span>
			<input id="textDe" type="text" name="txt_de"/>
 
			<span id="destiny">E-mail de Destino:</span>
			<input id="textPara" type="text" name="txt_para"/>
 
			<span id="text">Mensagem:</span>
			<textarea name="txt_msg" id="textMsg" rows=""></textarea>
 
			<input id="ButtonEnviar" type="submit" name="env" value="Enviar E-mail"/>
 
		</form>
 
	</div>
 
</div>