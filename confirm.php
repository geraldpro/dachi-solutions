<?php 
error_reporting(E_ALL);
if(isset($_GET['msg'])){
	if(is_numeric($_GET['msg'])){
		$msg = $_GET['msg'];
	}
}
$error_msg = array(

0 => '', 
1 =>'Your message has been sent. Thank you for choosing us. We will reply you soon.',
2=>'Your message was not sent. Pls try again.'

);

?>

