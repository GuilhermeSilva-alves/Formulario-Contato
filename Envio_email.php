
<?php
//tornando a classe PHPMailer em global para uso com o comando abaixo
use PHPMailer\PHPMailer\PHPMailer;

//Executando o auto load do composer

REQUIRE_ONCE "vendor/autoload.php";


$ERROR=""; //Declarando variavel de error

//Declarando as variaveis e inserindo o nome da classe de estilo do formulario
$Style_form_Nome = "Form-text";
$Style_form_Email = "Form-text";
$Style_form_text_msg = "Form-text-msg";

//Validação dos dados inseridos no formulario

//Receber os valores do metodo de envio POST
if($_SERVER['REQUEST_METHOD'] =="POST"){
	
	
	if(!empty($_POST['Name'])){//Verificar se o campo Name do formulário não está vazio
		$Nome = $_POST['Name'];//Atribuindo os valores do campo Name para variavel Nome
	}else{
		$ERROR = "<div class='alert alert-danger' role='alert'>Preencha todos os campos!</div>";//Inserindo na variavel error uma mensagem personalizada para ser exibida
	    $Style_form_Nome = "Form-text-error";//Trocando o estilo do campo do formulario

	}

	if(!empty($_POST['Email'])){
		$Email = $_POST['Email'];
	}else{
		
		$ERROR = "<div class='alert alert-danger' role='alert'>Preencha todos os campos!</div>";
	    $Style_form_Email = "Form-text-error";
	}

	if(!empty($_POST['Mensagem'])){
		$Mensagem = $_POST['Mensagem'];
	}else{
		
		$ERROR = "<div class='alert alert-danger' role='alert'>Preencha todos os campos!</div>";
	   $Style_form_text_msg = "Form-msg-error";
	}
	if(empty($ERROR)){//Caso a variavel error estiver vazia, será feito a configuração e o envio do E-mail
		$mail = new PHPMailer;//Instanciando objeto da classe PHPMailer
		//configuração do servidor SMTP
		$mail->isSMTP(); //chamando o metodo isSMTP para usar o servidor smtp para envio
		$mail->SMTPAuth = true; //Usar autenticação do servidor SMTP (obrigatório)
		$mail->SMTPSecure = 'tsl'; //segurança do servidor smtp
		$mail->Host = "smtp.gmail.com"; //host do servidor smtp nesse caso é o gmail
		$mail->Username = "seuemail@gmail.com";//seu E-mail
		$mail->Password = "suasenha";//Sua senha
		$mail->Port = 587;//A porta do servidor SMTP use a 587
		
		//Editando o destinario e o remetente
	  
		$mail->SetFrom('seuemail@gmail.com','Nome');//Definindo Remetente
		$mail->AddAddress('remetente@gmail.com','Nome');//Definindo destinatario
	  
		//Corpo do email
		$mail->Subject = "Contato via Formulario";//Assunto do Email
		$mail->isHTML(true);//Formato HTML 
		//O corpo da mensagem na constante body para clientes de email que suportam html
		$mail->Body = "Nome: ". $Nome . "<br>" ."E-mail: ". $Email ."<br>". "Mensagem: " . $Mensagem;
		//O AltBody é para clientes de email que não suportam HTML
		$mail->AltBody = "Nome: ". $Nome . "\r\n" ."E-mail: ". $Email . "\r\n" . "Mensagem: " . $Mensagem;
		 
		$mail->send();//Metodo para enviar E-mail
		header('location:Index.php');//Executando um redirecionamento com segurança para evitar reenvio de formulario
		exit();

	}
	
	
}

?>
