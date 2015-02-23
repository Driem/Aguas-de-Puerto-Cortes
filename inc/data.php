<!-- INCLUDE -->
<?php include_once('conn.php') ?>

<!-- GET DATA -->
<?php 

	if(isset($_GET['client'])){

		$client = $_GET['client'];

		$r = $db->row(array(
			'table' => 'datos',
			'condition' => 'id = '.$client
		));

		$data = array(
			'status' => 'success',
			'data' => array(
				'id' => $r['id'],
				'nombre' => $r['nombre_negocio'],
				'cat' => $r['categoria'],
				'type' => $r['tipo']
			)
		);

		echo json_encode($data);

	}else{
		echo json_encode(array(
			'status' => 'error', 
			'msj' => 'Se requiere el codigo del cliente.'
		));
	}

?>

<!--

clave = numero de cuenta
abonado = Nombre de Abonado
nombreinquilino = NOmbre de Inquilino
terceraedad = Descuento de la Tercera Edad
descuento = Descuento aplicable al saldo total

sdo_servi1 = saldo en agua potable
sdo_servi2 = saldo en alcantarillado

-->