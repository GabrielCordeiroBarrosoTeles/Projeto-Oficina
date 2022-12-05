<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Home</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<style type="text/css">
		.page-footer{
			margin-top: 5%;
			margin-bottom: 0px;
		}h5{
            margin-left:  100px;
        }.footer-copyright{
            margin-left: 400px;
        }.kk:hover{
            background-color: #303f9f;
        }body{
            background-color: #eeeeee;
        }.kkk{
            margin-left: 500px;
        }.kkkk:hover{
            background-color: #00695c;
        }.card-content{
            color: #00695c;
        }.card-body{
            text-align: center;
        }
	</style>
</head>
<body>
	<nav class="z-depth-4 red">
        <div class="nav-wrapper #00695c teal darken-3">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="hide-on-med-and-down left">
            <li class="kk"><a href="#"><img src="img/pobre1.png" alt="" srcset="" hei="-20%"></a></li>
                <li class="kk"><a href="home.php">Home</a></li>
                <li class="kk"><a href="cadastrar.php">Cadastrar OS</a></li>
                <li class="kk"><a href="exibir.php">Exibir OS</a></li>
                <li class="kk"><a href="pesquisar.php">Pesquisar OS</a></li>
                <li class="kk"><a href="editar.php">Editar OS</a></li>
                <li class="kk"><a href="excluir.php">Excluir OS</a></li>
                <li class="kk"><a href="relatorio.php">Relatório OS</a></li>
                <li class="kkkk"><a href="funcionario.php">Relatório Funcionário</a></li>
            <li class="kk"><a href="sair.php">Sair</a></li>
                
                <?php 
                    require './conexao.php';
                    session_start();
                    if((!isset($_SESSION['login'])==true) and (!isset($_SESSION['senha'])==true)){
                        unset($_SESSION['login']);
                        unset($_SESSION['senha']);
                        header('location:index.php');
                    }else{
                        echo "<li class='kkk'>
                        <i class='material-icons'>face</i></li> ".$_SESSION['login'];            
                    }
                ?>
            </ul>      
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li class="kkkk"><a href="home.php">Home</a></li>
        <li class="kkkk"><a href="cadastrar.php">Cadastrar OS</a></li>
        <li class="kkkk"><a href="exibir.php">Exibir OS</a></li>
        <li class="kkkk"><a href="pesquisar.php">Pesquisar OS</a></li>
        <li class="kkkk"><a href="editar.php">Editar OS</a></li>
        <li class="kkkk"><a href="excluir.php">Excluir OS</a></li>
        <li class="kkkk"><a href="relatorio.php">Relatório OS</a></li>
        <li class="kkkk"><a href="funcionario.php">Relatório Funcionário</a></li>
        <li class="kkkk"><a href="sair.php">Sair</a></li>
        <?php 
            require './conexao.php';
            session_start();
            if((!isset($_SESSION['login'])==true) and (!isset($_SESSION['senha'])==true)){
                unset($_SESSION['login']);
                unset($_SESSION['senha']);
                header('location:index.php');
            }else{
                echo "<li class=''>
                <i class='material-icons'>face</i></li> ".$_SESSION['login'];            
            }
        ?>
    </ul>
    
    <div class="slider">
    <ul class="slides">
        <li>
            <img src="img/baixinho_mecanico.png"> <!-- random image -->
            <div class="caption center-align">
                <h3></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
            </div>
        </li>
      
      
      <li>
          <img src="img/baixinho_mecanico.png"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      
      
      
      <li>
        <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      
      
      <li>
        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
    
    
    
    
    
  <div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card">
      <img src="img/eee_logo_02.jpg" class="card-img-top" width="- 200%" height="-100px";>
      <div class="card-body">
        <h5 class="card-title">Home</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="home.php"><button>Home</button></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/cadastro.jpg" class="card-img-top" height="3%">
      <div class="card-body">
        <h5 class="card-title">Cadastro</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="cadastrar.php"><button class="bt">Cadastro</button></a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/exibir.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Exibir</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="exibir.php"><button>Exibir</button></a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/pesquisar.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pesquisar</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="pesquisar.php"><button>Pesquisar</button></a>  
    </div>
    </div>
  </div>
</div>
<br>
<div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card">
      <img src="img/editar.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Editar</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="editar.php"><button>Editar</button></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/deletar.jpg" class="card-img-top"  width="">
      <div class="card-body">
        <h5 class="card-title">Deletar</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="excluir.php"><button>Deletar</button></a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/relatorio.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Relatorio</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="relatorio.php"><button>Relatorio</button></a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/sair.jpg " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sair</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="sair.php"><button>Sair</button></a>  
    </div>
    </div>
  </div>
</div>
    
    
   
     
      
       
   
 	<footer class="page-footer  z-depth-4 #00695c teal darken-3">
        <div class="container  z-depth-4">
            <div class="row">
            	<div class="col l6 s12">
                    <center><h6 class="white-text">CH Desenvolvimento de Sistemas WEB<br> (88)9.9915-5630</h6></center>
              </div>
              	
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            	© 2020 Todos os direitos reservados
            </div>
        </div>
    </footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
         $(document).ready(function(){
    $('.carousel').carousel();
  });
    $('.carousel.carousel-slider').carousel({
    indicators: true
  });
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  
  $(document).ready(function(){
      $('.slider').slider();
    });
    </script>
</body>
</html>          