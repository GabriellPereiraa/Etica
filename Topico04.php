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
                <i class="fas fa-folder"></i> 04 - Visão Contemporânea
            </h2>

            <hr class="hr4">

            <p class="Texto"><strong>Objetivo:</strong> Abordar o debate atual sobre ética.</p>
            <hr class="hrLaranja">
            <div class="container">

            </div>
        </div>

        <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico03.php" class="btn ">Página Anterior</a>
                    <a href="#" class="btn ">Topo da Página</a>
                    <a href="Referencias" class="btn ">Proxima Página</a>
                </div>
        </div>
        
        <!-- SCRIPT LIGHTBOX -->
        <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });                    
                </script>

    </div> <!-- CONTEUDO FIM -->

<!-- FOOTER -->
<?php include('layout/footer.php') ?>

</div> <!-- DIV MAIN FIM -->

<!-- FOOTER JS -->
<?php include('layout/js.php') ?>

</body>

</html>