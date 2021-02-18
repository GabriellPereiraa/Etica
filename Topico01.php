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
                <i class="fas fa-folder"></i> 01 - Introdução à Ética
            </h2>

            <hr class="hr4">

            <p class="Texto"><strong>Objetivo</strong>  Contextualizar a ética como parte da história humana.</p>
            
            <hr class="hrLaranja">
            <div class="container">
                <p class="Texto">
                    “O homem é um ser que não tem garantido de antemão seu próprio ser, mas deve conquistá-lo por empenho de sua própria liberdade.”
                </p>
                <p class="Texto" style="color: var(--Cor01);">  
                - (OLIVEIRA, 1993, p.11)
                </p>
                
                <p class="Texto">
                O estudo da ética pertence primariamente à filosofia, mais em particular, ao seu campo de conhecimento denominado “filosofia moral”, “filosofia prática” ou, ainda, “axiologia” (teoria dos valores), pois se ocupa do agir do ser humano, suas escolhas, bem como dos meios utilizados para alcançá-las. Por isso, a ética contempla muitos aspectos do agir humano. Muito provavelmente já utilizamos essa palavra, ou mesmo a tenhamos escutado por outras pessoas. Às vezes, associamos-na a determinados tipos de comportamentos como, por exemplo, aquelas condutas que consideramos corretas e dignas de aprovação, contrastando com outros tipos de comportamentos que reputamos como indignos ou recusáveis. Desse modo, o conteúdo da palavra ética está estreitamente ligado a juízos que constantemente fazemos sobre a correção ou a incorreção das ações humanas, ou sobre a noção de certo e errado. Nesse sentido, a ética pretende conferir ao ser humano conhecimento que lhe permite saber eleger corretamente cada ato que venha a realizar.
                </p>
                <p class="Texto">
                A esse respeito, o filósofo grego Aristóteles (384-322 a.C.) escreveu em sua obra Ética a Nicômaco:
                </p>

                <p class="Texto">
                “a excelência moral também está ao nosso alcance, da mesma forma que a deficiência moral. Com efeito, onde está ao nosso alcance agir, também está ao nosso alcance não agir, e onde somos capazes de dizer ‘não’, também somos capazes de dizer ‘sim’.”
                </p>
                <p class="Texto" style="color:var(--Cor01);">
                – (ARISTÓTELES, 2001, p. 57)
                </p>

                <p class="Texto">
                Isso significa que, para esse filósofo, tanto a virtude quanto o vício estão em nosso poder. Fazer ou não fazer o bem e o correto são questões de conhecimento do que sejam o bem e o correto a se fazer, de modo que a posse desse conhecimento trabalha em conjunto com a escolha por agir de uma ou de outra maneira. Aristóteles acreditava, afinal, que o comportamento entendido como ideal era uma prática a ser perseguida, pois conduziria o indivíduo e a sociedade ao seu objetivo final de felicidade.
                </p>
                <p class="Texto">
                Esse estudo dos atos humanos indica que tais ações podem ser valoradas de diversos modos, isto é, pode-se atribuir-se a elas algum <span style="color:#FC6B30">juízo de valor (</span>bem e mal, certo e errado, correto e incorreto, admirável e deplorável<span style="color:#FC6B30">)</span>), se realizadas pela vontade e liberdade da pessoa. O ato humano que não seja realizado por meio de sua vontade, e em que esteja ausente sua liberdade, não entra no estudo do campo da ética, pois não pode ser considerado um exercício consciente do ser humano. Temos, portanto, que a ética está intimamente relacionada ao binômio ação e liberdade. Este, por seu turno, liga-se, ainda, às noções de escolha e de responsabilidade.
                </p>
                <p class="Texto">
                De maneira muito sintética, é possível dizer, também, que ética é o estudo sistemático da moralidade. Por sua vez, moralidade é o código (ou códigos) <span style="color:#FC6B30">normativo moral (</span>aceitável ou proibido dentro de um grupo e/ou época particular<span style="color:#FC6B30">)</span>. Tais códigos normativos ou comportamentais são reconhecidos pela comunidade numa época específica. Por exemplo, a lei é um tipo de código, um código legal que representa um mínimo aceitável de comportamento de um grupo particular (sociedade). De forma que,baseados na razão, o homem e as sociedades humanas foram estabelecendo valores fundamentais, sejam eles individuais ou sociais. A partir daí, foram derivados os deveres morais que, em geral, coincidem com os mesmos valores assumidos pelos sistemas jurídicos. Nesse sentido, os valores éticos aparecem consignados no direito, pois, no lugar de estarem situados em lugares diferentes, a ética e o direito estão em conformidade no que diz respeito à busca de uma conduta social desejável.
                </p>

                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <h3><i class="far fa-question-circle" style="height:25px;"></i> Qual a diferença entre ética e moral? Não seriam estas a mesma coisa?</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            Por sua etimologia e o modo como são referidas no dia a dia, podem parecer que são a mesma coisa. Em verdade não são, pois suas aplicações e referências trazem diferentes significados. Pode-se complementar dizendo, além disso, que as palavras ética e moral provêm, respectivamente, do grego e do latim.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
            <br>
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