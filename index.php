<!DOCTYPE html>
<html lang="fr">

    <head>
    <?php include ('../includes/head'); ?> 
    <! pourquoi mon fichier css ne s'applique pas ?? >
    </head>
    
    <body>
        
        <section>
        <?php include ('./includes/nav.html'); ?> 
        <?php include ('./includes/header.html'); ?> 
        </section> 

        <div class="container">
            <?php
                 if (isset($_GET['about-me'])) {
                    include './pages/about-me.html';} 
                elseif (isset($_GET['my-dreams'])) {
                    include './pages/my-dreams.html';} 
                elseif (isset($_GET['my-passions'])) {
                    include './pages/my-passions.html';} 
                else { include './pages/home.html';}
            ?>
        </div>
    </body>

    <footer>    
        <?php include ('./includes/footer.html'); ?> 
    </footer>

</html>