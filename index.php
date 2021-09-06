<?php include('header.php'); ?>

<body id="bodylogin">
    <!--Titulo-->
    <div class="row center-xs">
        <div class="col-xs-6">
            <h1 id="titulohead" class="titulo">Maipo Grande</h1>
        </div>
    </div>
    
    <!--Cuadro Login-->
    <div class="row center-xs around-xs borde cont-login">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="row center-xs">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-10 borde cuadro-login">
                    <h3 id="titlogin">Iniciar Sesión</h3>
                    <br>
                    <input class="inp-login" id="txtrut" type="text" placeholder="Rut">
                    <br>
                    <br>
                    <input class="inp-login" id="txtpass" type="text" placeholder="Contraseña">
                    <br>
                    <br>
                    <a href="admin.html"><button id="btnentrarlogin">Entrar</button></a>  
                </div>

            </div>
        </div>
    </div>


   <?php include('footer.php'); ?>

    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>