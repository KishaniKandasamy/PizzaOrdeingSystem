<?php include "order.php"; ?>
<!DOCTYPE html>

<html>
<head>
	<title>Pizza Home</title>
	<link rel="stylesheet"type="text/css"href="pizza.css">
</head>


<body >
<h2>WELCOME TO PIZZA HOME</h2>
	
<?php if (isset($_SESSION['message'])): ?>
	
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	
<?php endif ?>
		
		
		
		
	<form action = "customer.php" method = "Post">
	
	<input   type="Submit" name="adm" value=" Admin ">
		
	
		
		<a   href="customer.php?cus=<?php echo'set'?>">Order Pizza</a></div>
		

	</form>
	

<?php if (isset($_SESSION['message'])): ?>
	
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	
<?php endif ?>
	

	
	
</body>
</html>