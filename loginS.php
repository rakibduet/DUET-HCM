<?php
    @include('connection.php');
    $err='';

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $SID=test_input($_POST['studentUserName']);
        $Spass=test_input($_POST['studentPwd']);
    }

    $message='';

    function test_input($data)
    {
        $data= trim($data);
        $data= stripcslashes($data);
        $data= htmlspecialchars($data);
        
        return $data;
    }

    if (isset($_POST['submit'])) 
    {

        if(!empty($SID) && !empty($Spass))
        {
            $sel="select * from student where std_id='$SID' and pass_word='$Spass'";
            $query=mysql_query($sel);
            $fetch=mysql_fetch_row($query);

            $x=$fetch[0];
            $y=$fetch[5];

            if ((strcasecmp($x, $SID)==0) && (strcasecmp($y, $Spass)==0) )
            {                

                    echo '<script>location="std.php";</script>';
            }
            else
            {
                $message='<span style="font-weight:bold;">'."Please check username and password".'<span>';
            }

        }
        else
            $message='<span style="font-weight:bold;">'."Please enter all field....".'<span>';   
    }

    echo "$message";
 ?>

<style>
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
            <label class="control-label col-sm-2" for="studentUserName">User ID:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="studentUserName" name="studentUserName" placeholder="Enter Student ID">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="studentPwd">Password:</label>
            <div class="col-sm-10"> 
              <input type="password" class="form-control" id="studentPwd" name="studentPwd" placeholder="Enter password">
            </div>
          </div>

        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-3">
              <div class="checkbox" >
                <label><input type="checkbox"> Remember me</label>
              </div>
            </div>
          </div>
          
          <div class="form-group"> 
            <div class="col-sm-6">
              <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </div>
          </div>  

        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-18">
            <label class="control-label col-sm-12">Not Yet Registerd !! <a href="signupstudent.php">Sign Up</a> Here </label>
            </div>
         </div>  

      </fieldset>
    </form>
</section>