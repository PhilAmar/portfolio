<!DOCTYPE html>

<html lang="fr">
<head>
    <meta name="description" content="CV en ligne de Philippe Amarger, portfolio de mes projets web"/>
    <meta name="author" content="Philippe Amarger"/>
    <meta charset="UTF-8"/>

    <title>CV Philippe Amarger - contact</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="styles/styles.css"/>
</head>

<body>

        <div class="wrapper">

                <main id="sections-wrap-portfolio" class="animate__animated animate__backInDown">

                        <div id="portfolio-section"> 

                                <h1>Portfolio</h1>
                                <hr class="ligne">

                                <p>Je suis encore en formation, donc cette partie est en construction. 
                                Vous pouvez en revanche visiter mon Github en cliquant sur le bouton ci-dessous.
                                J'ai quelques petits projets à vous montrer, sur lequel je me suis amusé !
                                </p>

                                <a href="https://github.com/PhilAmar">
                                <img src="images/icons/github-large.png" alt="lien vers github">
                                </a>

                                <div id="cards">
                                
                                        <div class="card">
                                        
                                        <a href="https://shutterythm.art"><img src="images/shutterythm.png" alt="lien vers shutterythm"></a>

                                        <h3>Shutterythm.art</h3>

                                        <p>Projet de blog sur la photographie construit avec Wordpress et le thème OceanWP.</p>
                                        <h4>Technologies utilisées</h4> 
                                        <hr class="card-line">     
                                        <p>CMS wordpress, plugin Elementor, thème enfant Wordpress</p> 

                                        </div> 
                                </div>       

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