<?php

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $AID=test_input($_POST['adminUserName']);
        $Apass=test_input($_POST['adminPwd']);
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

        if(!empty($AID) && !empty($Apass))
        {
            $x="admin";
            $y="123456";

            if ((strcasecmp($x, $AID)==0) && (strcasecmp($y, $Apass)==0) )
            {                

                    echo '<script>location="admin.php";</script>';
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
            <label class="control-label col-sm-2" for="adminUserName">User ID:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="adminUserName" name="adminUserName" placeholder="Enter Admin ID">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="adminPwd">Password:</label>
            <div class="col-sm-10"> 
              <input type="password" class="form-control" id="adminPwd" name="adminPwd" placeholder="Enter password">
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
            <label class="control-label col-sm-12">Not Yet Registerd !! <a href="#">Sign Up</a> Here </label>
            </div>
         </div>  

      </fieldset>
    </form>
</section>