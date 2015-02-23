<!-- DATABASE CONNECTION -->

<?php 


include_once('mysql.class.php');

function is_localhost() {
	$whitelist = array( '127.0.0.1', '::1' );
	if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) )
		return true;
}

if(is_localhost()){
	$conn = array(
	'host' => '127.0.0.1',
	'user' => 'root',
	'pass' => 'root',
	'db' => 'ccich');
}else{
	$conn = array(
	'host' => '127.0.0.1',
	'user' => 'texacoch_ticket',
	'pass' => 'Error.404@',
	'db' => 'texacoch_ticket');
}
 
$db = new mysql($conn);

?>