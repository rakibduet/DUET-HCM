<?php 
include_once('session.php');


   @include('connection.php');
    $err='';

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    	//$type=$_POST['user_type'];
        $ID=test_input($_POST['SID']);
       // $Spass=test_input($_POST['userPwd']);
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

    if (isset($_POST['search'])) 
    {

        
            	$sel="select std_id from report where std_id='$ID'";
            	$query=mysql_query($sel);
            	if(mysql_num_rows($query) > 0)
            	{
              		$data = mysql_fetch_assoc($query);
              
              		$_SESSION['id'] = $data;

                	echo '<br /><center><h3>Succesfully signin medical officer</h3></center>'; 
             	echo "<script>window.location='stdreport.php'</script>"; 
                	exit;
              	}
                else
                {
                  echo '<br /><center><h3>This id is</h3></center>'; 
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
            <label class="control-label col-sm-2" for="SID">Student ID:</label>
            <div class="col-sm-10">
              <input type="ID" class="form-control" id="SID" name="SID" placeholder="Enter Student ID">
            </div>
          </div>

        
          
          <div class="form-group"> 
            <div class="col-sm-6">
              <button type="search" name="search" class="btn btn-default">Search</button>
            </div>
          </div>   

      </fieldset>
    </form>
</section>
   <?php include('silder.php');
    include('footer.php');
    ?>