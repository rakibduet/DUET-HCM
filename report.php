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




 include('header5.php') ;

   ?>
 <style type="text/css">

.registration-form
{

    width: 960px;
    height: auto;
    direction: center;

}

 </style>
<section id="registration" class="container">
<div class="col-sm-6 pad">
                </div>
  <form class="form-horizontal center" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <fieldset class="registration-form">
    <div class="form-group">
        <label class="control-label col-sm-3" for="user_type">User Type</label>
        <div class="col-sm-9">
          <select name="user_type" class="form-control" id="user_type">
            <option value="2">Teacher</option>
            <option value="3">Student</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="first_name">First Name</label>
        <div class="col-sm-9">
          <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="last_name">Last Name</label>
        <div class="col-sm-9">
                 <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control">
        </div>
      </div>

      

      <div class="form-group">
        <label class="control-label col-sm-3" for="userName">User Name</label>
        <div class="col-sm-9">
                 <input type="text" id="userName" name="userName" placeholder="User Name" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="password">Password:</label>
        <div class="col-sm-9"> 
          <input type="password" id="password" name="password" placeholder="Password" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="conf_password">Re Password:</label>
        <div class="col-sm-9"> 
          <input type="password" id="conf_password" name="conf_password" placeholder="Confirm Password" class="form-control">
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
                </select>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="Email">E-mail</label>
        <div class="col-sm-9">
          <input type="email" id="Email" name="Email" placeholder="E-mail" class="form-control">
        </div>
      </div>

    <div class="form-group"> 
        <div class="col-sm-offset-6 col-sm-10">
          <button type="submit" class="btn btn-default" name="signup" value="Register">Submit</button>
        </div>
      </div>

     
    </fieldset>
  </form>
</section><!--/#registration-->

   
    <?php include('footer5.php') ;
   ?>