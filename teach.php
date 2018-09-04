<?php


 include('header3.php') ;
   ?>

   <style>
    .registration-form
{
    width: 445px;
    height: auto;
    direction: center;

}
 </style>
 <?php 
  if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $SID=test_input($_POST['stdid']);
        
    }
     function test_input($data)
    {
        $data= trim($data);
        $data= stripcslashes($data);
        $data= htmlspecialchars($data);
        
        return $data;
    }
?>



   <div class="mainContent">

   <section id="registration" class="container">
    <form class="form-horizontal center" role="form" method="POST" action="stdreport.php">
    <fieldset class="registration-form">
          <div class="form-group">
            <label class="control-label col-sm-3" for="stdid">Student ID:</label>
            <div class="col-sm-9">
              <input type="stdid" class="form-control" id="stdid" name="stdid" placeholder="Enter Student Id For Report">
            </div>
          </div>

          
          <div class="form-group"> 
            <div class="col-sm-9">
              <button type= 'btn' class="btn btn-default" name="btnsearch" >Search</button>
            </div>
          </div>  

        <!--<div class="form-group"> 
            <div class="col-sm-12">
            <label class="control-label col-sm-12">He is Not Yet Registerd !! <a href="signup.php">Sign Up</a> Here </label>
            </div>
         </div>-->

      </fieldset>
    </form>
</section>
   
   </div>

   
    <?php include('footer3.php') ;
   ?>
