<?php
if($_SESSION["role"]==2){
$title = ' admin';
$books = new DatabaseTable('book_details');


$book_list = $books->findAll();


$content = loadTemplate('../template/user/Home.php', ['list'=>$book_list]);
}
else{
	$title='Error:';
	$content='you most access through user Id';
}
?>