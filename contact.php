<!DOCTYPE html>

<html lang="fr">
<head>
    <meta name="description" content="CV en ligne de Philippe Amarger, formulaire de contact"/>
    <meta name="author" content="Philippe Amarger"/>
    <meta charset="UTF-8"/>

    <title>CV Philippe Amarger - portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="styles/styles.css"/>
</head>

<body>

        <div class="wrapper">

                <main id="sections-wrap-contact" class="animate__animated animate__backInDown">

                        <div id="contact-form">

                                <h1>Contact</h1>
                                <hr class="ligne">

                                <p>N'hésitez pas à me contacter pour plus de renseignements 
                                ou pour me proposer une opportunité professionnelle, je reviens vers vous très vite</p>
                                
                                <form method="post" action="traitement_form.php">

                                        <label for="nom">Votre nom</label>
                                        <input type="text" id="nom" name="nom" required>

                                        <label for="mail">Votre email</label>
                                        <input type="email" id="mail" name="email" required>

                                        <label>Votre message</label>
                                        <textarea name="message" rows="4" required></textarea>

                                        <button id="envoi" type="submit">Envoyer</button>
                                </form>

                                <?php if(isset($_GET['send'])){
                                if($_GET['send'] == 'success'){
                                echo '<p id="message_success">Votre message a bien été envoyé</p>';}
                                } ?>

                                <div class="back-wrap">
                                <a href="index.php" class="btn-back">back</a>
                                </div>
                        
                        </div>

                

                </main>

        <?php include_once("footer.php"); ?>

        </div>



<!-- javascript -->
<script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"
></script>

<script src="scripts/main.js"></script>

</body>
</html>
