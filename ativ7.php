<?php
$temperatura =0;
echo "<h1>A temperatura é de ". $temperatura ."º<h1>";
if($temperatura<=3){
	echo "dia gelado";
}
elseif ($temperatura >3 && $temperatura <=15) {
echo "dia frio";
}
elseif ($temperatura >15 && $temperatura <=29) {
echo "dia agradável";
}
else{
	echo "...começa a ficar demasiado calor";
}
?>
