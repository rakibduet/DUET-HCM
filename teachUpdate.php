<?php
include('session.php');
if(empty($_SESSION['logedin'])){
	header("Location: loginAll.php");
	exit;
}
if($_SESSION['user_data']['user_type'] != '2'){
	echo 'you have no permission to acces this page';
	exit;
}
?>
   <?php include('header3.php') ;
   ?>

   <div class="mainContent">
   </div>

   
    <?php include('footer3.php') ;
   ?>
