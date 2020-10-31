<?php



$Gelen_not1 = $_POST["birincinot"];
$Gelen_not2 = $_POST["ikincinot"];
$Gecme_notu = $_POST["gecmenotu"];

//--Geçtimi kaldımı hesaplanıyor

if(($Gelen_not1 + $Gelen_not2) /2 >= ($Gecme_notu)){
	echo "Dersten başarıyla geçtiniz!";
}else{
	echo "Dersi geçemediniz!";
}

?>