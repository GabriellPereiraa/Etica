<?php
// HEADER
include('layout/header.php');
?>

<body>


    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <h2 class="font-bold Azul">
                <i class="fas fa-folder"></i> 03 - Concepções éticas
            </h2>

            <hr class="hr4">

            <p class="Texto"><strong>Objetivo:</strong> Apresentar alguns sistemas éticos e seus principais teóricos</p>
            <hr class="hrLaranja">

            <p class="Texto">
            Ao longo da história, foram formulados diversos sistemas éticos. Os primeiros filósofos da Grécia Antiga se colocavam a pergunta, antes de tudo, pelo ser de todas as coisas, ou seja, pela sua “verdadeira realidade” ou sua “autêntica natureza”, uma vez que muitas vezes as “aparências enganam”. De modo que alguns deles não demoraram a impor-se a pergunta:

            </p>
        </div>

        <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.php" class="btn ">Página Anterior</a>
                    <a href="#" class="btn ">Topo da Página</a>
                    <a href="Topico03.php" class="btn ">Proxima Página</a>
                </div>
        </div>

    </div> <!-- CONTEUDO FIM -->

<!-- FOOTER -->
<?php include('layout/footer.php') ?>

</div> <!-- DIV MAIN FIM -->

<!-- FOOTER JS -->
<?php include('layout/js.php') ?>

</body>

</html>