<?php include "cabecalho.php" ?>
 
<?php 
session_start();
require "./repository/FilmesRepositoryPDO.php";
require "./util/Mensagem.php";

$filmesRepository = new FilmesRepositoryPDO();
$filmes = $filmesRepository->listarTodos()
?>

<body>
<nav class="nav-extended #c0ca33 lime darken-1">
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="right">
            <li> <a href="/">Galeria</a></li>
            <li> <a href="/novo">Cadastrar</a></li>
        </ul>
    </div>
        <div class="nav-header center">
            <h1>CineTrack</h1>
        </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent #9e9d24 lime darken-2">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
</nav>

    <div class="container">
        <div class="row">         <!-- o foreach faz com que o array entre em loop e mostre algo na page  -->
            <?php foreach($filmes as $filme) : ?> 
                    <div class="col s12 m6 l3">
                        <div class="card hoverable">
                                <div class="card-image">
                                    <img src="<?= $filme->poster ?>">
                                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>         
                                </div>
                            <div class="card-content">      
                                <p class="valign-wrapper"><i class="material-icons #ffc107 amber-text">star</i> <?= $filme->nota ?></p>
                                <span class="card-title"><?= $filme->titulo ?></span>
                                <p><?= $filme->sinopse ?></p>
                            </div>
                        </div>
                    </div>
            <?php endforeach ?>
        </div>
    </div>
    
    <?+ Mensagem::mostrar() ?>
</body>
</html>