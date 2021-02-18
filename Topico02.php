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
                <i class="fas fa-folder"></i> 02 - Conceitos básicos
            </h2>

            <hr class="hr4">

            <p class="texto"><strong>Objetivo:</strong></p>

            <div class=col-1>
            </div>
            <div class=col-sm>
                <p class="Texto">
                    <i class="fas fa-arrow-right" style="color:#FC6B30"></i> Apresentar uma breve etimologia do termo ética;
                </p>
                <p class="Texto">
                    <i class="fas fa-arrow-right" style="color:#FC6B30"></i> Expor definição de ética e moral;
                </p>
                <p class="Texto">
                    <i class="fas fa-arrow-right" style="color:#FC6B30"></i> Demonstrar sua relação com a vida prática do ser humano.
                </p>
            </div>
            
            <hr class="hrLaranja">
            <div class="container">
                <p class="Texto">
                    <strong>Ética</strong> é derivada da palavra grega ethos (έθος), que pode assumir uma diversidade de sentidos. O modo mais usual de emprego desse termo tem sido para indicar “modo de ser”, “caráter”. De modo que caráter pretende significar o conjunto de qualidades e disposições que definem uma pessoa e, ao mesmo tempo, a diferencia das demais. O caráter é adquirido pelo hábito. O hábito, por sua vez, nasce da repetição de atos iguais. Assim, pode-se dizer que das ações passam-se aos hábitos e dos hábitos à vida real. Desse modo, surge o <strong>ethos, o modo de ser e agir</strong>, que é definido pelas características que os hábitos deixaram marcados no ser. O ser humano, constantemente, está construindo seu próprio modo de ser e agir, seu caráter, que vai se transformando no ethos, na <strong>morada</strong> habitual do ser.
                </p>

                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">“Morada” é uma outra possível tradução da palavra ethos.</p>
                </div>

                <p class="Texto">
                Já a palavra <strong>moral</strong> é proveniente do latim moralis, ou ainda, mor-moris, que quer dizer “costume”, “maneira”, “comportamento próprio”. Ela está relacionada com o ethos no sentido de que é um modo de ser que pode ser adquirido gradualmente, que tem diversas fases de desenvolvimento. Resumidamente, podemos dizer que moris significa, a exemplo do ethos, o modo de ser ou o caráter. No entanto, ao passo que o caráter é adquirido pelo hábito (portanto, no ato de viver), o costume se adquire por repetições não necessariamente intencionais. Desse modo, a ética tem a ver com o campo de investigação do agir humano, enquanto a moral está relacionada ao objeto dessa investigação. Conforme Adela Cortina (1995)
                </p>

                <p class="Texto">
                “a moral está ligada imediatamente à ação e prescreve a conduta, enquanto que a ética (filosofia moral) se pronuncia canonicamente, isto é, conforme as regras.”
                </p>
                <p class="Texto" style="color:var(--Cor01);">
                – (CORTINA, 1995, p. 29.) 
                </p>

                <p class="Texto">
                    Portanto, a moral é objeto de estudo da ética.
                </p>
                <p class="Texto">
                    Vejamos, a seguir, um breve quadro de conteúdos da ética e da moral:
                </p>

            </div>

            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Apresentacao.php" class="btn ">Página Anterior</a>
                    <a href="#" class="btn ">Topo da Página</a>
                    <a href="Topico02.php" class="btn ">Proxima Página</a>
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