<?php
include_once('cabecalho.php');
?>
<body>
    <nav class="nav-extended light-blue lighten-2">
        <div class="nav-wrapper ">
            <ul id="nav-mobile" class="right">
                <li ><a href="galeria.php">Galeria</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>KS FILMES</h1>
            
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent light-blue accent-4">
                <li class="tab"><a class="active" href="galeria.php">Todos</a></li>
                <li class="tab"><a href="assistidos.php">Assistidos</a></li>
                <li class="tab"><a href="favoritos.php">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <!--Fim menu-->

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card ">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filme</span>
                    
                    <!--Input do titulo-->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" required>
                            <label for="titulo">Nome do Filme</label>
                        </div>
                    </div>

                    <!--Descrição do filme-->

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Nota do filme-->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step=".1" min=0 max=10 class="validate" require>
                            <label for="nota">Nota</label>
                        </div>
                    </div>

                    <div class="file-field input-field">
                        <div class="btn  light-blue">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>

                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
                        <a href="#" class="waves-effect waves-light btn light-blue accent-4 ">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>