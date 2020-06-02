<?php
if($_SESSION["role"]==1){

$title = 'Add book';
$books = new DatabaseTable('book_details');
if(isset($_GET['id'])){
	$kitab = $books->find('book_id', $_GET['id']);
	$dt = $kitab->fetch();
}
else{
		$dt=[];
	}
$content = loadTemplate('../template/admin/addbookTemp.php', ['books'=>$dt]);

if (isset($_POST['add'])){
	$criteria =[
		'book_id'=> $_POST['book_id'],
		'book_name'=>$_POST['book_name'],
		'author_name' => $_POST['author_name'],
		'quantity'=> $_POST['quantity']
	];
	$books-> save($criteria,'book_id');
	echo "data is saved ";
	header('Location:index.php?page=adminHome');

}


}
else{
	$title = 'Error';
	$content='Permission Probhibted';

}
?>