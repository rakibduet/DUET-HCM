
<?php
//include_once('session.php');
@include'connection.php';
?>
<section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 pad">
                <br><br>
                    <h1>Test Update Form</h1>
                    
                </div>
                <div class="col-sm-6 pad">
                </div>
            </div>
        </div>
    </section>

<?php
  if(isset($_POST['add_test']))
  {
      $id=$_POST['tid'];
      $t_name=$_POST['test_name'];
      $t_type=$_POST['testtype'];
      $t_cost=$_POST['test_cost'];

             $query = "INSERT INTO test VALUES('$id','$t_name','$t_type','$t_cost')";
                    mysql_query($query);
             echo '<br /><center><h3>Succesfully test Added</h3></center>';  
      }
 include('header3.php') ;





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
            <label class="control-label col-sm-3" for="userName">Test id:</label>
            <div class="col-sm-9">
              <input type="textid" class="form-control" id="tid" name="tid" placeholder="Enter unique test id">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="userName">Test name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="test_name" name="test_name" placeholder="Enter test name">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="testtype">Test Type</label>
            <div class="col-sm-9">
              <select name="testtype" id="testtype" class="form-control">
                      <option value="major">major</option>
                      <option value="minor">minor</option>
                  </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="userName">Test Cost</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="test_cost" name="test_cost" placeholder="Enter test cost">
            </div>
          </div>

          <!--<div class="form-group">
            <label class="control-label col-sm-2" for="userPwd">Password:</label>
            <div class="col-sm-10"> 
              <input type="password" class="form-control" id="userPwd" name="userPwd" placeholder="Enter password">
            </div>
          </div>-->

        <!--<div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-3">
              <div class="checkbox" >
                <label><input type="checkbox"> Remember me</label>
              </div>
            </div>
          </div>-->
          
          <div class="form-group"> 
            <div class="col-sm-9">
              <button type="add_btn" name="add_test" class="btn btn-default">Add test</button>
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
