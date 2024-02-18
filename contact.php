<?php
include_once 'header.php';
$mensagem = '';
if(isset($_POST['sms'])){
    $name = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $email = $_POST['email'];
    $sms = $_POST['mensagem'];
    if(!empty($name) and !empty($assunto) and !empty($email) and !empty($sms)){

   $sql = " INSERT INTO message (name,email,assunto,sms)
   VALUES ('$name','$email','$assunto','$sms' )";
   $send = mysqli_query($conn,$sql);
   if($send){
    $mensagem = "Muito Origado pelo seu contacto, retornaremos muito em breve";
   }else{
    $mensagem = "Erro ao enviar sms";
   }
    }else{
        $mensagem = "Preencha todos os campos";
    }
}

?>

<section class="mb-4 container">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contacte-nos</h2>
    <p class="text-center w-responsive mx-auto mb-5">
Você tem alguma dúvida? Por favor, não hesite em nos contatar diretamente. Nossa equipe retornará a você em questão de horas para ajudá-lo.</p>
<div class="bg-info px-3 py-2 my-3"><?php echo $mensagem ?></div>

<div class="row">
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form"
             action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="nome" class="form-control">
                            <label for="name" class="">Nome</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Email</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="assunto" class="form-control">
                            <label for="subject" class="">Assunto</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="mensagem" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Mensagem</label>
                        </div>

                    </div>
                </div>
                <div>
                    <button class="btn btn-large btn-primary" name="sms" type="submit">
                        Enviar
                    </button>
                </div>
            </form>
            
        </div>
      

    </div>

</section>

<?php

include_once 'footer.php'
?>