<?php 
include 'header.php';
include '../function/page/product_for_index.php';

$categories = new categories();



?>
<!DOCTYPE html>
<html>
<head>
	<title>Sieu Thi</title>


	 <link rel="stylesheet" type="text/css" href="../style/THUONGHIEU.css">

	 
</head>
<body>
   <div> 
        <h3 id='tieudethuonghieu'> XUẤT XỨ </h3>
    </div>
    
        <?php foreach ($categories->getCategoryName() as $value) : ?>	
		

				<div class="thuonghieu">
					
						
						<p><?php print $value['CategoryName'] ?></p>
						
					<form action="showthuonghieu.php" method="get">
						<input type="hidden" name="Id" value="<?php print ($value['Id']) ?>">
						<input type="submit" name="" value="xem" style="  border-block: initial;
    color: #d8f5f5;
    background: #654c4c;">
					</form>	
					
				</div>
				
						
			

		
	<?php endforeach; ?>	
			




   </div>
</body>
</html>