<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div>
	 <form action="index.php?page=addbooks" method="POST">
	 	<div class="container">
	 		<h2>ADD BOOKS</h2>
	 	
				<label><b>Book Name</b></label>
				<input type="text" name="book_name"  value="<?php if(isset($books['book_name'])){
				echo $books['book_name'];}?>"  />
				
				<input type="hidden" name="book_id" value="<?php if(isset($books['book_id'])){
				echo $books['book_id'];}?>" />
				<label><b>Author</b></label>
				<input type="text" name="author_name" value="<?php if(isset($books['author_name'])){
					echo $books['author_name'];
				}
				?>"/>
				<label>Quantity</label>
				<input type="text" name="quantity" value="<?php if(isset($books['quantity'])){
					echo $books['quantity'];
				}
				?>"/>
				<input type="submit" name="add" value="Add Book" />
				</div>
			</form>




</body>
</html>