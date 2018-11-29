<?php
header ('Content-type: text/html;');
if (isset($_POST['search'])) {
  $response = "<ul><li>Nenhum paciente encontrado!</li></ul>";

  $directories = glob('exames/*' , GLOB_ONLYDIR);
  sort($directories);

  $nomes = array();

  foreach($directories as $dir){
    $nomes[0][] = $dir;
    $dir = explode(" - ",$dir);
    $nomes[1][] = substr($dir[0], 7);
  }

  $busca = $nomes[1];

  $input = preg_quote(strtoupper($_POST['q']), '~');

  $result = preg_grep('~' . $input . '~', $busca);

  if (!empty($result)) {
    $response = "<ul>";

    foreach($result as $res){
      $response .= "<a href='listarx.php?paciente=exames/".$res."'><li>" . $res . "</li></a>";
    }

    $response .= "</ul>";
  }


  exit($response);
}
?>