<h1> README </h1>
<hr>
<h2>Descrição </h2>
<p> O projeto consiste em um Formulário básico que faz envio de E-mails usando a biblioteca PHPMailer e servidor SMTP do gmail, de forma local.</p>
<p> Para obter mais informações e guia sobre como usar a classe phpMailer, verifique o repositório oficial dos criadores https://github.com/PHPMailer/PHPMailer.git</p>
<div align="center">
<img src="https://github.com/GuilhermeSilva-alves/Formulario-Contato/blob/main/formulario.png" width="1000"> 
</div>
<br>
<div align="center">
<img src="https://github.com/GuilhermeSilva-alves/Formulario-Contato/blob/main/formulario-error.png" width="1000">
  
</div>
<br>
<h2>Conteudo</h2>
<ul>
  <li>Tecnologias Utilizadas</li>
  <li>Validação
    <ul>
      <li>Nome</li>
      <li>E-mail</li>
      <li>Mensagem</li>
    </ul>
  </li>
  <li>Responsividade</li>
</ul>

<h2>Tecnologias Utilizadas</h2>

<h3>Front-end</h3>
<ul>
  <li> HTML </li>
  <li> CSS </li>
  <li> BOOTSTRAP</li>
 </ul>
<h3> Back-end</h3>
<ul>
  <li> PHP </li>
  <li> PHPMailer</li>
</ul>

<h2>Validação</h2>
Validação dos campos do formulário via PHP para verificar se os campos estão vazios, caso houvesse inputs vazios as classes do formulário seriam trocados e um alert personalizado do bootstrap seria apresentado com uma mensagem de erro.
<h3>Nome</h3>
<p> Para nome foi usado somente validação de tamanho maximo e verificar se o campo está vazio.</p>

<h3>E-mail</h3>
<p> Para E-mail foi utilizado presença do "@" e a presença de um ponto após o "@", verificar se o campo está vazio e validação de tamanho máximo.</p>

<h3>Mensagem</h3>
<p> Para mensagem foi usado somente uma validação para verificar se o campo está vazio.</p>

<h3>Responsividade</h3>
<p>Para construir o layout responsivo foi usado CSS puro, sendo assim o formulário é totalmente adaptável para qualquer dispositivo.</p>

  
  
                                                                                                                                
