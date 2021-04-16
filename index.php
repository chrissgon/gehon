<?php
session_start();

header("Content-type: text/html; charset=UTF-8");

$email = isset($_SESSION["email"]) ? $_SESSION["email"] : null;

unset($_SESSION["email"]);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- links -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="img/icon.png">

    <!-- title -->
    <title>Instituto Gehon</title>
</head>

<body>
    <!-- alert -->
    <div class="alert <?php if ($email != null) {
                            echo $email;
                        } ?>">
        <?php echo $email == "valid" ? "Email enviado com sucesso" : "Erro ao enviar o email" ?>
    </div>

    <!-- logo -->
    <img src="img/logo.png" alt="Logo Gehon" class="logo">

    <!-- home -->
    <section class="home">
        <h1>Instituto Gehon</h1>
        <h4>Impactando de forma criativa</h4>

        <p>Somos um instituto que visa através de nossos projetos sociais impactar de forma inovadora e criativa nosso
            ambiente.</p>

        <a href="#sobre" class="btn">Saiba mais</a>

        <!-- info -->
        <div class="info">
            <p>
                <i class="material-icons">call</i>
                +55 11 5977-6686
            </p>
            <p>
                <i class="material-icons">mail</i>
                <a href="mailto:instituto@gehon.org.br">instituto@gehon.org.br</a>
            </p>
            <p>
                <i class="material-icons">schedule</i>
                Seg a Sex, 9 as 17hrs. Sab, 9 as 13hrs
            </p>
        </div>
    </section>

    <!-- sobre -->

    <section class="sobre" id="sobre">
        <h1>Sobre</h1>

        <!-- info -->
        <div class="info">
            <!-- missao -->
            <div class="item">
                <i class="material-icons">work</i>
                <h4>Missão</h4>
                <p>
                    O Instituto Gehon tem como missão impactar a vidas das pessoas, através da habitação social e regularização fundiária. Transformando a sociedade através das nossas práticas sociais.
                </p>
            </div>

            <!-- visao -->
            <div class="item">
                <i class="material-icons">visibility</i>
                <h4>Visão</h4>
                <p>
                    Nos tornar um instituto reconhecido pela inovação, através de nossos projetos sociais, impactando a
                    sociedade de forma positiva.
                </p>
            </div>

            <!-- valores -->
            <div class="item">
                <i class="material-icons">favorite</i>
                <h4>Valores</h4>
                <p>
                    Fé, determinação, ética, colaboração e criatividade
                </p>
            </div>

        </div>
    </section>

    <!-- maps -->
    <section class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.2614333964348!2d-46.72376378533939!3d-23.487091164738114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef96f5f902f7d%3A0x5da345362b4e2198!2sINSTITUTO%20GEHON!5e0!3m2!1spt-BR!2sbr!4v1618535791226!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <!-- contato -->
    <section class="contato">

        <!-- form container -->
        <div class="form-container">
            <h3>Alguma dúvida?</h3>
            <h4>Envie uma mensagem</h4>

            <!-- form -->
            <form action="php/email.php" class="form" method="POST">
                <!-- nome -->
                <div class="input-group">
                    <input type="text" name="nome" class="field" placeholder="Nome" required>
                </div>
                <!-- email -->
                <div class="input-group">
                    <input type="email" name="email" class="field" placeholder="Email" required>
                </div>
                <!-- email -->
                <div class="input-group">
                    <textarea type="text" name="mensagem" placeholder="Mensagem" class="field" required></textarea>
                </div>
                <input type="submit" value="Enviar" class="btn">
            </form>
        </div>
    </section>

    <p class="footer">by <a href="https://www.linkedin.com/in/chrissgon/" target="_blank">Christopher</a></p>

    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>