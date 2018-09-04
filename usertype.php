
<?php
//include_once('session.php');
@include'connection.php';
?>
<section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 pad">
                <br><br>
                    <h1>User Type selection Form</h1>
                </div>
                <div class="col-sm-6 pad">
                </div>
            </div>
        </div>
    </section>

<?php
  if(isset($_POST['submit']))
  {
      $type=$_POST['user_type'];
      if($type==3)
      {
             echo '<br /><center><h3>Succesfully select student </h3></center>'; 
             echo "<script>window.location='stdsingup.php'</script>"; 
           }
           else
           {
             if($type==2)
      {
             echo '<br /><center><h3>Succesfully select medical officer</h3></center>'; 
             echo "<script>window.location='signup.php'</script>"; 
           }
           }
      }
 include('header.php') ;





 //include('header3.php') ;
   ?>

   <style>
    .registration-form
{
    width: 445px;
    height: auto;
    direction: center;

}
 </style>



   <div class="mainContent">

   <section id="registration" class="container">
    <form class="form-horizontal center" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <fieldset class="registration-form">

    <div class="form-group">
      <label class="control-label col-sm-3" for="user_type">User Type</label>
        <div class="col-sm-9">
          <select name="user_type" class="form-control" id="user_type">
            <option value="2">Medical Officer</option>
            <option value="3">Student</option>
          </select> 
        </div>
      </div>
          
          <div class="form-group"> 
            <div class="col-sm-9">
              <button type="submit" name="submit" class="btn btn-default">submit</button>
            </div>
          </div>   

      </fieldset>
    </form>
</section>
   
   </div>

   
    <?php include('footer3.php') ;
   ?>