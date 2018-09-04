<?php 
@include'connection.php';
/*----------------------Sign up Start------------- */
$err='';
$DName='';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $FName=test_input($_POST['first_name']);
    $LName=test_input($_POST['last_name']);
    $DName=test_input($_POST['dept_name']);
    $UName=test_input($_POST['userName']);
    $IName=test_input($_POST['varsity_name']);
    $Email=test_input($_POST['Email']);
    $Password=test_input($_POST['password']);
    $rePassword=test_input($_POST['conf_password']);
}
function test_input($data)
{
    $data= trim($data);
    $data= stripcslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}

function make_id($table,$field,$prefix,$id_len)
    {
      $que=mysql_query("SELECT MAX($field) FROM $table");
      $fetch=mysql_fetch_row($que);
      $max_id=$fetch[0];
      //print "$max_id";
      $prefix_len=strlen($prefix);
      $only_id=substr($max_id,$prefix_len);
      $new_id=(int)($only_id);
      $new_id++;
      $number_of_zero=$id_len-$prefix_len-strlen($new_id);
      $zero=str_repeat("0",$number_of_zero);
      $made_id=$prefix.$zero.$new_id;
      return($made_id);
    }
    
$Make_id=make_id('teacher','teacher_id',$DName.'-T-',10);

if(isset($_POST['signup']))
{
    if($Password==$rePassword)
    {
        $sql = "insert into teacher (`teacher_id`,`first_name`,`last_name`,`dept_name`,`user_name`,`pass_word`,`institute`,`e_mail`) values('$Make_id','$FName','$LName','$DName','$UName','$Password','$IName','$Email')";
        // echo $sql;exit;
        $query=mysql_query($sql);
        $aff=mysql_affected_rows();
        if($aff>0)
        {
            echo "Data added";
        }
        else
        {
            echo "Data didnot added";
        }

        $select="insert into user(`ID`,`username`,`password`,`type`) values('$Make_id','$UName','$Password','teacher')";
        $que=mysql_query($select);

    }
    
    else
    {
        $err='<p style="color:red;">Password did not match</p>';
    }
}
 
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
    <form class="form-horizontal center" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <fieldset class="registration-form">
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
            <label class="control-label col-sm-3" for="teacher_ID">Teachers ID</label>
            <div class="col-sm-9">
                 <input type="text" id="teacher_ID" name="teacher_ID" placeholder="Teacher ID" class="form-control">
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
                    <input type="text" id="dept_name" name="dept_name" placeholder="Department Name" class="form-control">
            </div>
          </div>

        <div class="form-group">
            <label class="control-label col-sm-3" for="varsity_name">Institute</label>
            <div class="col-sm-9">
                    <input type="text" id="varsity_name" name="varsity_name" placeholder="University Name" class="form-control">
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