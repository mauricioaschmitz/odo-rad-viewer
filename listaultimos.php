<?php
header ('Content-type: text/html; charset=iso-8859-1');
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
           <a href="listaexames.php?letra=a">A</a>
         </li>
         <li>
           <a href="listaexames.php?letra=b">B</a>
         </li>
         <li>
           <a href="listaexames.php?letra=c">C</a>
         </li>
         <li>
           <a href="listaexames.php?letra=d">D</a>
         </li>
         <li>
           <a href="listaexames.php?letra=e">E</a>
         </li>
         <li>
           <a href="listaexames.php?letra=f">F</a>
         </li>
         <li>
           <a href="listaexames.php?letra=g">G</a>
         </li>
         <li>
           <a href="listaexames.php?letra=h">H</a>
         </li>
         <li>
           <a href="listaexames.php?letra=i">I</a>
         </li>
         <li>
           <a href="listaexames.php?letra=j">J</a>
         </li>
         <li>
           <a href="listaexames.php?letra=k">K</a>
         </li>
         <li>
           <a href="listaexames.php?letra=l">L</a>
         </li>
         <li>
           <a href="listaexames.php?letra=m">M</a>
         </li>
         <li>
           <a href="listaexames.php?letra=n">N</a>
         </li>
         <li>
           <a href="listaexames.php?letra=o">O</a>
         </li>
         <li>
           <a href="listaexames.php?letra=p">P</a>
         </li>
         <li>
           <a href="listaexames.php?letra=q">Q</a>
         </li>
         <li>
           <a href="listaexames.php?letra=r">R</a>
         </li>
         <li>
           <a href="listaexames.php?letra=s">S</a>
         </li>
         <li>
           <a href="listaexames.php?letra=t">T</a>
         </li>
         <li>
           <a href="listaexames.php?letra=u">U</a>
         </li>
         <li>
           <a href="listaexames.php?letra=v">V</a>
         </li>
         <li>
           <a href="listaexames.php?letra=w">W</a>
         </li>
         <li>
           <a href="listaexames.php?letra=x">X</a>
         </li>
         <li>
           <a href="listaexames.php?letra=y">Y</a>
         </li>
         <li>
           <a href="listaexames.php?letra=z">Z</a>
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
          <label for="prontuario" class="col-md-2 col-form-label">Nome</label>
        </div>
        <div class="col-md-10">
          <input class="form-control target1" type="text" value="" name="nome" id="searchBox1">
          <div id="response">

          </div>
        </div>
      </div>
      <table class="table" style="margin-top:50px;">
        <thead class="thead">
          <tr>
            <th>Paciente</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $filtered = $nomes[1];
          $filtered2 = array();



          $cont2 = 0;
          foreach($filtered as $key => $no){
            if($cont2 == 0){
              echo "<tr>";
            }
            
            $data1 = date ("Y-m-d H:i:s.",filemtime($nomes[0][$key]));
            $data2 = date ("Y-m-d H:i:s");
            $data1 = new DateTime($data1);
            $data2 = new DateTime($data2);
            $dteDiff  = $data1->diff($data2);
            $data3 = $dteDiff->format("%Y-%m-%d %H:%I:%S");

            if($data3 < '00-0-0 23:59:59'){
              $filtered2[] = $nomes[0][$key];
              echo "<td><a href='listarx.php?paciente=".$nomes[0][$key]."'>".$no."</a></td>";
            }
            $cont2++;
            if($cont2 == 3){
              echo "</tr>";
              $cont2 = 0;
            }

          }
          ?>
        </tbody>
      </table>
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

