<?php
header ('Content-type: text/html; ');
session_start();
include_once "config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>Lista de pacientes</title>

  <!-- Bootstrap core CSS -->
  <link href="style/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="style/css/inserir.css" rel="stylesheet">
</head>
<?php
include_once('style/include/head.php');
?>

<div class="container">

  <div class="starter-template" style="padding-top:0px;">

    <div class="row">
      <div class="col-lg-12" style="text-align: left;">
        <ul class="alfabeto   flow-text">
         <li>
           <a href="?letra=a">A</a>
         </li>
         <li>
           <a href="?letra=b">B</a>
         </li>
         <li>
           <a href="?letra=c">C</a>
         </li>
         <li>
           <a href="?letra=d">D</a>
         </li>
         <li>
           <a href="?letra=e">E</a>
         </li>
         <li>
           <a href="?letra=f">F</a>
         </li>
         <li>
           <a href="?letra=g">G</a>
         </li>
         <li>
           <a href="?letra=h">H</a>
         </li>
         <li>
           <a href="?letra=i">I</a>
         </li>
         <li>
           <a href="?letra=j">J</a>
         </li>
         <li>
           <a href="?letra=k">K</a>
         </li>
         <li>
           <a href="?letra=l">L</a>
         </li>
         <li>
           <a href="?letra=m">M</a>
         </li>
         <li>
           <a href="?letra=n">N</a>
         </li>
         <li>
           <a href="?letra=o">O</a>
         </li>
         <li>
           <a href="?letra=p">P</a>
         </li>
         <li>
           <a href="?letra=q">Q</a>
         </li>
         <li>
           <a href="?letra=r">R</a>
         </li>
         <li>
           <a href="?letra=s">S</a>
         </li>
         <li>
           <a href="?letra=t">T</a>
         </li>
         <li>
           <a href="?letra=u">U</a>
         </li>
         <li>
           <a href="?letra=v">V</a>
         </li>
         <li>
           <a href="?letra=w">W</a>
         </li>
         <li>
           <a href="?letra=x">X</a>
         </li>
         <li>
           <a href="?letra=y">Y</a>
         </li>
         <li>
           <a href="?letra=z">Z</a>
         </li>
       </ul>

       <?php
       $directories = glob('exames/*' , GLOB_ONLYDIR);
       sort($directories);

       $nomes = array();

       foreach($directories as $dir){
        $nomes[0][] = $dir;
        $dir = explode(" - ",$dir);
        $nomes[1][] = substr($dir[0], 7);
      }
      $busca = $nomes[1];
      ?>

       <div class="form-group row">
        <div class="col-md-2">
          <label for="prontuario" class="col-form-label">Pesquisar nome</label>
        </div>
        <div class="col-md-10">
          <input class="form-control target1" type="text" value="" name="nome" id="searchBox1">
          <div id="response">

          </div>
        </div>
      </div>
      <table class="table" style="margin-top:15px;">
        <thead class="thead">
          <!--<tr>
            <th>Paciente</th>
          </tr>-->
        </thead>
        <tbody>
          <?php
          if(!isset($_GET['letra'])){
            $_GET['letra'] = 'a';
          }

          $filtered = array_filter($nomes[1], create_function('$a', 'return $a[0] == "' . strtoupper($_GET['letra']) . '";'));
          //$pacientes = array_splice($filtered, count($filtered) - 4, 4);

          if(isset($_GET['pagina'])){
            $filtered2 = array_slice($filtered, ((30 * $_GET['pagina']) - 30), 30, true);
          } else{
            $filtered2 = array_slice($filtered, 0, 30, true);
          }


          $cont2 = 0;
          if(isset($_GET['letra'])){
            foreach($filtered2 as $key => $no){
              if($cont2 == 0){
                echo "<tr>";
              }
              echo "<td><a href='listarx.php?paciente=".$nomes[0][$key]."'>".$no."</a></td>";
              $cont2++;
              if($cont2 == 3){
                echo "</tr>";
                $cont2 = 0;
              }

            }
          }


          if(!isset($_GET['pagina'])){
            $pagina = 1;
          } else{
            $pagina = $_GET['pagina'];
          }

          $num_exames = count($filtered);
          $num_paginas = ceil($num_exames/30);

          $x1 = "";
          $x2 = "";
          if($pagina == 1){
            $x1 = "disabled";
          }
          if($pagina == $num_paginas){
            $x2 = "disabled";
          }

          if($num_paginas > 5){
            $paginas = array();
            if($pagina <= 3){
              $paginas = array(1,2,3,4,5);
            } else if(($num_paginas-$pagina) < 3){
              $y = $num_paginas-4;
              while($y <= $num_paginas){
                $paginas[] = $y;
                $y++;
              }
            } else{
              $paginas = array($pagina-2,$pagina-1,$pagina,$pagina+1,$pagina+2);

            }
          } else{
            $paginas = array();
            $y = 1;
            while($y <= $num_paginas){
              $paginas[] = $y;
              $y++;
            }
          }

          ?>
        </tbody>
      </table>
    </div>
  </div>
  <nav aria-label="...">
    <ul class="pagination">
      <li class="page-item <?php echo $x1; ?>">
        <a class="page-link" href="listaexames.php?pagina=<?php echo ($pagina-1).'&letra='.$_GET['letra']; ?>" tabindex="-1" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Anterior</span>
        </a>
      </li>
      <?php
      foreach ($paginas as $pag) {
        if($pag == $pagina){
          echo '<li class="page-item active"><a class="page-link" href="#">'.$pag.'<span class="sr-only">(current)</span></a></li>';
        } else{
          echo '<li class="page-item"><a class="page-link" href="listaexames.php?pagina='.$pag.'&letra='.$_GET['letra'].'">'.$pag.'</a></li>';
        }
      }
      ?>
      <li class="page-item <?php echo $x2; ?>">
        <a class="page-link" href="listaexames.php?pagina=<?php echo ($pagina+1).'&letra='.$_GET['letra'];?>" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Próximo</span>
        </a>
      </li>
    </ul>
  </nav>

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

    <script>
      
     $(document).ready(function(){
        $("#searchBox1").keyup(function(){
          var query = $("#searchBox1").val();
          var query = query.normalize('NFD').replace(/[\u0300-\u036f]/g, "");

          if(query.length > 0){
            $.ajax(
            {
              url: 'buscapacientes.php',
              method:'POST',
              data: {
                search: 1,
                q: query
              },
              success: function (data){
                $("#response").html(data);
              }
            });
          } else{
            $("#response").html("");
          }
        });
      });
    </script>


  </body>
  </html>              

