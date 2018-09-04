<?php
//include_once('session.php');
@include'connection.php';
?>


   <section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 pad">
                <br><br>
                    <h1>Officer Registration Form</h1>
                    
                </div>
                <div class="col-sm-6 pad">
                </div>
            </div>
        </div>
    </section>


<?php
  if(isset($_POST['signup']))
  {
      //$Utype=$_POST['user_type'];
      $id=$_POST['empID'];
      $fname=$_POST['first_name'];
      $lname=$_POST['last_name'];
      $Designation=$_POST['designation'];
      $pass=$_POST['password'];
      $cpassword=$_POST['conf_password'];
      $Dname=$_POST['dept_name'];
      $Contact=$_POST['contact'];
      $EMail=$_POST['Email']; 
      if($pass!=$cpassword)
      {
      echo '<br /><center><h3>Missmatch  Password!!!!!</h3></center>';
      }
      else
      {
      //check duplicate start
             //$query = mysql_query("SELECT * FROM stu_details WHERE id='$id'");
          //if(mysql_num_rows($query) == 0){
             $query = "INSERT INTO medical_officer VALUES ('$id','$fname','$lname','$Designation','$pass','$cpassword','$Dname','$Contact','$EMail')";
                    $yy=mysql_query($query);
                    if($yy)
                    {
                      echo '<br /><center><h3>Succesfully Signup</h3></center>';
                    }
                    else
                    {
                      echo '<br /><center><h3>Not Sign Up .. Something wrong</h3></center>';
                    }
             
                //$_SESSION['user'] = $id;
            //echo "<script>window.location='admin/teach.php'</script>";
          }
        }



 include('header.php') ;

// exit;
?> 
   <style type="text/css">

.registration-form
{
  width: 600px;
  height: auto;
  direction: center;

}
</style>

 
<section id="registration" class="container">
  <form class="form-horizontal center" role="form" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <fieldset class="registration-form">

      <div class="form-group">
        <label class="control-label col-sm-3" for="empID">ID</label>
        <div class="col-sm-9">
                 <input type="text" id="stdID" name="empID" placeholder="ID" class="form-control" value="">
        </div>
        <!--<strong style="color:red;"><?php echo $err_stdid; ?></strong>-->
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="first_name">First Name</label>
        <div class="col-sm-9">
          <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control" value="">
        </div>
        <!--<strong style="color:red;"><?php echo $err_fname; ?></strong>-->
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="last_name">Last Name</label>
        <div class="col-sm-9">
                 <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control" value="">
        </div>
         <!--<strong style="color:red;"><?php echo $err_l_name; ?></strong>-->
      </div>



      <!--<div class="form-group">
        <label class="control-label col-sm-3" for="userName">User Name</label>
        <div class="col-sm-9">
                 <input type="text" id="userName" name="userName" placeholder="User Name" class="form-control" value="<?php echo $v3;?>">
        </div>
        <strong style="color:red;"><?php echo $err_username; ?></strong>
      </div>-->
      <div class="form-group">
        <label class="control-label col-sm-3" for="designation">Designation</label>
        <div class="col-sm-9">
                 <input type="text" id="designation" name="designation" placeholder="Designation" class="form-control" value="">
        </div>
        <!--<strong style="color:red;"><?php echo $err_designation; ?></strong>-->
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="password">Password:</label>
        <div class="col-sm-9"> 
          <input type="password" id="password" name="password" placeholder="Password" class="form-control" value="">
        </div>
        <!--<strong style="color:red;"><?php echo $err_password; ?></strong>-->
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="conf_password">Re Password:</label>
        <div class="col-sm-9"> 
          <input type="password" id="conf_password" name="conf_password" placeholder="Confirm Password" class="form-control" value="">
        </div>
         <!--<strong style="color:red;"><?php echo $err_repass; ?></strong>-->
      </div>

      <!--<div class="form-group">
            <label class="col-sm-3 control-label" for="filebutton">Photo</label>
            <div class="col-sm-9">
                <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
            </div>
        </div>-->


      <div class="form-group">
        <label class="control-label col-sm-3" for="dept_name">Department</label>
        <div class="col-sm-9">
                <select name="dept_name" id="dept_name" class="form-control">
                  <option value="1">CSE</option>
                  <option value="2">EEE</option>
                  <option value="3">CE</option>
                  <option value="4">ME</option>
                  <option value="5">TE</option>
                  <option value="6">IPE</option>
                  <option value="7">ARC</option>
                  <option value="8">Medical</option>
                </select>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="conf_password">Contact</label>
        <div class="col-sm-9"> 
          <input type="contact" id="contact" name="contact" placeholder="Press contact number" class="form-control" value="">
        </div>
         <!--<strong style="color:red;"><?php echo $err_repass; ?></strong>-->
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="Email">E-mail</label>
        <div class="col-sm-9">
          <input type="email" id="Email" name="Email" placeholder="E-mail" class="form-control" value="">
        </div>
        <!--<strong style="color:red;"><?php echo $err_email; ?></strong>-->
      </div>

    <div class="form-group"> 
        <div class="col-sm-offset-6 col-sm-10">
          <button type="submit" class="btn btn-default" name="signup" value="Register">Submit</button>
        </div>
      </div>

     
    </fieldset>
  </form>
</section><!--/#registration-->
   <?php include('silder.php');
   ?>
    <?php include('footer.php');
   ?>