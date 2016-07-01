<html xmlns="http://www.w3.org/1999/xhtml">
  <title>Super X</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="generator" content="Bootply" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="Content/csst/styles.css" rel="stylesheet" type="text/css" />
  <link href="Content/cssl/lightbox.css" rel="stylesheet" type="text/css" />
  <link href="Content/cssl/screen.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/png" href="Content/img/png/favicon.ico" />

<script src="Content/jst/lightbox-2.6.min.js" type="text/javascript"></script>
        
  <script type="text/javascript" src="ajax.js"></script>
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<style>

body
{
    background: white;
    overflow: hidden;
}

#lblResposta
{color:Green;}

</style>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
              <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
                <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    <li>
                      <a><h3>Super X</h3> <i class="glyphicon glyphicon-heart-empty"></i> Veronica Zazula</a>
                    </li>
                </ul>
              </div>
            <!-- /sidebar -->
          
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                
                <!-- top nav -->
                <div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand logo"><img src="Content/img/book.png" width="60px"/> Lista  de Tarefas </a>
                    </div>
                    <nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="viewcolaborador.php"><i class="glyphicon glyphicon-home"></i> Home</a>
                    </ul>
                    </nav>
                </div>
                <!-- /top nav -->

              
    <div class="Container">
        <div class="col-xs-12">

        <input type="button" name="ctl00$ContentPlaceHolder1$Button1" value="Buscar por Nome" id="ContentPlaceHolder1_Button1" class="btn btn-warning" onclick="getDados();"/> &nbsp &nbsp
        <input type="button" name="ctl00$ContentPlaceHolder1$Button2" value="Buscar por Setor" id="ContentPlaceHolder1_Button2" class="btn btn-warning" onclick="getDados();" />
        </div>
        <br /> <br />
        <div>
  <table cellspacing="0" rules="all" class="grid" border="1" id="ContentPlaceHolder1_gridLivro" style="width:100%;border-collapse:collapse;">
    <tr>
      <th scope="col">____MATRICULA____</th><th scope="col">__________DATA__________</th><th scope="col">________TAREFA________</th>
    </tr>
    <tr>
  <?php 
  //echo $retorno['cod'];
  // se o número de resultados for maior que zero, mostra os dados 
  if($total > 0) {
   // inicia o loop que vai mostrar todos os dados 
    do {
      if($linhax['cod'] == $retorno['cod']){ //pega apenas o funcionario logado.
?>
  <td><?=$linhax['cod']?></td><td><?=$linhax['data']?></td><td><?=$linhax['tarefa']?></td>
  </tr>
<?php
}
// finaliza o loop que vai mostrar os dados 
}while($linhax = mysql_fetch_assoc($dados)); 
// fim do if 
}
?>
  </table>
  </table>
</div>
    </form>
</div>


        </div>
  </div>
  <!-- scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="Content/jst/scripts.js" type="text/javascript"></script>
        <script src="Content/jst/bootstrap.min.js" type="text/javascript"></script>
        <script src="Content/jsl/jquery-1.11.0.min.js"></script>
      <script src="Content/jsl/lightbox.js"></script>
        <script src="Content/jsl/lightbox.min.js"></script>


</body>
</html>