<?php 
include 'header.php';
include '../function/page/product_for_index.php';

$products = new products();





function Connection()
{ 
      $con = new mysqli("localhost","root","Abc1234567","tri");
      return $con;
}




$title="";
$sql=null;
if (is_numeric($_GET['Id']))
{
 $sql="select * from products where Id='".$_GET['Id']."'";
 $title="XUẤT XỨ";
}
else
{
	$sql="select * from products where ProductName like '%" .$_GET['Id']."%'";
	$title="Tìm kiếm của kết quả ' ".$_GET['Id']." '";

}

function showthuonghieu($sql)
{

   return connection()->query($sql);
}
$result=showthuonghieu($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sieu Thi</title>
	 <link rel="stylesheet" type="text/css" href="../style/THUONGHIEU.css">
</head>
<body>
	<div> 
      <h3 id='tieudethuonghieu'> <?php echo $title; ?> </h3>
    </div>
   <div class="container-list">   
        <?php foreach ($result as $value) : ?>
			<div class="nomal-product">
				
					<img class="nomal-img" src="<?php print($value['Link']) ?>">
					<p><?php print $value['ProductName'] ?></p>
					<p><?php print $value['Price'] ?>VND</p>
				<form action="cart.php" method="get">
					<input type="hidden" name="ProductId" value="<?php print ($value['ProductId']) ?>">
					<input type="submit" name="" value="Mua ngay">
				</form>	
				
			</div>
		
	<?php  endforeach; ?>	




   </div>
</body>
</html>