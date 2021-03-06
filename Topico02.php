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
            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 02 - Conceitos básicos
            </h2>


            <p class="Texto"><strong>Objetivo:</strong></p>

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
            <p class="Texto">
                <strong>Ética</strong> é derivada da palavra grega ethos (έθος), que pode assumir uma diversidade de sentidos. O modo mais usual de emprego desse termo tem sido para indicar “modo de ser”, “caráter”. De modo que caráter pretende significar o conjunto de qualidades e disposições que definem uma pessoa e, ao mesmo tempo, a diferencia das demais. O caráter é adquirido pelo hábito. O hábito, por sua vez, nasce da repetição de atos iguais. Assim, pode-se dizer que das ações passam-se aos hábitos e dos hábitos à vida real. Desse modo, surge o <strong>ethos, o modo de ser e agir</strong>, que é definido pelas características que os hábitos deixaram marcados no ser. O ser humano, constantemente, está construindo seu próprio modo de ser e agir, seu caráter, que vai se transformando no ethos, na <strong>morada</strong> habitual do ser.
            </p>

            <div>
                <p class="CuriosidadeTitulo"> Curiosidade</p>
                <p class="CuriosidadeTexto">“Morada” é uma outra possível tradução da palavra ethos.</p>
            </div>
            <br>

            <p class="Texto">
            Já a palavra <strong>moral</strong> é proveniente do latim moralis, ou ainda, mor-moris, que quer dizer “costume”, “maneira”, “comportamento próprio”. Ela está relacionada com o ethos no sentido de que é um modo de ser que pode ser adquirido gradualmente, que tem diversas fases de desenvolvimento. Resumidamente, podemos dizer que moris significa, a exemplo do ethos, o modo de ser ou o caráter. No entanto, ao passo que o caráter é adquirido pelo hábito (portanto, no ato de viver), o costume se adquire por repetições não necessariamente intencionais. Desse modo, a ética tem a ver com o campo de investigação do agir humano, enquanto a moral está relacionada ao objeto dessa investigação. Conforme Adela Cortina (1995)
            </p>

            <div class="col-md-12">
                <blockquote class="blockquoteEad">
                    <p class="mb-0">“a moral está ligada imediatamente à ação e prescreve a conduta, enquanto que a ética (filosofia moral) se pronuncia canonicamente, isto é, conforme as regras.”</p>
                    <footer class="blockquote-footer">– (CORTINA, 1995, p. 29.)</footer>
                </blockquote>
            </div>
            <br>

            <p class="Texto">
                Portanto, a moral é objeto de estudo da ética.
            </p>
            <p class="Texto">
                Vejamos, a seguir, um breve quadro de conteúdos da ética e da moral:
            </p>

            <section id="quadroConteudo">
                <div class="table-responsive">
                    <table class="table table-hover" style="color: white;">
                        <thead class="table-ead">
                            <tr scope="col-12">
                                <th colspan="2" style="text-align:center; background-color:#4885AE">
                                    <h5><strong>QUADRO DE CONTEÚDOS</strong></h5>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col-md" style="background-color:#4885AE;">
                                    <h5><strong>ÉTICA</strong></h5>
                                </th>
                                <th scope="col-" style="background-color:#4885AE;">
                                    <h5><strong>MORAL</strong></h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Pensamento filosófico;
                                        </li>
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Ciência;
                                        </li>
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> É teórica, contemplativa, abstrata;
                                        </li>
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Busca a universalidade.
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Objeto de estudo do pensamento filosófico (deontologia ou teoria dos deveres);
                                        </li>
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Objeto de estudo da ciência ética;
                                        </li>
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Conjunto de normas, princípios e valores com os quais se regula a conduta humana.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Busca descrições e explicações gerais para os problemas morais.
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> É prática;
                                        </li>
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Executa-se;
                                        </li>
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Exerce-se.
                                        </li>
                                        <ul class="list-unstyled">
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Reflexão teórica.
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Modifica a própria vida.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Conjunto de teorias acerca das obrigações normativas baseadas na observação dos atos reais da conduta.
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Conjunto de deveres, normas e valores.
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Seu caráter prático ou normativo é derivado de seu objeto de estudo, ou seja, da moral.
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            <i class="fas fa-bullseye Azul"></i> Possui caráter eminentemente normativo e prático.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="table-ead text-white">
                                <th colspan="2" style="text-align: center; background-color:#4885AE">
                                    <h5><strong>AMBAS REALIDADES SÃO CONCOMITANTES</strong></h5>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
            </section>

            <br>
            <p class="Texto">
            Qualquer tentativa de definição do que venha a ser ética, assim como qualquer outra ciência, é resultado de uma investigação do pensamento sobre um objeto específico. Por isso, a ética é uma ciência normativa da atividade humana ordenada ao bem. Mais que isso, ao bem comum. Ela é uma ciência prática e normativa. Isso quer dizer que se dedica ao estudo dos atos, porém, não no sentido daquilo que estes são, mas como deveriam ser. Por esse motivo, o estudo da ética não ficou restrito ao campo da filosofia, mas dialoga e se faz presente em tantas outras ciências e áreas do saber. Por exemplo, a metafísica, a psicologia, a sociologia, a teologia, a religião e o direito são algumas das ciências e campos do saber afins que se relacionam com a ética, pois cada um desses saberes, a seu modo, refere-se às leis que regem o comportamento humano.
            </p>

            <div class="row">
                <div class="col-1 center border" style="background-color:#4885AE;">
                    <p class="Texto" style="color:white;">
                        Exemplo
                    </p>
                </div>
                <div class="col-sm center border">
                    <p class="Texto">
                        Assim, quando alguém comete um roubo ou assassinato, não foi apenas sua mão que praticou tal ato, mas a pessoa em sua integralidade. Isso significa dizer que tantos elementos estão ali presentes: sua vontade, desejo, pensamento, emoções, intencionalidade, motivação, influências, conhecimento e assim por diante.
                    </p>
                </div>
            </div>
            <br>

            <p class="Texto">
            A conduta é uma expressão da pessoa humana em sua integralidade. Desse modo, quando se julga um ato, é preciso valorá-lo em sua profundidade expressa na pessoa. Ao mesmo tempo, a ética considera o sujeito enquanto indivíduo e enquanto membro de uma sociedade com outros indivíduos.
            </p>

            <p class="Texto">
            Nesse sentido, as estruturas que caracterizam o homem em seu aspecto individual e social entram no jogo das relações sociais. A pessoa humana é, por um lado, um indivíduo, entendido no sentido pleno. Em outras palavras: não dividido, não diluído. Entretanto, é, também, uma realidade que se “auto-possui”, mas que está aberta ao outro, às demais pessoas, formando, assim, um laço de relações comunitárias com o “nós”. Por isso, a ética – ou as teorias éticas – compreendem que a pessoa é complementada, realizada, com a estrutura da comunidade em que está inserida. Em outras palavras, a relação humana se dá a partir de um “eu” que se abre ao “outro eu”, a um “tu”, que se transforma em um “nós”.
            </p>

            <br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico03.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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