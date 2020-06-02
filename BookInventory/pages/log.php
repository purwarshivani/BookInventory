<?php

$title="Welcome to BookInventory";
$content = loadTemplate('../template/login_template.php', []);

 if(isset($_POST['login'])){
		unset($_POST['login']);
		$login = new DatabaseTable('users');
	$password=($_POST['psw']);
	$fetch=$login->find('user_name',$_POST['user_name']);
	if($fetch->rowCount()>0){
			$data=$fetch->fetch();
			if($password==$data['psw']){
$_SESSION['sessUserId']=$data['user_id']; 
$_SESSION['logged_in']=true;
$_SESSION['role']=$data['user_role'];
if($data['user_role']==1){
	header('Location:index.php?page=adminHome');
			}else if($data['user_role']== 2){
header('Location:index.php?page=userHome');

			}		
			else{

			echo "<script>alert('Password Not Matched!');</script>";	
 			}
 		}
 	}
 }
?>