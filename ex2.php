<?php
$nota=-10;
if ($nota> 0 && $nota <10) {
	echo "aluno <span style='color:#ff0000'>Reprovado</span> com ".$nota. " valores";
	echo "<br>Deverá trabalhar mais para alcançar resultados positivos";
}
elseif ($nota>=10 && $nota<=20) {
echo "aluno <span style='color:#00ff00'>Aprovado</span> com ".$nota. " valores";
	echo "<br>Muito bom trabalho";

}
else{
        echo "aluno <span style='color:#00ff00'>invalido</span> com ".$nota. " valores";
}
?>