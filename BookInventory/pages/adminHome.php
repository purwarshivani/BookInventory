<?php
if($_SESSION["role"]==1){
$title = ' admin';
$books = new DatabaseTable('book_details');


$book_list = $books->findAll();


$content = loadTemplate('../template/admin/home.php', ['list'=>$book_list]);
}
else{
	$title = 'Error';
	$content='Permission Probhibted';

}
?>