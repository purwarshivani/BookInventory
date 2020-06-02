<?php
if($_SESSION["role"]==1){
	$title = 'Delete Books';
	$data = new DatabaseTable('book_details');

	if(isset($_POST['delt'])){

		$del= $data->find('book_id', $_POST['id']);
		if($del!=null){
			$data->delete('book_id', $_POST['id']);
		}
	}
	header('Location:index.php?page=adminHome');
	}


else{
	$title = 'Error';
	$content='Permission Probhibted';

}
?>

