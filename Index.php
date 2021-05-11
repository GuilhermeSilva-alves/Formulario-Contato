<!DOCTYPE html>
<html>
<head>
	<title> Formulario Contato</title>
	<meta charset="UTF-8"> 
    <link rel="stylesheet" type="text/css" href="..\Formulario\Style\Style-home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
</head>
<body>
<div class="Div-father">
<section id="Section-form">
	<div class="Div-form-image">
		<img class="Img-form" src="Mail-img.svg">
	</div>

   
	<div class="Div-form">
		
		<form class="Formulario" method="POST" action="<?php /*Transformando o caminho do script em caracteres especiais*/ htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<h3 class="Titulo-form"> Contato </h3>
			<?php require_once"Envio_email.php"; /*incluindo o script indicado se ele não estiver previamente aberto*/ echo $ERROR;//exbir erros caso houver ?>

			<input class="<?php /*retornando o nome da classe de estilo*/echo $Style_form_Nome; ?>" type="text" maxlength = "30"  name="Name" placeholder="Seu Nome">
			
			<input class="<?php echo $Style_form_Email; ?>" type="email"  name="Email" maxlength = "40" placeholder="Seu Email">
			
			<textarea class="<?php echo $Style_form_text_msg; ?>"  name="Mensagem" placeholder="Sua Mensagem"></textarea>
			
			<input class="Form-button" type="submit" name="Enviar" value="Enviar">

			


		</form>
	</div>
	


</section>
</div>





</body>
</html>