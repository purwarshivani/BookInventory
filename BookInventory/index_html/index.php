<?php
session_start();
require '../function/connect.php';
require '../databasetable/databasetable.php';
require '../function/load_template.php';


if(isset($_GET['page']))
{
	require '../pages/'.$_GET['page'].'.php';
}
else{

	require '../pages/log.php';
}
	$tempVars=[
	'title'=>$title,
	'content'=>$content
];

$html=loadTemplate('../template/templet.php',$tempVars);
echo $html;


?>