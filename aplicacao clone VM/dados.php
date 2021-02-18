<?php

$sistema = $_POST['sistemaoperacional'];
$nome = $_POST['nome'];
$memoria = $_POST['memoria'];
$cpu = $_POST['cpu'];
chdir('C:/Program Files/Oracle/VirtualBox');

if ($sistema == "Linux"){
	$output = shell_exec('"VBoxManage.exe" clonevm ubuntux --name="'.$nome.'" --register --mode=all');
	$memoriacpu = shell_exec('vboxmanage modifyvm "'.$nome.'" --memory '.$memoria.' --cpus '.$cpu.'');
} else {
	$clonar = shell_exec('"VBoxManage.exe" clonevm windows --name="'.$nome.'" --register --mode=all');
	$memoriacpu = shell_exec('vboxmanage modifyvm "'.$nome.'" --memory '.$memoria.' --cpus '.$cpu.'');
}
echo "<script>alert('Máquina".$nome." clonada com sucesso')</script>";
header('Location: index.php');

?>