<?php 
include 'header.php';
include '../function/page/product_for_index.php';

$products = new products();



?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

           <div class="menu"> 
             <ul>
           
               <li ><a href="thuonghieu.php">XUẤT XỨ</a></li>				
               <li><a href="../page/donghonam.php">THỨC UỐNG</a></li>
               <a href="#"><img src="../img/Sieuthi/Untitled-1.jpg" alt="" style="width:127px;height:100px;"></a>
               <li><a href="../page/donghonu.php">THỰC PHẨM</a></li>
               <li><a href="../page/lienhe.php">LIÊN HỆ</a></li>

             </ul>
           </div>
  

<div class="QC" >
<div id="demo" class="carousel slide" data-ride="carousel">

 	   	     <ul class="carousel-indicators">
			       <li data-target="#demo" data-slide-to="0" class="active"></li>
			       <li data-target="#demo" data-slide-to="1"></li>
			       <li data-target="#demo" data-slide-to="2"></li>
		       </ul>
  
  <!-- The slideshow -->
   <div class="carousel-inner">
             <div class="carousel-item active">
             <img class="img-QC" src="../img/Sieuthi/sa.jpg" alt="Los Angeles" width="1100" height="500">
         </div>
         <div  class="carousel-item">
             <img class="img-QC" src="../img/Sieuthi/111.jpg" alt="Chicago" width="1100" height="500">
             </div>
         <div class="carousel-item">
         <img class="img-QC" src="../img/Sieuthi/a2.jpg" alt="New York" width="1100" height="500">
             </div>
   </div>
  
  <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
   </a>
       <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
       </a>

</div>
</div>


<div class="frames">
  	     <a class="highlights" href="">SẢN PHẨM NỔI BẬT</a>
</div>
	  <div class="container-list">
	                         <?php foreach ($products->getProduct() as $value) :?>	
		

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
			

       

	        <FOOTER></FOOTER>

</body>
</html>	