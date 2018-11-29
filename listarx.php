<?php
session_start();
include_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Lista de Exames</title>

        <!-- Bootstrap core CSS -->
        <link href="style/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="style/css/inserir.css" rel="stylesheet">
    </head>
    <?php
    include_once('style/include/head.php');
    $path = $_GET['paciente'];
    $diretorio = dir($path);
    ?>

    <div class="container">

        <div class="starter-template">

            <div class="row">
                <div class="col-lg-12" style="text-align: left;">
                    <?php
                    //$dir = 'images/demo/';
                    $files = scandir($path);
                    rsort($files);
                    foreach ($files as $file) {
                        $ext = explode(".",$file);
                        if ($file != '.' && $file != '..' && ($ext[1] == "jpg" || $ext[1] == "JPG")) {
                            ?>
                            <div class="col-lg-3 img-single column column-block" style="text-align: center;">
                                <a data-open = "galleryModal">
                                    <?php
                                    //extrair data do nome do arquivo
                                    $from = "-X-";
                                    $to = "-";
                                    $sub = substr($file, strpos($file,$from)+strlen($from),strlen($file));
                                    $date = substr($sub,0,strpos($sub,$to));
                                    
                                    $data = DateTime::createFromFormat('Ymd', $date)->format('d-m-Y');
                                    echo $data;

                                    ?>
                                    <a href = "<?php echo $path . '/' . $file; ?>" target = "_blank"><img src = "<?php echo $path . '/' . $file; ?>" class = "thumbnail center-block" alt = "Image with object-fit"></a>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>

        </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="style/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="style/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="style/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
        $('.img-single').height($('.img-single').width());
    </script>
</body>
</html>