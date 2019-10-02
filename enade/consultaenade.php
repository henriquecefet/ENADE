<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Gerador de Relatórios Enade</h1>
  <p>Informações sobre desempenhos de cursos superiores no Brasil</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Questionário</h3>
      <form action="/enade/devolvepdf.php" method="post">
        <p>Código do curso:</p><br>
        <input type="text" name="codigo" id="codigo" value=""><br>
        <p>Edição do Enade:</p><br>
        <input type="text" name="edicao" id="edicao" value=""><br><br>
        <input type="submit" id="Submit" value="Submit">
      </form>
    </div>
</div>

</body>
</html>
