<!DOCTYPE html>

<html lang="fr">
<head>
    <meta name="description" content="CV en ligne de Philippe Amarger, developpeur web"/>
    <meta name="author" content="Philippe Amarger"/>
    <meta charset="UTF-8"/>

    <title>CV Philippe Amarger</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="styles/styles.css"/>
</head>

<body>

<div class="wrapper">

    <main id="sections-wrap-home" class="animate__animated animate__backInDown">

        <div id="text-column">

            <div class="inner">

                <h1>Philippe Amarger</h1>
                <hr class="ligne-column">

                <h3>Développeur web full-stack</h3>

                <p>Je suis actuellement en plein apprentissage du métier complexe de développeur web.
                    Je suis en reconversion du marketing web car j'ai toujours voulu connaitre la technique se cachant derrière 
                    le web et les applications mobiles. Mon parcours m'a permis de me familiariser autant au front-end (HTML, CSS, JS, Jquery, AJAX)
                    qu'au back-end (PHP, SQL, Symfony) et à d'autres frameworks comme Angular ou Ionix.
                    Bonne navigation ! 
                
                </p>

                <div id="buttons">
                    <a href="portfolio.php" class="btn-nav">portfolio</a>
                    <a href="contact.php" class="btn-nav">contact</a>
                    <a href="documents/cvpa.pdf" download="cv.pdf" class="btn-nav">mon CV</a>
                </div>
            </div>
        </div>

        <div id="img-column">
          <img id="portrait" src="images/profile_pic.jpg" alt="photo de profil portrait">
          <img id="paysage" src="images/profile_pic_large.jpg" alt="photo de profil paysage">
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
