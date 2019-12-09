<?php
session_start();

if ($_SESSION["loggued_on_user"])
	include("header_log.php");
else
	include("header.php"); 

include 'auth.php';

$link = mysqli_connect("localhost", "root", "root", "mysql");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link rel="stylesheet" type="text/css" href="shop.css"/>
    </head>
	<h2>Shop</h2>
	<form action="shop.php" method="post">
			Search by Category: <input type="text" name="foobar1login" value=""/>
			<br />
			<input type="submit" name="submit" value="search"/>
	</form>
	<body>
		<div id="prodlist">

<?php

	$query_display = "SELECT id, name, description, price, quantity, img FROM product WHERE quantity > 0 ORDER BY id";
	

	if (isset($_GET["add"])) {
		$query_quant = 'SELECT id, quantity FROM product WHERE id='.$_GET["add"];
		$quantity = mysqli_query($link, $query_quant);
		while ($quantity_row = mysqli_fetch_assoc($quantity)) {
			if ($quantity_row["quantity"] > $_SESSION['shop_'.$_GET["add"]]) {
				$_SESSION['shop_'.$_GET["add"]] += 1;
			}
		}
	}

	if ($result = mysqli_query($link, $query_display)) {
		if (mysqli_num_rows($result) == 0) {
			echo "There are no products to display";
		}
		else {
			while ($row = mysqli_fetch_assoc($result)) {
?>
	
		<section id="singprod">
			<div id="prodname">
				<?php echo $row["name"]."\n"; ?>
			</div>
			<div id="img"> 
			<?php
				echo '<img src="data:image/jpeg;base64,'.base64_encode($row['img']).'"height="100px"">';
			?>
			</div>
			<div id="proddesc">
				<?php echo $row["description"]."\n"; ?>
			</div>
			<div id="prodpric">
				$ <?php echo $row["price"]."\n"; ?>
				<button id ="butadd" onclick='window.location.href="shop.php?add=<?php echo $row["id"]?>"'>Add</button>
			</div>
		</section>
<?php
			}
		}
	}
?>
	</div>
	<div id="topay">
	 	<div id="subtotal">
<?php
	foreach($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'shop_') {
				$id = substr($name, 5, (strlen($name) - 5));
				$query_get = 'SELECT id, name, price FROM product WHERE id='.$id;
				$getres = mysqli_query($link, $query_get);
			
				while ($get_row = mysqli_fetch_assoc($getres)) {
					$sub = $get_row['price'] * $value;
					?>
					<p>
						<?php echo $get_row["name"].' x '.$value.' @ $'.$get_row["price"].' = $'.$sub."\n\n"; ?>
					</p>
					<?php
				}
			}
		}
		else {
			echo "Your cart is empyty";
		}
	}
?>
		</div>
	</div>

	</body>
</html>

<?php
	if ($_POST["login"] && $_POST["passwd"])
	{
		$login = $_POST["login"];
		$passwd = $_POST["passwd"];
		if (auth($login, $passwd))
		{
			$_SESSION["loggued_on_user"] = $login;
		}
		else
		{
			$_SESSION["loggued_on_user"] = "";
			echo "ERROR\n";
		}
	}
	
	include("footer.php");
?>
