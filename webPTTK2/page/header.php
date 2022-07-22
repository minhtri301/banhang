<?php
session_start();
$DangNhap=null;
$DangXuat=null;
$DNLink  =null;
$DXLink  =null;
if(!empty($_SESSION['user']))
{
  $DangNhap =$_SESSION['user'];
  $DangXuat ="Đăng Xuất";
  $DNLink   ="#";
  $DXLink   ="logout.php";


}
else
{
  $DangNhap ="Đăng Nhập";
  $DNLink   ='login.php';
}



if( empty($_SESSION['cart']) )
{
  $_SESSION['cart']=array();
}

?>


 <!DOCTYPE html>
<html>
<head>
  <title>Sieu Thi</title>

  
  

  <link rel="stylesheet" type="text/css" href="../style/Index.css">
  <link rel="stylesheet" type="text/css" href="../style/menuthu2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
</head>
<body>

<div id="menu">
   <a href="index.php"> 
    <p id="logo">
      E market
    </p>
   </a> 
     <form action="showthuonghieu.php" method="get" > 
      <input id="search" type="text" name ="Id" placeholder="Bạn tìm gì..." >
      <input  type="submit" name="" value="Tìm kiếm" style="position: relative;top: -80px;left: -85px;border-radius: 90px;height: 29px; background: #695e67;">
  </form>
      <a id="login"  href="<?php print($DNLink) ?>" style="left: 893px; top: -109px;"> <?php print $DangNhap ?></a>
      <a id="registration" href="<?php print($DXLink) ?>" style="left: 913px; top: -109px;"><?php print($DangXuat) ?></a>
      <a id="cart" href="cart.php" style=" left: 917px; top: -109px;">Giỏ Hàng <i style='font-size:24px' class='fas'>&#xf07a;</i></a>
        
 </div>
 </body>
 </html>