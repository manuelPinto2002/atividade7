<?php
$numero =50;
switch (true) {
	case ($numero >100):
		echo "valor muito alto";
		break;
	case ($numero <80 && $numero >51):
		echo "valor medio";
		break;
	case ($numero ===50):
		echo "valor perfeito";
		break;
	case ($numero <=10):
		echo "valor muito baixo";
		break;
	case ($numero ==0):
		echo "sem valor";
		break;
}
?>