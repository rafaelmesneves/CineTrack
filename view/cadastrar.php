<?php include "cabecalho.php" ?>

<body>
    <nav class="nav-extended #c0ca33 lime darken-1">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
            <li> <a href="/">Galeria</a></li>
            <li> <a href="/novo">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Cloro Filmes</h1>
        </div>  
    </nav>

    <div class="row">
        <form method="POST">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filmes</span>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" name="titulo" required>
                            <label for="titulo">Titulo do filme</label>
                        </div>
                    </div>

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea" name="sinopse"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step=".1" min="0" max="10" class="validate" name="nota" required>
                            <label for="nota">Nota</label>
                        </div>
                    </div>

                        <div class="file-field input-field">
                            <div class="btn #dce775 lime lighten-1 black-text">
                                <span>Capa</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="poster">
                            </div>
                        </div>

                </div>
                <div class="card-action">
                    <a class="btn waves-effect waves-light grey" href="/">Cancelar</a>
                    <button type="submit" class="waves-effect waves-light btn #afb42b lime darken-2">Cadastrar</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>

</html>