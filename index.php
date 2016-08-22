<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <meta charset="UTF-8">
      <title> Estação Açai - O açaí Original - com sabro de quero mais </title>
    </head>
    <body id="inicio">
      <?php include 'components/header.php' ?>
      <?php include 'components/menu.php' ?>
      <div class="container" >
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                
              </div>
            </div>
            <?php include 'components/produtos.php' ?>
            <?php include 'components/produtos.php' ?><?php include 'components/produtos.php' ?>
          </div>
          <div class="col-md-4">
            <?php include 'components/formularioDeCadastro.php' ?>

            <btn class="btn btn-default btn-acai center-block">
              CADASTRE-SE AGORA MESMO
            </btn>
          </div>


        </div>
        
      </div>
      <!-- rodape -->
      <?php include 'components/rodape.php' ?>

      <!-- fim rodape -->
      <!-- politica de privacidade modal -->
      <?php include 'components/politicaDePricacidade.php' ?>





      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src='js/scripts.js'></script>  
    </body>
    </html>