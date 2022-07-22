
<?php 
include '../function/admin/productManager.php';
$category = new categories();
$product  = new products();
$mess=null;
if( !empty($_GET['category']) )
{
	$category->insert($_GET['category']);
	$mess='Thành Công';
}

if( !empty($_GET['ProductName']))
{
	$product->insert(
			$_GET['ProductName'],
			$_GET['Price'],
			$_GET['Link'],
			$_GET['kieudang'],
			$_GET['xuatxu'],
			$_GET['Category_Id']
		);
}

?>


<div>	

	<div class="category">
		<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
				<input type="text" name="category">
				<input type="submit" name="" value="Add Category">		
		</form>
		<?php echo $mess; ?>
	</div>	
	<div class="Product">	
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
			<select name="Category_Id">
			<?php foreach ($category->get() as $value) : ?>
			 	<option value=" <?php  print $value['Id'];?> "><?php print $value['CategoryName'] ;?></option>
				
			<?php endforeach; ?>
		    </select><br>
			<label>Product Name</label><input type="text" name="ProductName"><br>
			<label>Price</label><input type="text" name="Price"><br>
			<label>Link</label><input type="text" name="Link"><br>
			<label>Loại (thức uống/thực phẩm)</label><input type="text" name="kieudang"><br>
			<label>xuatxu</label><input type="text" name="xuatxu"><br>
			

			<input type="submit" name="" value="Add">

		</form>
	</div>	

</div>
