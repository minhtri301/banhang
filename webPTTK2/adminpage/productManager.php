<?php 
	include '../function/admin/productManager.php';
	$product    = new products();
	$categories = new categories();
	$show='none';
	$showUpdate='none';
	$getUpdateValues=null;
	if(!empty($_POST['delete']))
	{
		$product->Delete($_POST['delete']);
		$show='true';	
	}
	if(!empty($_POST['update']))
	{
		$showUpdate='true';
		$getUpdateValues= $product->getUpdate($_POST['update']);

	}

	if( !empty($_POST['ProductName']))
{
	$product->update(
			$_POST['ProductName'],
			$_POST['Price'],
			$_POST['Link'],
			$_POST['kieudang'],
			$_POST['xuatxu'],
			$_POST['Category_Id'],
			$_POST['ProductId']
			
		);
}
	
?>


<div>
	<div>
		<h3 style="display: <?php print $show ?>">Xoa Thanh Cong</h3>
	</div>
</div>
<div class="main">	
	<?php foreach ($product->show() as $value) : ?>
	<div class="item_PM">	
		<div class="left_PM">
			<p class="productname"><?php print $value['ProductName'] ?></p>
			<img src="<?php print $value['Link'] ?>">
		</div>
		<div class="right_PM"> 
			
			
			
			
			<div class="infomation">
				<span>Loại (thực phẩm/thức uống) </span>		<span class="info2"><?php print( $value['kieudang']) ?>	</span>
			</div>
			<div class="infomation">
				<span>Xuất Xứ</span>		<span class="info2"><?php print( $value['xuatxu']) ?>	</span>
			</div>
		

			<div class="Update_Delete" style="display: flex;">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<input type="hidden" name="update" value="<?php  print($value['ProductId'])?>">
					<input type="submit" value="Sửa">
				</form>
				<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<input type="hidden" name="delete" value="<?php  print($value['ProductId'])?>">
					<input type="submit" value="Xoa">
				</form>
				

			</div>
		</div>
	</div>
	
		
	

<hr>	

<?php endforeach;?>	
</div>

<div class="update_product" style="display: <?php print $showUpdate ?>" >
	<div class="close">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<input type="submit" name="" value="close">
		</form>
		
	</div>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<select name="Category_Id">
		<?php foreach ($categories->get() as $value) : ?>
		 	<option value=" <?php  print $value['Id'];?> "><?php print $value['CategoryName'] ;?></option>
			
		<?php endforeach; ?>
	    </select><br>
	    <?php if(!empty($getUpdateValues)) foreach ($getUpdateValues as $value) : ?>
	    								<input type="hidden" name="ProductId" value="<?php print $value['ProductId'] ?>">
			<label>Product Name</label>	<input type="text" name="ProductName" value="<?php print ($value['ProductName']) ?>" ><br>
			<label>Price</label>		<input type="text" name="Price" value="<?php print $value['Price'] ?>"><br>
			<label>Link</label>			<input type="text" name="Link" value="<?php print $value['Link'] ?>"><br>
			<label>kieudang</label>			<input type="text" name="kieudang" value="<?php print $value['kieudang'] ?>"><br>
			<label>xuatxu</label>			<input type="text" name="xuatxu" value="<?php print $value['xuatxu'] ?>"><br>
		
			<input type="submit" name="" value="Add">
		<?php endforeach; ?>
	</form>



	
</div>
