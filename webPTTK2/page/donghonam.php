<?php 
include 'header.php';




function Connection()
{ 
      $con = new mysqli("localhost","root","Abc1234567","tri");
      return $con;
}






function showProduct()
{
   $sql="select * from products where kieudang='Thucuong' ";
   return connection()->query($sql);
}



?>



<!DOCTYPE html>
<html>
<head>
	<title>Sieu Thi</title>
	<link rel="stylesheet" type="text/css" href="../style/dongho,nam,nu.css">
  
</head>
<body>
	<div class="content"> 
                <p id="title">THỨC UỐNG <strong>dinh dưỡng</strong></p>
       </div>
       


<div class="container-list"> 
    
    
         
     <?php foreach (showProduct() as $value):?> 
      <div class="nomal-product">
          
            <img class="nomal-img" src="<?php print($value['Link']) ?>">
            <p><?php print $value['ProductName'] ?></p>
            <p><?php print $value['Price'] ?>VND</p>
          <form action="cart.php" method="get">
            <input type="hidden" name="ProductId" value="<?php print ($value['ProductId']) ?>">
            <input type="submit" name="" value="Mua ngay">
          </form> 
          
        </div>
      
          <?php endforeach; ?>
        
    
</div>

</body>
</html>