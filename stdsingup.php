<?php
//include_once('session.php');
@include'connection.php';
?>


   <section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 pad">
                <br><br>
                    <h1>Student Registration Form</h1>
                    
                </div>
                <div class="col-sm-6 pad">
                </div>
            </div>
        </div>
    </section>


<?php
  if(isset($_POST['signup']))
  {
      $id=$_POST['stdID'];
      $fname=$_POST['first_name'];
      $lname=$_POST['last_name'];
      $Gender=$_POST['gender'];
      $Age=$_POST['age'];
      $faname=$_POST['fa_name'];
      $maname=$_POST['ma_name'];
      $Dname=$_POST['dept_name'];
      $year=$_POST['year'];
      $sem=$_POST['sem'];
      $Sec=$_POST['sec'];
      $Contact=$_POST['contact'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $cpassword=$_POST['conf_password'];
      $p_address=$_POST['p_add'];
      $per_address=$_POST['per_add'];

    if($password!=$cpassword)
      {
      echo '<br /><center><h3>Missmatch Password!!!!!</h3></center>';
      }
      else
      {
      //check duplicate start
             $query = "INSERT INTO std_info VALUES ('$id', '$fname','$lname','$Gender','$Age','$faname','$maname','$Dname','$year','$sem','$Sec','$Contact','$email','$password','$p_address','$per_address')";
                   $ss=mysql_query($query);
                     if($ss)
                    {
                      echo '<br /><center><h3>Succesfully Signup</h3></center>';
                    }
                    else
                    {
                      echo '<br /><center><h3>Not Sign Up .. Something wrong</h3></center>';
                    }
                //$_SESSION['user'] = $id;
            //echo "<script>window.location='admin/std.php'</script>";
          }
         // else
         // {
          //   echo '<br /><center><h3>Already Exist!!!!!</h3></center>';
          //}
      }
      //check duplicate end
      
//}
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
        <label class="control-label col-sm-3" for="stdID">ID</label>
        <div class="col-sm-9">
                 <input type="text" id="stdID" name="stdID" placeholder="Student ID" class="form-control" value="">
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



      
      <div class="form-group">
        <label class="control-label col-sm-3" for="designation">Age :</label>
        <div class="col-sm-9">
                 <input type="text" id="age" name="age" placeholder="Enter Age" class="form-control" value="">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="gender">Gender:</label>
        <div class="col-sm-9">
            <select name="gender" id="gender" class="form-control">
                      <option value="male">male</option>
                      <option value="female">female</option>
                  </select>
        </div>
      </div>

        <div class="form-group">
        <label class="control-label col-sm-3" for="fa_name">Father Name</label>
        <div class="col-sm-9">
                 <input type="text" id="fa_name" name="fa_name" placeholder="Enter Father Name" class="form-control" value="">
        </div>

      </div>

        <div class="form-group">
        <label class="control-label col-sm-3" for="ma_name">Mother Name</label>
        <div class="col-sm-9">
                 <input type="text" id="ma_name" name="ma_name" placeholder="Enter Mother Name" class="form-control" value="">
        </div>
      </div>

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
                </select>
        </div>
      </div>

        <div class="form-group">
        <label class="control-label col-sm-3" for="years">YEARS</label>
        <div class="col-sm-9">
                 <select name="year" id="year" class="form-control">
                  <option value="1st">1st</option>
                  <option value="2nd">2nd</option>
                  <option value="3rd">3rd</option>
                  <option value="4th">4th</option>
                </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="semister">Semister</label>
         <div class="col-sm-9">
                <select name="sem" id="sem" class="form-control">
                  <option value="1st">1st</option>
                  <option value="2nd">2nd</option>
                </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="sec">Section</label>
        <div class="col-sm-9">
                 <select name="sec" id="sec" class="form-control">
                  <option>A</option>
                  <option>B</option>
                </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="contact">Contact No</label>
        <div class="col-sm-9"> 
          <input type="contact" id="contact" name="contact" placeholder="Press contact number" class="form-control" value="">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="Email">E-mail</label>
        <div class="col-sm-9">
          <input type="email" id="email" name="email" placeholder="E-mail" class="form-control" value="">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="dob">Date-Of-Birth</label>
        <div class="col-sm-9">
          <input type="date" id="dob" name="dob" placeholder="Enter Date of birth" class="form-control" value="">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="password">Password:</label>
        <div class="col-sm-9"> 
          <input type="password" id="password" name="password" placeholder="Password" class="form-control" value="">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="conf_password">Re Password:</label>
        <div class="col-sm-9"> 
          <input type="password" id="conf_password" name="conf_password" placeholder="Confirm Password" class="form-control" value="">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="p_add">present address</label>
        <div class="col-sm-9">
          <input type="text" id="p_add" name="p_add" placeholder="present address" class="form-control" value="">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="per_add">permanent address</label>
        <div class="col-sm-9">
          <input type="text" id="per_add" name="per_add" placeholder="permanent address" class="form-control" value="">
        </div>
      </div>

      <!--<div class="form-group">
            <label class="col-sm-3 control-label" for="filebutton">Photo</label>
            <div class="col-sm-9">
                <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
            </div>
        </div>-->


    
      

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