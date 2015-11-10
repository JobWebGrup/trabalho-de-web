<?php 

$r1 = ' <div class="alert alert-danger" role="alert">Errado!</div>';
$r2 = ' <div class="alert alert-danger" role="alert">Errado!</div>';
if($_POST['q1']=='4'){
	$r1 = '<div style="visibility: " class="alert alert-success" role="alert">Certo!</div> ';
	
}
if($_POST['q2']=='3'){
	$r2 = '<div style="visibility: " class="alert alert-success" role="alert">Certo!</div> ';
	
}

include "helloworld.html";
?>