<?php
if ( isset( $_POST['codigo'] ) ) {
  $codigo = $_REQUEST['codigo'];
  $edicao = $_REQUEST['edicao'];
  $dir = "relatorios";
  $arquivo =   $dir."/".$codigo.";".$edicao.".pdf";
  $filename="Relatório Enade";
  echo $arquivo;
  header('Content-type:application/pdf');
  header('Content-disposition: inline; filename="'.$filename.'"');
  header('content-Transfer-Encoding:binary');
  header('Accept-Ranges:bytes');
  @readfile($arquivo);
}
else{
  echo "Não foi";
  header("consultaenade.php");
}
 ?>
