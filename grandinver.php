<form method="post">
    <div class="calculadora">
        <div class="varLadoCima">
            <label>Var. I</label>
            <input type="text" id="num1" size="8" maxlength="8" name="num1">
     
            <input type="text" id="num2" size="8" maxlength="8" name="num2">
            <label>Var. II</label>
        </div> <!--varLadoCima-->
        <i class="fa fa-exchange fa-1x" aria-hidden="true"></i>
        <div class="varLadoBaixo">
            <label>Var. III</label>
            <input type="text" id="num3" size="8" maxlength="8" name="num3">

            <input type="text" id="num4" size="8" maxlength="8" name="num4">
            <label>Var. IV</label>
        </div> <!--varLadoBaixo-->

        <div class="respostas">
            <input type="submit" value="Calcular">
        </div><!--respostas-->
    </div> <!--calculadora-->
</form>

<div class="calculo">
    <?php
        
            if( isset($_POST['num1']) && 
                isset($_POST['num2']) && 
                isset($_POST['num3']) && 
                isset($_POST['num4']))
            {

                $var1 = $_POST['num1'];
                $var2 = $_POST['num2'];
                $var3 = $_POST['num3'];
                $var4 = $_POST['num4'];

                if($var1 == 'x' || $var1 == 'X')
                {
                    $total = $var1;
                    print("<p>$var3 . $var4</p>");
                    print("<p>---------</p>");
                    print("<p>$var2</p>");
                    $total = $var3 * $var4 / $var2;
                    echo"<h1>X = <b>$total</b></h1>";
                }
                else if($var2 == 'x' || $var2 == 'X')
                {
                    $total = $var2;
                    print("<p>$var3 . $var4</p>");
                    print("<p>---------</p>");
                    print("<p>$var1</p>");
                    $total = $var3 * $var4 / $var1;
                    echo"<h1>X = <b>$total</b></h1>";
                }
                else if($var3 == 'x' || $var3 == 'X')
                {
                    $total = $var3;
                    print("<p>$var1 . $var2</p>");
                    print("<p>---------</p>");
                    print("<p>$var4</p>");
                    $total = $var1 * $var2 / $var4;
                    echo"<h1>X = <b>$total</b></h1>";
                }
                else if($var4 == 'x' || $var4 == 'X')
                {
                    $total = $var4;
                    print("<p>$var1 . $var2</p>");
                    print("<p>---------</p>");
                    print("<p>$var3</p>");
                    $total = $var1 * $var2 / $var3;
                    echo"<h1>X = <b>$total</b></h1>";
                } 
                else
                {
                    echo"<p>Use Apenas 'X' ou 'x' para se referir a variável desconhecida</p>";
                }

            }
            else{}

    ?>
</div>                