<?  include_once('init.php'); 
	if (!$_SESSION['u_status']) {echo "Você não está logado."; header('Location: '.$link_atual);}
$_GET['tipo']='pessoa'; 
$databaseObj->query("delete from telefone where pessoa_id=".$_GET['Id']);
$databaseObj->query("delete from ".$_GET['tipo']." where Id=".$_GET['Id']);
include_once('listar.php');
	?>

