<nav class="navbar navbar-fixed-top navbar-dark bg-inverse" style="padding:0px;">
        <a class="navbar-brand" href="listaexames.php" style="padding:9px;">
        <?php 
        if ((basename($_SERVER['PHP_SELF'])) === "listaexames.php"){
            echo "Visualizador de Imagens Radiográficas";
        } else {
            echo "Visualizador de Imagens Radiográficas - Voltar para Página Inicial";
        }
        ?>
        </a>
</nav>