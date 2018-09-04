<?php
    @include('connection.php');
    $err='';

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $TID=test_input($_POST['teacherUserName']);
        $Tpass=test_input($_POST['teacherPwd']);
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

        if(!empty($TID) && !empty($Tpass))
        {
            $sel="select * from teacher where teacher_id='$TID' and pass_word='$Tpass'";
            $query=mysql_query($sel);
            $fetch=mysql_fetch_row($query);

            $x=$fetch[0];
            $y=$fetch[5];

            if ((strcasecmp($x, $TID)==0) && (strcasecmp($y, $Tpass)==0) )
            {                

                    echo '<script>location="teach.php";</script>';
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
            <label class="control-label col-sm-2" for="teacherUserName">User ID:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="teacherUserName" name="teacherUserName" placeholder="Enter Teacher ID">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="teacher">Password:</label>
            <div class="col-sm-10"> 
              <input type="password" class="form-control" id="teacherPwd" name="teacherPwd" placeholder="Enter password">
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
            <label class="control-label col-sm-12">Not Yet Registerd !! <a href="signupteacher.php">Sign Up</a> Here </label>
            </div>
         </div>  

      </fieldset>
    </form>
</section>