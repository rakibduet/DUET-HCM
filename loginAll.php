<?php 
include_once('session.php');


   @include('connection.php');
    $err='';

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    	$type=$_POST['user_type'];
        $SID=test_input($_POST['UID']);
        $Spass=test_input($_POST['userPwd']);
    }
    $message='';

    function test_input($data)
    {
        $data= trim($data);
        $data= stripcslashes($data);
        $data= htmlspecialchars($data);
        
        return $data;
    }


    $al=false;

    if (isset($_POST['signin'])) 
    {

        if(!empty($SID) && !empty($Spass))
        {
        	if($type==2)
        	{
        		$_SESSION['user_type']=2;
            	$sel="select * from medical_officer where officer_id='$SID' AND password='$Spass'";
            	$query=mysql_query($sel);
            	if(mysql_num_rows($query) > 0)
            	{
              		$_SESSION['logedin'] = true;
              		$data = mysql_fetch_assoc($query);
              
              		$_SESSION['user_data'] = $data;

                	echo '<br /><center><h3>Succesfully signin medical officer</h3></center>'; 
             	echo "<script>window.location='teach.php'</script>"; 
                	exit;
              	}
          	  }
              elseif($type==3)
              { 
              	$_SESSION['user_type']=3;
              	$sel="select * from std_info where std_id='$SID' AND password='$Spass'";
            	$query=mysql_query($sel);
            	if(mysql_num_rows($query) > 0)
            	{
            		$data = mysql_fetch_assoc($query);
              
              		$_SESSION['user_data'] = $data;
              		//$_SESSION['logedin'] = true;
                //$_SESSION['msg']='Wel-Come to Student  Panel';
              		echo '<br /><center><h3>Succesfully signin student</h3></center>'; 
             		echo "<script>window.location='singlestd.php'</script>"; 
                exit;
              }
            }
            else
            {
              $al=true;
              $_SESSION['msg']='Wrong ID or password';
            }
        }
    }
include('header.php') ;
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
   <section id="title" class="emerald">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 pad">
                <br><br>
                    <h1>Login Here</h1>
                    
                </div>
                <div class="col-sm-6 pad">
                </div>
            </div>
        </div>
    </section>

<?php 

if(!empty($_SESSION['msg'])){
?>
<div class="alert alert-success">
  <strong>Success!</strong> <?php echo $_SESSION['msg']; ?>
</div>
<?php
  unset($_SESSION['msg']);
}
 ?>
<section id="registration" class="container">
    <form class="form-horizontal center" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <fieldset class="registration-form">

    <div class="form-group">
      <label class="control-label col-sm-2" for="user_type">User Type</label>
        <div class="col-sm-10">
          <select name="user_type" class="form-control" id="user_type">
            <option value="2">Medical Officer</option>
            <option value="3">Student</option>
          </select> 
        </div>
      </div>


          <div class="form-group">
            <label class="control-label col-sm-2" for="UID">User ID:</label>
            <div class="col-sm-10">
              <input type="ID" class="form-control" id="UID" name="UID" placeholder="Enter User ID">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="userPwd">Password:</label>
            <div class="col-sm-10"> 
              <input type="password" class="form-control" id="userPwd" name="userPwd" placeholder="Enter password">
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
              <button type="submit" name="signin" class="btn btn-default">Sign in</button>
            </div>
          </div>  

        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-18">
            <label class="control-label col-sm-12">Not Yet Registerd !! <a href="usertype.php">Sign Up</a> Here </label>
            </div>
         </div>  

      </fieldset>
    </form>
</section>
   <?php include('silder.php');
    include('footer.php');
    ?>