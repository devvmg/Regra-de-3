<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet"> <!-- font-family: 'Pattaya', sans-serif;    -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet"> <!-- font-family: 'Nunito Sans', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet"> <!-- font-family: 'Alex Brush', cursive; -->

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Calculadora de Regra de 3</title>
  </head>

<body>
	<section id="calculadoraFundo">
        <div class="conteudoCalc">
            <div class="tituloCalc">
                <a href="#conteudo"><h1>Regra de <b>3</b> Online</h1></a>
            </div> <!--tituloCalc-->
            <div class="selecionador">
                <a class="seleciona_botao" href="?calc=granddir">Diretamente</a>
                <a class="seleciona_botao" href="?calc=grandinver">Inversamente</a>
            </div>
            <?php
                switch (@$_REQUEST["calc"])
			{
				case "grandinver":
					include("grandinver.php");
					break;
				default:
					include("granddir.php");
					break;
			}
            ?>

        </div> <!--conteudoCalc--> 
    </section> <!--calculadoraFundo-->
    <section id="conteudo">
        <h2> O que é uma Regra de Três?</h2>
        <p>
        É um método proporcional utilizado para encontrar um quarto valor, normalmente quando já têm-se os 
        outros 3 valores. Abrange outros conhecimento tais como grandezas, medidas, razões, proporções e etc.
        </p>
        <p>
            Ao começar a fragmentar a questão procurando as grandezas e os valores, você não pode apenas joga-los 
            de qualquer jeito na "fórmula padrão" da regra de três, você primeiro tem que identificar as grandezas 
            e descobrir se as grandezas são Diretamente ou Inversamente Proporcionais, confira abaixo o que significa 
            cada um desses tipos.
        </p>
        <br><br><br><br>
        <h3>Grandezas Diretamente Proporcionais</h3>
        <p>
            Esses tipos são simples de se compreender e determinar dentro de uma questão, neste caso, você terá que
            utilizar os valores que já tem e verificar se elas são diretas, ou seja, se as duas grandezas são crescentes 
            ou decrescentes igualmente 
        </p>
        <p>
            Para guia-lo melhor, vamos utiliza-la na prática com uma questão do ENEM (Exame Nacional do Ensino Médio) 
            que caiu na prova de 2012.
        </p>
        <br>
        <div class="questao">
            <p>
                <b>1)</b> Uma mãe recorreu à bula para verificar a dosagem de um remédio que precisava dar a seu filho. Na bula, 
                recomendava-se a seguinte dosagem: 5 gotas para cada 2kg de massa corporal a cada 8 horas.
                Se a mãe ministrou corretamente 30 gotas do remédio a seu filho a cada 8 horas, então a massa 
                corporal dele é de:
            </p>
            <p>a) 12kg</p>
            <p>b) 16kg</p>
            <p>c) 24kg</p>
            <p>d) 36kg</p>
            <p>e) 75kg</p>

            <br><br>

            <p>
                <b>RESOLUÇÃO:</b> Analisando as grandezas, temos 2 (Gotas e Massa do filho), agora veremos se ela é
                diretamente ou inversamente proporcionais:
            </p>

            <img src="imagens/questao1.png" alt="">

            <p>
                As setas vermelhas indicam que que as grandezas são crescentes, ou seja elas sempre vão aumentar, 
                sendo assim são Diretamente Proporcionais. Posto isto basta multiplicarmos CRUZADO igual indica o X em azul.
            </p>

            <br>

            <p>5x = 60</p>
            <p>x = 60 / 5</p>
            <p>x = 12 kg </p>
            <p> <i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i> <b>Resposta:</b> Letra A</p>
        </div><!--questao-->
        <br> <br> <br>
        <hr>
        <br> <br> <br>
        <h3>Grandezas Inversamente Proporcionais</h3>
        <p>
            Neste tipo, para que as grandezas sejam inversamente proporcionais, o aumento de uma das medidas 
            faz com com que a outra diminua proporcionalmente.
        </p>
        <p>
            Para guia-lo melhor, vamos utiliza-la na prática com uma questão que caiu no processo seletivo 
            do IFAL (Instituto Federal de Alagoas).
        </p>
        <div class="questao">
            <p>
                <b>2)</b> (IFAL) Um técnico em edificações percebe que necessita de 9 pedreiros para construir 
                uma casa em 20 dias. Trabalhando com a mesma eficiência, quantos pedreiros são necessários para 
                construir uma casa do mesmo tipo em 12 dias?
            </p>
            <p>a) 6</p>
            <p>b) 12</p>
            <p>c) 15</p>
            <p>d) 18</p>
            <p>e) 21</p>

            <br><br>

            <p>
                <b>RESOLUÇÃO:</b> Analisando as grandezas, temos 2 (Gotas e Massa do filho), agora veremos se ela é
                diretamente ou inversamente proporcionais:
            </p>

            <img src="imagens/questao2.png" alt="">

            <p>
                As setas vermelhas indicam que que as grandezas são crescentes e decrescentes, ou seja enquanto uma aumenta a outra diminui, 
                sendo assim são Inversamente Proporcionais. Posto isto basta multiplicarmos RETO igual indica o = em azul.
            </p>

            <br>

            <p>12x = 180</p>
            <p>x = 180 / 12</p>
            <p>x = 15 </p>
            <p> <i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i> <b>Resposta:</b> Letra C</p>
        </div><!--questao-->
    </section>
    <section id="veja">
        <div>
            <h1>Veja também</h1>
            <div>
                <iframe width="360" height="202" src="https://www.youtube.com/embed/0ELJU4NEwSo" title="COMO SOMAR OS NÚMEROS DE UM TEXTO (STRING) COM PYTHON [DICA FÁCIL]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="360" height="202" src="https://www.youtube.com/embed/uwnO4gVJ500" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
        </div>
    </section>
    <footer>
        <div class="interior_footer">
            <div class="itens_footer">
                <div class="imagem_forma"><a href="https://www.instagram.com/pythoncomentado/"><img src="imagens/pythoncomentado.png" alt=""></a></div>
                <p>&copy 2022 Arthur Antonoff dos Santos</p>
                <div class="imagem_forma"><a href="https://www.instagram.com/arthurantonoff/"><img src="imagens/arthur.jpg" alt=""></a></div>
            </div>
            <a href="https://devvini.com">Site e designs feitos por Dev. Vini</a>
        </div>
    </footer>
    
    
    <script src="https://kit.fontawesome.com/b7b3825ffa.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>