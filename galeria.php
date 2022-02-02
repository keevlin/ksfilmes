<?php
 include_once('cabecalho.php');
?>
<?php

$filme1 = [
    "titulo"=>"Os Vingadores", 
    "nota" => 8.6,
    "sinopse" => "Os vingadores, são um filme bem bacana, para todo o publico",
    "poster" => ""
];







?>
<body>
    <nav class="nav-extended light-blue lighten-2">
        <div class="nav-wrapper ">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>KS FILMES</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent light-blue accent-4">
                <li class="tab"><a class="active" href="#">Todos</a></li>
                <li class="tab"><a href="assistidos.php">Assistidos</a></li>
                <li class="tab"><a href="favoritos.php">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <!--Fim do menu-->

    <div class="row">
        <!-- Primeira linha -->
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/u5X9qjUfIZDmlVJXJ7xJVyyHZFa.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content ">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i>8,8
                    </p>
                    <span class="card-title">Dose dupla</span>

                    <p>Bobby e Stig são dois agentes à paisana escalados para roubar um banco que serve de fachada para Máfia. </p>
                </div>
            </div>
        </div>

        <!-- Segundo Card -->
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9DT4WVqZqBEI9Kub18gZ3m1D89m.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content ">

                    <p class="valign-wrapper">
                        <!--Centralizar o icone com a nota-->
                        <i class="material-icons amber-text">star</i>9,0
                    </p>
                    <span class="card-title">Matrix</span>
                    <p>Em um mundo de duas realidades — a vida cotidiana e o que está por trás dela —,
                        Thomas Anderson terá que escolher seguir o coelho branco mais uma vez.</p>
                </div>
            </div>
        </div>
        
        <!-- Terceiro Card -->
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/gSmLUushIlmqFxFEB4uT6IM2ei2.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content ">

                    <p class="valign-wrapper">
                        <!--Centralizar o icone com a nota-->
                        <i class="material-icons amber-text">star</i>7,8
                    </p>
                    <span class="card-title">A Filha do Rei</span>
                    <p>Em busca de imortalidade, o rei Luís XIV rouba a força vital de uma sereia, 
                        mas tudo se complica quando sua filha ilegítima cria laços com a criatura mágica.</p>
                </div>
            </div>
        </div>

         <!-- Quarto Card -->
         <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="" alt="<?= $filme1["poster"];?>">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content ">

                    <p class="valign-wrapper">
                        <!--Centralizar o icone com a nota-->
                        <i class="material-icons amber-text">star</i><?= $filme1["nota"];?>
                    </p>
                    <span class="card-title"><?php echo $filme1["titulo"];?></span>
                    <p><?= $filme1["sinopse"];?></p>
                </div>
            </div>
        </div>
        
    </div>
    

</body>

</html>