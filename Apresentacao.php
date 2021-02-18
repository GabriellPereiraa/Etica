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
            <div class="page-title">
                <h2 class="font-bold">
                    Apresentação
                </h2>

                <hr>

                <p class="Texto">
                Desde tempos imemoráveis, a conduta humana tem sido objeto de estudo. A ética é um dos tantos ramos da filosofia e se dedica, resumidamente, ao estudo da moral em todas as suas manifestações. Ela é uma das mais altas ou mais avançadas maneiras de harmonização e convivência social. Nas décadas recentes, a abordagem sobre ética vem adquirindo cada vez mais espaço, em particular, em virtude da grande extensão de práticas perversas que tem se apresentado em grande partes do mundo, em particular, em diversas instituições públicas e privadas. Assim, algumas questões contemporâneas são postas pela ética, dentre elas: em que consiste a felicidade? O que torna uma ação boa ou má? Justa ou injusta?
                </p>

                <br>

                <h2 class="font-bold">
                    Objetivo
                </h2>
                
                <hr>

                <p class="Texto">
                    <i class="fas fa-bullseye"></i> Apresentar uma sumária conceituação de ética e moral, bem como alguns sistemas éticos e seus teóricos ao longo da história (períodos clássico grego, moderno e contemporâneo).
                </p>

                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <div class="center">
                <div class="btn-group" id="btn-group">
                        <a href="#" class="btn ">Topo da Página</a>
                        <a href="Topico01.php" class="btn ">Proxima Página</a>
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