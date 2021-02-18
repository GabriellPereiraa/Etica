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

                <h3 class="font-bold">Referências</h3>
                <hr>

                <ul style="list-style: none;">
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> ARISTÓTELES. <strong>Ética a Nicômacos</strong>. Brasília: UnB, 2001.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> CORTINA, Adela; MARTÍNEZ, Emilio. <strong>Ética</strong>. Madrid: Akal, 1996.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> DÍAZ, Francico Javier de la Torre. <strong>Ética y deontologia jurídica</strong>. Madrid: Dykinson, 2000.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> KANT, Immanuel. <strong>A metafísica dos costumes </strong>. Bauru: Edipro, 2008
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> KANT, Immanuel. <strong>Crítica da razão prática</strong>. Lisboa: Edições 70.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> NAGEL, Thomas. <strong> The possibility of altruism</strong>. New Jersey: Princeton University Press, 1970. 
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> OLIVEIRA, Manfredo Araújo de. <strong>Ética e sociabilidade</strong>. São Paulo: Loyola, 1993.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> RIBEIRO, Luís Távora Furtado (et. al.). <strong>Ética em três dimensões</strong> . Fortaleza: Brasil Tropical, 2003.CORTINA, Adela; MARTÍNEZ, Emilio. <strong>Ética</strong>. Madrid: Akal, 1996.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> DÍAZ, Francico Javier de la Torre. <strong>Ética y deontologia jurídica</strong>. Madrid: Dykinson, 2000.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> KANT, Immanuel.<strong> A metafísica dos costumes</strong>Bauru: Edipro, 2008.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> KANT, Immanuel. <strong>Crítica da razão prática</strong>. Lisboa: Edições 70, 2004.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> NAGEL, Thomas. <strong>The possibility of altruism</strong>. New Jersey: Princeton University Press, 1970.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> OLIVEIRA, Manfredo Araújo de. <strong>Ética e sociabilidade</strong>. São Paulo: Loyola, 1993
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> PLATÃO. <strong>A República</strong>. São Paulo: Martin Cloret, 2005. RIBEIRO, Luís Távora Furtado (et. al.). <strong> Ética em três dimensões</strong>.  Fortaleza: Brasil Tropical, 2003
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> VÁZQUEZ, Adolfo Sánchez.<strong> Ética</strong>. 21.ed. Rio de Janeiro: Civilização Brasileira, 2001.
                    </li>
            </div>

        </div>

        <br>
        <div class="center">
            <div class="btn-group" id="btn-group">
                <a href="Topico04.php" class="btn ">Página Anterior</a>
                <a href="#" class="btn ">Topo da Página</a>
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